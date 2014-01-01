<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-03 09:28:39
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_events_bhea_sponsorship_1"] = array (
  'name' => 'bhea_events_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_events_bhea_sponsorship_1_name"] = array (
  'name' => 'bhea_events_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sponsorship_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_events_bhea_sponsorship_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_LBL_BHEA_EVENTS_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_sponsorship_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sponsorship_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-18 17:49:16
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsorship_types_bhea_sponsorship_1"] = array (
  'name' => 'bhea_sponsorship_types_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsorship_types_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'bhea_Sponsorship_Types',
  'bean_name' => 'bhea_Sponsorship_Types',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'bhea_sponsd4cdp_types_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsorship_types_bhea_sponsorship_1_name"] = array (
  'name' => 'bhea_sponsorship_types_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsd4cdp_types_ida',
  'link' => 'bhea_sponsorship_types_bhea_sponsorship_1',
  'table' => 'bhea_sponsorship_types',
  'module' => 'bhea_Sponsorship_Types',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsd4cdp_types_ida"] = array (
  'name' => 'bhea_sponsd4cdp_types_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_LBL_BHEA_SPONSORSHIP_TYPES_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE_TITLE',
  'id_name' => 'bhea_sponsd4cdp_types_ida',
  'link' => 'bhea_sponsorship_types_bhea_sponsorship_1',
  'table' => 'bhea_sponsorship_types',
  'module' => 'bhea_Sponsorship_Types',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-24 18:14:54
$dictionary["Bhea_Sponsorship"]["fields"]["opportunities_bhea_sponsorship_1"] = array (
  'name' => 'opportunities_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_bhea_sponsorship_1opportunities_ida',
);
$dictionary["Bhea_Sponsorship"]["fields"]["opportunities_bhea_sponsorship_1_name"] = array (
  'name' => 'opportunities_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_sponsorship_1opportunities_ida',
  'link' => 'opportunities_bhea_sponsorship_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsorship"]["fields"]["opportunities_bhea_sponsorship_1opportunities_ida"] = array (
  'name' => 'opportunities_bhea_sponsorship_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_LBL_OPPORTUNITIES_BHEA_SPONSORSHIP_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_sponsorship_1opportunities_ida',
  'link' => 'opportunities_bhea_sponsorship_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-04 12:42:53
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsor_bhea_sponsorship_1"] = array (
  'name' => 'bhea_sponsor_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_sponsor_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsor',
  'bean_name' => 'Bhea_Sponsor',
  'side' => 'right',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsor_bhea_sponsorship_1_name"] = array (
  'name' => 'bhea_sponsor_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSOR_TITLE',
  'save' => true,
  'id_name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sponsorship_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida"] = array (
  'name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_LBL_BHEA_SPONSOR_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE_TITLE',
  'id_name' => 'bhea_sponsor_bhea_sponsorship_1bhea_sponsor_ida',
  'link' => 'bhea_sponsor_bhea_sponsorship_1',
  'table' => 'bhea_sponsor',
  'module' => 'Bhea_Sponsor',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-25 14:02:46
$dictionary["Bhea_Sponsorship"]["fields"]["accounts_bhea_sponsorship_1"] = array (
  'name' => 'accounts_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'accounts_bhea_sponsorship_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sponsorship"]["fields"]["accounts_bhea_sponsorship_1_name"] = array (
  'name' => 'accounts_bhea_sponsorship_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_SPONSORSHIP_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bhea_sponsorship_1accounts_ida',
  'link' => 'accounts_bhea_sponsorship_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bhea_Sponsorship"]["fields"]["accounts_bhea_sponsorship_1accounts_ida"] = array (
  'name' => 'accounts_bhea_sponsorship_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_SPONSORSHIP_1_FROM_LBL_ACCOUNTS_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE_TITLE',
  'id_name' => 'accounts_bhea_sponsorship_1accounts_ida',
  'link' => 'accounts_bhea_sponsorship_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-03 19:08:33
$dictionary['Bhea_Sponsorship']['fields']['sponsorship_type']['default']='Platinum';
$dictionary['Bhea_Sponsorship']['fields']['sponsorship_type']['options']='sponsorship_type_0';

 

 // created: 2013-12-18 15:13:52
$dictionary['Bhea_Sponsorship']['fields']['sponsorship_levels_c']['labelValue']='Sponsorship Levels';
$dictionary['Bhea_Sponsorship']['fields']['sponsorship_levels_c']['dependency']='';
$dictionary['Bhea_Sponsorship']['fields']['sponsorship_levels_c']['visibility_grid']='';

 

// created: 2013-12-20 10:48:26
$dictionary["Bhea_Sponsorship"]["fields"]["bhea_sessions_bhea_sponsorship_1"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_1bhea_sessions_ida',
);
