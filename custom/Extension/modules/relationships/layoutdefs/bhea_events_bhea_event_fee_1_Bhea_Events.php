<?php
 // created: 2013-12-16 15:30:32
$layout_defs["Bhea_Events"]["subpanel_setup"]['bhea_events_bhea_event_fee_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Event_Fee',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BHEA_EVENTS_BHEA_EVENT_FEE_1_FROM_BHEA_EVENT_FEE_TITLE',
  'get_subpanel_data' => 'bhea_events_bhea_event_fee_1',
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
