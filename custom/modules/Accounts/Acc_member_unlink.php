<?php
/*
*@File:Acc_member.php.
*@Author:Meghana.A @ Bhea Technologies.
*@Purpose:If the recent record is removed then
* the last but the latest record's required fields
* values are populated
*/
class Acc_member_unlink
{
	function Acc_member_unlink($bean,$event,$arguments)
	{
		global $db;
		
		$r = $_SERVER['REQUEST_URI']; 
		$r = explode('/', $r);
		$r = array_filter($r);
		$r = array_merge($r, array()); 
		$r = preg_replace('/\?.*/', '', $r);
		$ids = $r[5];
		
		$qry = 'SELECT  accounts_bhea_finance_performance_1bhea_finance_performance_idb
				FROM  accounts_bhea_finance_performance_1_c 
				WHERE  accounts_bhea_finance_performance_1accounts_ida ="'.$ids.'"
				AND deleted =0 ORDER BY `date_modified` DESC 
				LIMIT 1';
		$result = $db->query($qry);
		$row = $db->fetchByAssoc($result);
		$acc_fin_id = $row['accounts_bhea_finance_performance_1bhea_finance_performance_idb'];
		
		//$fin_bean = BeanFactory::getBean("bhea_finance_performance",$acc_fin_id);
		//$fin_revenue = $fin_bean->revenue;
		//$GLOBALS['log']->fatal($fin_revenue);
		
		$query1 = 'SELECT a.revenue,a.no_of_emp,b.fortune_global_rating_c,b.forbes_rating_c FROM bhea_finance_performance 			a,bhea_finance_performance_cstm b WHERE a.id="'.$acc_fin_id.'" AND b.id_c="'.$acc_fin_id.'"';
		$result1 = $db->query($query1);
		$row1 = $db->fetchByAssoc($result1);
		$bean->annual_revenue = number_format($row1['revenue'],2);
		
		if(empty($row1['no_of_emp']))
		{
			$bean->employees = " ";
		}
		else
		{
			$bean->employees = $row1['no_of_emp'];
		}
		
		if(empty($row1['fortune_global_rating_c']))
		{
			$bean->global_rating_c = " ";
		}
		else
		{
			$bean->global_rating_c = $row1['fortune_global_rating_c'];
		}
		
		if(empty($row1['forbes_rating_c']))
		{
			$bean->forbes_rating_c = " ";
		}
		else
		{
			$bean->forbes_rating_c = $row1['forbes_rating_c'];
		}
		
		$bean->save();
	}
}
