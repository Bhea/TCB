<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-09 18:32:18
$dictionary["Bhea_Council_Memberships"]["fields"]["bhea_council_members_bhea_council_memberships_1"] = array (
  'name' => 'bhea_council_members_bhea_council_memberships_1',
  'type' => 'link',
  'relationship' => 'bhea_council_members_bhea_council_memberships_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Members',
  'bean_name' => 'Bhea_Council_Members',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'id_name' => 'bhea_counc8ee0members_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Council_Memberships"]["fields"]["bhea_council_members_bhea_council_memberships_1_name"] = array (
  'name' => 'bhea_council_members_bhea_council_memberships_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'save' => true,
  'id_name' => 'bhea_counc8ee0members_ida',
  'link' => 'bhea_council_members_bhea_council_memberships_1',
  'table' => 'bhea_council_members',
  'module' => 'Bhea_Council_Members',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Bhea_Council_Memberships"]["fields"]["bhea_counc8ee0members_ida"] = array (
  'name' => 'bhea_counc8ee0members_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE_TITLE',
  'id_name' => 'bhea_counc8ee0members_ida',
  'link' => 'bhea_council_members_bhea_council_memberships_1',
  'table' => 'bhea_council_members',
  'module' => 'Bhea_Council_Members',
  'rname' => 'id',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-06 14:59:28
$dictionary['Bhea_Council_Memberships']['fields']['description']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Council_Memberships']['fields']['description']['dependency']='equal($status,"Renewal Lost")';

 

// created: 2013-12-03 09:19:32
$dictionary["Bhea_Council_Memberships"]["fields"]["bhea_councils_bhea_council_memberships_1"] = array (
  'name' => 'bhea_councils_bhea_council_memberships_1',
  'type' => 'link',
  'relationship' => 'bhea_councils_bhea_council_memberships_1',
  'source' => 'non-db',
  'module' => 'Bhea_Councils',
  'bean_name' => 'Bhea_Councils',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'id_name' => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Council_Memberships"]["fields"]["bhea_councils_bhea_council_memberships_1_name"] = array (
  'name' => 'bhea_councils_bhea_council_memberships_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCILS_TITLE',
  'save' => true,
  'id_name' => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
  'link' => 'bhea_councils_bhea_council_memberships_1',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'name',
);
$dictionary["Bhea_Council_Memberships"]["fields"]["bhea_councils_bhea_council_memberships_1bhea_councils_ida"] = array (
  'name' => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_LBL_BHEA_COUNCILS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE_TITLE',
  'id_name' => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
  'link' => 'bhea_councils_bhea_council_memberships_1',
  'table' => 'bhea_councils',
  'module' => 'Bhea_Councils',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-06 14:56:21
$dictionary['Bhea_Council_Memberships']['fields']['discount_c']['labelValue']='Discount';
$dictionary['Bhea_Council_Memberships']['fields']['discount_c']['enforced']='';
$dictionary['Bhea_Council_Memberships']['fields']['discount_c']['dependency']='';

 

 // created: 2013-12-18 19:26:59
$dictionary['Bhea_Council_Memberships']['fields']['expiry_date']['importable']='false';
$dictionary['Bhea_Council_Memberships']['fields']['expiry_date']['calculated']='true';
$dictionary['Bhea_Council_Memberships']['fields']['expiry_date']['formula']='addDays($start_date,365)';
$dictionary['Bhea_Council_Memberships']['fields']['expiry_date']['enforced']=true;

 

 // created: 2013-12-03 10:49:21
$dictionary['Bhea_Council_Memberships']['fields']['currency']['default']='';
$dictionary['Bhea_Council_Memberships']['fields']['currency']['options']='currency_0';

 

 // created: 2013-12-21 10:56:33
$dictionary['Bhea_Council_Memberships']['fields']['payment_status']['default']='OrderGenerated';

 

// created: 2013-12-03 12:24:34
$dictionary["Bhea_Council_Memberships"]["fields"]["accounts_bhea_council_memberships_1"] = array (
  'name' => 'accounts_bhea_council_memberships_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_council_memberships_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'id_name' => 'accounts_bhea_council_memberships_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Council_Memberships"]["fields"]["accounts_bhea_council_memberships_1_name"] = array (
  'name' => 'accounts_bhea_council_memberships_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bhea_council_memberships_1accounts_ida',
  'link' => 'accounts_bhea_council_memberships_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bhea_Council_Memberships"]["fields"]["accounts_bhea_council_memberships_1accounts_ida"] = array (
  'name' => 'accounts_bhea_council_memberships_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_LBL_ACCOUNTS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE_TITLE',
  'id_name' => 'accounts_bhea_council_memberships_1accounts_ida',
  'link' => 'accounts_bhea_council_memberships_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-13 10:35:05
$dictionary["Bhea_Council_Memberships"]["fields"]["bhea_council_memberships_bhea_orders_1"] = array (
  'name' => 'bhea_council_memberships_bhea_orders_1',
  'type' => 'link',
  'relationship' => 'bhea_council_memberships_bhea_orders_1',
  'source' => 'non-db',
  'module' => 'Bhea_Orders',
  'bean_name' => 'Bhea_Orders',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'id_name' => 'bhea_counc48f0erships_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-04 16:13:36
$dictionary['Bhea_Council_Memberships']['fields']['amount_paid_c']['labelValue']='Amount Paid';
$dictionary['Bhea_Council_Memberships']['fields']['amount_paid_c']['enforced']='';
$dictionary['Bhea_Council_Memberships']['fields']['amount_paid_c']['dependency']='';

 

 // created: 2013-12-06 14:56:54
$dictionary['Bhea_Council_Memberships']['fields']['final_membership_fee_c']['labelValue']='Final Membership Fee';
$dictionary['Bhea_Council_Memberships']['fields']['final_membership_fee_c']['enforced']='';
$dictionary['Bhea_Council_Memberships']['fields']['final_membership_fee_c']['dependency']='';

 

// created: 2013-12-04 16:16:06
$dictionary["Bhea_Council_Memberships"]["fields"]["bhea_council_memberships_bhea_payments_1"] = array (
  'name' => 'bhea_council_memberships_bhea_payments_1',
  'type' => 'link',
  'relationship' => 'bhea_council_memberships_bhea_payments_1',
  'source' => 'non-db',
  'module' => 'Bhea_Payments',
  'bean_name' => 'Bhea_Payments',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'id_name' => 'bhea_counc7982erships_ida',
  'link-type' => 'many',
  'side' => 'left',
);
