<?php
// created: 2013-12-09 10:03:58
$viewdefs['Bhea_Program_Catalogue']['base']['view']['subpanel-for-bhea_program'] = array (
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
          'name' => 'no_of_days',
          'label' => 'LBL_NO_OF_DAYS ',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'type',
          'label' => 'LBL_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'no_of_candidates',
          'label' => 'LBL_NO_OF_CANDIDATES ',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'member_price',
          'label' => 'LBL_MEMBER_PRICE ',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'non_member_price',
          'label' => 'LBL_NON_MEMBER_PRICE ',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'group_discount',
          'label' => 'LBL_GROUP_DISCOUNT',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'location_city',
          'label' => 'LBL_LOCATION_CITY',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
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