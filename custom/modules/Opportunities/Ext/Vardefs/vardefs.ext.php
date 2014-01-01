<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-09 10:28:51
$dictionary["Opportunity"]["fields"]["bhea_councils_opportunities_1"] = array (
  'name' => 'bhea_councils_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_councils_opportunities_1',
  'source' => 'non-db',
  'module' => 'Bhea_Councils',
  'bean_name' => 'Bhea_Councils',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCILS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'bhea_councils_opportunities_1bhea_councils_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["bhea_councils_opportunities_1_name"] = array (
  'name' => 'bhea_councils_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_OPPORTUNITIES_1_FROM_BHEA_COUNCILS_TITLE',
  'save' => true,
  'id_name' => 'bhea_councils_opportunities_1bhea_councils_ida',
  'link' => 'bhea_councils_opportunities_1',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["bhea_councils_opportunities_1bhea_councils_ida"] = array (
  'name' => 'bhea_councils_opportunities_1bhea_councils_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_OPPORTUNITIES_1_FROM_LBL_BHEA_COUNCILS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'bhea_councils_opportunities_1bhea_councils_ida',
  'link' => 'bhea_councils_opportunities_1',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-03 12:02:11
$dictionary["Opportunity"]["fields"]["bhea_events_opportunities_1"] = array (
  'name' => 'bhea_events_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_events_opportunities_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'bhea_events_opportunities_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["bhea_events_opportunities_1_name"] = array (
  'name' => 'bhea_events_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_opportunities_1bhea_events_ida',
  'link' => 'bhea_events_opportunities_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["bhea_events_opportunities_1bhea_events_ida"] = array (
  'name' => 'bhea_events_opportunities_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_LBL_BHEA_EVENTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'bhea_events_opportunities_1bhea_events_ida',
  'link' => 'bhea_events_opportunities_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-23 17:38:14
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsor_1"] = array (
  'name' => 'opportunities_bhea_sponsor_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_sponsor_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsor',
  'bean_name' => 'Bhea_Sponsor',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE',
  'id_name' => 'opportunities_bhea_sponsor_1bhea_sponsor_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsor_1_name"] = array (
  'name' => 'opportunities_bhea_sponsor_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_sponsor_1bhea_sponsor_idb',
  'link' => 'opportunities_bhea_sponsor_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsor_1bhea_sponsor_idb"] = array (
  'name' => 'opportunities_bhea_sponsor_1bhea_sponsor_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_sponsor_1bhea_sponsor_idb',
  'link' => 'opportunities_bhea_sponsor_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-20 11:23:10
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['importable']='false';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount']['calculated']='true';
$dictionary['Opportunity']['fields']['amount']['formula']='$final_membership_fee_c';
$dictionary['Opportunity']['fields']['amount']['enforced']=true;

 

 // created: 2013-12-25 19:28:06
$dictionary['Opportunity']['fields']['pricing_type_c']['labelValue']='Pricing Type';
$dictionary['Opportunity']['fields']['pricing_type_c']['dependency']='not(equal($opportunity_type,"prod_service"))';
$dictionary['Opportunity']['fields']['pricing_type_c']['visibility_grid']='';

 

 // created: 2013-12-13 10:54:44
$dictionary['Opportunity']['fields']['territory_id_c']['labelValue']='Territory ID';
$dictionary['Opportunity']['fields']['territory_id_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Opportunity']['fields']['territory_id_c']['enforced']='';
$dictionary['Opportunity']['fields']['territory_id_c']['dependency']='';

 

 // created: 2013-12-16 11:54:05
$dictionary['Opportunity']['fields']['region_c']['labelValue']='Region';
$dictionary['Opportunity']['fields']['region_c']['dependency']='';
$dictionary['Opportunity']['fields']['region_c']['visibility_grid']='';

 

 // created: 2013-12-25 09:24:21
$dictionary['Opportunity']['fields']['membership_fee_c']['labelValue']='Fee';
$dictionary['Opportunity']['fields']['membership_fee_c']['enforced']='';
$dictionary['Opportunity']['fields']['membership_fee_c']['dependency']='';

 

// created: 2013-12-03 10:39:15
$dictionary["Opportunity"]["fields"]["opportunities_bhea_program_1"] = array (
  'name' => 'opportunities_bhea_program_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_program_1',
  'source' => 'non-db',
  'module' => 'Bhea_Program',
  'bean_name' => 'Bhea_Program',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_PROGRAM_1_FROM_BHEA_PROGRAM_TITLE',
  'id_name' => 'opportunities_bhea_program_1bhea_program_idb',
);


 // created: 2013-12-11 14:58:00

 

 // created: 2013-12-25 09:25:41
$dictionary['Opportunity']['fields']['membership_category_c']['labelValue']='Membership Category';
$dictionary['Opportunity']['fields']['membership_category_c']['dependency']='';
$dictionary['Opportunity']['fields']['membership_category_c']['visibility_grid']=array (
  'trigger' => 'opportunity_type',
  'values' => 
  array (
    '' => 
    array (
    ),
    'membership' => 
    array (
      0 => 'Enterprise',
      1 => 'educational',
      2 => 'mid_market',
      3 => 'Government',
      4 => 'Non_Profit',
    ),
    'Council' => 
    array (
      0 => 'Enterprise',
      1 => 'educational',
      2 => 'Government',
      3 => 'mid_market',
      4 => 'Non_Profit',
    ),
    'prod_service' => 
    array (
    ),
    'other' => 
    array (
    ),
  ),
);

 

 // created: 2013-12-20 12:26:05
$dictionary['Opportunity']['fields']['company_revenue_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['company_revenue_c']['labelValue']='Company Revenue(M)';
$dictionary['Opportunity']['fields']['company_revenue_c']['calculated']='1';
$dictionary['Opportunity']['fields']['company_revenue_c']['formula']='related($accounts,"annual_revenue")';
$dictionary['Opportunity']['fields']['company_revenue_c']['enforced']='1';
$dictionary['Opportunity']['fields']['company_revenue_c']['dependency']='';

 

 // created: 2013-12-28 11:53:13
$dictionary['Opportunity']['fields']['contact_c']['labelValue']='Contacts';
$dictionary['Opportunity']['fields']['contact_c']['dependency']='or(equal($opportunity_type,"Council"),and(equal($opportunity_type,"prod_service"),equal($subtype_c,"conference"),equal($conference_sub_type_c,"Speakers")))';

 

// created: 2013-12-25 09:31:02
$dictionary["Opportunity"]["fields"]["opportunities_bhea_speakers_1"] = array (
  'name' => 'opportunities_bhea_speakers_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_speakers_1',
  'source' => 'non-db',
  'module' => 'Bhea_Speakers',
  'bean_name' => 'Bhea_Speakers',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_BHEA_SPEAKERS_TITLE',
  'id_name' => 'opportunities_bhea_speakers_1bhea_speakers_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_speakers_1_name"] = array (
  'name' => 'opportunities_bhea_speakers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_BHEA_SPEAKERS_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_speakers_1bhea_speakers_idb',
  'link' => 'opportunities_bhea_speakers_1',
  'table' => 'bhea_speakers',
  'module' => 'Bhea_Speakers',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_speakers_1bhea_speakers_idb"] = array (
  'name' => 'opportunities_bhea_speakers_1bhea_speakers_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_BHEA_SPEAKERS_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_speakers_1bhea_speakers_idb',
  'link' => 'opportunities_bhea_speakers_1',
  'table' => 'bhea_speakers',
  'module' => 'Bhea_Speakers',
  'rname' => 'id',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-03 16:34:52
$dictionary['Opportunity']['fields']['discount_c']['labelValue']='Discount';
$dictionary['Opportunity']['fields']['discount_c']['enforced']='';
$dictionary['Opportunity']['fields']['discount_c']['dependency']='';

 

 // created: 2013-12-17 10:40:17
$dictionary['Opportunity']['fields']['subtype_c']['labelValue']='Sub Type';
$dictionary['Opportunity']['fields']['subtype_c']['dependency']='';
$dictionary['Opportunity']['fields']['subtype_c']['visibility_grid']=array (
  'trigger' => 'opportunity_type',
  'values' => 
  array (
    'membership' => 
    array (
      0 => 'new_mem',
      1 => 'renewal',
      2 => 'mem_upgrade',
    ),
    'prod_service' => 
    array (
      0 => 'council',
      1 => 'conference',
      2 => 'seminar',
      3 => 'sponsorship',
      4 => 'research_working',
      5 => 'experiential_learning',
    ),
    'other' => 
    array (
    ),
    '' => 
    array (
    ),
    'Council' => 
    array (
      0 => 'new_mem',
      1 => 'renewal',
    ),
  ),
);

 

 // created: 2013-12-17 19:13:34
$dictionary['Opportunity']['fields']['actual_close_date_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['actual_close_date_c']['labelValue']='Actual Closed Date';
$dictionary['Opportunity']['fields']['actual_close_date_c']['calculated']='1';
$dictionary['Opportunity']['fields']['actual_close_date_c']['formula']='ifElse(equal($sales_stage,"Closed Won"),now(),"")';
$dictionary['Opportunity']['fields']['actual_close_date_c']['enforced']='1';
$dictionary['Opportunity']['fields']['actual_close_date_c']['dependency']='';

 

 // created: 2013-12-25 09:48:29
$dictionary['Opportunity']['fields']['conference_sub_type_c']['labelValue']='Opportunity Entity';
$dictionary['Opportunity']['fields']['conference_sub_type_c']['dependency']='';
$dictionary['Opportunity']['fields']['conference_sub_type_c']['visibility_grid']=array (
  'trigger' => 'subtype_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'new_mem' => 
    array (
    ),
    'renewal' => 
    array (
    ),
    'mem_upgrade' => 
    array (
    ),
    'conference' => 
    array (
      0 => '',
      1 => 'Speakers',
      2 => 'Sponsors',
    ),
    'seminar' => 
    array (
      0 => '',
      1 => 'Speakers',
      2 => 'Sponsors',
    ),
    'sponsorship' => 
    array (
    ),
    'research_working' => 
    array (
      0 => '',
      1 => 'Speakers',
      2 => 'Sponsors',
    ),
    'experiential_learning' => 
    array (
      0 => '',
      1 => 'Speakers',
      2 => 'Sponsors',
    ),
  ),
);

 

 // created: 2013-12-19 10:58:14
$dictionary['Opportunity']['fields']['practice_area_c']['labelValue']='Practice Area';
$dictionary['Opportunity']['fields']['practice_area_c']['dependency']='';
$dictionary['Opportunity']['fields']['practice_area_c']['visibility_grid']=array (
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
    'All' => 
    array (
    ),
  ),
);

 

 // created: 2013-12-03 16:51:48
$dictionary['Opportunity']['fields']['lost_reason_c']['labelValue']='Lost Reason';
$dictionary['Opportunity']['fields']['lost_reason_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Opportunity']['fields']['lost_reason_c']['enforced']='';
$dictionary['Opportunity']['fields']['lost_reason_c']['dependency']='equal($sales_stage,"Closed Lost")';

 

// created: 2013-12-19 18:57:27
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sessions_1"] = array (
  'name' => 'opportunities_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'opportunities_bhea_sessions_1bhea_sessions_idb',
);


 // created: 2013-12-25 19:27:27
$dictionary['Opportunity']['fields']['access_level_c']['labelValue']='Access Level';
$dictionary['Opportunity']['fields']['access_level_c']['dependency']='not(equal($opportunity_type,"prod_service"))';
$dictionary['Opportunity']['fields']['access_level_c']['visibility_grid']='';

 

 // created: 2013-12-11 14:58:21
$dictionary['Opportunity']['fields']['contacts_c']['labelValue']='Contacts not used';
$dictionary['Opportunity']['fields']['contacts_c']['dependency']='';

 

 // created: 2013-12-16 12:15:08
$dictionary['Opportunity']['fields']['opportunity_type']['default']='';
$dictionary['Opportunity']['fields']['opportunity_type']['len']=100;
$dictionary['Opportunity']['fields']['opportunity_type']['options']='opportunity_type_list';
$dictionary['Opportunity']['fields']['opportunity_type']['comments']='Type of opportunity (ex: Existing, New)';
$dictionary['Opportunity']['fields']['opportunity_type']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['opportunity_type']['calculated']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['dependency']=false;

 

 // created: 2013-12-20 11:20:37
$dictionary['Opportunity']['fields']['best_case']['importable']='false';
$dictionary['Opportunity']['fields']['best_case']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['best_case']['calculated']='true';
$dictionary['Opportunity']['fields']['best_case']['formula']='$membership_fee_c';
$dictionary['Opportunity']['fields']['best_case']['enforced']=true;
$dictionary['Opportunity']['fields']['best_case']['enable_range_search']=false;

 

// created: 2013-12-24 18:14:54
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsorship_1"] = array (
  'name' => 'opportunities_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsorship',
  'bean_name' => 'Bhea_Sponsorship',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'opportunities_bhea_sponsorship_1bhea_sponsorship_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsorship_1_name"] = array (
  'name' => 'opportunities_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_sponsorship_1bhea_sponsorship_idb',
  'link' => 'opportunities_bhea_sponsorship_1',
  'table' => 'bhea_sponsorship',
  'module' => 'Bhea_Sponsorship',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_bhea_sponsorship_1bhea_sponsorship_idb"] = array (
  'name' => 'opportunities_bhea_sponsorship_1bhea_sponsorship_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_sponsorship_1bhea_sponsorship_idb',
  'link' => 'opportunities_bhea_sponsorship_1',
  'table' => 'bhea_sponsorship',
  'module' => 'Bhea_Sponsorship',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-03 16:47:18
$dictionary['Opportunity']['fields']['sales_stage']['default']='Prospecting';
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_stage']['calculated']=false;
$dictionary['Opportunity']['fields']['sales_stage']['dependency']=false;

 

 // created: 2013-12-03 20:17:43
$dictionary['Opportunity']['fields']['amount_usdollar']['comments']='Formatted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['amount_usdollar']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['calculated']=false;
$dictionary['Opportunity']['fields']['amount_usdollar']['formula']='';
$dictionary['Opportunity']['fields']['amount_usdollar']['enforced']=false;
$dictionary['Opportunity']['fields']['amount_usdollar']['enable_range_search']=false;

 

// created: 2013-12-19 18:30:01
$dictionary["Opportunity"]["fields"]["bhea_sponsorship_types_opportunities_1"] = array (
  'name' => 'bhea_sponsorship_types_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsorship_types_opportunities_1',
  'source' => 'non-db',
  'module' => 'bhea_Sponsorship_Types',
  'bean_name' => 'bhea_Sponsorship_Types',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'bhea_sponsorship_types_opportunities_1bhea_sponsorship_types_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["bhea_sponsorship_types_opportunities_1_name"] = array (
  'name' => 'bhea_sponsorship_types_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_OPPORTUNITIES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsorship_types_opportunities_1bhea_sponsorship_types_ida',
  'link' => 'bhea_sponsorship_types_opportunities_1',
  'table' => 'bhea_sponsorship_types',
  'module' => 'bhea_Sponsorship_Types',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["bhea_sponsorship_types_opportunities_1bhea_sponsorship_types_ida"] = array (
  'name' => 'bhea_sponsorship_types_opportunities_1bhea_sponsorship_types_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_OPPORTUNITIES_1_FROM_LBL_BHEA_SPONSORSHIP_TYPES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'bhea_sponsorship_types_opportunities_1bhea_sponsorship_types_ida',
  'link' => 'bhea_sponsorship_types_opportunities_1',
  'table' => 'bhea_sponsorship_types',
  'module' => 'bhea_Sponsorship_Types',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-25 09:24:41
$dictionary['Opportunity']['fields']['final_membership_fee_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['final_membership_fee_c']['labelValue']='Final Fee';
$dictionary['Opportunity']['fields']['final_membership_fee_c']['calculated']='1';
$dictionary['Opportunity']['fields']['final_membership_fee_c']['formula']='subtract($membership_fee_c,$discount_c)';
$dictionary['Opportunity']['fields']['final_membership_fee_c']['enforced']='1';
$dictionary['Opportunity']['fields']['final_membership_fee_c']['dependency']='';

 

// created: 2013-12-09 16:42:05
$dictionary["Opportunity"]["fields"]["bhea_member_levels_opportunities_1"] = array (
  'name' => 'bhea_member_levels_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_member_levels_opportunities_1',
  'source' => 'non-db',
  'module' => 'Bhea_member_levels',
  'bean_name' => 'Bhea_member_levels',
  'side' => 'right',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["bhea_member_levels_opportunities_1_name"] = array (
  'name' => 'bhea_member_levels_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
  'save' => true,
  'id_name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
  'link' => 'bhea_member_levels_opportunities_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["bhea_member_levels_opportunities_1bhea_member_levels_ida"] = array (
  'name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_LBL_BHEA_MEMBER_LEVELS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'bhea_member_levels_opportunities_1bhea_member_levels_ida',
  'link' => 'bhea_member_levels_opportunities_1',
  'table' => 'bhea_member_levels',
  'module' => 'Bhea_member_levels',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-25 09:27:00
$dictionary['Opportunity']['fields']['membership_sub_category_c']['labelValue']='Membership Sub Category';
$dictionary['Opportunity']['fields']['membership_sub_category_c']['visibility_grid']=array (
  'trigger' => 'opportunity_type',
  'values' => 
  array (
    '' => 
    array (
    ),
    'membership' => 
    array (
      0 => 'All',
      1 => 'Topic',
    ),
    'Council' => 
    array (
      0 => 'All',
      1 => 'Topic',
    ),
    'prod_service' => 
    array (
    ),
    'other' => 
    array (
    ),
  ),
);

 

 // created: 2013-12-25 19:29:52
$dictionary['Opportunity']['fields']['budget_amt_c']['labelValue']='Customer Budget Amount';
$dictionary['Opportunity']['fields']['budget_amt_c']['enforced']='';
$dictionary['Opportunity']['fields']['budget_amt_c']['dependency']='not(equal($opportunity_type,"prod_service"))';

 