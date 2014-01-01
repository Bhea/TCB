<?php
// created: 2013-12-13 09:44:03
$dictionary["bhea_sessions_opportunities_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_sessions_opportunities_1' => 
    array (
      'lhs_module' => 'Bhea_Sessions',
      'lhs_table' => 'bhea_sessions',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_sessions_opportunities_1_c',
      'join_key_lhs' => 'bhea_sessions_opportunities_1bhea_sessions_ida',
      'join_key_rhs' => 'bhea_sessions_opportunities_1opportunities_idb',
    ),
  ),
  'table' => 'bhea_sessions_opportunities_1_c',
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
      'name' => 'bhea_sessions_opportunities_1bhea_sessions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_sessions_opportunities_1opportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_sessions_opportunities_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_sessions_opportunities_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_sessions_opportunities_1bhea_sessions_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_sessions_opportunities_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_sessions_opportunities_1opportunities_idb',
      ),
    ),
  ),
);