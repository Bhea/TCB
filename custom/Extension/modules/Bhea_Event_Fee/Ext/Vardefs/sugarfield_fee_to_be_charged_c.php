<?php
 // created: 2013-12-16 19:23:27
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['duplicate_merge_dom_value']=0;
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['labelValue']='Fee To Be Charged';
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['calculated']='1';
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['formula']='ifElse(equal($discount_c,""),subtract($fees_c,$early_bird_discount_c),subtract($fees_c,multiply(divide($early_bird_discount_c,100),$fees_c)))';
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['enforced']='1';
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['dependency']='';

 ?>