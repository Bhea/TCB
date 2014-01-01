<?php

class AfterSaveCouncilMem{
	function councilPastMember($bean,$event,$arguments){
		$groupBean = BeanFactory::getBean('Bhea_Councils',$bean->bhea_councils_bhea_council_members_1bhea_councils_ida);
		if($bean->membership_status=="InActive")
		{
			
			//Adding the record to the Past Members Subpanel
			$groupBean->load_relationship('bhea_councils_bhea_council_members_2');
			$groupBean->bhea_councils_bhea_council_members_2->add($bean->id);
			
			
			//Removing record from the Members subpanel
			$groupBean->load_relationship('bhea_councils_bhea_council_members_1');
			$groupBean->bhea_councils_bhea_council_members_1->delete($groupBean->id,$bean->id);
		}
		else
		{
			
			//Adding the record to the Members Subpanel
			$groupBean->load_relationship('bhea_councils_bhea_council_members_1');
			$groupBean->bhea_councils_bhea_council_members_1->add($bean->id);
			
			
			//Removing record from the Past Members subpanel
			$groupBean->load_relationship('bhea_councils_bhea_council_members_2');
			$groupBean->bhea_councils_bhea_council_members_2->delete($groupBean->id,$bean->id);
		}
	}
}
?>
