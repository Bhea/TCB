<?php
// created: 2013-12-17 09:47:24
$dictionary["Bhea_Orders"]["fields"]["bhea_memberships_bhea_orders_1"] = array (
  'name' => 'bhea_memberships_bhea_orders_1',
  'type' => 'link',
  'relationship' => 'bhea_memberships_bhea_orders_1',
  'source' => 'non-db',
  'module' => 'Bhea_Memberships',
  'bean_name' => 'Bhea_Memberships',
  'side' => 'right',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE',
  'id_name' => 'bhea_memberships_bhea_orders_1bhea_memberships_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Orders"]["fields"]["bhea_memberships_bhea_orders_1_name"] = array (
  'name' => 'bhea_memberships_bhea_orders_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
  'save' => true,
  'id_name' => 'bhea_memberships_bhea_orders_1bhea_memberships_ida',
  'link' => 'bhea_memberships_bhea_orders_1',
  'table' => 'bhea_memberships',
  'module' => 'Bhea_Memberships',
  'rname' => 'name',
);
$dictionary["Bhea_Orders"]["fields"]["bhea_memberships_bhea_orders_1bhea_memberships_ida"] = array (
  'name' => 'bhea_memberships_bhea_orders_1bhea_memberships_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_BHEA_ORDERS_1_FROM_LBL_BHEA_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE_TITLE',
  'id_name' => 'bhea_memberships_bhea_orders_1bhea_memberships_ida',
  'link' => 'bhea_memberships_bhea_orders_1',
  'table' => 'bhea_memberships',
  'module' => 'Bhea_Memberships',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
