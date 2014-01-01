<?php
// created: 2013-12-24 18:14:54
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsorship_1"] = array (
  'name' => 'opportunities_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsorship',
  'bean_name' => 'Bhea_Sponsorship',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'opportunities_bhea_sponsorship_1bhea_sponsorship_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsorship_1_name"] = array (
  'name' => 'opportunities_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_sponsorship_1bhea_sponsorship_idb',
  'link' => 'opportunities_bhea_sponsorship_1',
  'table' => 'bhea_sponsorship',
  'module' => 'Bhea_Sponsorship',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsorship_1bhea_sponsorship_idb"] = array (
  'name' => 'opportunities_bhea_sponsorship_1bhea_sponsorship_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_sponsorship_1bhea_sponsorship_idb',
  'link' => 'opportunities_bhea_sponsorship_1',
  'table' => 'bhea_sponsorship',
  'module' => 'Bhea_Sponsorship',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
