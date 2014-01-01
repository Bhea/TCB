<?php
// created: 2013-12-09 20:02:45
$dictionary["Opportunity"]["fields"]["opportunities_bhea_registrants_1"] = array (
  'name' => 'opportunities_bhea_registrants_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_registrants_1',
  'source' => 'non-db',
  'module' => 'Bhea_Registrants',
  'bean_name' => 'Bhea_Registrants',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_REGISTRANTS_1_FROM_BHEA_REGISTRANTS_TITLE',
  'id_name' => 'opportunities_bhea_registrants_1bhea_registrants_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_registrants_1_name"] = array (
  'name' => 'opportunities_bhea_registrants_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_REGISTRANTS_1_FROM_BHEA_REGISTRANTS_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_registrants_1bhea_registrants_idb',
  'link' => 'opportunities_bhea_registrants_1',
  'table' => 'bhea_registrants',
  'module' => 'Bhea_Registrants',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_registrants_1bhea_registrants_idb"] = array (
  'name' => 'opportunities_bhea_registrants_1bhea_registrants_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_REGISTRANTS_1_FROM_LBL_OPPORTUNITIES_BHEA_REGISTRANTS_1_FROM_BHEA_REGISTRANTS_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_registrants_1bhea_registrants_idb',
  'link' => 'opportunities_bhea_registrants_1',
  'table' => 'bhea_registrants',
  'module' => 'Bhea_Registrants',
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
