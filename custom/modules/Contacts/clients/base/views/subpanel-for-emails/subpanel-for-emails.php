<?php
// created: 2013-12-06 17:31:14
$viewdefs['Contacts']['base']['view']['subpanel-for-emails'] = array (
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
          'name' => 'name',
          'label' => 'LBL_LIST_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'fields' => 
          array (
            0 => 'first_name',
            1 => 'last_name',
            2 => 'salutation',
            3 => 'title',
          ),
          'type' => 'fullname',
        ),
        1 => 
        array (
          'name' => 'account_name',
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'sortable' => false,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'type' => 'relate',
        ),
        2 => 
        array (
          'name' => 'email',
          'sortable' => false,
          'label' => 'LBL_LIST_EMAIL',
          'default' => true,
          'enabled' => true,
          'type' => 'email',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);