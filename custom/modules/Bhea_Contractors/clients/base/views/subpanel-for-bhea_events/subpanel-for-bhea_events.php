<?php
// created: 2013-12-09 19:53:29
$viewdefs['Bhea_Contractors']['base']['view']['subpanel-for-bhea_events'] = array (
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
          'type' => 'fieldset',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'first_name',
              'link' => true,
            ),
            1 => 
            array (
              'name' => 'last_name',
              'link' => true,
            ),
          ),
          'css_class' => 'full-name',
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => false,
        ),
        1 => 
        array (
          'name' => 'title',
          'label' => 'LBL_TITLE',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'department',
          'label' => 'LBL_DEPARTMENT',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'area_of_expertise',
          'label' => 'LBL_AREA_OF_EXPERTISE',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'company_name',
          'label' => 'LBL_COMPANY_NAME',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'company_address',
          'label' => 'LBL_COMPANY_ADDRESS',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'company_address_city',
          'label' => 'LBL_COMPANY_ADDRESS_CITY',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'company_address_state',
          'label' => 'LBL_COMPANY_ADDRESS_STATE',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'company_address_country',
          'label' => 'LBL_COMPANY_ADDRESS_COUNTRY',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'bhea_events_bhea_contractors_1_name',
          'label' => 'LBL_BHEA_EVENTS_BHEA_CONTRACTORS_1_FROM_BHEA_EVENTS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_EVENTS_BHEA_CONTRACTORS_1BHEA_EVENTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'bhea_sessions_bhea_contractors_1_name',
          'label' => 'LBL_BHEA_SESSIONS_BHEA_CONTRACTORS_1_FROM_BHEA_SESSIONS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_SESSIONS_BHEA_CONTRACTORS_1BHEA_SESSIONS_IDA',
          'link' => true,
          'sortable' => false,
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
        12 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);