<?php
// created: 2013-12-09 09:54:07
$viewdefs['Bhea_Sessions']['base']['view']['subpanel-for-contacts'] = array (
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
          'name' => 'begin_date',
          'label' => 'LBL_BEGIN_DATE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'end_date',
          'label' => 'LBL_END_DATE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'venue',
          'label' => 'LBL_VENUE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'capacity',
          'label' => 'LBL_CAPACITY',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'capacity_expected',
          'label' => 'LBL_CAPACITY_EXPECTED',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
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