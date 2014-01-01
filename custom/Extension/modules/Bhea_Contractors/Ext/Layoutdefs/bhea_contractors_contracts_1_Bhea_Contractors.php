<?php
 // created: 2013-12-09 19:01:26
$layout_defs["Bhea_Contractors"]["subpanel_setup"]['bhea_contractors_contracts_1'] = array (
  'order' => 100,
  'module' => 'Contracts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BHEA_CONTRACTORS_CONTRACTS_1_FROM_CONTRACTS_TITLE',
  'get_subpanel_data' => 'bhea_contractors_contracts_1',
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
