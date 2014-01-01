<?php
$module_name = 'Bhea_member_levels';
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
                'name' => 'mem_type',
                'studio' => 'visible',
                'label' => 'LBL_MEM_TYPE',
              ),
              1 => 
              array (
                'name' => 'mem_period',
                'studio' => 'visible',
                'label' => 'LBL_MEM_PERIOD',
              ),
              2 => 
              array (
                'name' => 'status',
                'studio' => 'visible',
                'label' => 'LBL_STATUS',
              ),
              3 => 
              array (
                'name' => 'membership_type_c',
                'studio' => 'visible',
                'label' => 'LBL_MEMBERSHIP_TYPE',
              ),
              4 => 
              array (
                'name' => 'membership_sub_category_c',
                'studio' => 'visible',
                'label' => 'LBL_MEMBERSHIP_SUB_CATEGORY',
              ),
              5 => 
              array (
                'name' => 'practice_area_c',
                'studio' => 'visible',
                'label' => 'LBL_PRACTICE_AREA',
              ),
              6 => 
              array (
                'name' => 'cat_type',
                'studio' => 'visible',
                'label' => 'LBL_CAT_TYPE',
              ),
              7 => 
              array (
                'name' => 'geography',
                'studio' => 'visible',
                'label' => 'LBL_GEOGRAPHY',
              ),
              8 => 
              array (
                'name' => 'start_date',
                'label' => 'LBL_START_DATE',
              ),
              9 => 
              array (
                'name' => 'end_date',
                'label' => 'LBL_END_DATE',
              ),
              10 => 
              array (
                'name' => 'price_type',
                'studio' => 'visible',
                'label' => 'LBL_PRICE_TYPE',
                'span' => 6,
              ),
              11 => 
              array (
                'span' => 6,
              ),
              12 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
                'span' => 12,
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
