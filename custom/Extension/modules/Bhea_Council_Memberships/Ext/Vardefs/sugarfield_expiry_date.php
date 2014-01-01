<?php
 // created: 2013-12-18 19:26:59
$dictionary['Bhea_Council_Memberships']['fields']['expiry_date']['importable']='false';
$dictionary['Bhea_Council_Memberships']['fields']['expiry_date']['calculated']='true';
$dictionary['Bhea_Council_Memberships']['fields']['expiry_date']['formula']='addDays($start_date,365)';
$dictionary['Bhea_Council_Memberships']['fields']['expiry_date']['enforced']=true;

 ?>