<?php
// created: 2013-12-16 10:10:55
$dictionary["bhea_member_levels_bhea_pricing_line_item_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'bhea_member_levels_bhea_pricing_line_item_1' => 
    array (
      'lhs_module' => 'Bhea_member_levels',
      'lhs_table' => 'bhea_member_levels',
      'lhs_key' => 'id',
      'rhs_module' => 'Bhea_Pricing_Line_Item',
      'rhs_table' => 'bhea_pricing_line_item',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'bhea_member_levels_bhea_pricing_line_item_1_c',
      'join_key_lhs' => 'bhea_membe43fe_levels_ida',
      'join_key_rhs' => 'bhea_membe25b3ne_item_idb',
    ),
  ),
  'table' => 'bhea_member_levels_bhea_pricing_line_item_1_c',
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
      'name' => 'bhea_membe43fe_levels_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'bhea_membe25b3ne_item_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'bhea_member_levels_bhea_pricing_line_item_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'bhea_member_levels_bhea_pricing_line_item_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'bhea_membe43fe_levels_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'bhea_member_levels_bhea_pricing_line_item_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'bhea_membe25b3ne_item_idb',
      ),
    ),
  ),
);