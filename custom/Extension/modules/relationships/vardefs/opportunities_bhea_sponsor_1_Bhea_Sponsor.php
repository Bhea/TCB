<?php
// created: 2013-12-23 17:38:14
$dictionary["Bhea_Sponsor"]["fields"]["opportunities_bhea_sponsor_1"] = array (
  'name' => 'opportunities_bhea_sponsor_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_sponsor_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_bhea_sponsor_1opportunities_ida',
);
$dictionary["Bhea_Sponsor"]["fields"]["opportunities_bhea_sponsor_1_name"] = array (
  'name' => 'opportunities_bhea_sponsor_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_sponsor_1opportunities_ida',
  'link' => 'opportunities_bhea_sponsor_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsor"]["fields"]["opportunities_bhea_sponsor_1opportunities_ida"] = array (
  'name' => 'opportunities_bhea_sponsor_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_sponsor_1opportunities_ida',
  'link' => 'opportunities_bhea_sponsor_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
