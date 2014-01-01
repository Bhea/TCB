<?php
// created: 2013-12-16 09:48:22
$dictionary["Bhea_Pricing_Line_Item"]["fields"]["bhea_pricing_line_item_bhea_member_levels_1"] = array (
  'name' => 'bhea_pricing_line_item_bhea_member_levels_1',
  'type' => 'link',
  'relationship' => 'bhea_pricing_line_item_bhea_member_levels_1',
  'source' => 'non-db',
  'module' => 'Bhea_member_levels',
  'bean_name' => 'Bhea_member_levels',
  'vname' => 'LBL_BHEA_PRICING_LINE_ITEM_BHEA_MEMBER_LEVELS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'id_name' => 'bhea_pricia640_levels_idb',
);
$dictionary["Bhea_Pricing_Line_Item"]["fields"]["bhea_pricing_line_item_bhea_member_levels_1_name"] = array (
  'name' => 'bhea_pricing_line_item_bhea_member_levels_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_PRICING_LINE_ITEM_BHEA_MEMBER_LEVELS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'save' => true,
  'id_name' => 'bhea_pricia640_levels_idb',
  'link' => 'bhea_pricing_line_item_bhea_member_levels_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'name',
);
$dictionary["Bhea_Pricing_Line_Item"]["fields"]["bhea_pricia640_levels_idb"] = array (
  'name' => 'bhea_pricia640_levels_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_PRICING_LINE_ITEM_BHEA_MEMBER_LEVELS_1_FROM_LBL_BHEA_PRICING_LINE_ITEM_BHEA_MEMBER_LEVELS_1_FROM_BHEA_MEMBER_LEVELS_TITLE_TITLE',
  'id_name' => 'bhea_pricia640_levels_idb',
  'link' => 'bhea_pricing_line_item_bhea_member_levels_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
