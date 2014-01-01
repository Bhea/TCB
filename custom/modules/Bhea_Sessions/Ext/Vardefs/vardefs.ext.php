<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-04 09:46:31
$dictionary["Bhea_Sessions"]["fields"]["contacts_bhea_sessions_1"] = array (
  'name' => 'contacts_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'contacts_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_BHEA_SESSIONS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_bhea_sessions_1contacts_ida',
);


// created: 2013-12-03 09:42:33
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_registrants_1"] = array (
  'name' => 'bhea_sessions_bhea_registrants_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_registrants_1',
  'source' => 'non-db',
  'module' => 'Bhea_Registrants',
  'bean_name' => 'Bhea_Registrants',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_REGISTRANTS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_sessions_bhea_registrants_1bhea_sessions_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-26 09:17:42
$dictionary["Bhea_Sessions"]["fields"]["bhea_speakers_bhea_sessions_1"] = array (
  'name' => 'bhea_speakers_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_speakers_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Speakers',
  'bean_name' => 'Bhea_Speakers',
  'vname' => 'LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_BHEA_SPEAKERS_TITLE',
  'id_name' => 'bhea_speakers_bhea_sessions_1bhea_speakers_ida',
);


// created: 2013-12-03 12:04:19
$dictionary["Bhea_Sessions"]["fields"]["bhea_events_bhea_sessions_1"] = array (
  'name' => 'bhea_events_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_events_bhea_sessions_1_name"] = array (
  'name' => 'bhea_events_bhea_sessions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sessions_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bhea_Sessions"]["fields"]["bhea_events_bhea_sessions_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_LBL_BHEA_EVENTS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_sessions_1bhea_events_ida',
  'link' => 'bhea_events_bhea_sessions_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-20 10:46:46
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsor_1"] = array (
  'name' => 'bhea_sessions_bhea_sponsor_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_sponsor_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsor',
  'bean_name' => 'Bhea_Sponsor',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSOR_1_FROM_BHEA_SPONSOR_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsor_1bhea_sponsor_idb',
);


// created: 2013-12-20 10:48:26
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsorship_1"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_sponsorship_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sponsorship',
  'bean_name' => 'Bhea_Sponsorship',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_1_FROM_BHEA_SPONSORSHIP_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_1bhea_sponsorship_idb',
);


// created: 2013-12-19 18:57:27
$dictionary["Bhea_Sessions"]["fields"]["opportunities_bhea_sessions_1"] = array (
  'name' => 'opportunities_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SESSIONS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_bhea_sessions_1opportunities_ida',
);


 // created: 2013-12-20 09:32:50

 

// created: 2013-12-18 19:54:10
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_sponsorship_types_1"] = array (
  'name' => 'bhea_sessions_bhea_sponsorship_types_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_sponsorship_types_1',
  'source' => 'non-db',
  'module' => 'bhea_Sponsorship_Types',
  'bean_name' => 'bhea_Sponsorship_Types',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_SPONSORSHIP_TYPES_1_FROM_BHEA_SPONSORSHIP_TYPES_TITLE',
  'id_name' => 'bhea_sessions_bhea_sponsorship_types_1bhea_sponsorship_types_idb',
);


// created: 2013-12-20 11:10:57
$dictionary["Bhea_Sessions"]["fields"]["bhea_sessions_bhea_contractors_1"] = array (
  'name' => 'bhea_sessions_bhea_contractors_1',
  'type' => 'link',
  'relationship' => 'bhea_sessions_bhea_contractors_1',
  'source' => 'non-db',
  'module' => 'Bhea_Contractors',
  'bean_name' => 'Bhea_Contractors',
  'vname' => 'LBL_BHEA_SESSIONS_BHEA_CONTRACTORS_1_FROM_BHEA_CONTRACTORS_TITLE',
  'id_name' => 'bhea_sessions_bhea_contractors_1bhea_contractors_idb',
);
