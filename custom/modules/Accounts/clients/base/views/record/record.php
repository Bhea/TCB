<?php
$viewdefs['Accounts'] = 
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
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'company_id_c',
                'label' => 'LBL_COMPANY_ID',
              ),
              1 => 
              array (
                'name' => 'company_alias_c',
                'label' => 'LBL_COMPANY_ALIAS',
              ),
              2 => 
              array (
                'name' => 'company_category_c',
                'studio' => 'visible',
                'label' => 'LBL_COMPANY_CATEGORY',
              ),
              3 => 'website',
              4 => 'account_type',
              5 => 
              array (
                'name' => 'territory_id_c',
                'label' => 'LBL_TERRITORY_ID',
              ),
              6 => 
              array (
                'name' => 'legal_status_c',
                'studio' => 'visible',
                'label' => 'LBL_LEGAL_STATUS',
              ),
              7 => 
              array (
                'name' => 'classification_c',
                'studio' => 'visible',
                'label' => 'LBL_CLASSIFICATION',
              ),
              8 => 'phone_office',
              9 => 'email',
              10 => 
              array (
                'name' => 'le_name_c',
                'label' => 'LBL_LE_NAME',
              ),
              11 => 
              array (
                'name' => 'le_phone_c',
                'label' => 'LBL_LE_PHONE',
              ),
              12 => 
              array (
                'name' => 'le_email_c',
                'label' => 'LBL_LE_EMAIL',
                'span' => 6,
              ),
              13 => 
              array (
                'span' => 6,
              ),
              14 => 
              array (
                'name' => 'fieldset_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_BILLING_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'billing_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_BILLING_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'billing_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_BILLING_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'billing_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_BILLING_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'billing_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_BILLING_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'billing_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_BILLING_ADDRESS_COUNTRY',
                  ),
                ),
              ),
              15 => 
              array (
                'name' => 'fieldset_shipping_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_SHIPPING_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'shipping_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'shipping_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'shipping_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'shipping_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'shipping_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
                  ),
                  5 => 
                  array (
                    'name' => 'copy',
                    'label' => 'NTC_COPY_BILLING_ADDRESS',
                    'type' => 'copy',
                    'mapping' => 
                    array (
                      'billing_address_street' => 'shipping_address_street',
                      'billing_address_city' => 'shipping_address_city',
                      'billing_address_state' => 'shipping_address_state',
                      'billing_address_postalcode' => 'shipping_address_postalcode',
                      'billing_address_country' => 'shipping_address_country',
                    ),
                  ),
                ),
              ),
              16 => 
              array (
                'name' => 'description',
              ),
              17 => 
              array (
                'name' => 'renewal_date_c',
                'label' => 'LBL_RENEWAL_DATE',
              ),
              18 => 
              array (
                'name' => 'mem_status_c',
                'studio' => 'visible',
                'label' => 'LBL_MEM_STATUS',
              ),
              19 => 
              array (
                'name' => 'subs_amt_c',
                'label' => 'LBL_SUBS_AMT',
              ),
              20 => 
              array (
                'name' => 'mem_start_date_c',
                'label' => 'LBL_MEM_START_DATE',
              ),
              21 => 
              array (
                'name' => 'mem_end_date_c',
                'label' => 'LBL_MEM_END_DATE',
              ),
              22 => 
              array (
                'name' => 'request_quit_c',
                'label' => 'LBL_REQUEST_QUIT',
              ),
              23 => 
              array (
                'name' => 'quit_date_c',
                'label' => 'LBL_QUIT_DATE',
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 'assigned_user_name',
              1 => 'team_name',
              2 => 'phone_fax',
              3 => 
              array (
                'name' => 'other_phone_1_c',
                'label' => 'LBL_OTHER_PHONE_1',
              ),
              4 => 'twitter',
              5 => 
              array (
                'name' => 'vat_number_c',
                'label' => 'LBL_VAT_NUMBER',
              ),
              6 => 
              array (
                'name' => 'fiscal_end_c',
                'label' => 'LBL_FISCAL_END',
              ),
              7 => 'ownership',
              8 => 'rating',
              9 => 'parent_name',
              10 => 
              array (
                'name' => 'industry',
                'span' => 6,
              ),
              11 => 
              array (
                'span' => 6,
              ),
              12 => 'ticker_symbol',
              13 => 
              array (
                'name' => 'duns_c',
                'label' => 'LBL_DUNS',
              ),
              14 => 'annual_revenue',
              15 => 'employees',
              16 => 
              array (
                'name' => 'global_rating_c',
                'label' => 'LBL_GLOBAL_RATING',
              ),
              17 => 
              array (
                'name' => 'forbes_rating_c',
                'label' => 'LBL_FORBES_RATING',
              ),
              18 => 'campaign_name',
              19 => 
              array (
                'name' => 'facebook',
                'comment' => 'The facebook name of the company',
                'label' => 'LBL_FACEBOOK',
              ),
              20 => 
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
              21 => 
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
              22 => 
              array (
                'name' => 'linkedin',
                'comment' => 'The linkedin name of the company',
                'label' => 'LBL_LINKEDIN',
              ),
              23 => 
              array (
                'name' => 'googleplus',
                'comment' => 'The Google Plus name of the company',
                'label' => 'LBL_GOOGLEPLUS',
              ),
              24 => 'sic_code',
              25 => 
              array (
                'name' => 'last_fiscal_c',
                'label' => 'LBL_LAST_FISCAL',
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
