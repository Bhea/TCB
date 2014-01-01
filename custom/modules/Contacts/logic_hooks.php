<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1,'For edited record of company-contact','custom/modules/Contacts/Comp_cont.php','Comp_cont','Comp_cont');
$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(1,'For edited record of company-contact','custom/modules/Contacts/Comp_cont_unlink.php','Comp_cont_unlink','Comp_cont_unlink');

?>
