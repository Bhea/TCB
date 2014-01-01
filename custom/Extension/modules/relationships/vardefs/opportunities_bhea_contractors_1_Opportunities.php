<?php
// created: 2013-12-09 20:04:33
$dictionary["Opportunity"]["fields"]["opportunities_bhea_contractors_1"] = array (
  'name' => 'opportunities_bhea_contractors_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_contractors_1',
  'source' => 'non-db',
  'module' => 'Bhea_Contractors',
  'bean_name' => 'Bhea_Contractors',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_CONTRACTORS_1_FROM_BHEA_CONTRACTORS_TITLE',
  'id_name' => 'opportunities_bhea_contractors_1bhea_contractors_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_contractors_1_name"] = array (
  'name' => 'opportunities_bhea_contractors_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_CONTRACTORS_1_FROM_BHEA_CONTRACTORS_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_contractors_1bhea_contractors_idb',
  'link' => 'opportunities_bhea_contractors_1',
  'table' => 'bhea_contractors',
  'module' => 'Bhea_Contractors',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_contractors_1bhea_contractors_idb"] = array (
  'name' => 'opportunities_bhea_contractors_1bhea_contractors_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_CONTRACTORS_1_FROM_LBL_OPPORTUNITIES_BHEA_CONTRACTORS_1_FROM_BHEA_CONTRACTORS_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_contractors_1bhea_contractors_idb',
  'link' => 'opportunities_bhea_contractors_1',
  'table' => 'bhea_contractors',
  'module' => 'Bhea_Contractors',
  'rname' => 'id',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
