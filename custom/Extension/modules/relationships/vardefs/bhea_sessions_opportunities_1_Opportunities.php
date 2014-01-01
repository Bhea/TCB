<?php
// created: 2013-12-13 09:44:03
$dictionary["Opportunity"]["fields"]["bhea_sessions_opportunities_1"] = array (
  'name' => 'bhea_sessions_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_opportunities_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SESSIONS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'bhea_sessions_opportunities_1bhea_sessions_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["bhea_sessions_opportunities_1_name"] = array (
  'name' => 'bhea_sessions_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_OPPORTUNITIES_1_FROM_BHEA_SESSIONS_TITLE',
  'save' => true,
  'id_name' => 'bhea_sessions_opportunities_1bhea_sessions_ida',
  'link' => 'bhea_sessions_opportunities_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["bhea_sessions_opportunities_1bhea_sessions_ida"] = array (
  'name' => 'bhea_sessions_opportunities_1bhea_sessions_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SESSIONS_OPPORTUNITIES_1_FROM_LBL_BHEA_SESSIONS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'bhea_sessions_opportunities_1bhea_sessions_ida',
  'link' => 'bhea_sessions_opportunities_1',
  'table' => 'bhea_sessions',
  'module' => 'Bhea_Sessions',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
