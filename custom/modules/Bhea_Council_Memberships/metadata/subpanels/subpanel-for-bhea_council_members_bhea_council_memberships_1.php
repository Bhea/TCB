<?php
// created: 2013-12-17 13:58:04
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'accounts_bhea_council_memberships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1ACCOUNTS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'accounts_bhea_council_memberships_1accounts_ida',
  ),
  'bhea_councils_bhea_council_memberships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
    'id' => 'BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1BHEA_COUNCILS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_Councils',
    'target_record_key' => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
  ),
  'membership_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_MEMBERSHIP_TYPE ',
    'width' => '10%',
  ),
  'final_membership_fee_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_FINAL_MEMBERSHIP_FEE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'amount_paid_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_AMOUNT_PAID',
    'currency_format' => true,
    'width' => '10%',
  ),
  'start_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_START_DATE ',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);