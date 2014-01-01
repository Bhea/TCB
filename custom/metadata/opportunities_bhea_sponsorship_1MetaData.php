<?php
// created: 2013-12-24 18:14:54
$dictionary["opportunities_bhea_sponsorship_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_bhea_sponsorship_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Sponsorship',
      'rhs_table' => 'bhea_sponsorship',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_bhea_sponsorship_1_c',
      'join_key_lhs' => 'opportunities_bhea_sponsorship_1opportunities_ida',
      'join_key_rhs' => 'opportunities_bhea_sponsorship_1bhea_sponsorship_idb',
    ),
  ),
  'table' => 'opportunities_bhea_sponsorship_1_c',
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
      'name' => 'opportunities_bhea_sponsorship_1opportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunities_bhea_sponsorship_1bhea_sponsorship_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_bhea_sponsorship_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_bhea_sponsorship_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_bhea_sponsorship_1opportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'opportunities_bhea_sponsorship_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_bhea_sponsorship_1bhea_sponsorship_idb',
      ),
    ),
  ),
);