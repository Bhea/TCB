<?php
/*
*@File:Speakers.php.
*@Author:Prateek Kaushal @ Bhea Technologies.
*@Purpose:This file is used to create a record
* in the Speakers module by populating few
* values from the Opportunities.
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class speakers_record
{
		function speakers_record_method($bean,$event,$arguements)
		{
			/**
			* Upon Type->Products & Services, Subtype->Conference, Conferences subtype->Speakers, Sales Stage->Closed Won
			*/
			if($bean->opportunity_type == "prod_service" && $bean->subtype_c == "conference" && $bean->conference_sub_type_c == "Speakers" && $bean->sales_stage == "Closed Won")
			{
				/**
				 * To retrieve the Accounts details
				 */				
				$account = BeanFactory::getBean('Accounts',$bean->account_id);
				
				
				/**
				 * To retrieve the Contacts details
				 */
				$contact = BeanFactory::getBean('Contacts',$bean->contact_id_c);
				
					
				/**
				 * Create a record in Speakers module
				 */
			
				$speakersBean = BeanFactory::newBean('Bhea_Speakers');
				
				$speakersBean->salutation 						= $contact->salutation;
				$speakersBean->first_name 						= $contact->first_name;
				$speakersBean->last_name 						= $contact->last_name;
				$speakersBean->familiar_name_c 					= $contact->familiar_name_c;
				$speakersBean->title 							= $contact->title;
				$speakersBean->department 						= $contact->department;
				$speakersBean->phone_work 						= $contact->phone_work;
				$speakersBean->phone_mobile 					= $contact->phone_mobile;
				$speakersBean->company_name 					= $account->name;
				$speakersBean->company_address 					= $account->billing_address_street;
				$speakersBean->company_address_city 			= $account->billing_address_city;
				$speakersBean->company_address_state 			= $account->billing_address_state;
				$speakersBean->company_address_country 			= $account->billing_address_country;
				$speakersBean->company_address_postalcode 		= $account->billing_address_postalcode;					
				$speakersBean->save();
				
				/*Creating relationship between Events and Speakers.
				 * */
				$event_id	 		= $bean->bhea_events_opportunities_1bhea_events_ida;
				$event 				= BeanFactory::getBean('Bhea_Events',$event_id);
				
				$event->load_relationship('bhea_events_bhea_speakers_1');
				$event->bhea_events_bhea_speakers_1->add($speakersBean->id);
				
				/*Creating relationship between Speakers and Opportunities.
				 * */
				$speakersBean->load_relationship('opportunities_bhea_speakers_1');
				$speakersBean->opportunities_bhea_speakers_1->add($bean->id);
				
				//~ /*Creating relationship between Sessions and Speakers.
				 //~ * */
				//~ $sessions_id	 		= $bean->bhea_sessions_opportunities_1bhea_sessions_ida;
				//~ $session_bean			= BeanFactory::getBean('Bhea_Sessions',$sessions_id);
				//~ 
				//~ $session_bean->load_relationship('bhea_sessions_bhea_speakers_1');
				//~ $session_bean->bhea_sessions_bhea_speakers_1->add($speakersBean->id);
			}
		}
}
