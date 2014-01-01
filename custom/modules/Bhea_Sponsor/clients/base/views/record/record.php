<?php
$module_name = 'Bhea_Sponsor';
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
                'name' => 'logo',
                'studio' => 'visible',
                'label' => 'LBL_LOGO',
                'span' => 6,
              ),
              1 => 
              array (
                'span' => 6,
              ),
              2 => 
              array (
                'name' => 'status',
                'studio' => 'visible',
                'label' => 'LBL_STATUS',
              ),
              3 => 
              array (
                'name' => 'bhea_events_bhea_sponsor_1_name',
                'label' => 'LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_BHEA_EVENTS_TITLE',
              ),
              4 => 
              array (
                'name' => 'website_c',
                'label' => 'LBL_WEBSITE',
              ),
              5 => 
              array (
                'name' => 'fax_c',
                'label' => 'LBL_FAX',
              ),
              6 => 
              array (
                'name' => 'office_phone_c',
                'label' => 'LBL_OFFICE_PHONE',
              ),
              7 => 
              array (
                'name' => 'other_phone_c',
                'label' => 'LBL_OTHER_PHONE',
              ),
              8 => 
              array (
                'name' => 'billing_address_street_c',
                'label' => 'LBL_BILLING_ADDRESS_STREET',
              ),
              9 => 
              array (
                'name' => 'shipping_address_street_c',
                'label' => 'LBL_SHIPPING_ADDRESS_STREET',
              ),
              10 => 
              array (
                'name' => 'billing_address_city_c',
                'label' => 'LBL_BILLING_ADDRESS_CITY',
              ),
              11 => 
              array (
                'name' => 'shipping_address_city_c',
                'label' => 'LBL_SHIPPING_ADDRESS_CITY',
              ),
              12 => 
              array (
                'name' => 'billing_address_state_c',
                'label' => 'LBL_BILLING_ADDRESS_STATE',
              ),
              13 => 
              array (
                'name' => 'shipping_address_state_c',
                'label' => 'LBL_SHIPPING_ADDRESS_STATE',
              ),
              14 => 
              array (
                'name' => 'billing_address_country_c',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
              ),
              15 => 
              array (
                'name' => 'shipping_address_country_c',
                'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
              ),
              16 => 
              array (
                'name' => 'billing_address_postalcode_c',
                'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
              ),
              17 => 
              array (
                'name' => 'shipping_address_postalcode_c',
                'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
              ),
              18 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'studio' => 'visible',
                'label' => 'LBL_DESCRIPTION',
              ),
              19 => 
              array (
                'name' => 'sponsorship_description',
                'studio' => 'visible',
                'label' => 'LBL_SPONSORSHIP_DESCRIPTION ',
              ),
              20 => 
              array (
                'name' => 'opportunities_bhea_sponsor_1_name',
                'label' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_OPPORTUNITIES_TITLE',
                'span' => 6,
              ),
              21 => 
              array (
                'span' => 6,
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
