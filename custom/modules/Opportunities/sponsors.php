<?php
/*
*@File:Speakers.php.
*@Author:Prateek Kaushal @ Bhea Technologies.
*@Purpose:This file is used to create a record
* in the Sponsors and Spomsorship module by populating few
* values from the Opportunities.
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class sponsors_record
{
		function sponsors_record_method($bean,$event,$arguments)
		{
			global $db;
			/**
			* Upon Type->Products & Services, Subtype->Conference, Conferences subtype->Sponsors, Sales Stage->Closed Won
			*/
			if($bean->opportunity_type == "prod_service" && $bean->subtype_c == "conference" && $bean->conference_sub_type_c == "Sponsors" && $bean->sales_stage == "Closed Won")
			{
				/**
				 * To retrieve the Accounts details
				 */
				$account = BeanFactory::getBean('Accounts',$bean->account_id);
				
				/**
				 * To retrieve the Contacts details
				 */
				//$contact = BeanFactory::getBean('Contacts',$bean->contact_id_c);
						
				/**
				 * Create a record in Sponsors module
				 */
				$sponsorBean = BeanFactory::newBean('Bhea_Sponsor');
				
				$sponsorBean->name 								= $account->name;
				$sponsorBean->fax_c  							= $account->phone_fax;
				$sponsorBean->office_phone_c					= $account->phone_office;
				$sponsorBean->other_phone_c 					= $account->other_phone_1_c;
				$sponsorBean->website_c 						= $account->website;
				
				$sponsorBean->billing_address_street_c 			= $account->billing_address_street;
				$sponsorBean->billing_address_city_c 			= $account->billing_address_city;
				$sponsorBean->billing_address_state_c			= $account->billing_address_state;
				$sponsorBean->billing_address_country_c 		= $account->billing_address_country;
				$sponsorBean->billing_address_postalcode_c 		= $account->billing_address_postalcode;
				
				$sponsorBean->shipping_address_street_c 		= $account->shipping_address_street;
				$sponsorBean->shipping_address_city_c 			= $account->shipping_address_city;
				$sponsorBean->shipping_address_state_c			= $account->shipping_address_state;
				$sponsorBean->shipping_address_country_c 		= $account->shipping_address_country;
				$sponsorBean->shipping_address_postalcode_c 	= $account->shipping_address_postalcode;	
				
				$sponsorBean->description						= $account->description;	
				$sponsorBean->save();
					
					
				/*Creating relationship between Events and Sponsors.
				 * */
				$event_id	 		= $bean->bhea_events_opportunities_1bhea_events_ida;
				$eventBean 			= BeanFactory::getBean('Bhea_Events',$event_id);
				
				$eventBean->load_relationship('bhea_events_bhea_sponsor_1');
				$eventBean->bhea_events_bhea_sponsor_1->add($sponsorBean->id);	
				
					
				/**
				 * Create a record in Bhea_Sponsorship module
				 */
				
				$sponsorshipBean		 						= BeanFactory::newBean('Bhea_Sponsorship');
				$sponsorshipBean->name	 						= "Sponsorship for ".$account->name;
				$sponsorshipBean->sponsorship_tenure_starts		= $eventBean->begin_date;
				$sponsorshipBean->sponsorship_tenure_ends 		= $eventBean->end_date;
				$sponsorshipBean->save();
				
				
				/*Creating relationship between Sponsorship_Types and Sponsorship.
				 * */
				$sponsorship_type_id	 		= $bean->bhea_sponsorship_types_opportunities_1bhea_sponsorship_types_ida;
				$sponsorship_type 				= BeanFactory::getBean('bhea_Sponsorship_Types',$sponsorship_type_id);
				
				$sponsorship_type->load_relationship('bhea_sponsorship_types_bhea_sponsorship_1');
				$sponsorship_type->bhea_sponsorship_types_bhea_sponsorship_1->add($sponsorshipBean->id);
				
				/*Creating relationship between Events and Sponsorship.
				 * */
				$eventBean->load_relationship('bhea_events_bhea_sponsorship_1');
				$eventBean->bhea_events_bhea_sponsorship_1->add($sponsorshipBean->id);
				
				/*Creating relationship between Sponsor and Sponsorship.
				 * */
				$sponsorBean->load_relationship('bhea_sponsor_bhea_sponsorship_1');
				$sponsorBean->bhea_sponsor_bhea_sponsorship_1->add($sponsorshipBean->id);
				
				/*Creating relationship between Sponsor and Opportunities.
				 * */
				$sponsorBean->load_relationship('opportunities_bhea_sponsor_1');
				$sponsorBean->opportunities_bhea_sponsor_1->add($bean->id);
				
				/*Creating relationship between Sponsorship and Opportunities.
				 * */
				$sponsorshipBean->load_relationship('opportunities_bhea_sponsorship_1');
				$sponsorshipBean->opportunities_bhea_sponsorship_1->add($bean->id);
				
				/*Creating relationship between Sponsorship and Companies.
				 * */
				$sponsorshipBean->load_relationship('accounts_bhea_sponsorship_1');
				$sponsorshipBean->accounts_bhea_sponsorship_1->add($bean->account_id);
					
				//~ /*Fetching the Sessions ids from the subpannel.
				//~ * */
				 //~ $sql   =    'SELECT opportunities_bhea_sessions_1bhea_sessions_idb FROM opportunities_bhea_sessions_1_c WHERE opportunities_bhea_sessions_1opportunities_ida ="'.$bean->id.'" AND deleted=0 ';
				 //~ $result = $db->query($sql);
				 //~ while ($sessionid = $db->fetchByAssoc($result)) {
					//~ 
					//~ $sponsorshipBean->load_relationship('bhea_sessions_bhea_sponsorship_1');
					//~ $sponsorshipBean->bhea_sessions_bhea_sponsorship_1->add($sessionid);
				//~ 
				//~ }
				
			}
		}
}
