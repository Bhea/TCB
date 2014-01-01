<?php
$module_name = 'Bhea_Event_Fee';
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
                'name' => 'type_c',
                'studio' => 'visible',
                'label' => 'LBL_TYPE',
              ),
              1 => 
              array (
                'name' => 'bhea_events_bhea_event_fee_1_name',
                'label' => 'LBL_BHEA_EVENTS_BHEA_EVENT_FEE_1_FROM_BHEA_EVENTS_TITLE',
              ),
              2 => 
              array (
                'name' => 'fee_type_c',
                'studio' => 'visible',
                'label' => 'LBL_FEE_TYPE',
              ),
              3 => 
              array (
                'name' => 'fees_c',
                'label' => 'LBL_FEES',
              ),
              4 => 
              array (
                'name' => 'early_bird_discount_date_c',
                'label' => 'LBL_EARLY_BIRD_DISCOUNT_DATE',
              ),
              5 => 
              array (
                'name' => 'early_bird_discount_c',
                'label' => 'LBL_EARLY_BIRD_DISCOUNT',
              ),
              6 => 
              array (
                'name' => 'discount_c',
                'label' => 'LBL_DISCOUNT',
              ),
              7 => 
              array (
                'name' => 'fee_to_be_charged_c',
                'label' => 'LBL_FEE_TO_BE_CHARGED',
              ),
              8 => 'assigned_user_name',
              9 => 'team_name',
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
