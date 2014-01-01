<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1,'Payment Module','custom/modules/Bhea_Memberships/payMem.php','payMem','payMem');
$hook_array['after_relationship_delete'] = Array();
$hook_array['after_relationship_delete'][] = Array(1,'Unlink of the Record','custom/modules/Bhea_Memberships/payMem_unlink.php','payMem_unlink','payMem_unlink');

?>
