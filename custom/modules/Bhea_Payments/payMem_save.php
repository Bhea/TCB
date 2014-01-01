<?php
/*
*@File:payMem.php.
*@Author:Meghana.A @ Bhea Technologies.
*@Purpose:For edited records we can
* use this file where the condition is checked
* for latest record as well as for the edition
* of that particular record
*/
class payMem_save
{
	function payMem_save($bean,$event,$arguments)
	{
		global $db;
		$r = $_SERVER['REQUEST_URI']; 
		$r = explode('/', $r);
		$r = array_filter($r);
		$r = array_merge($r, array()); 
		$r = preg_replace('/\?.*/', '', $r);
		$ids = $r[5];
				
		$query = 'SELECT  bhea_memberships_bhea_payments_1bhea_payments_idb as payment_id
					FROM  bhea_memberships_bhea_payments_1_c 
					WHERE  bhea_memberships_bhea_payments_1bhea_memberships_ida ="'.$ids.'"
					AND deleted =0 AND deleted =0 ORDER BY  `date_modified` DESC 
					LIMIT 1';
		$result = $db->query($query);
		$latest_id = $db->fetchByAssoc($result);
		$mem_id = BeanFactory::getBean('Bhea_Memberships',$ids);
		
		
		if(!empty($bean))
		{
			if($bean->id == $latest_id['payment_id'])
			 {
				$mem_id->payment_details = $bean->description;
				$mem_id->payment_mode = $bean->payment_mode;
				$mem_id->payment_date = $bean->payment_date;
				$mem_id->payment_status = $bean->payment_status;
				$mem_id->payment_id = $bean->name;
				$mem_id->save();
			 }
		}
		
	}
}
