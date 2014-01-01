<?php
 // created: 2013-12-24 09:35:41
$layout_defs["Bhea_Orders"]["subpanel_setup"]['bhea_orders_bhea_invoices_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Invoices',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BHEA_ORDERS_BHEA_INVOICES_1_FROM_BHEA_INVOICES_TITLE',
  'get_subpanel_data' => 'bhea_orders_bhea_invoices_1',
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
