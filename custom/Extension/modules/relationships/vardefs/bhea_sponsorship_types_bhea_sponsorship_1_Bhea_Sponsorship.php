<?php
// created: 2013-12-18 17:49:16
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsorship_types_bhea_sponsorship_1"] = array (
  'name' => 'bhea_sponsorship_types_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsorship_types_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'bhea_Sponsorship_Types',
  'bean_name' => 'bhea_Sponsorship_Types',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'bhea_sponsd4cdp_types_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsorship_types_bhea_sponsorship_1_name"] = array (
  'name' => 'bhea_sponsorship_types_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsd4cdp_types_ida',
  'link' => 'bhea_sponsorship_types_bhea_sponsorship_1',
  'table' => 'bhea_sponsorship_types',
  'module' => 'bhea_Sponsorship_Types',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsd4cdp_types_ida"] = array (
  'name' => 'bhea_sponsd4cdp_types_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE_TITLE',
  'id_name' => 'bhea_sponsd4cdp_types_ida',
  'link' => 'bhea_sponsorship_types_bhea_sponsorship_1',
  'table' => 'bhea_sponsorship_types',
  'module' => 'bhea_Sponsorship_Types',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
