<?php
 // created: 2013-12-13 10:34:26
$layout_defs["Bhea_Council_Members"]["subpanel_setup"]['bhea_council_members_bhea_orders_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Orders',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_ORDERS_1_FROM_BHEA_ORDERS_TITLE',
  'get_subpanel_data' => 'bhea_council_members_bhea_orders_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
