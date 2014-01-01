<?php
$viewdefs['Contracts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'SHARE',
          2 => 'DUPLICATE',
          3 => 'DELETE',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_contract_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_CONTRACT_NAME',
          ),
          1 => 'status',
        ),
        1 => 
        array (
          0 => 'reference_code',
          1 => 'start_date',
        ),
        2 => 
        array (
          0 => 'account_name',
          1 => 'end_date',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'opportunity_name',
            'label' => 'LBL_OPPORTUNITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'type',
            'label' => 'LBL_CONTRACT_TYPE',
          ),
          1 => 
          array (
            'name' => 'contract_term',
            'customCode' => '{$fields.contract_term.value}&nbsp;{if !empty($fields.contract_term.value) }{$MOD.LBL_DAYS}{/if}',
            'label' => 'LBL_CONTRACT_TERM',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'total_contract_value',
            'label' => '{$MOD.LBL_TOTAL_CONTRACT_VALUE} ({$fields.currency_name.value})',
          ),
          1 => 'company_signed_date',
        ),
        6 => 
        array (
          0 => 'expiration_notice',
          1 => 'customer_signed_date',
        ),
        7 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'bhea_contractors_contracts_1_name',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value}&nbsp;{$APP.LBL_BY}&nbsp;{$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        1 => 
        array (
          0 => 'team_name',
          1 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value}&nbsp;{$APP.LBL_BY}&nbsp;{$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
      ),
    ),
  ),
);
