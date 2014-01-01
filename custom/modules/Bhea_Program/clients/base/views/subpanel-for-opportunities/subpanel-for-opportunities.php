<?php
// created: 2013-12-09 10:00:58
$viewdefs['Bhea_Program']['base']['view']['subpanel-for-opportunities'] = array (
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
          'name' => 'mem_price',
          'label' => 'LBL_MEM_PRICE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'non_mem_price',
          'label' => 'LBL_NON_MEM_PRICE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'no_of_days',
          'label' => 'LBL_NO_OF_DAYS',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'no_candidates',
          'label' => 'LBL_NO_CANDIDATES',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'start_date',
          'label' => 'LBL_START_DATE',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'end_date',
          'label' => 'LBL_END_DATE',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'type',
          'label' => 'LBL_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'prog_id',
          'label' => 'LBL_PROG_ID',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
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