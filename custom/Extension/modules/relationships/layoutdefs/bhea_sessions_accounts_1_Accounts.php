<?php
 // created: 2013-12-20 11:09:25
$layout_defs["Accounts"]["subpanel_setup"]['bhea_sessions_accounts_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Sessions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BHEA_SESSIONS_ACCOUNTS_1_FROM_BHEA_SESSIONS_TITLE',
  'get_subpanel_data' => 'bhea_sessions_accounts_1',
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
