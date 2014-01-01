<?php
/*
*@File:Speakers.php.
*@Author:Prateek Kaushal @ Bhea Technologies.
*@Purpose:This file is used to creating the relationship.
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class after_relationship_class
{
	function after_relationship_method($bean,$event,$arguments)
	{
		/*Fetching the Sessions ids from the subpannel.
		* */
		$sessionBean = BeanFactory::getBean('Bhea_Sessions',$arguments['related_id']);
		
		/*Fetching the Sponsor id from the layout.
		* */
		$sponsor_id	 		= $bean->opportunities_bhea_sponsor_1bhea_sponsor_idb;
		$sponsorBean 		= BeanFactory::getBean('Bhea_Sponsor',$sponsor_id);
		
		/*Loading relationship between Sessions and Sponsor through the subpanel.
		* */
		$sessionBean->load_relationship('bhea_sessions_bhea_sponsor_1');
		$sessionBean->bhea_sessions_bhea_sponsor_1->add($sponsorBean->id);
		
		
		/*Fetching the Sponsorship id from the layout.
		* */
		$sponsorship_id 		= $bean->opportunities_bhea_sponsorship_1bhea_sponsorship_idb;
		//$GLOBALS['log']->fatal($sponsorship_id);
		$sponsorshipBean 		= BeanFactory::getBean('Bhea_Sponsorship',$sponsorship_id);
		
		
		/*Loading relationship between Sessions and Sponsorship through the subpanel.
		* */
		$sessionBean->load_relationship('bhea_sessions_bhea_sponsorship_1');
		$sessionBean->bhea_sessions_bhea_sponsorship_1->add($sponsorshipBean->id);
		
		
		/*Fetching the Speaker id from the layout.
		* */
		$speaker_id 		= $bean->opportunities_bhea_speakers_1bhea_speakers_idb;
		$speakerBean 		= BeanFactory::getBean('Bhea_Speakers',$speaker_id);
		
		/*Loading relationship between Sessions and Speaker through the subpanel.
		* */
		$sessionBean->load_relationship('bhea_speakers_bhea_sessions_1');
		$sessionBean->bhea_speakers_bhea_sessions_1->add($speakerBean->id);
		
		
		/*Fetching the Sponsorship Type id from the layout.
		* */
		$sponsorship_type_id 		= $bean->bhea_sponsorship_types_opportunities_1bhea_sponsorship_types_ida;
		$sponsorship_typeBean 		= BeanFactory::getBean('bhea_Sponsorship_Types',$sponsorship_type_id);
		
		
		/*Fetching the Sponsorship Type id from the layout.
		* */
		$events_id 		= $bean->bhea_events_opportunities_1bhea_events_ida;
		$eventsBean 	= BeanFactory::getBean('Bhea_Events',$events_id);
		
		 
		/*Loading relationship between Sessions and Sponsorship Type through the subpanel.
		* */
		$sessionBean->load_relationship('bhea_sessions_bhea_sponsorship_types_1');
		$sessionBean->bhea_sessions_bhea_sponsorship_types_1->add($sponsorship_typeBean->id);
		
		/*Loading relationship between events and Sponsorship Type through the subpanel.
		* */
		$eventsBean->load_relationship('bhea_events_bhea_sponsorship_types_1');
		$eventsBean->bhea_events_bhea_sponsorship_types_1->add($sponsorship_typeBean->id);
		
			
		/*Loading relationship between Sessions and Sponsorship Type through the subpanel.
		* */
		$sessionBean->load_relationship('contacts_bhea_sessions_1');
		$sessionBean->contacts_bhea_sessions_1->add($bean->contact_id_c);
	}
}
