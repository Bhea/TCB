<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-04 12:42:53
$dictionary["Bhea_Sponsor"]["fields"]["bhea_sponsor_bhea_sponsorship_1"] = array (
  'name' => 'bhea_sponsor_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsor_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsorship',
  'bean_name' => 'Bhea_Sponsorship',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSOR_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-03 12:48:01
$dictionary['Bhea_Sponsor']['fields']['sponsorship_description']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Sponsor']['fields']['sponsorship_description']['rows']='6';
$dictionary['Bhea_Sponsor']['fields']['sponsorship_description']['cols']='50';

 

 // created: 2013-12-25 12:25:36
$dictionary['Bhea_Sponsor']['fields']['billing_address_country_c']['group']='billing_address_c';

 

 // created: 2013-12-12 15:21:09

 

 // created: 2013-12-25 10:37:37
$dictionary['Bhea_Sponsor']['fields']['website_c']['labelValue']='Website';
$dictionary['Bhea_Sponsor']['fields']['website_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Sponsor']['fields']['website_c']['dependency']='';

 

 // created: 2013-12-18 18:13:12
$dictionary['Bhea_Sponsor']['fields']['sponsor_type_c']['labelValue']='Sponsor Type';
$dictionary['Bhea_Sponsor']['fields']['sponsor_type_c']['dependency']='';
$dictionary['Bhea_Sponsor']['fields']['sponsor_type_c']['visibility_grid']='';

 

 // created: 2013-12-03 12:47:50
$dictionary['Bhea_Sponsor']['fields']['description']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Sponsor']['fields']['description']['cols']='50';

 

 // created: 2013-12-25 12:23:35
$dictionary['Bhea_Sponsor']['fields']['shipping_address_postalcode_c']['group']='shipping_address_c';

 

 // created: 2013-12-25 12:23:34
$dictionary['Bhea_Sponsor']['fields']['shipping_address_city_c']['group']='shipping_address_c';

 

 // created: 2013-12-25 12:25:36
$dictionary['Bhea_Sponsor']['fields']['billing_address_state_c']['group']='billing_address_c';

 

 // created: 2013-12-25 12:23:34
$dictionary['Bhea_Sponsor']['fields']['shipping_address_state_c']['group']='shipping_address_c';

 

 // created: 2013-12-25 10:33:04
$dictionary['Bhea_Sponsor']['fields']['fax_c']['labelValue']='Fax';
$dictionary['Bhea_Sponsor']['fields']['fax_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Sponsor']['fields']['fax_c']['enforced']='';
$dictionary['Bhea_Sponsor']['fields']['fax_c']['dependency']='';

 

 // created: 2013-12-25 12:23:35
$dictionary['Bhea_Sponsor']['fields']['shipping_address_country_c']['group']='shipping_address_c';

 

 // created: 2013-12-25 12:25:35
$dictionary['Bhea_Sponsor']['fields']['billing_address_street_c']['group']='billing_address_c';

 

 // created: 2013-12-25 10:58:09
$dictionary['Bhea_Sponsor']['fields']['other_phone_c']['labelValue']='Other Phone';
$dictionary['Bhea_Sponsor']['fields']['other_phone_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Sponsor']['fields']['other_phone_c']['enforced']='';
$dictionary['Bhea_Sponsor']['fields']['other_phone_c']['dependency']='';

 

// created: 2013-12-23 17:38:14
$dictionary["Bhea_Sponsor"]["fields"]["opportunities_bhea_sponsor_1"] = array (
  'name' => 'opportunities_bhea_sponsor_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_sponsor_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_bhea_sponsor_1opportunities_ida',
);
$dictionary["Bhea_Sponsor"]["fields"]["opportunities_bhea_sponsor_1_name"] = array (
  'name' => 'opportunities_bhea_sponsor_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_sponsor_1opportunities_ida',
  'link' => 'opportunities_bhea_sponsor_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsor"]["fields"]["opportunities_bhea_sponsor_1opportunities_ida"] = array (
  'name' => 'opportunities_bhea_sponsor_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_LBL_OPPORTUNITIES_BHEA_SPONSOR_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_sponsor_1opportunities_ida',
  'link' => 'opportunities_bhea_sponsor_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-12 15:18:31
$dictionary['Bhea_Sponsor']['fields']['mobile_phone_c']['labelValue']='Mobile Phone';
$dictionary['Bhea_Sponsor']['fields']['mobile_phone_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Sponsor']['fields']['mobile_phone_c']['enforced']='';
$dictionary['Bhea_Sponsor']['fields']['mobile_phone_c']['dependency']='';

 

 // created: 2013-12-25 12:25:36
$dictionary['Bhea_Sponsor']['fields']['billing_address_city_c']['group']='billing_address_c';

 

// created: 2013-12-20 10:46:46
$dictionary["Bhea_Sponsor"]["fields"]["bhea_sessions_bhea_sponsor_1"] = array (
  'name' => 'bhea_sessions_bhea_sponsor_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_sponsor_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSOR_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsor_1bhea_sessions_ida',
);


 // created: 2013-12-12 15:21:09
$dictionary['Bhea_Sponsor']['fields']['contact_person_c']['labelValue']='Contact Person';
$dictionary['Bhea_Sponsor']['fields']['contact_person_c']['dependency']='';

 

// created: 2013-12-03 16:00:54
$dictionary["Bhea_Sponsor"]["fields"]["bhea_events_bhea_sponsor_1"] = array (
  'name' => 'bhea_events_bhea_sponsor_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sponsor_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE',
  'id_name' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sponsor"]["fields"]["bhea_events_bhea_sponsor_1_name"] = array (
  'name' => 'bhea_events_bhea_sponsor_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sponsor_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsor"]["fields"]["bhea_events_bhea_sponsor_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_LBL_BHEA_EVENTS_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_sponsor_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sponsor_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-25 12:25:36
$dictionary['Bhea_Sponsor']['fields']['billing_address_postalcode_c']['group']='billing_address_c';

 

 // created: 2013-12-25 12:23:34
$dictionary['Bhea_Sponsor']['fields']['shipping_address_street_c']['group']='shipping_address_c';

 

 // created: 2013-12-12 15:18:07
$dictionary['Bhea_Sponsor']['fields']['office_phone_c']['labelValue']='Office Phone';
$dictionary['Bhea_Sponsor']['fields']['office_phone_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Sponsor']['fields']['office_phone_c']['enforced']='';
$dictionary['Bhea_Sponsor']['fields']['office_phone_c']['dependency']='';

 