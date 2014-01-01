<?php
// created: 2013-12-09 10:01:54
$viewdefs['Bhea_Councils']['base']['view']['subpanel-for-opportunities'] = array (
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
          'name' => 'cur_member_cnt',
          'label' => 'LBL_CUR_MEMBER_CNT',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'plan_member_cnt',
          'label' => 'LBL_PLAN_MEMBER_CNT ',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'membership_fee',
          'label' => 'LBL_MEMBERSHIP_FEE ',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'start_date',
          'label' => 'LBL_START_DATE ',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
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