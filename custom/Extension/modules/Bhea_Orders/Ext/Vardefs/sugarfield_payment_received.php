<?php
 // created: 2013-12-13 18:11:27
$dictionary['Bhea_Orders']['fields']['payment_received']['importable']='false';
$dictionary['Bhea_Orders']['fields']['payment_received']['calculated']='true';
$dictionary['Bhea_Orders']['fields']['payment_received']['formula']='rollupSum($bhea_orders_bhea_payments_1,"currency")';
$dictionary['Bhea_Orders']['fields']['payment_received']['enforced']=true;

 ?>