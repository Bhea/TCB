<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

$module_name = 'Calendar';
$viewdefs[$module_name]['base']['menu']['header'] = array(
    array(
        'route'=>'#bwc/index.php?module=Meetings&action=EditView&return_module=Meetings&return_action=DetailView',
        'label' =>'LNK_NEW_MEETING',
        'acl_action'=>'create',
        'acl_module'=>'Meetings',
        'icon' => 'icon-plus',
    ),
    array(
        'route'=>'#bwc/index.php?module=Calls&action=EditView&return_module=Calls&return_action=DetailView',
        'label' =>'LNK_NEW_CALL',
        'acl_action'=>'create',
        'acl_module'=>'Calls',
        'icon' => 'icon-plus',
    ),
    array(
        'route'=>'#bwc/index.php?module=Tasks&action=EditView&return_module=Tasks&return_action=DetailView',
        'label' =>'LNK_NEW_TASK',
        'acl_action'=>'create',
        'acl_module'=>'Tasks',
        'icon' => 'icon-plus',
    ),
    array(
        'route'=>'#bwc/index.php?module=Calendar&action=index&view=day',
        'label' =>'LNK_VIEW_CALENDAR',
        'acl_action'=>'list',
        'acl_module'=>$module_name,
        'icon' => 'icon-reorder',
    ),


);