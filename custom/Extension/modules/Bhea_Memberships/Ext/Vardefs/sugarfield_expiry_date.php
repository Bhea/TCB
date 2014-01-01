<?php
 // created: 2013-12-06 16:02:01
$dictionary['Bhea_Memberships']['fields']['expiry_date']['importable']='false';
$dictionary['Bhea_Memberships']['fields']['expiry_date']['calculated']='true';
$dictionary['Bhea_Memberships']['fields']['expiry_date']['formula']='addDays($start_date,365)';
$dictionary['Bhea_Memberships']['fields']['expiry_date']['enforced']=true;

 ?>