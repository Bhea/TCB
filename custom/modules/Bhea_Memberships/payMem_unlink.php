<?php
/*
*@File:payMem.php.
*@Author:Meghana.A @ Bhea Technologies.
*@Purpose:This file is used to populate
* the values from the recent record after
* unlinking will be populated.
*/
class payMem_unlink
{
	function payMem_unlink($bean,$event,$arguments)
	{
		global $db;
		$qry = 'SELECT  bhea_memberships_bhea_payments_1bhea_payments_idb
				FROM  bhea_memberships_bhea_payments_1_c 
				WHERE  bhea_memberships_bhea_payments_1bhea_memberships_ida ="'.$bean->id.'"
				AND deleted =0 ORDER BY `date_modified` DESC 
				LIMIT 1';
		$result = $db->query($qry);
		$row = $db->fetchByAssoc($result);
		$mem_pay_id = $row['bhea_memberships_bhea_payments_1bhea_payments_idb'];
		$query1 = 'SELECT payment_date,name,payment_mode,payment_status,payment_status FROM bhea_payments WHERE id="'.		$mem_pay_id.'"';
		$result1 = $db->query($query1);
		$row1 = $db->fetchByAssoc($result1);
		$bean->payment_date = $row1['payment_date'];
		$bean->payment_id = $row1['name'];
		$bean->payment_mode = $row1['payment_mode'];
		$bean->payment_status = $row1['payment_status'];
		if(empty($row1['description']))
		{
			$bean->payment_details = " ";
		}
		else
		{
			$bean->payment_details = $row1['description'];
		}
		
		$bean->save();
	}
}
