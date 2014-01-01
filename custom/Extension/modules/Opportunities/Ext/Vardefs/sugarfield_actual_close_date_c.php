<?php
 // created: 2013-12-17 19:13:34
$dictionary['Opportunity']['fields']['actual_close_date_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['actual_close_date_c']['labelValue']='Actual Closed Date';
$dictionary['Opportunity']['fields']['actual_close_date_c']['calculated']='1';
$dictionary['Opportunity']['fields']['actual_close_date_c']['formula']='ifElse(equal($sales_stage,"Closed Won"),now(),"")';
$dictionary['Opportunity']['fields']['actual_close_date_c']['enforced']='1';
$dictionary['Opportunity']['fields']['actual_close_date_c']['dependency']='';

 ?>