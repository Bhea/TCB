<?php
$module_name = 'Bhea_Councils';
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
                'name' => 'status',
                'studio' => 'visible',
                'label' => 'LBL_STATUS',
              ),
              1 => 
              array (
                'name' => 'knowledge_area',
                'studio' => 'visible',
                'label' => 'LBL_KNOWLEDGE_AREA ',
              ),
              2 => 
              array (
                'name' => 'group_category',
                'studio' => 'visible',
                'label' => 'LBL_GROUP_CATEGORY ',
              ),
              3 => 
              array (
                'name' => 'council_c',
                'label' => 'LBL_COUNCIL',
              ),
              4 => 
              array (
                'name' => 'membership_fee',
                'label' => 'LBL_MEMBERSHIP_FEE ',
              ),
              5 => 
              array (
                'name' => 'meetings_per_year',
                'studio' => 'visible',
                'label' => 'LBL_MEETINGS_PER_YEAR ',
              ),
              6 => 
              array (
                'name' => 'plan_member_cnt',
                'label' => 'LBL_PLAN_MEMBER_CNT ',
              ),
              7 => 
              array (
                'name' => 'cur_member_cnt',
                'label' => 'LBL_CUR_MEMBER_CNT',
              ),
              8 => 
              array (
                'name' => 'start_date',
                'label' => 'LBL_START_DATE ',
              ),
              9 => 
              array (
                'name' => 'end_date',
                'label' => 'LBL_END_DATE ',
              ),
              10 => 
              array (
                'name' => 'council_manager_c',
                'studio' => 'visible',
                'label' => 'LBL_COUNCIL_MANAGER',
              ),
              11 => 
              array (
                'name' => 'council_url',
                'label' => 'LBL_COUNCIL_URL',
              ),
              12 => 
              array (
                'name' => 'member_renewal_fee',
                'label' => 'LBL_MEMBER_RENEWAL_FEE ',
              ),
              13 => 
              array (
                'name' => 'type',
                'studio' => 'visible',
                'label' => 'LBL_TYPE ',
              ),
              14 => 
              array (
                'name' => 'council_sub_region',
                'label' => 'LBL_COUNCIL_SUB_REGION ',
              ),
              15 => 
              array (
                'name' => 'council_directory',
                'studio' => 'visible',
                'label' => 'LBL_COUNCIL_DIRECTORY ',
              ),
              16 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              17 => 
              array (
                'name' => 'election_date',
                'label' => 'LBL_ELECTION_DATE',
              ),
              18 => 'assigned_user_name',
              19 => 'team_name',
              20 => 
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
              21 => 
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
