<?php
// WARNING: The contents of this file are auto-generated.


 // created: 2013-12-20 10:16:31
$dictionary['Lead']['fields']['territory_id_c']['labelValue']='Territory ID';
$dictionary['Lead']['fields']['territory_id_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Lead']['fields']['territory_id_c']['enforced']='';
$dictionary['Lead']['fields']['territory_id_c']['dependency']='';

 

 // created: 2013-12-25 15:51:54
$dictionary['Lead']['fields']['region_c']['labelValue']='Region';
$dictionary['Lead']['fields']['region_c']['dependency']='';
$dictionary['Lead']['fields']['region_c']['visibility_grid']='';

 

 // created: 2013-12-18 14:28:19
$dictionary['Lead']['fields']['salutation']['len']=100;
$dictionary['Lead']['fields']['salutation']['comments']='Contact salutation (e.g., Mr, Ms)';
$dictionary['Lead']['fields']['salutation']['merge_filter']='disabled';
$dictionary['Lead']['fields']['salutation']['calculated']=false;
$dictionary['Lead']['fields']['salutation']['dependency']=false;

 

 // created: 2013-12-06 17:46:09
$dictionary['Lead']['fields']['job_function_c']['labelValue']='Job Function';
$dictionary['Lead']['fields']['job_function_c']['dependency']='';
$dictionary['Lead']['fields']['job_function_c']['visibility_grid']='';

 

// created: 2013-12-03 14:54:02
$dictionary["Lead"]["fields"]["leads_contacts_1"] = array (
  'name' => 'leads_contacts_1',
  'type' => 'link',
  'relationship' => 'leads_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_LEADS_CONTACTS_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_contacts_1leads_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-03 15:33:08
$dictionary["Lead"]["fields"]["leads_bhea_events_1"] = array (
  'name' => 'leads_bhea_events_1',
  'type' => 'link',
  'relationship' => 'leads_bhea_events_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'vname' => 'LBL_LEADS_BHEA_EVENTS_1_FROM_BHEA_EVENTS_TITLE',
  'id_name' => 'leads_bhea_events_1bhea_events_idb',
);


 // created: 2013-12-20 10:14:04
$dictionary['Lead']['fields']['account_name']['comments']='Account name for lead';
$dictionary['Lead']['fields']['account_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['account_name']['calculated']=false;
$dictionary['Lead']['fields']['account_name']['required']=true;

 

 // created: 2013-12-18 15:54:00
$dictionary['Lead']['fields']['sub_type_c']['labelValue']='Sub Type';
$dictionary['Lead']['fields']['sub_type_c']['dependency']='';
$dictionary['Lead']['fields']['sub_type_c']['visibility_grid']=array (
  'trigger' => 'prod_serv_interest_c',
  'values' => 
  array (
    'membership' => 
    array (
      0 => 'new_mem',
      1 => 'mem_upgrade',
      2 => 'renewal',
    ),
    'product_services' => 
    array (
      0 => 'conference',
      1 => 'seminar',
      2 => 'research_working',
      3 => 'experiential_learning',
    ),
    '' => 
    array (
    ),
    'Council' => 
    array (
      0 => 'new_mem',
      1 => 'renewal',
    ),
    'prod_service' => 
    array (
      0 => 'seminar',
      1 => 'conference',
      2 => 'research_working',
      3 => 'experiential_learning',
    ),
    'other' => 
    array (
    ),
  ),
);

 

 // created: 2013-12-26 10:55:31
$dictionary['Lead']['fields']['lead_type_c']['labelValue']='Lead Type';
$dictionary['Lead']['fields']['lead_type_c']['dependency']='';
$dictionary['Lead']['fields']['lead_type_c']['visibility_grid']=array (
  'trigger' => 'sub_type_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Corporate_Membership' => 
    array (
    ),
    'Educational' => 
    array (
    ),
    'MidMarket' => 
    array (
    ),
    'Government' => 
    array (
    ),
    'Conference' => 
    array (
      0 => 'Member_Sponsor',
      1 => 'Non_Member_Sponsor',
      2 => 'Member_Speaker',
      3 => 'Non_Member_Speaker',
      4 => 'Member_Contractor',
      5 => 'Non_Member_Contractor',
      6 => 'Member_Participant',
      7 => 'Non_Member_Participant',
      8 => 'Sponsor_Speaker',
    ),
    'Seminar' => 
    array (
    ),
    'Research_Working_Group' => 
    array (
    ),
    'Experiential' => 
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
      0 => 'Member_Contractor',
      1 => 'Member_Participant',
      2 => 'Member_Speaker',
      3 => 'Member_Sponsor',
      4 => 'Non_Member_Contractor',
      5 => 'Non_Member_Participant',
      6 => 'Non_Member_Speaker',
      7 => 'Sponsor_Speaker',
      8 => 'Non_Member_Sponsor',
    ),
    'seminar' => 
    array (
      0 => 'Member_Contractor',
      1 => 'Member_Participant',
      2 => 'Member_Speaker',
      3 => 'Member_Sponsor',
      4 => 'Non_Member_Contractor',
      5 => 'Non_Member_Participant',
      6 => 'Non_Member_Speaker',
      7 => 'Non_Member_Sponsor',
      8 => 'Sponsor_Speaker',
    ),
    'research_working' => 
    array (
    ),
    'experiential_learning' => 
    array (
    ),
  ),
);

 

 // created: 2013-12-21 10:34:56
