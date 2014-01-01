<?php
// created: 2013-12-20 09:09:08
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'sponsorship_type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'vname' => 'LBL_SPONSORSHIP_TYPE ',
    'width' => '10%',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS ',
    'width' => '10%',
  ),
  'sponsorship_levels_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_SPONSORSHIP_LEVELS',
    'width' => '10%',
  ),
  'sponsorship_tenure_starts' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_SPONSORSHIP_TENURE_STARTS',
    'width' => '10%',
    'default' => true,
  ),
  'sponsorship_tenure_ends' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_SPONSORSHIP_TENURE_ENDS',
    'width' => '10%',
    'default' => true,
  ),
  'bhea_events_bhea_sponsorship_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_EVENTS_TITLE',
    'id' => 'BHEA_EVENTS_BHEA_SPONSORSHIP_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
  ),
  'bhea_sponsorship_types_bhea_sponsorship_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
    'id' => 'BHEA_SPONSD4CDP_TYPES_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'bhea_Sponsorship_Types',
    'target_record_key' => 'bhea_sponsd4cdp_types_ida',
  ),
  'bhea_sponsor_bhea_sponsorship_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSOR_TITLE',
    'id' => 'BHEA_SPONSOR_BHEA_SPONSORSHIP_1BHEA_SPONSOR_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Sponsor',
    'target_record_key' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);