<?php
/*
*@File:Acc_member_save.php.
*@Author:Meghana.A @ Bhea Technologies.
*@Purpose:If the existing record is edited
* in the company-financial performance then
* the file is called.
*/
class Acc_member_save
{
	function Acc_member_save($bean,$event,$arguments)
	{
		global $db;
		
		$r = $_SERVER['REQUEST_URI']; 
		$r = explode('/', $r);
		$r = array_filter($r);
		$r = array_merge($r, array()); 
		$r = preg_replace('/\?.*/', '', $r);
		$ids = $r[5];
				
		$query = 'SELECT  accounts_bhea_finance_performance_1bhea_finance_performance_idb as finance_id
					FROM  accounts_bhea_finance_performance_1_c 
					WHERE  accounts_bhea_finance_performance_1accounts_ida ="'.$ids.'"
					AND deleted =0 ORDER BY  `date_modified` DESC 
					LIMIT 1';
		$result = $db->query($query);
		$acc_obj = BeanFactory::getBean("Accounts",$ids);
		$id_latest = $db->fetchByAssoc($result);
		
		if(!empty($bean))
		{
			if($bean->id == $id_latest['finance_id'])
			 {
				 $GLOBALS['log']->fatal("inside while and if");
				$acc_obj->forbes_rating_c = $bean->forbes_rating_c;
				$acc_obj->annual_revenue = number_format($bean->revenue, 2, '.', '');
				$acc_obj->global_rating_c = $bean->fortune_global_rating_c;
				$acc_obj->employees = $bean->no_of_emp;
				$acc_obj->save();
			 }
		}
	}
}
