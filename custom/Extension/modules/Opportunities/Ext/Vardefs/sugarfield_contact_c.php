<?php
 // created: 2013-12-28 11:53:13
$dictionary['Opportunity']['fields']['contact_c']['labelValue']='Contacts';
$dictionary['Opportunity']['fields']['contact_c']['dependency']='or(equal($opportunity_type,"Council"),and(equal($opportunity_type,"prod_service"),equal($subtype_c,"conference"),equal($conference_sub_type_c,"Speakers")))';

 ?>