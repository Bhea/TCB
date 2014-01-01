<?php

$hook_version = 1;
$hook_array = Array();

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1,'Record creation in Speakers Module','custom/modules/Opportunities/Speakers.php','speakers_record','speakers_record_method');
$hook_array['after_save'][] = Array(1,'Record creation in Sponsors Module','custom/modules/Opportunities/sponsors.php','sponsors_record','sponsors_record_method');
$hook_array['after_save'][] = Array(1,'Change contact type or related Contact record','custom/modules/Opportunities/after_save_logic_hook.php','AfterSaveOpportunities','salesStageChange');

$hook_array['after_relationship_add'] = Array();
$hook_array['after_relationship_add'][] = Array(1, 'Loading the relatioships', 'custom/modules/Opportunities/after_relationship.php', 'after_relationship_class', 'after_relationship_method');

//~ $hook_array['after_relationship_delete'] = Array();
//~ $hook_array['after_relationship_delete'][] = Array(1, 'Loading the relatioships', 'custom/modules/Opportunities/after_relationship_delete.php', 'after_relationship_delete_class', 'after_relationship_delete_method');
?>
