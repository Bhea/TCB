<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1,'Record creation in Membership Module','custom/modules/Accounts/logic_hooks_classes.php','logic_hooks_classes','after_save_method');

$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1,'Populating LE details','custom/modules/Accounts/Acc_cont.php','Acc_cont','Acc_cont');
$hook_array['after_relationship_add'][] = Array(2,'Populating financial member details','custom/modules/Accounts/Acc_member.php','Acc_member','Acc_member');
$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(1,'Unlink of the Record','custom/modules/Accounts/Acc_member_unlink.php','Acc_member_unlink','Acc_member_unlink');

//$hook_array['after_save'][] = Array(3,'Record creation in Order Module','custom/modules/Opportunities/order_record.php','order_record','order_record_method');
//$hook_array['after_save'][] = Array(4,'Change contact type or related Contact record','custom/modules/Opportunities/after_save_logic_hook.php','AfterSaveOpportunities','salesStageChange');

?>
