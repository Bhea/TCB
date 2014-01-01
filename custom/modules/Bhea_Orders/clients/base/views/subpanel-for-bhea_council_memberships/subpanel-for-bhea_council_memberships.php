<?php
// created: 2013-12-23 09:14:46
$viewdefs['Bhea_Orders']['base']['view']['subpanel-for-bhea_council_memberships'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
        ),
        1 => 
        array (
          'name' => 'value',
          'label' => 'LBL_VALUE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'order_date',
          'label' => 'LBL_ORDER_DATE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'bhea_orders_bhea_invoices_1_name',
          'label' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_INVOICES_TITLE',
          'enabled' => true,
          'id' => 'BHEA_ORDERS_BHEA_INVOICES_1BHEA_INVOICES_IDB',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'bill_to_address_city',
          'label' => 'LBL_BILL_TO_ADDRESS_CITY',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);