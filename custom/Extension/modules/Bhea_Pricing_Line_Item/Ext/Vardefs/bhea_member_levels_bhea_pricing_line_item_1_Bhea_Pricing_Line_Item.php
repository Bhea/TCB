<?php
// created: 2013-12-16 10:10:55
$dictionary["Bhea_Pricing_Line_Item"]["fields"]["bhea_member_levels_bhea_pricing_line_item_1"] = array (
  'name' => 'bhea_member_levels_bhea_pricing_line_item_1',
  'type' => 'link',
  'relationship' => 'bhea_member_levels_bhea_pricing_line_item_1',
  'source' => 'non-db',
  'module' => 'Bhea_member_levels',
  'bean_name' => 'Bhea_member_levels',
  'side' => 'right',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_PRICING_LINE_ITEM_1_FROM_BHEA_PRICING_LINE_ITEM_TITLE',
  'id_name' => 'bhea_membe43fe_levels_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Pricing_Line_Item"]["fields"]["bhea_member_levels_bhea_pricing_line_item_1_name"] = array (
  'name' => 'bhea_member_levels_bhea_pricing_line_item_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_PRICING_LINE_ITEM_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'save' => true,
  'id_name' => 'bhea_membe43fe_levels_ida',
  'link' => 'bhea_member_levels_bhea_pricing_line_item_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'name',
);
$dictionary["Bhea_Pricing_Line_Item"]["fields"]["bhea_membe43fe_levels_ida"] = array (
  'name' => 'bhea_membe43fe_levels_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_PRICING_LINE_ITEM_1_FROM_LBL_BHEA_MEMBER_LEVELS_BHEA_PRICING_LINE_ITEM_1_FROM_BHEA_PRICING_LINE_ITEM_TITLE_TITLE',
  'id_name' => 'bhea_membe43fe_levels_ida',
  'link' => 'bhea_member_levels_bhea_pricing_line_item_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
