<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1,'Council Member Inactive','custom/modules/Bhea_Council_Members/after_save_council_mem.php','AfterSaveCouncilMem','councilPastMember');
//~ $hook_array['before_save'][] = Array(2,'Council Member Inactive','custom/modules/Bhea_Council_Members/after_save_council_mem_add.php','AfterSaveCouncilMemAdd','councilPastMemberAdd');

?>
