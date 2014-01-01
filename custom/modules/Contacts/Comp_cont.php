<?php
/*
*@File:Comp_cont.php.
*@Author:Meghana.A @ Bhea Technologies.
*@Purpose:If the existing record is edited
* in the company-contact then the file is
* called.
*/

class Comp_cont
{
	function Comp_cont($bean,$event,$arguments)
	{
		global $db;
		
		$r = $_SERVER['REQUEST_URI']; 
		$r = explode('/', $r);
		$r = array_filter($r);
		$r = array_merge($r, array()); 
		$r = preg_replace('/\?.*/', '', $r);
		$ids = $r[5];
				
		$query = 'SELECT  contact_id 
				  FROM  accounts_contacts
				  WHERE  account_id = "'.$ids.'"
				  AND deleted =0';
		$result = $db->query($query);
		$acc_obj = BeanFactory::getBean("Accounts",$ids);
		if(!empty($bean))
		{
			while($id_array = $db->fetchByAssoc($result))
			{
				if($bean->id == $id_array['contact_id'])
				 {
					if($bean->type_c == "LE")
					{
						$acc_obj->le_phone_c = $bean->phone_work;
						$acc_obj->le_name_c = $bean->first_name." ".$bean->last_name;
						$acc_obj->le_email_c =$bean->emailAddress->getPrimaryAddress($bean);
						//$acc_obj->save();
					}
					else
					{
						$acc_obj->le_phone_c = " ";
						$acc_obj->le_name_c = " ";
						$acc_obj->le_email_c = " ";
					}
				 }
			}
		}
	}
}

?>
