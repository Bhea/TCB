<?php
/*
*@File:Acc_cont.php.
*@Author:Meghana.A @ Bhea Technologies.
*@Purpose:This logic will fetch the
* name,phone,email from the contact subpanel
* on the role as "LE" and the fetchd values 
* are inserted in the company record
*/
class Acc_cont
{
	function Acc_cont($bean,$event,$arguments)
	{
		$child_contact = $arguments["related_id"];
		$con_obj = BeanFactory::getBean("Contacts",$child_contact);
		if($con_obj->type_c == "LE")
		{
			$bean->le_phone_c = $con_obj->phone_work;
			$bean->le_name_c = $con_obj->first_name." ".$con_obj->last_name;
			$user=BeanFactory::getBean('Contacts',$child_contact);
			$bean->le_email_c =$user->emailAddress->getPrimaryAddress($user);
		}
		$bean->save();
	}
}
?>
