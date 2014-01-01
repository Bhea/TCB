<?php
// created: 2013-12-18 17:37:13
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sponsorship_bhea_sponsorship_types_1"] = array (
  'name' => 'bhea_sponsorship_bhea_sponsorship_types_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsorship_bhea_sponsorship_types_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsorship',
  'bean_name' => 'Bhea_Sponsorship',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'id_name' => 'bhea_sponsorship_bhea_sponsorship_types_1bhea_sponsorship_ida',
  'link-type' => 'one',
);
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sponsorship_bhea_sponsorship_types_1_name"] = array (
  'name' => 'bhea_sponsorship_bhea_sponsorship_types_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsorship_bhea_sponsorship_types_1bhea_sponsorship_ida',
  'link' => 'bhea_sponsorship_bhea_sponsorship_types_1',
  'table' => 'bhea_sponsorship',
  'module' => 'Bhea_Sponsorship',
  'rname' => 'name',
);
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sponsorship_bhea_sponsorship_types_1bhea_sponsorship_ida"] = array (
  'name' => 'bhea_sponsorship_bhea_sponsorship_types_1bhea_sponsorship_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_BHEA_SPONSORSHIP_TYPES_1_FROM_LBL_BHEA_SPONSORSHIP_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE_TITLE',
  'id_name' => 'bhea_sponsorship_bhea_sponsorship_types_1bhea_sponsorship_ida',
  'link' => 'bhea_sponsorship_bhea_sponsorship_types_1',
  'table' => 'bhea_sponsorship',
  'module' => 'Bhea_Sponsorship',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
