<?php
// created: 2013-12-18 16:40:28
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sponsor_bhea_sponsorship_types_1"] = array (
  'name' => 'bhea_sponsor_bhea_sponsorship_types_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsor_bhea_sponsorship_types_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsor',
  'bean_name' => 'Bhea_Sponsor',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sponsorship_types_1bhea_sponsor_ida',
  'link-type' => 'one',
);
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sponsor_bhea_sponsorship_types_1_name"] = array (
  'name' => 'bhea_sponsor_bhea_sponsorship_types_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSOR_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsor_bhea_sponsorship_types_1bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sponsorship_types_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'name',
);
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sponsor_bhea_sponsorship_types_1bhea_sponsor_ida"] = array (
  'name' => 'bhea_sponsor_bhea_sponsorship_types_1bhea_sponsor_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_TYPES_1_FROM_LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sponsorship_types_1bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sponsorship_types_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
