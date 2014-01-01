<?php
$module_name = 'Bhea_Orders';
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
                'name' => 'id_auto_c',
                'label' => 'LBL_ID_AUTO',
              ),
              1 => 
              array (
                'name' => 'order_date',
                'label' => 'LBL_ORDER_DATE',
              ),
              2 => 
              array (
                'name' => 'status',
                'studio' => 'visible',
                'label' => 'LBL_STATUS',
              ),
              3 => 
              array (
                'name' => 'type',
                'studio' => 'visible',
                'label' => 'LBL_TYPE',
              ),
              4 => 
              array (
                'name' => 'value',
                'label' => 'LBL_VALUE',
                'span' => 12,
              ),
              5 => 
              array (
                'name' => 'accounts_bhea_orders_1_name',
                'label' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_ACCOUNTS_TITLE',
              ),
              6 => 
              array (
                'name' => 'bhea_memberships_bhea_orders_1_name',
                'label' => 'LBL_BHEA_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
              ),
              7 => 
              array (
                'name' => 'bhea_council_members_bhea_orders_1_name',
                'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_ORDERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
              ),
              8 => 
              array (
                'name' => 'bhea_council_memberships_bhea_orders_1_name',
                'label' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
              ),
              9 => 
              array (
                'name' => 'payment_received',
                'label' => 'LBL_PAYMENT_RECEIVED',
              ),
              10 => 
              array (
                'name' => 'order_execution_date',
                'label' => 'LBL_ORDER_EXECUTION_DATE',
              ),
              11 => 
              array (
                'name' => 'bill_to_address',
                'label' => 'LBL_BILL_TO_ADDRESS',
              ),
              12 => 
              array (
                'name' => 'ship_to_address',
                'label' => 'LBL_SHIP_TO_ADDRESS',
              ),
              13 => 
              array (
                'name' => 'bill_to_address_city',
                'label' => 'LBL_BILL_TO_ADDRESS_CITY',
              ),
              14 => 
              array (
                'name' => 'ship_to_address_city',
                'label' => 'LBL_SHIP_TO_ADDRESS_CITY',
              ),
              15 => 
              array (
                'name' => 'bill_to_address_state',
                'label' => 'LBL_BILL_TO_ADDRESS_STATE',
              ),
              16 => 
              array (
                'name' => 'ship_to_address_state',
                'label' => 'LBL_SHIP_TO_ADDRESS_STATE',
              ),
              17 => 
              array (
                'name' => 'bill_to_address_country',
                'label' => 'LBL_BILL_TO_ADDRESS_COUNTRY',
              ),
              18 => 
              array (
                'name' => 'ship_to_address_country',
                'label' => 'LBL_SHIP_TO_ADDRESS_COUNTRY',
              ),
              19 => 
              array (
                'name' => 'bill_to_address_postalcode',
                'label' => 'LBL_BILL_TO_ADDRESS_POSTALCODE',
              ),
              20 => 
              array (
                'name' => 'ship_to_address_postalcode',
                'label' => 'LBL_SHIP_TO_ADDRESS_POSTALCODE',
              ),
              21 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'studio' => 'visible',
                'label' => 'LBL_DESCRIPTION',
                'span' => 12,
              ),
              22 => 
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
              23 => 
              array (
                'name' => 'created_by_name',
                'readonly' => true,
                'label' => 'LBL_CREATED',
              ),
              24 => 
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
              25 => 
              array (
                'name' => 'modified_by_name',
                'readonly' => true,
                'label' => 'LBL_MODIFIED_NAME',
              ),
              26 => 'assigned_user_name',
              27 => 'team_name',
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
