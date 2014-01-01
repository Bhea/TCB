<?php
// created: 2013-12-19 16:45:50
$viewdefs['Bhea_Pricing_Line_Item']['base']['view']['subpanel-for-bhea_member_levels'] = array (
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
          'name' => 'from_revenue_c',
          'label' => 'LBL_FROM_REVENUE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'to_revenue_c',
          'label' => 'LBL_TO_REVENUE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'membership_price_c',
          'label' => 'LBL_MEMBERSHIP_PRICE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
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