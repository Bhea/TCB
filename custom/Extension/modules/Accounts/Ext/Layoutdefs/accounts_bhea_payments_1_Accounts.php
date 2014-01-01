<?php
 // created: 2013-12-24 18:43:42
$layout_defs["Accounts"]["subpanel_setup"]['accounts_bhea_payments_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Payments',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_BHEA_PAYMENTS_1_FROM_BHEA_PAYMENTS_TITLE',
  'get_subpanel_data' => 'accounts_bhea_payments_1',
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
