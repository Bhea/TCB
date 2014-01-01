<?php
$viewdefs['Opportunities'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => NULL,
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'divider',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
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
              1 => 
              array (
                'name' => 'name',
              ),
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
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
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 'opportunity_type',
              1 => 
              array (
                'name' => 'subtype_c',
                'studio' => 'visible',
                'label' => 'LBL_SUBTYPE',
              ),
              2 => 
              array (
                'name' => 'conference_sub_type_c',
                'studio' => 'visible',
                'label' => 'LBL_CONFERENCE_SUB_TYPE',
              ),
              3 => 
              array (
                'name' => 'bhea_councils_opportunities_1_name',
                'label' => 'LBL_BHEA_COUNCILS_OPPORTUNITIES_1_FROM_BHEA_COUNCILS_TITLE',
              ),
              4 => 
              array (
                'name' => 'account_name',
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
              ),
              5 => 
              array (
                'name' => 'contact_c',
                'studio' => 'visible',
                'label' => 'LBL_CONTACT_C',
              ),
              6 => 
              array (
                'name' => 'bhea_events_opportunities_1_name',
                'label' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_BHEA_EVENTS_TITLE',
              ),
              7 => 
              array (
                'name' => 'bhea_sponsorship_types_opportunities_1_name',
                'label' => 'LBL_BHEA_SPONSORSHIP_TYPES_OPPORTUNITIES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
              ),
              8 => 
              array (
                'name' => 'region_c',
                'studio' => 'visible',
                'label' => 'LBL_REGION',
              ),
              9 => 
              array (
                'name' => 'membership_category_c',
                'studio' => 'visible',
                'label' => 'LBL_MEMBERSHIP_CATEGORY',
              ),
              10 => 
              array (
                'name' => 'membership_sub_category_c',
                'studio' => 'visible',
                'label' => 'LBL_MEMBERSHIP_SUB_CATEGORY',
              ),
              11 => 
              array (
                'name' => 'practice_area_c',
                'studio' => 'visible',
                'label' => 'LBL_PRACTICE_AREA',
              ),
              12 => 
              array (
                'name' => 'access_level_c',
                'studio' => 'visible',
                'label' => 'LBL_ACCESS_LEVEL',
              ),
              13 => 
              array (
                'name' => 'pricing_type_c',
                'studio' => 'visible',
                'label' => 'LBL_PRICING_TYPE',
              ),
              14 => 
              array (
                'name' => 'company_revenue_c',
                'label' => 'LBL_COMPANY_REVENUE',
              ),
              15 => 
              array (
                'name' => 'territory_id_c',
                'label' => 'LBL_TERRITORY_ID',
              ),
              16 => 
              array (
                'name' => 'bhea_member_levels_opportunities_1_name',
                'label' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
              ),
              17 => 
              array (
                'name' => 'membership_fee_c',
                'label' => 'LBL_MEMBERSHIP_FEE',
              ),
              18 => 
              array (
                'name' => 'discount_c',
                'label' => 'LBL_DISCOUNT',
              ),
              19 => 
              array (
                'name' => 'final_membership_fee_c',
                'label' => 'LBL_FINAL_MEMBERSHIP_FEE',
              ),
              20 => 
              array (
                'name' => 'budget_amt_c',
                'label' => 'LBL_BUDGET_AMT',
              ),
              21 => 
              array (
                'name' => 'amount_usdollar',
                'comment' => 'Formatted amount of the opportunity',
                'studio' => 
                array (
                  'wirelesslistview' => false,
                  'wirelesseditview' => false,
                  'wirelessdetailview' => false,
                  'wireless_basic_search' => false,
                  'wireless_advanced_search' => false,
                  'editview' => false,
                  'detailview' => false,
                  'quickcreate' => false,
                  'mobile' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_AMOUNT_USDOLLAR',
              ),
              22 => 
              array (
                'name' => 'sales_stage',
                'required' => true,
              ),
              23 => 'probability',
              24 => 
              array (
                'name' => 'date_closed',
                'related_fields' => 
                array (
                  0 => 'date_closed_timestamp',
                ),
              ),
              25 => 
              array (
                'name' => 'actual_close_date_c',
                'label' => 'LBL_ACTUAL_CLOSE_DATE',
              ),
              26 => 
              array (
                'name' => 'next_step',
                'span' => 6,
              ),
              27 => 
              array (
                'span' => 6,
              ),
              28 => 
              array (
                'name' => 'description',
              ),
              29 => 
              array (
                'name' => 'lost_reason_c',
                'studio' => 'visible',
                'label' => 'LBL_LOST_REASON',
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'hide' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'columns' => 2,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'amount',
                'type' => 'currency',
                'label' => 'LBL_LIKELY',
                'related_fields' => 
                array (
                  0 => 'amount',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'required' => true,
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              1 => 
              array (
                'name' => 'best_case',
                'type' => 'currency',
                'label' => 'LBL_BEST',
                'related_fields' => 
                array (
                  0 => 'best_case',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              2 => 
              array (
                'name' => 'worst_case',
                'type' => 'currency',
                'label' => 'LBL_WORST',
                'related_fields' => 
                array (
                  0 => 'worst_case',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              3 => 
              array (
                'name' => 'commit_stage',
                'comment' => 'Forecast commit ranges: Include, Likely, Omit etc.',
                'label' => 'LBL_COMMIT_STAGE',
              ),
              4 => 'campaign_name',
              5 => 'lead_source',
              6 => 'assigned_user_name',
              7 => 'team_name',
              8 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              9 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
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
            'LBL_RECORD_SHOWMORE' => 
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
