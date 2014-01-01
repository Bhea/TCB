<?php
// created: 2013-12-23 17:38:14
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsor_1"] = array (
  'name' => 'opportunities_bhea_sponsor_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_sponsor_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsor',
  'bean_name' => 'Bhea_Sponsor',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE',
  'id_name' => 'opportunities_bhea_sponsor_1bhea_sponsor_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsor_1_name"] = array (
  'name' => 'opportunities_bhea_sponsor_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_sponsor_1bhea_sponsor_idb',
  'link' => 'opportunities_bhea_sponsor_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsor_1bhea_sponsor_idb"] = array (
  'name' => 'opportunities_bhea_sponsor_1bhea_sponsor_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_sponsor_1bhea_sponsor_idb',
  'link' => 'opportunities_bhea_sponsor_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
