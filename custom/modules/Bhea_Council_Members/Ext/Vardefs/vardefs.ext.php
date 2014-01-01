<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-04 09:42:14
$dictionary["Bhea_Council_Members"]["fields"]["accounts_bhea_council_members_1"] = array (
  'name' => 'accounts_bhea_council_members_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_council_members_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'id_name' => 'accounts_bhea_council_members_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Council_Members"]["fields"]["accounts_bhea_council_members_1_name"] = array (
  'name' => 'accounts_bhea_council_members_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bhea_council_members_1accounts_ida',
  'link' => 'accounts_bhea_council_members_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bhea_Council_Members"]["fields"]["accounts_bhea_council_members_1accounts_ida"] = array (
  'name' => 'accounts_bhea_council_members_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERS_1_FROM_LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE_TITLE',
  'id_name' => 'accounts_bhea_council_members_1accounts_ida',
  'link' => 'accounts_bhea_council_members_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-09 18:32:18
$dictionary["Bhea_Council_Members"]["fields"]["bhea_council_members_bhea_council_memberships_1"] = array (
  'name' => 'bhea_council_members_bhea_council_memberships_1',
  'type' => 'link',
  'relationship' => 'bhea_council_members_bhea_council_memberships_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Memberships',
  'bean_name' => 'Bhea_Council_Memberships',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'id_name' => 'bhea_counc8ee0members_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-26 19:58:29
$dictionary['Bhea_Council_Members']['fields']['member_till']['importable']='false';
$dictionary['Bhea_Council_Members']['fields']['member_till']['calculated']='true';
$dictionary['Bhea_Council_Members']['fields']['member_till']['formula']='addDays($member_from,365)';
$dictionary['Bhea_Council_Members']['fields']['member_till']['enforced']=true;

 

// created: 2013-12-03 09:12:58
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_1"] = array (
  'name' => 'bhea_councils_bhea_council_members_1',
  'type' => 'link',
  'relationship' => 'bhea_councils_bhea_council_members_1',
  'source' => 'non-db',
  'module' => 'Bhea_Councils',
  'bean_name' => 'Bhea_Councils',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'id_name' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_1_name"] = array (
  'name' => 'bhea_councils_bhea_council_members_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCILS_TITLE',
  'save' => true,
  'id_name' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
  'link' => 'bhea_councils_bhea_council_members_1',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'name',
);
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_1bhea_councils_ida"] = array (
  'name' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE_TITLE',
  'id_name' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
  'link' => 'bhea_councils_bhea_council_members_1',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-17 10:30:20
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_2"] = array (
  'name' => 'bhea_councils_bhea_council_members_2',
  'type' => 'link',
  'relationship' => 'bhea_councils_bhea_council_members_2',
  'source' => 'non-db',
  'module' => 'Bhea_Councils',
  'bean_name' => 'Bhea_Councils',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_2_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'id_name' => 'bhea_councils_bhea_council_members_2bhea_councils_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_2_name"] = array (
  'name' => 'bhea_councils_bhea_council_members_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_2_FROM_BHEA_COUNCILS_TITLE',
  'save' => true,
  'id_name' => 'bhea_councils_bhea_council_members_2bhea_councils_ida',
  'link' => 'bhea_councils_bhea_council_members_2',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'name',
);
$dictionary["Bhea_Council_Members"]["fields"]["bhea_councils_bhea_council_members_2bhea_councils_ida"] = array (
  'name' => 'bhea_councils_bhea_council_members_2bhea_councils_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_2_FROM_LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERS_2_FROM_BHEA_COUNCIL_MEMBERS_TITLE_TITLE',
  'id_name' => 'bhea_councils_bhea_council_members_2bhea_councils_ida',
  'link' => 'bhea_councils_bhea_council_members_2',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-30 20:03:09
$dictionary['Bhea_Council_Members']['fields']['drop_out_reason_c']['labelValue']='Drop Out Reason';
$dictionary['Bhea_Council_Members']['fields']['drop_out_reason_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Council_Members']['fields']['drop_out_reason_c']['enforced']='';
$dictionary['Bhea_Council_Members']['fields']['drop_out_reason_c']['dependency']='equal($membership_status,"InActive")';

 

// created: 2013-12-13 10:34:26
$dictionary["Bhea_Council_Members"]["fields"]["bhea_council_members_bhea_orders_1"] = array (
  'name' => 'bhea_council_members_bhea_orders_1',
  'type' => 'link',
  'relationship' => 'bhea_council_members_bhea_orders_1',
  'source' => 'non-db',
  'module' => 'Bhea_Orders',
  'bean_name' => 'Bhea_Orders',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_ORDERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'id_name' => 'bhea_council_members_bhea_orders_1bhea_council_members_ida',
  'link-type' => 'many',
  'side' => 'left',
);
