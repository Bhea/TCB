<?php
// created: 2013-12-13 08:43:23
$dictionary["Task"]["fields"]["tasks_bhea_events_1"] = array (
  'name' => 'tasks_bhea_events_1',
  'type' => 'link',
  'relationship' => 'tasks_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'vname' => 'LBL_TASKS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'tasks_bhea_events_1bhea_events_idb',
);
$dictionary["Task"]["fields"]["tasks_bhea_events_1_name"] = array (
  'name' => 'tasks_bhea_events_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'tasks_bhea_events_1bhea_events_idb',
  'link' => 'tasks_bhea_events_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["tasks_bhea_events_1bhea_events_idb"] = array (
  'name' => 'tasks_bhea_events_1bhea_events_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_BHEA_EVENTS_1_FROM_LBL_TASKS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE_TITLE',
  'id_name' => 'tasks_bhea_events_1bhea_events_idb',
  'link' => 'tasks_bhea_events_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
