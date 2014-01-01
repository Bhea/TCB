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

	

$mod_strings = array (
  'LBL_AM' => 'Paradite',
  'LBL_APPLY_BUTTON' => 'Apliko',
  'LBL_ASSIGNED_TO_NAME' => 'Drejtuar',
  'LBL_BUSY' => 'e zënë',
  'LBL_CANCEL_BUTTON' => 'Anulo',
  'LBL_CLOSE_BUTTON' => 'Mbyll:',
  'LBL_CONFIRM_REMOVE' => 'A jeni të sigurt që dëshironi të largoni këtë regjistrim?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'A jeni të sigurt që dëshironi të largoni të gjtha regjistrimet periodike?',
  'LBL_CONFLICT' => 'konflikt',
  'LBL_CREATE_CALL' => 'Thirje identifikuese',
  'LBL_CREATE_MEETING' => 'Cakto mbledhje',
  'LBL_CREATE_NEW_RECORD' => 'Krijo aktivitet',
  'LBL_DATE' => 'Data dhe ora e nisjes',
  'LBL_DATE_END_ERROR' => 'Data e fundit është para se të fillojë data',
  'LBL_DATE_TIME' => 'Data dhe ora',
  'LBL_DAY' => 'dita',
  'LBL_DELETE_BUTTON' => 'Fshi',
  'LBL_DURATION' => 'Kohëzgjatja',
  'LBL_EDIT_ALL_RECURRENCES' => 'ndrysho të gjitha përsëritjet',
  'LBL_EDIT_RECORD' => 'Ndrysho aktivitet',
  'LBL_EDIT_USERLIST' => 'Lista e përdoruesve',
  'LBL_ERROR_LOADING' => 'gabim gjatë ngarkimit',
  'LBL_ERROR_SAVING' => 'Gabim gjatë ruajtjes',
  'LBL_FILTER_BY_TEAM' => 'Filtro listën e përdoruesve sipas grupit:',
  'LBL_GENERAL_TAB' => 'Detajet',
  'LBL_GOTO_DATE' => 'Goto Data',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_INFO_DESC' => 'Përshkrim',
  'LBL_INFO_DUE_DT' => 'Data e caktuar',
  'LBL_INFO_DURATION' => 'Kohëzgjatja',
  'LBL_INFO_NAME' => 'subjekti',
  'LBL_INFO_RELATED_TO' => 'në lidhje me',
  'LBL_INFO_START_DT' => 'Data e nisjes',
  'LBL_INFO_TITLE' => 'Detaje plotësuese',
  'LBL_LOADING' => 'ngarkimi...',
  'LBL_MINS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Kalendari',
  'LBL_MODULE_NAME_SINGULAR' => 'Kalendar',
  'LBL_MODULE_TITLE' => 'Kalendari',
  'LBL_MONTH' => 'Muaji',
  'LBL_NEXT_DAY' => 'Dita e ardhshme',
  'LBL_NEXT_MONTH' => 'Muaji i  ardhshëm',
  'LBL_NEXT_SHARED' => 'Vijues',
  'LBL_NEXT_WEEK' => 'Java e ardhëshme',
  'LBL_NEXT_YEAR' => 'Viti i  ardhshëm',
  'LBL_NO' => 'Jo',
  'LBL_NO_USER' => 'Asnjë përputhje për fushën: Drejtuar',
  'LBL_PARTICIPANTS_TAB' => 'Të ftuarit',
  'LBL_PM' => 'Pasdite',
  'LBL_PREVIOUS_DAY' => 'dita e kaluar',
  'LBL_PREVIOUS_MONTH' => 'muaji i kaluar',
  'LBL_PREVIOUS_SHARED' => 'Mëparshëm',
  'LBL_PREVIOUS_WEEK' => 'java e kaluar',
  'LBL_PREVIOUS_YEAR' => 'viti i kaluar',
  'LBL_RECURRING_LIMIT_ERROR' => 'Kjo përseritje e moduleve të titujve $  nuk mund të jetë e planifikuar për shkak se ajo e tejkalon përsëritjen maksimale e lejuar prej $ limitit.',
  'LBL_REFRESH' => 'rifresko grafikun',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Largo të gjitha përsëritjet',
  'LBL_REPEAT_COUNT' => 'Numri i ndodhive',
  'LBL_REPEAT_DOW' => 'në',
  'LBL_REPEAT_END' => 'Përfundim',
  'LBL_REPEAT_END_AFTER' => 'pas',
  'LBL_REPEAT_END_BY' => 'Nga',
  'LBL_REPEAT_INTERVAL' => 'Intervali',
  'LBL_REPEAT_OCCURRENCES' => 'ndodhitë',
  'LBL_REPEAT_TAB' => 'Përsërit',
  'LBL_REPEAT_TYPE' => 'Përsërit',
  'LBL_REPEAT_UNTIL' => 'përsërit deri',
  'LBL_SAVE_BUTTON' => 'Ruaj',
  'LBL_SAVING' => 'Ruatje',
  'LBL_SCHEDULED' => 'Caktuar',
  'LBL_SELECT_USERS' => 'Selekto përdoruesit për shfaqje të kalendarit',
  'LBL_SENDING_INVITES' => 'Dërgimi i thirjeve',
  'LBL_SEND_INVITES' => 'Dërgo ftesat',
  'LBL_SETTINGS' => 'parametra',
  'LBL_SETTINGS_CALLS_SHOW' => 'trego thirjet',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Shfaq kohën e lojërave elektronike në ditë dhe pikëpamjet e javës:',
  'LBL_SETTINGS_TASKS_SHOW' => 'trego detyrat',
  'LBL_SETTINGS_TIME_ENDS' => 'Ora e përfundimit',
  'LBL_SETTINGS_TIME_STARTS' => 'Ora e nisjes',
  'LBL_SETTINGS_TITLE' => 'parametrat',
  'LBL_SHARED' => 'e përbashkët',
  'LBL_SHARED_CAL_TITLE' => 'Kalendari i përbashkët',
  'LBL_STATUS' => 'Statusi',
  'LBL_STYLE_ADVANCED' => 'Avancuar',
  'LBL_STYLE_BASIC' => 'Bazike',
  'LBL_SUBJECT' => 'subjekti',
  'LBL_USERS' => 'përdoruesit',
  'LBL_USER_CALENDARS' => 'Kalendarët e përdoruesit',
  'LBL_WEEK' => 'Java',
  'LBL_YEAR' => 'Viti',
  'LBL_YES' => 'Po',
  'LNK_CALL_LIST' => 'Thirjet',
  'LNK_IMPORT_CALLS' => 'Thirje të rëndësishme',
  'LNK_IMPORT_MEETINGS' => 'Mbledhje të rëndësishme',
  'LNK_IMPORT_TASKS' => 'Detyra të rëndësishme',
  'LNK_MEETING_LIST' => 'Mbledhjet',
  'LNK_NEW_APPOINTMENT' => 'krijo takim',
  'LNK_NEW_CALL' => 'Cakto thirje',
  'LNK_NEW_MEETING' => 'Cakto mbledhje',
  'LNK_NEW_TASK' => 'Krijo detyrë',
  'LNK_TASK_LIST' => 'Detyrat',
  'LNK_VIEW_CALENDAR' => 'Sot',
  'NOTICE_DURATION_TIME' => 'Koha e zgjatjes duhet të jetë më e madhe se 0',
);

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    1 => 'Janar',
    2 => 'Shkurt',
    3 => 'Mars',
    4 => 'Prill',
    5 => 'Maj',
    6 => 'Qershor',
    7 => 'Korrik',
    8 => 'Gusht',
    9 => 'Shtator',
    10 => 'Tetor',
    11 => 'Nëntor',
    12 => 'Dhjetor',
  ),
  'dom_cal_month_long' => 
  array (
    1 => 'Janar',
    2 => 'Shkurt',
    3 => 'Mars',
    4 => 'Prill',
    5 => 'Maj',
    6 => 'Qershor',
    7 => 'Korik',
    8 => 'Gusht',
    9 => 'Shtator',
    10 => 'Tetor',
    11 => 'Nëntor',
    12 => 'Dhjetor',
  ),
  'dom_cal_weekdays' => 
  array (
    1 => 'Hënë',
    2 => 'Martë',
    3 => 'Mërkurë',
    4 => 'Enjte',
    5 => 'Premte',
    6 => 'Shtunë',
  ),
  'dom_cal_weekdays_long' => 
  array (
    1 => 'Hënë',
    2 => 'Martë',
    3 => 'Mërkurë',
    4 => 'Enjte',
    5 => 'Premte',
    6 => 'Shtunë',
  ),
);

