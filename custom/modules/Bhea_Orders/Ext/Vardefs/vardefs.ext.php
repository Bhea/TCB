<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-13 10:35:05
$dictionary["Bhea_Orders"]["fields"]["bhea_council_memberships_bhea_orders_1"] = array (
  'name' => 'bhea_council_memberships_bhea_orders_1',
  'type' => 'link',
  'relationship' => 'bhea_council_memberships_bhea_orders_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Memberships',
  'bean_name' => 'Bhea_Council_Memberships',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE',
  'id_name' => 'bhea_counc48f0erships_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Orders"]["fields"]["bhea_council_memberships_bhea_orders_1_name"] = array (
  'name' => 'bhea_council_memberships_bhea_orders_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'save' => true,
  'id_name' => 'bhea_counc48f0erships_ida',
  'link' => 'bhea_council_memberships_bhea_orders_1',
  'table' => 'bhea_council_memberships',
  'module' => 'Bhea_Council_Memberships',
  'rname' => 'name',
);
$dictionary["Bhea_Orders"]["fields"]["bhea_counc48f0erships_ida"] = array (
  'name' => 'bhea_counc48f0erships_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_ORDERS_1_FROM_LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE_TITLE',
  'id_name' => 'bhea_counc48f0erships_ida',
  'link' => 'bhea_council_memberships_bhea_orders_1',
  'table' => 'bhea_council_memberships',
  'module' => 'Bhea_Council_Memberships',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-24 09:35:41
$dictionary["Bhea_Orders"]["fields"]["bhea_orders_bhea_invoices_1"] = array (
  'name' => 'bhea_orders_bhea_invoices_1',
  'type' => 'link',
  'relationship' => 'bhea_orders_bhea_invoices_1',
  'source' => 'non-db',
  'module' => 'Bhea_Invoices',
  'bean_name' => 'Bhea_Invoices',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_ORDERS_TITLE',
  'id_name' => 'bhea_orders_bhea_invoices_1bhea_orders_ida',
  'link-type' => 'many',
  'side' => 'left',
);


// created: 2013-12-13 10:34:26
$dictionary["Bhea_Orders"]["fields"]["bhea_council_members_bhea_orders_1"] = array (
  'name' => 'bhea_council_members_bhea_orders_1',
  'type' => 'link',
  'relationship' => 'bhea_council_members_bhea_orders_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Members',
  'bean_name' => 'Bhea_Council_Members',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE',
  'id_name' => 'bhea_council_members_bhea_orders_1bhea_council_members_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Orders"]["fields"]["bhea_council_members_bhea_orders_1_name"] = array (
  'name' => 'bhea_council_members_bhea_orders_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_ORDERS_1_FROM_BHEA_COUNCIL_MEMBERS_TITLE',
  'save' => true,
  'id_name' => 'bhea_council_members_bhea_orders_1bhea_council_members_ida',
  'link' => 'bhea_council_members_bhea_orders_1',
  'table' => 'bhea_council_members',
  'module' => 'Bhea_Council_Members',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Bhea_Orders"]["fields"]["bhea_council_members_bhea_orders_1bhea_council_members_ida"] = array (
  'name' => 'bhea_council_members_bhea_orders_1bhea_council_members_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_ORDERS_1_FROM_LBL_BHEA_COUNCIL_MEMBERS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE_TITLE',
  'id_name' => 'bhea_council_members_bhea_orders_1bhea_council_members_ida',
  'link' => 'bhea_council_members_bhea_orders_1',
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


// created: 2013-12-17 09:47:24
$dictionary["Bhea_Orders"]["fields"]["bhea_memberships_bhea_orders_1"] = array (
  'name' => 'bhea_memberships_bhea_orders_1',
  'type' => 'link',
  'relationship' => 'bhea_memberships_bhea_orders_1',
  'source' => 'non-db',
  'module' => 'Bhea_Memberships',
  'bean_name' => 'Bhea_Memberships',
  'side' => 'right',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE',
  'id_name' => 'bhea_memberships_bhea_orders_1bhea_memberships_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Orders"]["fields"]["bhea_memberships_bhea_orders_1_name"] = array (
  'name' => 'bhea_memberships_bhea_orders_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
  'save' => true,
  'id_name' => 'bhea_memberships_bhea_orders_1bhea_memberships_ida',
  'link' => 'bhea_memberships_bhea_orders_1',
  'table' => 'bhea_memberships',
  'module' => 'Bhea_Memberships',
  'rname' => 'name',
);
$dictionary["Bhea_Orders"]["fields"]["bhea_memberships_bhea_orders_1bhea_memberships_ida"] = array (
  'name' => 'bhea_memberships_bhea_orders_1bhea_memberships_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_BHEA_ORDERS_1_FROM_LBL_BHEA_MEMBERSHIPS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE_TITLE',
  'id_name' => 'bhea_memberships_bhea_orders_1bhea_memberships_ida',
  'link' => 'bhea_memberships_bhea_orders_1',
  'table' => 'bhea_memberships',
  'module' => 'Bhea_Memberships',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-20 18:21:46
$dictionary['Bhea_Orders']['fields']['id_auto_c']['labelValue']='ID';
$dictionary['Bhea_Orders']['fields']['id_auto_c']['full_text_search']=array (
  'boost' => '0',
);
$dictionary['Bhea_Orders']['fields']['id_auto_c']['enforced']='';
$dictionary['Bhea_Orders']['fields']['id_auto_c']['dependency']='';
$dictionary['Bhea_Orders']['fields']['id_auto_c']['autoinc_next']='1000';
$dictionary['Bhea_Orders']['fields']['id_auto_c']['auto_increment']=true;

 

// created: 2013-12-09 10:02:24
$dictionary["Bhea_Orders"]["fields"]["bhea_orders_bhea_payments_1"] = array (
  'name' => 'bhea_orders_bhea_payments_1',
  'type' => 'link',
  'relationship' => 'bhea_orders_bhea_payments_1',
  'source' => 'non-db',
  'module' => 'Bhea_Payments',
  'bean_name' => 'Bhea_Payments',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_PAYMENTS_1_FROM_BHEA_ORDERS_TITLE',
  'id_name' => 'bhea_orders_bhea_payments_1bhea_orders_ida',
  'link-type' => 'many',
  'side' => 'left',
);


 // created: 2013-12-13 18:11:27
$dictionary['Bhea_Orders']['fields']['payment_received']['importable']='false';
$dictionary['Bhea_Orders']['fields']['payment_received']['calculated']='true';
$dictionary['Bhea_Orders']['fields']['payment_received']['formula']='rollupSum($bhea_orders_bhea_payments_1,"currency")';
$dictionary['Bhea_Orders']['fields']['payment_received']['enforced']=true;

 

// created: 2013-12-04 09:28:35
$dictionary["Bhea_Orders"]["fields"]["accounts_bhea_orders_1"] = array (
  'name' => 'accounts_bhea_orders_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_orders_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE',
  'id_name' => 'accounts_bhea_orders_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Orders"]["fields"]["accounts_bhea_orders_1_name"] = array (
  'name' => 'accounts_bhea_orders_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bhea_orders_1accounts_ida',
  'link' => 'accounts_bhea_orders_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bhea_Orders"]["fields"]["accounts_bhea_orders_1accounts_ida"] = array (
  'name' => 'accounts_bhea_orders_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_LBL_ACCOUNTS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE_TITLE',
  'id_name' => 'accounts_bhea_orders_1accounts_ida',
  'link' => 'accounts_bhea_orders_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
