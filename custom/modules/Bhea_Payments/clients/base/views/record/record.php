<?php
$module_name = 'Bhea_Payments';
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
                'name' => 'bhea_orders_bhea_payments_1_name',
                'label' => 'LBL_BHEA_ORDERS_BHEA_PAYMENTS_1_FROM_BHEA_ORDERS_TITLE',
              ),
              1 => 
              array (
                'name' => 'bhea_invoices_bhea_payments_1_name',
                'label' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_INVOICES_TITLE',
              ),
              2 => 
              array (
                'name' => 'bhea_memberships_bhea_payments_1_name',
                'label' => 'LBL_BHEA_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
              ),
              3 => 
              array (
                'name' => 'bhea_council_memberships_bhea_payments_1_name',
                'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
              ),
              4 => 
              array (
                'name' => 'accounts_bhea_payments_1_name',
                'label' => 'LBL_ACCOUNTS_BHEA_PAYMENTS_1_FROM_ACCOUNTS_TITLE',
              ),
              5 => 
              array (
                'name' => 'payment_mode',
                'studio' => 'visible',
                'label' => 'LBL_PAYMENT_MODE',
              ),
              6 => 
              array (
                'name' => 'payment_status',
                'studio' => 'visible',
                'label' => 'LBL_PAYMENT_STATUS',
              ),
              7 => 
              array (
                'name' => 'payment_date',
                'label' => 'LBL_PAYMENT_DATE',
              ),
              8 => 
              array (
                'name' => 'currency',
                'label' => 'LBL_CURRENCY',
                'span' => 6,
              ),
              9 => 
              array (
                'span' => 6,
              ),
              10 => 
              array (
                'name' => 'bank_name_c',
                'label' => 'LBL_BANK_NAME',
              ),
              11 => 
              array (
                'name' => 'branch_name_c',
                'label' => 'LBL_BRANCH_NAME',
              ),
              12 => 
              array (
                'name' => 'check_dd_transaction_date_c',
                'label' => 'LBL_CHECK_DD_TRANSACTION_DATE',
              ),
              13 => 
              array (
                'name' => 'check_dd_transaction_nono_c',
                'label' => 'LBL_CHECK_DD_TRANSACTION_NONO',
              ),
              14 => 
              array (
                'name' => 'remarks_c',
                'studio' => 'visible',
                'label' => 'LBL_REMARKS',
              ),
              15 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'studio' => 'visible',
                'label' => 'LBL_DESCRIPTION',
              ),
              16 => 
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
              17 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
              18 => 
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
              19 => 
              array (
                'name' => 'modified_by_name',
                'readonly' => true,
                'label' => 'LBL_MODIFIED_NAME',
              ),
              20 => 'assigned_user_name',
              21 => 'team_name',
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
