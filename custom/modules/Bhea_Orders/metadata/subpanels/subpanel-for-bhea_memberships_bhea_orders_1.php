<?php
// created: 2013-12-21 10:53:06
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'value' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'order_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_ORDER_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'bhea_orders_bhea_invoices_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_INVOICES_TITLE',
    'id' => 'BHEA_ORDERS_BHEA_INVOICES_1BHEA_INVOICES_IDB',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Invoices',
    'target_record_key' => 'bhea_orders_bhea_invoices_1bhea_invoices_idb',
  ),
  'payment_received' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_PAYMENT_RECEIVED',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'accounts_bhea_orders_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_BHEA_ORDERS_1ACCOUNTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'accounts_bhea_orders_1accounts_ida',
  ),
  'bill_to_address_city' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_BILL_TO_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);