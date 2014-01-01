<?php
// created: 2013-12-24 09:35:41
$dictionary["Bhea_Invoices"]["fields"]["bhea_orders_bhea_invoices_1"] = array (
  'name' => 'bhea_orders_bhea_invoices_1',
  'type' => 'link',
  'relationship' => 'bhea_orders_bhea_invoices_1',
  'source' => 'non-db',
  'module' => 'Bhea_Orders',
  'bean_name' => 'Bhea_Orders',
  'side' => 'right',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_INVOICES_TITLE',
  'id_name' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Invoices"]["fields"]["bhea_orders_bhea_invoices_1_name"] = array (
  'name' => 'bhea_orders_bhea_invoices_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_ORDERS_TITLE',
  'save' => true,
  'id_name' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
  'link' => 'bhea_orders_bhea_invoices_1',
  'table' => 'bhea_orders',
  'module' => 'Bhea_Orders',
  'rname' => 'name',
);
$dictionary["Bhea_Invoices"]["fields"]["bhea_orders_bhea_invoices_1bhea_orders_ida"] = array (
  'name' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_INVOICES_TITLE_TITLE',
  'id_name' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
  'link' => 'bhea_orders_bhea_invoices_1',
  'table' => 'bhea_orders',
  'module' => 'Bhea_Orders',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
