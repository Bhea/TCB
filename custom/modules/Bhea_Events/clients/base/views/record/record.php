<?php
$module_name = 'Bhea_Events';
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
                'name' => 'event_id_c',
                'label' => 'LBL_EVENT_ID',
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
                'span' => 12,
              ),
              3 => 
              array (
                'name' => 'begin_date',
                'label' => 'LBL_BEGIN_DATE ',
              ),
              4 => 
              array (
                'name' => 'end_date',
                'label' => 'LBL_END_DATE ',
              ),
              5 => 
              array (
                'name' => 'event_type',
                'studio' => 'visible',
                'label' => 'LBL_EVENT_TYPE ',
              ),
              6 => 
              array (
                'name' => 'status',
                'studio' => 'visible',
                'label' => 'LBL_STATUS',
              ),
              7 => 
              array (
                'name' => 'no_of_sessions',
                'label' => 'LBL_NO_OF_SESSIONS ',
              ),
              8 => 
              array (
                'name' => 'knowledge_area',
                'studio' => 'visible',
                'label' => 'LBL_KNOWLEDGE_AREA',
              ),
              9 => 
              array (
                'name' => 'budgeted_cost',
                'label' => 'LBL_BUDGETED_COST ',
              ),
              10 => 
              array (
                'name' => 'sponsorship_target',
                'label' => 'LBL_SPONSORSHIP_TARGET ',
              ),
              11 => 
              array (
                'name' => 'expected_no_of_attendees',
                'label' => 'LBL_EXPECTED_NO_OF_ATTENDEES ',
              ),
              12 => 
              array (
                'name' => 'attendee_fee_target',
                'label' => 'LBL_ATTENDEE_FEE_TARGET ',
              ),
              13 => 
              array (
                'name' => 'cancellation_fee_date',
                'label' => 'LBL_CANCELLATION_FEE_DATE ',
              ),
              14 => 
              array (
                'name' => 'cancellation_fee',
                'label' => 'LBL_CANCELLATION_FEE',
              ),
              15 => 
              array (
                'name' => 'bhea_events_bhea_events_1_name',
                'label' => 'LBL_BHEA_EVENTS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_L_TITLE',
              ),
              16 => 
              array (
                'name' => 'bhea_hotels_bhea_events_1_name',
                'label' => 'LBL_BHEA_HOTELS_BHEA_EVENTS_1_FROM_BHEA_HOTELS_TITLE',
              ),
              17 => 
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
              18 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
              19 => 
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
              20 => 
              array (
                'name' => 'modified_by_name',
                'readonly' => true,
                'label' => 'LBL_MODIFIED_NAME',
              ),
              21 => 'assigned_user_name',
              22 => 'team_name',
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
