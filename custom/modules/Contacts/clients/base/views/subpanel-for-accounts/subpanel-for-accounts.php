<?php
// created: 2013-12-21 10:44:09
$viewdefs['Contacts']['base']['view']['subpanel-for-accounts'] = array (
  'type' => 'subpanel-list',
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
          'name' => 'full_name',
          'type' => 'fullname',
          'fields' => 
          array (
            0 => 'salutation',
            1 => 'first_name',
            2 => 'last_name',
          ),
          'link' => true,
          'css_class' => 'full-name',
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'contacts_id_c',
          'label' => 'LBL_CONTACTS_ID',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'type_c',
          'label' => 'LBL_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'contact_type_c',
          'label' => 'LBL_CONTACT_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'status_c',
          'label' => 'LBL_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'job_function_c',
          'label' => 'LBL_JOB_FUNCTION',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'first_activity_c',
          'label' => 'LBL_FIRST_ACTIVITY',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'last_activity_c',
          'label' => 'LBL_LAST_ACTIVITY',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'primary_address_city',
          'label' => 'LBL_LIST_CITY',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'primary_address_state',
          'label' => 'LBL_LIST_STATE',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'email',
          'label' => 'LBL_LIST_EMAIL',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
      ),
    ),
  ),
);