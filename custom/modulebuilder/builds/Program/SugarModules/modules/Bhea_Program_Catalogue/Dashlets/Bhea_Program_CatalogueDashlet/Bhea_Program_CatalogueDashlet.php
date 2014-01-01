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

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/Bhea_Program_Catalogue/Bhea_Program_Catalogue.php');

class Bhea_Program_CatalogueDashlet extends DashletGeneric { 
    function Bhea_Program_CatalogueDashlet($id, $def = null) {
		global $current_user, $app_strings;
		require('modules/Bhea_Program_Catalogue/metadata/dashletviewdefs.php');

        parent::DashletGeneric($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'Bhea_Program_Catalogue');

        $this->searchFields = $dashletData['Bhea_Program_CatalogueDashlet']['searchFields'];
        $this->columns = $dashletData['Bhea_Program_CatalogueDashlet']['columns'];

        $this->seedBean = new Bhea_Program_Catalogue();        
    }
}