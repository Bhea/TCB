<?php
 // created: 2013-12-26 19:58:29
$dictionary['Bhea_Council_Members']['fields']['member_till']['importable']='false';
$dictionary['Bhea_Council_Members']['fields']['member_till']['calculated']='true';
$dictionary['Bhea_Council_Members']['fields']['member_till']['formula']='addDays($member_from,365)';
$dictionary['Bhea_Council_Members']['fields']['member_till']['enforced']=true;

 ?>