<?php
// created: 2013-12-20 09:09:08
$viewdefs['Bhea_Sponsorship']['base']['view']['subpanel-for-bhea_sponsorship_types'] = array (
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
          'name' => 'sponsorship_type',
          'label' => 'LBL_SPONSORSHIP_TYPE ',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS ',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'sponsorship_levels_c',
          'label' => 'LBL_SPONSORSHIP_LEVELS',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'sponsorship_tenure_starts',
          'label' => 'LBL_SPONSORSHIP_TENURE_STARTS',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'sponsorship_tenure_ends',
          'label' => 'LBL_SPONSORSHIP_TENURE_ENDS',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'bhea_events_bhea_sponsorship_1_name',
          'label' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_EVENTS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_EVENTS_BHEA_SPONSORSHIP_1BHEA_EVENTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'bhea_sponsorship_types_bhea_sponsorship_1_name',
          'label' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
          'enabled' => true,
          'id' => 'BHEA_SPONSD4CDP_TYPES_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'bhea_sponsor_bhea_sponsorship_1_name',
          'label' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSOR_TITLE',
          'enabled' => true,
          'id' => 'BHEA_SPONSOR_BHEA_SPONSORSHIP_1BHEA_SPONSOR_IDA',
          'link' => true,
          'sortable' => false,
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