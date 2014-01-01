<?php
// created: 2013-12-09 09:50:49
$viewdefs['Bhea_Account_Plan']['base']['view']['subpanel-for-accounts'] = array (
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
          'name' => 'plan_id',
          'label' => 'LBL_PLAN_ID',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'activity_name',
          'label' => 'LBL_ACTIVITY_NAME',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'activity_no',
          'label' => 'LBL_ACTIVITY_NO',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'scheduled_date',
          'label' => 'LBL_SCHEDULED_DATE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'start_date',
          'label' => 'LBL_START_DATE',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'enabled' => true,
          'id' => 'ASSIGNED_USER_ID',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'achieve_outcome',
          'label' => 'LBL_ACHIEVE_OUTCOME',
          'enabled' => true,
          'sortable' => false,
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