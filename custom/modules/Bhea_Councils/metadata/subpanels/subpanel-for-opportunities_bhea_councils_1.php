<?php
// created: 2013-12-09 10:01:55
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'cur_member_cnt' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_CUR_MEMBER_CNT',
    'width' => '10%',
    'default' => true,
  ),
  'plan_member_cnt' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_PLAN_MEMBER_CNT ',
    'width' => '10%',
    'default' => true,
  ),
  'membership_fee' => 
  array (
    'type' => 'currency',
    'vname' => 'LBL_MEMBERSHIP_FEE ',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'start_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_START_DATE ',
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