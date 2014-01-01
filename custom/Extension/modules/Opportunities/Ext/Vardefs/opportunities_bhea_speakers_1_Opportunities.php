<?php
// created: 2013-12-25 09:31:02
$dictionary["Opportunity"]["fields"]["opportunities_bhea_speakers_1"] = array (
  'name' => 'opportunities_bhea_speakers_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_speakers_1',
  'source' => 'non-db',
  'module' => 'Bhea_Speakers',
  'bean_name' => 'Bhea_Speakers',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_BHEA_SPEAKERS_TITLE',
  'id_name' => 'opportunities_bhea_speakers_1bhea_speakers_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_speakers_1_name"] = array (
  'name' => 'opportunities_bhea_speakers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_BHEA_SPEAKERS_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_speakers_1bhea_speakers_idb',
  'link' => 'opportunities_bhea_speakers_1',
  'table' => 'bhea_speakers',
  'module' => 'Bhea_Speakers',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_speakers_1bhea_speakers_idb"] = array (
  'name' => 'opportunities_bhea_speakers_1bhea_speakers_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_BHEA_SPEAKERS_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_speakers_1bhea_speakers_idb',
  'link' => 'opportunities_bhea_speakers_1',
  'table' => 'bhea_speakers',
  'module' => 'Bhea_Speakers',
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
