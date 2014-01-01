<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-03 12:10:50
$dictionary["Bhea_member_levels"]["fields"]["bhea_member_levels_bhea_memberships_1"] = array (
  'name' => 'bhea_member_levels_bhea_memberships_1',
  'type' => 'link',
  'relationship' => 'bhea_member_levels_bhea_memberships_1',
  'source' => 'non-db',
  'module' => 'Bhea_Memberships',
  'bean_name' => 'Bhea_Memberships',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'id_name' => 'bhea_member_levels_bhea_memberships_1bhea_member_levels_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 16:16:13
$dictionary['Bhea_member_levels']['fields']['geography']['default']='';

 

// created: 2013-12-09 16:42:05
$dictionary["Bhea_member_levels"]["fields"]["bhea_member_levels_opportunities_1"] = array (
  'name' => 'bhea_member_levels_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_member_levels_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'id_name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-05 10:35:34

 

 // created: 2013-12-17 15:00:32
$dictionary['Bhea_member_levels']['fields']['cat_type']['default']='Local';

 

 // created: 2013-12-09 17:42:48
$dictionary['Bhea_member_levels']['fields']['practice_area_c']['labelValue']='Practice Area';
$dictionary['Bhea_member_levels']['fields']['practice_area_c']['visibility_grid']=array (
  'trigger' => 'membership_sub_category_c',
  'values' => 
  array (
    'Enterprise' => 
    array (
    ),
    'Topic' => 
    array (
      0 => '',
      1 => 'human_capital',
      2 => 'corporate_leadership',
      3 => 'economy_value',
    ),
  ),
);

 

 // created: 2013-12-06 15:22:06

 

 // created: 2013-12-04 08:56:46
$dictionary['Bhea_member_levels']['fields']['membership_type_c']['labelValue']='Membership Type';
$dictionary['Bhea_member_levels']['fields']['membership_type_c']['dependency']='';
$dictionary['Bhea_member_levels']['fields']['membership_type_c']['visibility_grid']='';

 

 // created: 2013-12-17 15:00:08
$dictionary['Bhea_member_levels']['fields']['mem_type']['default']='Enterprise';

 

// created: 2013-12-16 10:10:55
$dictionary["Bhea_member_levels"]["fields"]["bhea_member_levels_bhea_pricing_line_item_1"] = array (
  'name' => 'bhea_member_levels_bhea_pricing_line_item_1',
  'type' => 'link',
  'relationship' => 'bhea_member_levels_bhea_pricing_line_item_1',
  'source' => 'non-db',
  'module' => 'Bhea_Pricing_Line_Item',
  'bean_name' => 'Bhea_Pricing_Line_Item',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_PRICING_LINE_ITEM_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'id_name' => 'bhea_membe43fe_levels_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-17 15:01:13
$dictionary['Bhea_member_levels']['fields']['membership_sub_category_c']['labelValue']='Membership Sub Category';
$dictionary['Bhea_member_levels']['fields']['membership_sub_category_c']['dependency']='';
$dictionary['Bhea_member_levels']['fields']['membership_sub_category_c']['visibility_grid']='';

 