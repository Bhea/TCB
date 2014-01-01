<?php
// created: 2013-12-16 09:48:22
$dictionary["Bhea_member_levels"]["fields"]["bhea_pricing_line_item_bhea_member_levels_1"] = array (
  'name' => 'bhea_pricing_line_item_bhea_member_levels_1',
  'type' => 'link',
  'relationship' => 'bhea_pricing_line_item_bhea_member_levels_1',
  'source' => 'non-db',
  'module' => 'Bhea_Pricing_Line_Item',
  'bean_name' => 'Bhea_Pricing_Line_Item',
  'vname' => 'LBL_BHEA_PRICING_LINE_ITEM_BHEA_MEMBER_LEVELS_1_FROM_BHEA_PRICING_LINE_ITEM_TITLE',
  'id_name' => 'bhea_prici08a9ne_item_ida',
);
$dictionary["Bhea_member_levels"]["fields"]["bhea_pricing_line_item_bhea_member_levels_1_name"] = array (
  'name' => 'bhea_pricing_line_item_bhea_member_levels_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_PRICING_LINE_ITEM_BHEA_MEMBER_LEVELS_1_FROM_BHEA_PRICING_LINE_ITEM_TITLE',
  'save' => true,
  'id_name' => 'bhea_prici08a9ne_item_ida',
  'link' => 'bhea_pricing_line_item_bhea_member_levels_1',
  'table' => 'bhea_pricing_line_item',
  'module' => 'Bhea_Pricing_Line_Item',
  'rname' => 'name',
);
$dictionary["Bhea_member_levels"]["fields"]["bhea_prici08a9ne_item_ida"] = array (
  'name' => 'bhea_prici08a9ne_item_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_PRICING_LINE_ITEM_BHEA_MEMBER_LEVELS_1_FROM_LBL_BHEA_PRICING_LINE_ITEM_BHEA_MEMBER_LEVELS_1_FROM_BHEA_PRICING_LINE_ITEM_TITLE_TITLE',
  'id_name' => 'bhea_prici08a9ne_item_ida',
  'link' => 'bhea_pricing_line_item_bhea_member_levels_1',
  'table' => 'bhea_pricing_line_item',
  'module' => 'Bhea_Pricing_Line_Item',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
