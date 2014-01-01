<?php
// created: 2013-12-18 17:37:13
$dictionary["bhea_sponsorship_bhea_sponsorship_types_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_sponsorship_bhea_sponsorship_types_1' => 
    array (
      'lhs_module' => 'Bhea_Sponsorship',
      'lhs_table' => 'bhea_sponsorship',
      'lhs_key' => 'id',
      'rhs_module' => 'bhea_Sponsorship_Types',
      'rhs_table' => 'bhea_sponsorship_types',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_sponsorship_bhea_sponsorship_types_1_c',
      'join_key_lhs' => 'bhea_sponsorship_bhea_sponsorship_types_1bhea_sponsorship_ida',
      'join_key_rhs' => 'bhea_spons76d5p_types_idb',
    ),
  ),
  'table' => 'bhea_sponsorship_bhea_sponsorship_types_1_c',
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
      'name' => 'bhea_sponsorship_bhea_sponsorship_types_1bhea_sponsorship_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_spons76d5p_types_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_sponsorship_bhea_sponsorship_types_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_sponsorship_bhea_sponsorship_types_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_sponsorship_bhea_sponsorship_types_1bhea_sponsorship_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_sponsorship_bhea_sponsorship_types_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_spons76d5p_types_idb',
      ),
    ),
  ),
);