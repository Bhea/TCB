<?php
// created: 2013-12-21 10:48:48
$subpanel_layout['list_fields'] = array (
  'full_name' => 
  array (
    'type' => 'fullname',
    'link' => true,
    'studio' => 
    array (
      'listview' => false,
    ),
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'role_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ROLE',
    'width' => '10%',
  ),
  'lead_source' => 
  array (
    'vname' => 'LBL_LIST_LEAD_SOURCE',
    'width' => '10%',
    'default' => true,
  ),
  'opportunity_amount' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_OPPORTUNITY_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'prod_serv_interest_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PROD_SERV_INTEREST',
    'width' => '10%',
  ),
  'opportunity_date_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_OPPORTUNITY_DATE',
    'width' => '10%',
  ),
  'campaign_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CAMPAIGN',
    'id' => 'CAMPAIGN_ID',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Campaigns',
    'target_record_key' => 'campaign_id',
  ),
  'first_name' => 
  array (
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'usage' => 'query_only',
  ),
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
);