<?php
/*
*@File:Acc_cont_unlink.php.
*@Author:Meghana.A @ Bhea Technologies.
*@Purpose:This logic will make the
* name,phone,email from the contact subpanel
* on the role as "LE" values as empty in 
* the company record
*/
class Comp_cont_unlink
{
	function Comp_cont_unlink($bean,$event,$arguments)
	{
		$GLOBALS['log']->fatal($arguments['related_id']);
		$acc_obj = BeanFactory::getBean("Accounts",$arguments['related_id']);
		if($bean->type_c == "LE")
		{
			$acc_obj->le_phone_c = " ";
			$acc_obj->le_name_c = " ";
			$acc_obj->le_email_c = " ";
		}
	}
}

?>
