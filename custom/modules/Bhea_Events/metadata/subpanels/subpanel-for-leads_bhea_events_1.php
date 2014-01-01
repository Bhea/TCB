<?php
// created: 2013-12-09 09:58:52
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'event_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_EVENT_TYPE ',
    'width' => '10%',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'default' => true,
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'conference_fees' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_CONFERENCE_FEES ',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'expected_no_of_attendees' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_EXPECTED_NO_OF_ATTENDEES ',
    'width' => '10%',
    'default' => true,
  ),
  'bhea_hotels_bhea_events_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_BHEA_HOTELS_TITLE',
    'id' => 'BHEA_HOTELS_BHEA_EVENTS_1BHEA_HOTELS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Hotels',
    'target_record_key' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
  ),
  'attendee_fee_target' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_ATTENDEE_FEE_TARGET ',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);