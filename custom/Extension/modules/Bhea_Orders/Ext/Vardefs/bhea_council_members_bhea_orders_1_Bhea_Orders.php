<?php
// created: 2013-12-13 10:34:26
$dictionary["Bhea_Orders"]["fields"]["bhea_council_members_bhea_orders_1"] = array (
  'name' => 'bhea_council_members_bhea_orders_1',
  'type' => 'link',
  'relationship' => 'bhea_council_members_bhea_orders_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Members',
  'bean_name' => 'Bhea_Council_Members',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE',
  'id_name' => 'bhea_council_members_bhea_orders_1bhea_council_members_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Orders"]["fields"]["bhea_council_members_bhea_orders_1_name"] = array (
  'name' => 'bhea_council_members_bhea_orders_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_ORDERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'save' => true,
  'id_name' => 'bhea_council_members_bhea_orders_1bhea_council_members_ida',
  'link' => 'bhea_council_members_bhea_orders_1',
  'table' => 'bhea_council_members',
  'module' => 'Bhea_Council_Members',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Bhea_Orders"]["fields"]["bhea_council_members_bhea_orders_1bhea_council_members_ida"] = array (
  'name' => 'bhea_council_members_bhea_orders_1bhea_council_members_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_ORDERS_1_FROM_LBL_BHEA_COUNCIL_MEMBERS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE_TITLE',
  'id_name' => 'bhea_council_members_bhea_orders_1bhea_council_members_ida',
  'link' => 'bhea_council_members_bhea_orders_1',
  'table' => 'bhea_council_members',
  'module' => 'Bhea_Council_Members',
  'rname' => 'id',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
