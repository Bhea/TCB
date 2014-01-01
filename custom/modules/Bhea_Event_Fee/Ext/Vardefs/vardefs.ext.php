<?php
// WARNING: The contents of this file are auto-generated.


 // created: 2013-12-16 15:23:54
$dictionary['Bhea_Event_Fee']['fields']['mid_market_fee_c']['labelValue']='Mid Market Fee';
$dictionary['Bhea_Event_Fee']['fields']['mid_market_fee_c']['enforced']='';
$dictionary['Bhea_Event_Fee']['fields']['mid_market_fee_c']['dependency']='equal($type_c,"Members")';

 

 // created: 2013-12-16 15:25:20
$dictionary['Bhea_Event_Fee']['fields']['educational_fee_c']['labelValue']='Educational Fee';
$dictionary['Bhea_Event_Fee']['fields']['educational_fee_c']['enforced']='';
$dictionary['Bhea_Event_Fee']['fields']['educational_fee_c']['dependency']='equal($type_c,"Members")';

 

 // created: 2013-12-16 15:23:00
$dictionary['Bhea_Event_Fee']['fields']['non_profit_fee_c']['labelValue']='Non Profit Fee';
$dictionary['Bhea_Event_Fee']['fields']['non_profit_fee_c']['enforced']='';
$dictionary['Bhea_Event_Fee']['fields']['non_profit_fee_c']['dependency']='or(equal($type_c,"Members"),equal($type_c,"Non_Members"))';

 

 // created: 2013-12-16 15:24:47
$dictionary['Bhea_Event_Fee']['fields']['government_fee_c']['labelValue']='Government Fee';
$dictionary['Bhea_Event_Fee']['fields']['government_fee_c']['enforced']='';
$dictionary['Bhea_Event_Fee']['fields']['government_fee_c']['dependency']='or(equal($type_c,"Members"),equal($type_c,"Non_Members"))';

 

 // created: 2013-12-16 15:26:07
$dictionary['Bhea_Event_Fee']['fields']['academic_fee_c']['labelValue']='Academic Fee';
$dictionary['Bhea_Event_Fee']['fields']['academic_fee_c']['enforced']='';
$dictionary['Bhea_Event_Fee']['fields']['academic_fee_c']['dependency']='or(equal($type_c,"Members"),equal($type_c,"Non_Members"))';

 

 // created: 2013-12-16 16:38:17
$dictionary['Bhea_Event_Fee']['fields']['fees_c']['labelValue']='Fees';
$dictionary['Bhea_Event_Fee']['fields']['fees_c']['enforced']='';
$dictionary['Bhea_Event_Fee']['fields']['fees_c']['dependency']='';

 

 // created: 2013-12-16 17:41:18
$dictionary['Bhea_Event_Fee']['fields']['discount_c']['labelValue']='Discount in %';
$dictionary['Bhea_Event_Fee']['fields']['discount_c']['enforced']='';
$dictionary['Bhea_Event_Fee']['fields']['discount_c']['dependency']='';

 

 // created: 2013-12-27 18:10:20
$dictionary['Bhea_Event_Fee']['fields']['fee_type_c']['labelValue']='Fee Type';
$dictionary['Bhea_Event_Fee']['fields']['fee_type_c']['dependency']='';
$dictionary['Bhea_Event_Fee']['fields']['fee_type_c']['visibility_grid']=array (
  'trigger' => 'type_c',
  'values' => 
  array (
    'Members' => 
    array (
      0 => 'Regular_Fee',
      1 => 'Academic_Fee',
      2 => 'Educational_Fee',
      3 => 'Enterprise_Fee',
      4 => 'Government_Fee',
      5 => 'Mid_Market_Fee',
      6 => 'Non_Profit_Fee',
      7 => 'Team_Discount',
    ),
    'Non_Members' => 
    array (
      0 => 'Regular_Fee',
      1 => 'Government_Fee',
      2 => 'Non_Profit_Fee',
      3 => 'Academic_Fee',
      4 => 'Educational_Fee',
      5 => 'Team_Discount',
    ),
  ),
);

 

 // created: 2013-12-16 16:39:57
$dictionary['Bhea_Event_Fee']['fields']['early_bird_discount_c']['labelValue']='Early Bird Discount';
$dictionary['Bhea_Event_Fee']['fields']['early_bird_discount_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Event_Fee']['fields']['early_bird_discount_c']['enforced']='';

 

 // created: 2013-12-16 19:23:27
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['duplicate_merge_dom_value']=0;
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['labelValue']='Fee To Be Charged';
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['calculated']='1';
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['formula']='ifElse(equal($discount_c,""),subtract($fees_c,$early_bird_discount_c),subtract($fees_c,multiply(divide($early_bird_discount_c,100),$fees_c)))';
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['enforced']='1';
$dictionary['Bhea_Event_Fee']['fields']['fee_to_be_charged_c']['dependency']='';

 

 // created: 2013-12-16 16:40:16
$dictionary['Bhea_Event_Fee']['fields']['early_bird_discount_date_c']['labelValue']='Early Bird Discount Date';
$dictionary['Bhea_Event_Fee']['fields']['early_bird_discount_date_c']['enforced']='';

 

 // created: 2013-12-16 15:19:32
$dictionary['Bhea_Event_Fee']['fields']['enterprise_fee_c']['labelValue']='Enterprise Fee';
$dictionary['Bhea_Event_Fee']['fields']['enterprise_fee_c']['enforced']='';
$dictionary['Bhea_Event_Fee']['fields']['enterprise_fee_c']['dependency']='equal($type_c,"Members")';

 

// created: 2013-12-16 15:30:32
$dictionary["Bhea_Event_Fee"]["fields"]["bhea_events_bhea_event_fee_1"] = array (
  'name' => 'bhea_events_bhea_event_fee_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_event_fee_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENT_FEE_1_FROM_BHEA_EVENT_FEE_TITLE',
  'id_name' => 'bhea_events_bhea_event_fee_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Event_Fee"]["fields"]["bhea_events_bhea_event_fee_1_name"] = array (
  'name' => 'bhea_events_bhea_event_fee_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENT_FEE_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_event_fee_1bhea_events_ida',
  'link' => 'bhea_events_bhea_event_fee_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bhea_Event_Fee"]["fields"]["bhea_events_bhea_event_fee_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_event_fee_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_EVENT_FEE_1_FROM_LBL_BHEA_EVENTS_BHEA_EVENT_FEE_1_FROM_BHEA_EVENT_FEE_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_event_fee_1bhea_events_ida',
  'link' => 'bhea_events_bhea_event_fee_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-16 14:50:16

 

 // created: 2013-12-16 15:28:30
$dictionary['Bhea_Event_Fee']['fields']['type_c']['labelValue']='Type';
$dictionary['Bhea_Event_Fee']['fields']['type_c']['dependency']='';
$dictionary['Bhea_Event_Fee']['fields']['type_c']['visibility_grid']='';

 