$dictionary['Lead']['fields']['lead_category_c']['labelValue']='Lead Category';
$dictionary['Lead']['fields']['lead_category_c']['dependency']='';
$dictionary['Lead']['fields']['lead_category_c']['visibility_grid']='';

 

// created: 2013-12-03 10:55:16
$dictionary["Lead"]["fields"]["leads_bhea_finance_performance_1"] = array (
  'name' => 'leads_bhea_finance_performance_1',
  'type' => 'link',
  'relationship' => 'leads_bhea_finance_performance_1',
  'source' => 'non-db',
  'module' => 'Bhea_finance_performance',
  'bean_name' => 'Bhea_finance_performance',
  'vname' => 'LBL_LEADS_BHEA_FINANCE_PERFORMANCE_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_bhea_finance_performance_1leads_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 10:15:22
$dictionary['Lead']['fields']['opportunity_date_c']['labelValue']='Opportunity Date';
$dictionary['Lead']['fields']['opportunity_date_c']['enforced']='';
$dictionary['Lead']['fields']['opportunity_date_c']['dependency']='';

 

 // created: 2013-12-03 16:03:12
$dictionary['Lead']['fields']['practice_area_c']['labelValue']='Practice Area';
$dictionary['Lead']['fields']['practice_area_c']['dependency']='';
$dictionary['Lead']['fields']['practice_area_c']['visibility_grid']=array (
  'trigger' => 'sub_type_c',
  'values' => 
  array (
    'Corporate_Membership' => 
    array (
    ),
    'Educational' => 
    array (
    ),
    'MidMarket' => 
    array (
    ),
    'Council' => 
    array (
      0 => 'human_capital',
      1 => 'corporate_leadership',
      2 => 'economy_value',
    ),
    'Speaker' => 
    array (
    ),
    'Sponsor' => 
    array (
    ),
    'Conference' => 
    array (
    ),
    'Seminar' => 
    array (
    ),
    'Research_Working_Group' => 
    array (
    ),
    'Experiential' => 
    array (
    ),
  ),
);

 

 // created: 2013-12-20 10:14:49
$dictionary['Lead']['fields']['role_c']['labelValue']='Role';
$dictionary['Lead']['fields']['role_c']['dependency']='';
$dictionary['Lead']['fields']['role_c']['visibility_grid']='';

 

 // created: 2013-12-03 10:10:31
$dictionary['Lead']['fields']['status']['comments']='Status of the lead';
$dictionary['Lead']['fields']['status']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status']['calculated']=false;
$dictionary['Lead']['fields']['status']['dependency']=false;

 

 // created: 2013-12-18 15:53:03
$dictionary['Lead']['fields']['prod_serv_interest_c']['labelValue']='Opportunity Type';
$dictionary['Lead']['fields']['prod_serv_interest_c']['dependency']='';
$dictionary['Lead']['fields']['prod_serv_interest_c']['visibility_grid']='';

 