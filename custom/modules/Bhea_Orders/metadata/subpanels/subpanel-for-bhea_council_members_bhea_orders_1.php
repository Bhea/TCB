<?php
// created: 2013-12-17 13:59:43
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'bhea_council_memberships_bhea_orders_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
    'id' => 'BHEA_COUNC48F0ERSHIPS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Council_Memberships',
    'target_record_key' => 'bhea_counc48f0erships_ida',
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
  'order_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_ORDER_DATE',
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
  'type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_TYPE',
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
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'bill_to_address_city' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_BILL_TO_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);