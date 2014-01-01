<?php
// created: 2013-12-09 19:01:27
$dictionary["Contract"]["fields"]["bhea_contractors_contracts_1"] = array (
  'name' => 'bhea_contractors_contracts_1',
  'type' => 'link',
  'relationship' => 'bhea_contractors_contracts_1',
  'source' => 'non-db',
  'module' => 'Bhea_Contractors',
  'bean_name' => 'Bhea_Contractors',
  'side' => 'right',
  'vname' => 'LBL_BHEA_CONTRACTORS_CONTRACTS_1_FROM_CONTRACTS_TITLE',
  'id_name' => 'bhea_contractors_contracts_1bhea_contractors_ida',
  'link-type' => 'one',
);
$dictionary["Contract"]["fields"]["bhea_contractors_contracts_1_name"] = array (
  'name' => 'bhea_contractors_contracts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_CONTRACTORS_CONTRACTS_1_FROM_BHEA_CONTRACTORS_TITLE',
  'save' => true,
  'id_name' => 'bhea_contractors_contracts_1bhea_contractors_ida',
  'link' => 'bhea_contractors_contracts_1',
  'table' => 'bhea_contractors',
  'module' => 'Bhea_Contractors',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Contract"]["fields"]["bhea_contractors_contracts_1bhea_contractors_ida"] = array (
  'name' => 'bhea_contractors_contracts_1bhea_contractors_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_CONTRACTORS_CONTRACTS_1_FROM_LBL_BHEA_CONTRACTORS_CONTRACTS_1_FROM_CONTRACTS_TITLE_TITLE',
  'id_name' => 'bhea_contractors_contracts_1bhea_contractors_ida',
  'link' => 'bhea_contractors_contracts_1',
  'table' => 'bhea_contractors',
  'module' => 'Bhea_Contractors',
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
