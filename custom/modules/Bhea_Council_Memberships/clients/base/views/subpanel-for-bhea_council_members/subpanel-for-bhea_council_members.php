<?php
// created: 2013-12-17 13:58:04
$viewdefs['Bhea_Council_Memberships']['base']['view']['subpanel-for-bhea_council_members'] = array (
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
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
        ),
        1 => 
        array (
          'name' => 'accounts_bhea_council_memberships_1_name',
          'label' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
          'enabled' => true,
          'id' => 'ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1ACCOUNTS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'bhea_councils_bhea_council_memberships_1_name',
          'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1BHEA_COUNCILS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'membership_type',
          'label' => 'LBL_MEMBERSHIP_TYPE ',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'final_membership_fee_c',
          'label' => 'LBL_FINAL_MEMBERSHIP_FEE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'amount_paid_c',
          'label' => 'LBL_AMOUNT_PAID',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'start_date',
          'label' => 'LBL_START_DATE ',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);