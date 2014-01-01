<?php
// created: 2013-12-16 09:48:20
$dictionary["bhea_pricing_line_item_bhea_member_levels_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_pricing_line_item_bhea_member_levels_1' => 
    array (
      'lhs_module' => 'Bhea_Pricing_Line_Item',
      'lhs_table' => 'bhea_pricing_line_item',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_member_levels',
      'rhs_table' => 'bhea_member_levels',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_pricing_line_item_bhea_member_levels_1_c',
      'join_key_lhs' => 'bhea_prici08a9ne_item_ida',
      'join_key_rhs' => 'bhea_pricia640_levels_idb',
    ),
  ),
  'table' => 'bhea_pricing_line_item_bhea_member_levels_1_c',
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
      'name' => 'bhea_prici08a9ne_item_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_pricia640_levels_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_pricing_line_item_bhea_member_levels_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_pricing_line_item_bhea_member_levels_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_prici08a9ne_item_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_pricing_line_item_bhea_member_levels_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_pricia640_levels_idb',
      ),
    ),
  ),
);