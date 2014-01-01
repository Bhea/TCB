<?php
$viewdefs['Accounts'] = 
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
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'width' => '20%',
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'company_id_c',
                'label' => 'LBL_COMPANY_ID',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'account_type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'company_category_c',
                'label' => 'LBL_COMPANY_CATEGORY',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'territory_id_c',
                'label' => 'LBL_TERRITORY_ID',
                'enabled' => true,
                'width' => '10%',
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'phone_office',
                'width' => '10%',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'billing_address_city',
                'width' => '13%',
                'label' => 'LBL_LIST_CITY',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'email',
                'width' => '15%',
                'label' => 'LBL_EMAIL_ADDRESS',
                'sortable' => false,
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'assigned_user_name',
                'width' => '10%',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'sortable' => false,
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'width' => '13%',
                'default' => false,
                'readonly' => true,
              ),
              10 => 
              array (
                'name' => 'linkedin',
                'label' => 'LBL_LINKEDIN',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'mem_end_date_c',
                'label' => 'LBL_MEM_END_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'le_phone_c',
                'label' => 'LBL_LE_PHONE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'no_of_emp_c',
                'label' => 'LBL_NO_OF_EMP',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'annual_revenue',
                'label' => 'LBL_ANNUAL_REVENUE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'classification_c',
                'label' => 'LBL_CLASSIFICATION',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'le_email_c',
                'label' => 'LBL_LE_EMAIL',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'global_rating_c',
                'label' => 'LBL_GLOBAL_RATING',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              18 => 
              array (
                'name' => 'forbes_rating_c',
                'label' => 'LBL_FORBES_RATING',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              19 => 
              array (
                'name' => 'le_name_c',
                'label' => 'LBL_LE_NAME',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              20 => 
              array (
                'name' => 'mem_status_c',
                'label' => 'LBL_MEM_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              21 => 
              array (
                'name' => 'mem_start_date_c',
                'label' => 'LBL_MEM_START_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              22 => 
              array (
                'name' => 'renewal_date_c',
                'label' => 'LBL_RENEWAL_DATE',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              23 => 
              array (
                'name' => 'prod_serv_c',
                'label' => 'LBL_PROD_SERV',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              24 => 
              array (
                'name' => 'subs_amt_c',
                'label' => 'LBL_SUBS_AMT',
                'enabled' => true,
                'currency_format' => true,
                'width' => '10%',
                'default' => false,
              ),
              25 => 
              array (
                'name' => 'company_alias_c',
                'label' => 'LBL_COMPANY_ALIAS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              26 => 
              array (
                'name' => 'usage_overview_c',
                'label' => 'LBL_USAGE_OVERVIEW',
                'enabled' => true,
                'sortable' => false,
                'width' => '10%',
                'default' => false,
              ),
              27 => 
              array (
                'name' => 'billing_address_country',
                'width' => '13%',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              28 => 
              array (
                'name' => 'legal_status_c',
                'label' => 'LBL_LEGAL_STATUS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              29 => 
              array (
                'name' => 'googleplus',
                'label' => 'LBL_GOOGLEPLUS',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
              30 => 
              array (
                'name' => 'facebook',
                'label' => 'LBL_FACEBOOK',
                'enabled' => true,
                'width' => '10%',
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
