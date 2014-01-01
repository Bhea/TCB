<?php
// WARNING: The contents of this file are auto-generated.


// created: 2013-12-18 14:29:54
$dictionary["Document"]["fields"]["bhea_finance_performance_documents_1"] = array (
  'name' => 'bhea_finance_performance_documents_1',
  'type' => 'link',
  'relationship' => 'bhea_finance_performance_documents_1',
  'source' => 'non-db',
  'module' => 'Bhea_finance_performance',
  'bean_name' => 'Bhea_finance_performance',
  'side' => 'right',
  'vname' => 'LBL_BHEA_FINANCE_PERFORMANCE_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'id_name' => 'bhea_finance_performance_documents_1bhea_finance_performance_ida',
  'link-type' => 'one',
);
$dictionary["Document"]["fields"]["bhea_finance_performance_documents_1_name"] = array (
  'name' => 'bhea_finance_performance_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_FINANCE_PERFORMANCE_DOCUMENTS_1_FROM_BHEA_FINANCE_PERFORMANCE_TITLE',
  'save' => true,
  'id_name' => 'bhea_finance_performance_documents_1bhea_finance_performance_ida',
  'link' => 'bhea_finance_performance_documents_1',
  'table' => 'bhea_finance_performance',
  'module' => 'Bhea_finance_performance',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["bhea_finance_performance_documents_1bhea_finance_performance_ida"] = array (
  'name' => 'bhea_finance_performance_documents_1bhea_finance_performance_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_BHEA_FINANCE_PERFORMANCE_DOCUMENTS_1_FROM_LBL_BHEA_FINANCE_PERFORMANCE_DOCUMENTS_1_FROM_DOCUMENTS_TITLE_TITLE',
  'id_name' => 'bhea_finance_performance_documents_1bhea_finance_performance_ida',
  'link' => 'bhea_finance_performance_documents_1',
  'table' => 'bhea_finance_performance',
  'module' => 'Bhea_finance_performance',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
