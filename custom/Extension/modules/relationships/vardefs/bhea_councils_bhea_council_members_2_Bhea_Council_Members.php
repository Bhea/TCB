<?php
// created: 2013-12-17 10:30:20
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_2"] = array (
  'name' => 'bhea_councils_bhea_council_members_2',
  'type' => 'link',
  'relationship' => 'bhea_councils_bhea_council_members_2',
  'source' => 'non-db',
  'module' => 'Bhea_Councils',
  'bean_name' => 'Bhea_Councils',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_2_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'id_name' => 'bhea_councils_bhea_council_members_2bhea_councils_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_2_name"] = array (
  'name' => 'bhea_councils_bhea_council_members_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_2_FROM_BHEA_COUNCILS_TITLE',
  'save' => true,
  'id_name' => 'bhea_councils_bhea_council_members_2bhea_councils_ida',
  'link' => 'bhea_councils_bhea_council_members_2',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'name',
);
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_2bhea_councils_ida"] = array (
  'name' => 'bhea_councils_bhea_council_members_2bhea_councils_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_2_FROM_LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_2_FROM_BHEA_COUNCIL_MEMBERS_TITLE_TITLE',
  'id_name' => 'bhea_councils_bhea_council_members_2bhea_councils_ida',
  'link' => 'bhea_councils_bhea_council_members_2',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
