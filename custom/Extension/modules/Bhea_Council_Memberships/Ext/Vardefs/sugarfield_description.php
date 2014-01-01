<?php
 // created: 2013-12-06 14:59:28
$dictionary['Bhea_Council_Memberships']['fields']['description']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Council_Memberships']['fields']['description']['dependency']='equal($status,"Renewal Lost")';

 ?>