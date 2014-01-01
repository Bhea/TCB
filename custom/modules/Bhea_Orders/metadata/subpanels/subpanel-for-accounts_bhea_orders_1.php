<?php
// created: 2013-12-09 09:51:23
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'order_id' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ORDER_ID',
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
  'type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_TYPE',
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
  'order_execution_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_ORDER_EXECUTION_DATE',
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
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);