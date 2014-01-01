<?php
/*
*@File:payMem.php.
*@Author:Meghana.A @ Bhea Technologies.
*@Purpose:This file will fetch the values from
* the payment and populate in
* the members module record
*/
class payMem
{
	function payMem($bean,$event,$arguments)
	{
		if($arguments['related_module'] == "Bhea_Payments")
		{
			$pay_id = $arguments['related_id'];
			$pay_id = BeanFactory::getBean('Bhea_Payments',$pay_id);
			
			if(empty($pay_id->description))
				{
					$bean->payment_details  = " ";
				}
				else
				{
					$bean->payment_details = $pay_id->description;
				}
			$bean->payment_mode = $pay_id->payment_mode;
			$bean->payment_date = $pay_id->payment_date;
			$bean->payment_status = $pay_id->payment_status;
			$bean->payment_id = $pay_id->name;
			$bean->save();
		}
	}
}
