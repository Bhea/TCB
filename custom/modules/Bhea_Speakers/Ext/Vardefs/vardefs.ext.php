<?php
// WARNING: The contents of this file are auto-generated.


 // created: 2013-12-03 08:59:40

 

 // created: 2013-12-03 09:07:55

 

 // created: 2013-12-03 09:08:09
$dictionary['Bhea_Speakers']['fields']['contact_c']['labelValue']='Contact';
$dictionary['Bhea_Speakers']['fields']['contact_c']['dependency']='';

 

// created: 2013-12-26 09:17:42
$dictionary["Bhea_Speakers"]["fields"]["bhea_speakers_bhea_sessions_1"] = array (
  'name' => 'bhea_speakers_bhea_sessions_1',
  'type' => 'link',
  'relationship' => 'bhea_speakers_bhea_sessions_1',
  'source' => 'non-db',
  'module' => 'Bhea_Sessions',
  'bean_name' => 'Bhea_Sessions',
  'vname' => 'LBL_BHEA_SPEAKERS_BHEA_SESSIONS_1_FROM_BHEA_SESSIONS_TITLE',
  'id_name' => 'bhea_speakers_bhea_sessions_1bhea_sessions_idb',
);


 // created: 2013-12-03 09:00:41
$dictionary['Bhea_Speakers']['fields']['familiar_name_c']['labelValue']='Familiar Name';
$dictionary['Bhea_Speakers']['fields']['familiar_name_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Speakers']['fields']['familiar_name_c']['enforced']='';
$dictionary['Bhea_Speakers']['fields']['familiar_name_c']['dependency']='';

 

// created: 2013-12-25 09:31:02
$dictionary["Bhea_Speakers"]["fields"]["opportunities_bhea_speakers_1"] = array (
  'name' => 'opportunities_bhea_speakers_1',
  'type' => 'link',
  'relationship' => 'opportunities_bhea_speakers_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_bhea_speakers_1opportunities_ida',
);
$dictionary["Bhea_Speakers"]["fields"]["opportunities_bhea_speakers_1_name"] = array (
  'name' => 'opportunities_bhea_speakers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_bhea_speakers_1opportunities_ida',
  'link' => 'opportunities_bhea_speakers_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Bhea_Speakers"]["fields"]["opportunities_bhea_speakers_1opportunities_ida"] = array (
  'name' => 'opportunities_bhea_speakers_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_LBL_OPPORTUNITIES_BHEA_SPEAKERS_1_FROM_OPPORTUNITIES_TITLE_TITLE',
  'id_name' => 'opportunities_bhea_speakers_1opportunities_ida',
  'link' => 'opportunities_bhea_speakers_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-03 09:12:01
$dictionary["Bhea_Speakers"]["fields"]["bhea_events_bhea_speakers_1"] = array (
  'name' => 'bhea_events_bhea_speakers_1',
  'type' => 'link',
  'relationship' => 'bhea_events_bhea_speakers_1',
  'source' => 'non-db',
  'module' => 'Bhea_Events',
  'bean_name' => 'Bhea_Events',
  'side' => 'right',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPEAKERS_1_FROM_BHEA_SPEAKERS_TITLE',
  'id_name' => 'bhea_events_bhea_speakers_1bhea_events_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Speakers"]["fields"]["bhea_events_bhea_speakers_1_name"] = array (
  'name' => 'bhea_events_bhea_speakers_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPEAKERS_1_FROM_BHEA_EVENTS_TITLE',
  'save' => true,
  'id_name' => 'bhea_events_bhea_speakers_1bhea_events_ida',
  'link' => 'bhea_events_bhea_speakers_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'name',
);
$dictionary["Bhea_Speakers"]["fields"]["bhea_events_bhea_speakers_1bhea_events_ida"] = array (
  'name' => 'bhea_events_bhea_speakers_1bhea_events_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_EVENTS_BHEA_SPEAKERS_1_FROM_LBL_BHEA_EVENTS_BHEA_SPEAKERS_1_FROM_BHEA_SPEAKERS_TITLE_TITLE',
  'id_name' => 'bhea_events_bhea_speakers_1bhea_events_ida',
  'link' => 'bhea_events_bhea_speakers_1',
  'table' => 'bhea_events',
  'module' => 'Bhea_Events',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
