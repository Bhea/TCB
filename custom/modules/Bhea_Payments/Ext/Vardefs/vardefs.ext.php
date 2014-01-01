<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-04 16:15:42
$dictionary["Bhea_Payments"]["fields"]["bhea_memberships_bhea_payments_1"] = array (
  'name' => 'bhea_memberships_bhea_payments_1',
  'type' => 'link',
  'relationship' => 'bhea_memberships_bhea_payments_1',
  'source' => 'non-db',
  'module' => 'Bhea_Memberships',
  'bean_name' => 'Bhea_Memberships',
  'side' => 'right',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE',
  'id_name' => 'bhea_memberships_bhea_payments_1bhea_memberships_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Payments"]["fields"]["bhea_memberships_bhea_payments_1_name"] = array (
  'name' => 'bhea_memberships_bhea_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_MEMBERSHIPS_TITLE',
  'save' => true,
  'id_name' => 'bhea_memberships_bhea_payments_1bhea_memberships_ida',
  'link' => 'bhea_memberships_bhea_payments_1',
  'table' => 'bhea_memberships',
  'module' => 'Bhea_Memberships',
  'rname' => 'name',
);
$dictionary["Bhea_Payments"]["fields"]["bhea_memberships_bhea_payments_1bhea_memberships_ida"] = array (
  'name' => 'bhea_memberships_bhea_payments_1bhea_memberships_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_LBL_BHEA_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE_TITLE',
  'id_name' => 'bhea_memberships_bhea_payments_1bhea_memberships_ida',
  'link' => 'bhea_memberships_bhea_payments_1',
  'table' => 'bhea_memberships',
  'module' => 'Bhea_Memberships',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


// created: 2013-12-24 18:43:43
$dictionary["Bhea_Payments"]["fields"]["accounts_bhea_payments_1"] = array (
  'name' => 'accounts_bhea_payments_1',
  'type' => 'link',
  'relationship' => 'accounts_bhea_payments_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE',
  'id_name' => 'accounts_bhea_payments_1accounts_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Payments"]["fields"]["accounts_bhea_payments_1_name"] = array (
  'name' => 'accounts_bhea_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_PAYMENTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bhea_payments_1accounts_ida',
  'link' => 'accounts_bhea_payments_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bhea_Payments"]["fields"]["accounts_bhea_payments_1accounts_ida"] = array (
  'name' => 'accounts_bhea_payments_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BHEA_PAYMENTS_1_FROM_LBL_ACCOUNTS_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE_TITLE',
  'id_name' => 'accounts_bhea_payments_1accounts_ida',
  'link' => 'accounts_bhea_payments_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-25 16:27:27

 

// created: 2013-12-04 16:16:06
$dictionary["Bhea_Payments"]["fields"]["bhea_council_memberships_bhea_payments_1"] = array (
  'name' => 'bhea_council_memberships_bhea_payments_1',
  'type' => 'link',
  'relationship' => 'bhea_council_memberships_bhea_payments_1',
  'source' => 'non-db',
  'module' => 'Bhea_Council_Memberships',
  'bean_name' => 'Bhea_Council_Memberships',
  'side' => 'right',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE',
  'id_name' => 'bhea_counc7982erships_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Payments"]["fields"]["bhea_council_memberships_bhea_payments_1_name"] = array (
  'name' => 'bhea_council_memberships_bhea_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'save' => true,
  'id_name' => 'bhea_counc7982erships_ida',
  'link' => 'bhea_council_memberships_bhea_payments_1',
  'table' => 'bhea_council_memberships',
  'module' => 'Bhea_Council_Memberships',
  'rname' => 'name',
);
$dictionary["Bhea_Payments"]["fields"]["bhea_counc7982erships_ida"] = array (
  'name' => 'bhea_counc7982erships_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_LBL_BHEA_COUNCIL_MEMBERSHIPS_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE_TITLE',
  'id_name' => 'bhea_counc7982erships_ida',
  'link' => 'bhea_council_memberships_bhea_payments_1',
  'table' => 'bhea_council_memberships',
  'module' => 'Bhea_Council_Memberships',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-25 16:30:31
$dictionary['Bhea_Payments']['fields']['bank_name_c']['labelValue']='Bank Name';
$dictionary['Bhea_Payments']['fields']['bank_name_c']['enforced']='';
$dictionary['Bhea_Payments']['fields']['bank_name_c']['dependency']='';

 

 // created: 2013-12-25 16:30:12
$dictionary['Bhea_Payments']['fields']['check_dd_transaction_date_c']['labelValue']='Check/DD/Transaction Date';
$dictionary['Bhea_Payments']['fields']['check_dd_transaction_date_c']['enforced']='';
$dictionary['Bhea_Payments']['fields']['check_dd_transaction_date_c']['dependency']='';

 

// created: 2013-12-09 10:02:24
$dictionary["Bhea_Payments"]["fields"]["bhea_orders_bhea_payments_1"] = array (
  'name' => 'bhea_orders_bhea_payments_1',
  'type' => 'link',
  'relationship' => 'bhea_orders_bhea_payments_1',
  'source' => 'non-db',
  'module' => 'Bhea_Orders',
  'bean_name' => 'Bhea_Orders',
  'side' => 'right',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE',
  'id_name' => 'bhea_orders_bhea_payments_1bhea_orders_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Payments"]["fields"]["bhea_orders_bhea_payments_1_name"] = array (
  'name' => 'bhea_orders_bhea_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_PAYMENTS_1_FROM_BHEA_ORDERS_TITLE',
  'save' => true,
  'id_name' => 'bhea_orders_bhea_payments_1bhea_orders_ida',
  'link' => 'bhea_orders_bhea_payments_1',
  'table' => 'bhea_orders',
  'module' => 'Bhea_Orders',
  'rname' => 'name',
);
$dictionary["Bhea_Payments"]["fields"]["bhea_orders_bhea_payments_1bhea_orders_ida"] = array (
  'name' => 'bhea_orders_bhea_payments_1bhea_orders_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_ORDERS_BHEA_PAYMENTS_1_FROM_LBL_BHEA_ORDERS_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE_TITLE',
  'id_name' => 'bhea_orders_bhea_payments_1bhea_orders_ida',
  'link' => 'bhea_orders_bhea_payments_1',
  'table' => 'bhea_orders',
  'module' => 'Bhea_Orders',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-25 16:48:28
$dictionary['Bhea_Payments']['fields']['payment_status']['default']='';

 

// created: 2013-12-03 15:38:48
$dictionary["Bhea_Payments"]["fields"]["bhea_invoices_bhea_payments_1"] = array (
  'name' => 'bhea_invoices_bhea_payments_1',
  'type' => 'link',
  'relationship' => 'bhea_invoices_bhea_payments_1',
  'source' => 'non-db',
  'module' => 'Bhea_Invoices',
  'bean_name' => 'Bhea_Invoices',
  'side' => 'right',
  'vname' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE',
  'id_name' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
  'link-type' => 'one',
);
$dictionary["Bhea_Payments"]["fields"]["bhea_invoices_bhea_payments_1_name"] = array (
  'name' => 'bhea_invoices_bhea_payments_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_INVOICES_TITLE',
  'save' => true,
  'id_name' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
  'link' => 'bhea_invoices_bhea_payments_1',
  'table' => 'bhea_invoices',
  'module' => 'Bhea_Invoices',
  'rname' => 'name',
);
$dictionary["Bhea_Payments"]["fields"]["bhea_invoices_bhea_payments_1bhea_invoices_ida"] = array (
  'name' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_LBL_BHEA_INVOICES_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE_TITLE',
  'id_name' => 'bhea_invoices_bhea_payments_1bhea_invoices_ida',
  'link' => 'bhea_invoices_bhea_payments_1',
  'table' => 'bhea_invoices',
  'module' => 'Bhea_Invoices',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);


 // created: 2013-12-25 16:30:54
$dictionary['Bhea_Payments']['fields']['branch_name_c']['labelValue']='Branch Name';
$dictionary['Bhea_Payments']['fields']['branch_name_c']['enforced']='';
$dictionary['Bhea_Payments']['fields']['branch_name_c']['dependency']='';

 

 // created: 2013-12-25 16:32:08
$dictionary['Bhea_Payments']['fields']['remarks_c']['labelValue']='Remarks';
$dictionary['Bhea_Payments']['fields']['remarks_c']['enforced']='';
$dictionary['Bhea_Payments']['fields']['remarks_c']['dependency']='';

 

 // created: 2013-12-20 13:12:48
$dictionary['Bhea_Payments']['fields']['payment_date']['required']=true;

 

 // created: 2013-12-25 16:29:32
$dictionary['Bhea_Payments']['fields']['check_dd_transaction_nono_c']['labelValue']='Check/DD/Transaction No';
$dictionary['Bhea_Payments']['fields']['check_dd_transaction_nono_c']['enforced']='';
$dictionary['Bhea_Payments']['fields']['check_dd_transaction_nono_c']['dependency']='';

 