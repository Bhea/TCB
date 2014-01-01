<?php
/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

$relationships = array (
  'bhea_councils_modified_user' => 
  array (
    'id' => '3871f3c7-7d28-7427-f26d-52afd2a7dc62',
    'relationship_name' => 'bhea_councils_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Councils',
    'rhs_table' => 'bhea_councils',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_councils_created_by' => 
  array (
    'id' => '389f7124-ecb1-3a99-7562-52afd28beda6',
    'relationship_name' => 'bhea_councils_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Councils',
    'rhs_table' => 'bhea_councils',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_councils_assigned_user' => 
  array (
    'id' => '39895bf3-ed45-3960-e14c-52afd2c608c3',
    'relationship_name' => 'bhea_councils_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Councils',
    'rhs_table' => 'bhea_councils',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_councils_opportunities_1' => 
  array (
    'id' => '5d8e3457-b953-7f80-540b-52afd2590b29',
    'relationship_name' => 'bhea_councils_opportunities_1',
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'join_table' => 'bhea_councils_opportunities_1_c',
    'join_key_lhs' => 'bhea_councils_opportunities_1bhea_councils_ida',
    'join_key_rhs' => 'bhea_councils_opportunities_1opportunities_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'bhea_member_levels_bhea_councils_1' => 
  array (
    'id' => '5dcccdda-d1e5-90cf-b315-52afd2e89fee',
    'relationship_name' => 'bhea_member_levels_bhea_councils_1',
    'lhs_module' => 'Bhea_member_levels',
    'lhs_table' => 'bhea_member_levels',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Councils',
    'rhs_table' => 'bhea_councils',
    'rhs_key' => 'id',
    'join_table' => 'bhea_member_levels_bhea_councils_1_c',
    'join_key_lhs' => 'bhea_member_levels_bhea_councils_1bhea_member_levels_ida',
    'join_key_rhs' => 'bhea_member_levels_bhea_councils_1bhea_councils_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'bhea_councils_bhea_council_members_1' => 
  array (
    'id' => '5f2956fd-422d-29ab-c683-52afd28bf32b',
    'relationship_name' => 'bhea_councils_bhea_council_members_1',
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Members',
    'rhs_table' => 'bhea_council_members',
    'rhs_key' => 'id',
    'join_table' => 'bhea_councils_bhea_council_members_1_c',
    'join_key_lhs' => 'bhea_councils_bhea_council_members_1bhea_councils_ida',
    'join_key_rhs' => 'bhea_councils_bhea_council_members_1bhea_council_members_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'ForBhea_councils',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'bhea_councils_bhea_council_memberships_1' => 
  array (
    'id' => '6088ae22-dfcf-1f9a-6bae-52afd2d5ff02',
    'relationship_name' => 'bhea_councils_bhea_council_memberships_1',
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'id',
    'rhs_module' => 'Bhea_Council_Memberships',
    'rhs_table' => 'bhea_council_memberships',
    'rhs_key' => 'id',
    'join_table' => 'bhea_councils_bhea_council_memberships_1_c',
    'join_key_lhs' => 'bhea_councils_bhea_council_memberships_1bhea_councils_ida',
    'join_key_rhs' => 'bhea_councdfbferships_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'ForBhea_councils',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'bhea_councils_bhea_council_members_2' => 
  array (
    'rhs_label' => 'Past Council Members',
    'lhs_label' => 'Groups',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'Bhea_Councils',
    'rhs_module' => 'Bhea_Council_Members',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'bhea_councils_bhea_council_members_2',
  ),
  'bhea_councils_activities_calls' => 
  array (
    'id' => '38cd2bcd-6c1e-6754-f786-52afd21d2d34',
    'relationship_name' => 'bhea_councils_activities_calls',
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Councils',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_councils_activities_meetings' => 
  array (
    'id' => '38cd2bcd-6c1e-6754-f786-52afd21d2d34',
    'relationship_name' => 'bhea_councils_activities_meetings',
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Councils',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_councils_activities_notes' => 
  array (
    'id' => '38cd2bcd-6c1e-6754-f786-52afd21d2d34',
    'relationship_name' => 'bhea_councils_activities_notes',
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Councils',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_councils_activities_tasks' => 
  array (
    'id' => '38cd2bcd-6c1e-6754-f786-52afd21d2d34',
    'relationship_name' => 'bhea_councils_activities_tasks',
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Councils',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'bhea_councils_activities_emails' => 
  array (
    'id' => '38cd2bcd-6c1e-6754-f786-52afd21d2d34',
    'relationship_name' => 'bhea_councils_activities_emails',
    'lhs_module' => 'Bhea_Councils',
    'lhs_table' => 'bhea_councils',
    'lhs_key' => 'id',
    'rhs_module' => 'Emails',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Bhea_Councils',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => true,
    'is_custom' => false,
    'from_studio' => true,
  ),
);