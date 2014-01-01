<?php
// created: 2013-12-04 13:31:24
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'payment_status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PAYMENT_STATUS',
    'width' => '10%',
  ),
  'payment_mode' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PAYMENT_MODE',
    'width' => '10%',
  ),
  'payment_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_PAYMENT_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'bhea_orders_bhea_payments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_ORDERS_BHEA_PAYMENTS_1_FROM_BHEA_ORDERS_TITLE',
    'id' => 'BHEA_ORDERS_BHEA_PAYMENTS_1BHEA_ORDERS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Orders',
    'target_record_key' => 'bhea_orders_bhea_payments_1bhea_orders_ida',
  ),
  'bhea_invoices_bhea_payments_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_INVOICES_TITLE',
    'id' => 'BHEA_INVOICES_BHEA_PAYMENTS_1BHEA_INVOICES_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Invoices',
    'target_record_key' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);