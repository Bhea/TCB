<?php
// created: 2013-12-26 16:19:47
$viewdefs['bhea_Sponsorship_Types']['base']['view']['subpanel-for-bhea_events'] = array (
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
          'name' => 'sponsor_type_c',
          'label' => 'LBL_SPONSOR_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'sponsorship_region_c',
          'label' => 'LBL_SPONSORSHIP_REGION',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'sponsorship_type_c',
          'label' => 'LBL_SPONSORSHIP_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'sponsorship_coverage_c',
          'label' => 'LBL_SPONSORSHIP_COVERAGE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'other_information',
          'label' => 'LBL_OTHER_INFORMATION',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'complimentary_passes',
          'label' => 'LBL_COMPLIMENTARY_PASSES',
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