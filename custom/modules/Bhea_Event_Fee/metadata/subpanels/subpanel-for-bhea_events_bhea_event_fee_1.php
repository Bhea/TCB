<?php
// created: 2013-12-16 19:37:32
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'bhea_events_bhea_event_fee_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENT_FEE_1_FROM_BHEA_EVENTS_TITLE',
    'id' => 'BHEA_EVENTS_BHEA_EVENT_FEE_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_bhea_event_fee_1bhea_events_ida',
  ),
  'fees_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_FEES',
    'currency_format' => true,
    'width' => '10%',
  ),
  'fee_type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_FEE_TYPE',
    'width' => '10%',
  ),
  'early_bird_discount_date_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_EARLY_BIRD_DISCOUNT_DATE',
    'width' => '10%',
  ),
  'early_bird_discount_c' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_EARLY_BIRD_DISCOUNT',
    'width' => '10%',
  ),
  'discount_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_DISCOUNT',
    'width' => '10%',
  ),
  'fee_to_be_charged_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_FEE_TO_BE_CHARGED',
    'currency_format' => true,
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);