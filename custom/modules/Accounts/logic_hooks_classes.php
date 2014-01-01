<?php
/*
*@File:logic_hooks_classes.php.
*@Author:Meghana.A @ Bhea Technologies.
*@Purpose:If the type of the Company record
* is "member" then the subpanel contact records
* will change to type membership
*/
class logic_hooks_classes{
	function after_save_method($bean,$event,$arguments){
		//$GLOBALS['log']->fatal("meghana");
		
		/*
		 * Fetch records from the 
		 * subpanel
		 */
		$parent_type = $bean->account_type;
		// $GLOBALS['log']->fatal($parent_type);
		if($parent_type == "member")
		{
			$id = $bean->id;
			//$GLOBALS['log']->fatal($id);
			$bean = BeanFactory::getBean('Accounts', $id);
			if ($bean->load_relationship('contacts'))
			{
				//Fetch related beans 
				$relatedBeans = $bean->contacts->getBeans();
			}
			
			foreach($relatedBeans as $single)
			{
				$sid = $single->id;
				//$GLOBALS['log']->fatal($sid);
				$single->contact_type_c = "Member";
				$single->save();
			}
		}
	}
}

?>
