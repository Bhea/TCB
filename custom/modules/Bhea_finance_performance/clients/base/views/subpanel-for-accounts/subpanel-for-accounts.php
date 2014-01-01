<?php
// created: 2013-12-09 09:52:44
$viewdefs['Bhea_finance_performance']['base']['view']['subpanel-for-accounts'] = array (
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
          'name' => 'start_month',
          'label' => 'LBL_START_MONTH',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'year_c',
          'label' => 'LBL_YEAR',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'revenue',
          'label' => 'LBL_REVENUE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'profit',
          'label' => 'LBL_PROFIT',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'no_of_emp',
          'label' => 'LBL_NO_OF_EMP',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'source_finance',
          'label' => 'LBL_SOURCE_FINANCE',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
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