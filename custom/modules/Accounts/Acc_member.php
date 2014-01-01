<?php
/*
*@File:Acc_member.php.
*@Author:Meghana.A @ Bhea Technologies.
*@Purpose:The recent record of the Financial 
* Performance revenue is updated in the
* Company module revenue.
*/

class Acc_member
{
	function Acc_member($bean,$event,$arguments)
	{
		if($arguments['related_module'] == "Bhea_finance_performance")
		{
			$fp_id = $arguments['related_id'];
			$fp = BeanFactory::getBean('Bhea_finance_performance',$fp_id);
			$bean->annual_revenue = number_format($fp->revenue, 2, '.', '');
			if(empty($fp->forbes_rating_c))
			{
				$bean->forbes_rating_c = " ";
			}
			else
			{
				$bean->forbes_rating_c = $fp->forbes_rating_c;
			}
			if(empty($fp->fortune_global_rating_c))
			{
				$bean->global_rating_c = " ";
			}
			else
			{
				$bean->global_rating_c = $fp->fortune_global_rating_c;
			}
			if(empty($fp->no_of_emp))
			{
				$bean->employees = " ";
			}
			else
			{
				$bean->employees = $fp->no_of_emp;
			}

			$bean->save();
		}
	}
}
?>
