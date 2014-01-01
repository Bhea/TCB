<?php
$module_name = 'Bhea_Sponsorship';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
                'width' => '15%',
              ),
              1 => 
              array (
                'name' => 'bhea_sponsorship_types_bhea_sponsorship_1_name',
                'label' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
                'enabled' => true,
                'id' => 'BHEA_SPONSD4CDP_TYPES_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'bhea_events_bhea_sponsorship_1_name',
                'label' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_EVENTS_TITLE',
                'enabled' => true,
                'id' => 'BHEA_EVENTS_BHEA_SPONSORSHIP_1BHEA_EVENTS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'bhea_sponsor_bhea_sponsorship_1_name',
                'label' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSOR_TITLE',
                'enabled' => true,
                'id' => 'BHEA_SPONSOR_BHEA_SPONSORSHIP_1BHEA_SPONSOR_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'sponsorship_tenure_starts',
                'label' => 'LBL_SPONSORSHIP_TENURE_STARTS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'sponsorship_tenure_ends',
                'label' => 'LBL_SPONSORSHIP_TENURE_ENDS',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'value',
                'label' => 'LBL_VALUE',
                'enabled' => true,
                'currency_format' => true,
                'width' => '10%',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS ',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'bhea_sessions_bhea_sponsorship_1_name',
                'label' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SESSIONS_TITLE',
                'enabled' => true,
                'id' => 'BHEA_SESSIONS_BHEA_SPONSORSHIP_1BHEA_SESSIONS_IDA',
                'link' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => true,
              ),
              9 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
                'width' => '10%',
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9%',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              11 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9%',
                'default' => false,
                'enabled' => true,
              ),
              13 => 
              array (
                'name' => 'sponsorship_type',
                'label' => 'LBL_SPONSORSHIP_TYPE ',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
