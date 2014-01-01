<?php
// created: 2013-12-21 10:49:25
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'bhea_member_levels_bhea_memberships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1_FROM_BHEA_MEMBER_LEVELS_TITLE',
    'id' => 'BHEA_MEMBER_LEVELS_BHEA_MEMBERSHIPS_1BHEA_MEMBER_LEVELS_IDA',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Bhea_member_levels',
    'target_record_key' => 'bhea_member_levels_bhea_memberships_1bhea_member_levels_ida',
  ),
  'mem_type' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_MEM_TYPE',
    'width' => '10%',
  ),
  'mem_period' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MEM_PERIOD',
    'width' => '10%',
    'default' => true,
  ),
  'final_mem_fee_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_FINAL_MEM_FEE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'start_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'expiry_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_EXPIRY_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);