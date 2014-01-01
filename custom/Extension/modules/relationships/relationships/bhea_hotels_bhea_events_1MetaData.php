<?php
// created: 2013-12-04 09:54:49
$dictionary["bhea_hotels_bhea_events_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_hotels_bhea_events_1' => 
    array (
      'lhs_module' => 'Bhea_Hotels',
      'lhs_table' => 'bhea_hotels',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Events',
      'rhs_table' => 'bhea_events',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_hotels_bhea_events_1_c',
      'join_key_lhs' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
      'join_key_rhs' => 'bhea_hotels_bhea_events_1bhea_events_idb',
    ),
  ),
  'table' => 'bhea_hotels_bhea_events_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_hotels_bhea_events_1bhea_events_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_hotels_bhea_events_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_hotels_bhea_events_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_hotels_bhea_events_1bhea_hotels_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_hotels_bhea_events_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_hotels_bhea_events_1bhea_events_idb',
      ),
    ),
  ),
);