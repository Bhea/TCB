<?php
// created: 2013-12-09 09:55:47
$viewdefs['Bhea_Payments']['base']['view']['subpanel-for-bhea_council_memberships'] = array (
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
          'name' => 'payment_date',
          'label' => 'LBL_PAYMENT_DATE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'payment_mode',
          'label' => 'LBL_PAYMENT_MODE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'payment_status',
          'label' => 'LBL_PAYMENT_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'bhea_invoices_bhea_payments_1_name',
          'label' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_INVOICES_TITLE',
          'enabled' => true,
          'id' => 'BHEA_INVOICES_BHEA_PAYMENTS_1BHEA_INVOICES_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        5 => 
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