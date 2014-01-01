<?php
/*
*@File:Speakers.php.
*@Author:Prateek Kaushal @ Bhea Technologies.
*@Purpose:This file is used to create a record
* in the Speakers module by populating few
* values from the Opportunities.
*/

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class eventid{
	
	function eventid_method($bean,$event,$arguements){
		
		global $db;
		//$GLOBALS['log']->fatal($bean->id);
		$query = ' SELECT event_id_c FROM bhea_events, bhea_events_cstm where bhea_events.id=bhea_events_cstm.id_c AND id_c="'.$bean->id.'" ';
		$result = $db->query($query);
		$event_id_c = $db->fetchByAssoc($result);
		$GLOBALS['log']->fatal($event_id_c);
	
		if($bean->event_type == "Conference" && $bean->knowledge_area == "Human_Capital"){	
		$GLOBALS['log']->fatal("hi ID creation..event_type = Conference & knowledge_area = Human_Capital");	
		
		$change = "CONF-HC-".$event_id_c;
		$update_event_id_c = ' UPDATE bhea_events_cstm SET event_id_c="'.$change.'" WHERE id_c="'.$bean->id.'" ' ;	
		$db->query($update_event_id_c);	
		
		}

		if($bean->event_type == "Conference" && $bean->knowledge_area == "Corporate_Leadership"){	
		$GLOBALS['log']->fatal("hi ID creation..event_type = Conference & knowledge_area = Corporate_Leadership");		
		}
		
		if($bean->event_type == "Conference" && $bean->knowledge_area == "Economy"){	
		$GLOBALS['log']->fatal("hi ID creation..event_type = Conference & knowledge_area = Economy");		
		}
		
		//~ $digit = substr($name,2);
		//~ $digit++;	
		//~ $pid="PY".$digit;
		//~ $update_event_id_c = ' UPDATE bhea_events_cstm SET event_id_c="'..'" WHERE id_c="'.$bean->id.'" ' ;	
		//~ $db->query($update_event_id_c);
		//~ 
		
	}
}
