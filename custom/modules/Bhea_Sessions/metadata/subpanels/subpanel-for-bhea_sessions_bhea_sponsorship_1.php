<?php
// created: 2013-12-24 09:43:10
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'venue' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_VENUE',
    'width' => '10%',
    'default' => true,
  ),
  'begin_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_BEGIN_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'end_date' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_END_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'capacity' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_CAPACITY',
    'width' => '10%',
    'default' => true,
  ),
  'capacity_expected' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_CAPACITY_EXPECTED',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'bhea_events_bhea_sessions_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_EVENTS_TITLE',
    'id' => 'BHEA_EVENTS_BHEA_SESSIONS_1BHEA_EVENTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Events',
    'target_record_key' => 'bhea_events_bhea_sessions_1bhea_events_ida',
  ),
);