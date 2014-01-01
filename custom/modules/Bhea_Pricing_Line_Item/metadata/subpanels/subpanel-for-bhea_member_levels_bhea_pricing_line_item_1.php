<?php
// created: 2013-12-19 16:45:50
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'from_revenue_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_FROM_REVENUE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'to_revenue_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_TO_REVENUE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'membership_price_c' => 
  array (
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_MEMBERSHIP_PRICE',
    'currency_format' => true,
    'width' => '10%',
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