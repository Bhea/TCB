<?php
// created: 2013-12-13 08:43:23
$dictionary["Bhea_Events"]["fields"]["tasks_bhea_events_1"] = array (
  'name' => 'tasks_bhea_events_1',
  'type' => 'link',
  'relationship' => 'tasks_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Tasks',
  'bean_name' => 'Task',
  'vname' => 'LBL_TASKS_BHEA_EVENTS_1_FROM_TASKS_TITLE',
  'id_name' => 'tasks_bhea_events_1tasks_ida',
);
$dictionary["Bhea_Events"]["fields"]["tasks_bhea_events_1_name"] = array (
  'name' => 'tasks_bhea_events_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_BHEA_EVENTS_1_FROM_TASKS_TITLE',
  'save' => true,
  'id_name' => 'tasks_bhea_events_1tasks_ida',
  'link' => 'tasks_bhea_events_1',
  'table' => 'tasks',
  'module' => 'Tasks',
  'rname' => 'name',
);
$dictionary["Bhea_Events"]["fields"]["tasks_bhea_events_1tasks_ida"] = array (
  'name' => 'tasks_bhea_events_1tasks_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_TASKS_BHEA_EVENTS_1_FROM_LBL_TASKS_BHEA_EVENTS_1_FROM_TASKS_TITLE_TITLE',
  'id_name' => 'tasks_bhea_events_1tasks_ida',
  'link' => 'tasks_bhea_events_1',
  'table' => 'tasks',
  'module' => 'Tasks',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
