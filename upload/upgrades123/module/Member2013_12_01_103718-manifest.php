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


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.1.0',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
  ),
  'readme' => '',
  'key' => 'Bhea',
  'author' => 'Bhea',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Member',
  'published_date' => '2013-12-01 05:07:17',
  'type' => 'module',
  'version' => 1385874437,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Member',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'Bhea_member_levels',
      'class' => 'Bhea_member_levels',
      'path' => 'modules/Bhea_member_levels/Bhea_member_levels.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'Bhea_Memberships',
      'class' => 'Bhea_Memberships',
      'path' => 'modules/Bhea_Memberships/Bhea_Memberships.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'Bhea_finance_performance',
      'class' => 'Bhea_finance_performance',
      'path' => 'modules/Bhea_finance_performance/Bhea_finance_performance.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Bhea_member_levels',
      'to' => 'modules/Bhea_member_levels',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Bhea_Memberships',
      'to' => 'modules/Bhea_Memberships',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Bhea_finance_performance',
      'to' => 'modules/Bhea_finance_performance',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
);