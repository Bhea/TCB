<?php
// created: 2013-12-09 09:50:49
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'plan_id' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PLAN_ID',
    'width' => '10%',
    'default' => true,
  ),
  'activity_name' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ACTIVITY_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'activity_no' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_ACTIVITY_NO',
    'width' => '10%',
    'default' => true,
  ),
  'scheduled_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_SCHEDULED_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'start_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
  'achieve_outcome' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_ACHIEVE_OUTCOME',
    'sortable' => false,
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