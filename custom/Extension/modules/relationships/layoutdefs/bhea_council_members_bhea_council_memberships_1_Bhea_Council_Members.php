<?php
 // created: 2013-12-09 18:32:17
$layout_defs["Bhea_Council_Members"]["subpanel_setup"]['bhea_council_members_bhea_council_memberships_1'] = array (
  'order' => 100,
  'module' => 'Bhea_Council_Memberships',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BHEA_COUNCIL_MEMBERS_BHEA_COUNCIL_MEMBERSHIPS_1_FROM_BHEA_COUNCIL_MEMBERSHIPS_TITLE',
  'get_subpanel_data' => 'bhea_council_members_bhea_council_memberships_1',
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
