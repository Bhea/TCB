<?php
// WARNING: The contents of this file are auto-generated.


 // created: 2013-12-25 16:44:23

 

 // created: 2013-12-19 18:04:47
$dictionary['bhea_Sponsorship_Types']['fields']['sponsor_type_c']['labelValue']='Sponsor type';
$dictionary['bhea_Sponsorship_Types']['fields']['sponsor_type_c']['dependency']='';
$dictionary['bhea_Sponsorship_Types']['fields']['sponsor_type_c']['visibility_grid']=array (
  'trigger' => 'sponsorship_region_c',
  'values' => 
  array (
    'USA' => 
    array (
      0 => 'Lead_Sponsor',
      1 => 'Supporting_Sponsor',
      2 => 'Reception_Sponsor',
      3 => 'Custom_Sponsor',
      4 => 'Break_Sponsor',
      5 => 'Breakfast_Sponsor',
      6 => 'Associated_Sponsor',
      7 => 'Workshop_Sponsor',
      8 => 'Luncheon_Sponsor',
      9 => 'Exhibitor_Sponsor',
    ),
    'Europe' => 
    array (
      0 => 'Participating_Sponsor',
      1 => 'Comprehensive_Sponsor',
      2 => 'Associated_Sponsor',
    ),
  ),
);

 

 // created: 2013-12-18 17:04:42
$dictionary['bhea_Sponsorship_Types']['fields']['sponsorship_region_c']['labelValue']='Sponsorship Region';
$dictionary['bhea_Sponsorship_Types']['fields']['sponsorship_region_c']['dependency']='';
$dictionary['bhea_Sponsorship_Types']['fields']['sponsorship_region_c']['visibility_grid']='';

 

 // created: 2013-12-19 19:51:15
$dictionary['bhea_Sponsorship_Types']['fields']['sponsorship_type_c']['labelValue']='Sponsorship Type';
$dictionary['bhea_Sponsorship_Types']['fields']['sponsorship_type_c']['dependency']='';
$dictionary['bhea_Sponsorship_Types']['fields']['sponsorship_type_c']['visibility_grid']='';

 

 // created: 2013-12-03 16:29:54
$dictionary['bhea_Sponsorship_Types']['fields']['description']['comments']='Full text of the note';
$dictionary['bhea_Sponsorship_Types']['fields']['description']['merge_filter']='disabled';
$dictionary['bhea_Sponsorship_Types']['fields']['description']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['bhea_Sponsorship_Types']['fields']['description']['calculated']=false;
$dictionary['bhea_Sponsorship_Types']['fields']['description']['cols']='50';

 

// created: 2013-12-18 17:49:16
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sponsorship_types_bhea_sponsorship_1"] = array (
  'name' => 'bhea_sponsorship_types_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsorship_types_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsorship',
  'bean_name' => 'Bhea_Sponsorship',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'id_name' => 'bhea_sponsd4cdp_types_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-19 19:50:28
$dictionary['bhea_Sponsorship_Types']['fields']['sponsorship_coverage_c']['labelValue']='Sponsorship Coverage';
$dictionary['bhea_Sponsorship_Types']['fields']['sponsorship_coverage_c']['dependency']='';
$dictionary['bhea_Sponsorship_Types']['fields']['sponsorship_coverage_c']['visibility_grid']='';

 

// created: 2013-12-19 18:30:01
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sponsorship_types_opportunities_1"] = array (
  'name' => 'bhea_sponsorship_types_opportunities_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsorship_types_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_OPPORTUNITIES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'id_name' => 'bhea_sponsorship_types_opportunities_1bhea_sponsorship_types_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-18 19:54:10
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_sessions_bhea_sponsorship_types_1"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_types_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_sponsorship_types_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sessions_ida',
);


 // created: 2013-12-18 16:50:25
$dictionary['bhea_Sponsorship_Types']['fields']['other_information']['rows']='6';
$dictionary['bhea_Sponsorship_Types']['fields']['other_information']['cols']='50';

 

// created: 2013-12-18 19:46:27
$dictionary["bhea_Sponsorship_Types"]["fields"]["bhea_events_bhea_sponsorship_types_1"] = array (
  'name' => 'bhea_events_bhea_sponsorship_types_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sponsorship_types_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'bhea_events_bhea_sponsorship_types_1bhea_events_ida',
);
