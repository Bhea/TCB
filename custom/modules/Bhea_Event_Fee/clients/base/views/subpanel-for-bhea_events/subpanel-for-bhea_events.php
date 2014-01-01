<?php
// created: 2013-12-16 19:37:32
$viewdefs['Bhea_Event_Fee']['base']['view']['subpanel-for-bhea_events'] = array (
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
          'name' => 'type_c',
          'label' => 'LBL_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'bhea_events_bhea_event_fee_1_name',
          'label' => 'LBL_BHEA_EVENTS_BHEA_EVENT_FEE_1_FROM_BHEA_EVENTS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_EVENTS_BHEA_EVENT_FEE_1BHEA_EVENTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'fees_c',
          'label' => 'LBL_FEES',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'fee_type_c',
          'label' => 'LBL_FEE_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'early_bird_discount_date_c',
          'label' => 'LBL_EARLY_BIRD_DISCOUNT_DATE',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'early_bird_discount_c',
          'label' => 'LBL_EARLY_BIRD_DISCOUNT',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'discount_c',
          'label' => 'LBL_DISCOUNT',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'fee_to_be_charged_c',
          'label' => 'LBL_FEE_TO_BE_CHARGED',
          'enabled' => true,
          'currency_format' => true,
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