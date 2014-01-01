<?php
 // created: 2013-12-06 15:00:44
$dictionary['Bhea_Memberships']['fields']['lost_reason']['importable']='false';
$dictionary['Bhea_Memberships']['fields']['lost_reason']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Memberships']['fields']['lost_reason']['dependency']='equal($status,"Renewal Lost")';

 ?>