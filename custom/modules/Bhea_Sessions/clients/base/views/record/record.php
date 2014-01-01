<?php
$module_name = 'Bhea_Sessions';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'begin_date',
                'label' => 'LBL_BEGIN_DATE',
              ),
              2 => 
              array (
                'name' => 'end_date',
                'label' => 'LBL_END_DATE',
              ),
              3 => 
              array (
                'name' => 'status',
                'studio' => 'visible',
                'label' => 'LBL_STATUS',
              ),
              4 => 
              array (
                'name' => 'venue',
                'label' => 'LBL_VENUE',
              ),
              5 => 
              array (
                'name' => 'capacity',
                'label' => 'LBL_CAPACITY',
              ),
              6 => 
              array (
                'name' => 'capacity_expected',
                'label' => 'LBL_CAPACITY_EXPECTED',
              ),
              7 => 
              array (
                'name' => 'bhea_events_bhea_sessions_1_name',
                'label' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_EVENTS_TITLE',
                'span' => 6,
              ),
              8 => 
              array (
                'span' => 6,
              ),
              9 => 
              array (
                'name' => 'date_entered',
                'comment' => 'Date record created',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_ENTERED',
              ),
              10 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
              11 => 
              array (
                'name' => 'date_modified',
                'comment' => 'Date record last modified',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_MODIFIED',
              ),
              12 => 
              array (
                'name' => 'modified_by_name',
                'readonly' => true,
                'label' => 'LBL_MODIFIED_NAME',
              ),
              13 => 'assigned_user_name',
              14 => 'team_name',
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => false,
          'tabDefs' => 
          array (
            'LBL_RECORD_BODY' => 
            array (
              'newTab' => false,
              'panelDefault' => 'expanded',
            ),
          ),
        ),
      ),
    ),
  ),
);
