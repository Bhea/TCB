<?php
// created: 2013-12-21 10:49:16
$viewdefs['Bhea_Council_Memberships']['base']['view']['subpanel-for-accounts'] = array (
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
          'name' => 'bhea_councils_bhea_council_memberships_1_name',
          'label' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1BHEA_COUNCILS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'bhea_council_members_bhea_council_memberships_1_name',
          'label' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
          'enabled' => true,
          'id' => 'BHEA_COUNC8EE0MEMBERS_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'final_membership_fee_c',
          'label' => 'LBL_FINAL_MEMBERSHIP_FEE',
          'enabled' => true,
          'currency_format' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'membership_type',
          'label' => 'LBL_MEMBERSHIP_TYPE ',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
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