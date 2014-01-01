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
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Përdor vetëm vlera të plota për të përcaktuar numrin e emaileve të dërguara për grumbullim.',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Lejo përdoruesit të përdorin këtë llogari për emailet dalëse',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kur zgjidhet ky opcion, të gjithë përdoruesit do të munden të dërgojnë emaile duke përdorur mail llogaritë e drejtuar për jashta për të dërguar lajmërime dhe alarme të sistemit. Nëse nuk selektohet opcioni, përdoruesit do të mund të përdorin ende serverin e maileve të dërguar për jashta pas sigurimit të informacionit të llogarisë së tyre.',
  'LBL_ATTACHMENT_AUDIT' => 'Është dërguar. Nuk është dubluar lokalisht për të konservuar përdorimin e diskut.',
  'LBL_CAMP_MESSAGE_COPY' => 'Mbaj kopje të mesazhit të fushatës',
  'LBL_CAMP_MESSAGE_COPY_DESC' => 'Dëshironi të ruani kopjet të plota të çdo mesazhi të dërguar email-it gjatë gjithë fushatave? Ne rekomandojmë dhe parazgjedhim në nr. Zgjedhja nuk do ruajë vetëm modelin që është dërguar dhe variablat e nevojshme për të rikrijuar mesazhet individuale.',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Zgjidh furnizuesin e emailit tënd',
  'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS' => 'Konfiguro parametrat e emailit të fushatës',
  'LBL_CONFIGURE_SETTINGS' => 'Konfiguro parametrat e emailit',
  'LBL_CUSTOM_LOCATION' => 'Përdoruesi i definuar',
  'LBL_DEFAULT_LOCATION' => 'Çaktivizuar',
  'LBL_DISCLOSURE_TEXT_SAMPLE' => 'NJOFTIM: Ky mesazh i emailit është për përdorim të vetëm nga marrësi i synuar dhe mund të përmbaje informacion konfidencial dhe të privilegjuar. Çdo shqyrtim i paautorizuar, përdorim, zbulim, ose shpërndarje është e ndaluar. Nëse ju nuk jeni marrësi i synuar, ju lutemi të shkatërroni të gjitha kopjet e mesazhit origjinal dhe të njoftoni dërguesin në mënyrë që regjistrimi i adresës tonë mund të korrigjohet. Ju faleminderit.',
  'LBL_DISCLOSURE_TEXT_TITLE' => 'Përmbatja e zbulimit',
  'LBL_DISCLOSURE_TITLE' => 'Dërgo mesazh të zbulimit të shtuar çdo emaili',
  'LBL_EMAILS_PER_RUN' => 'Numri i emaileve të dërguara për grup:',
  'LBL_EMAIL_DEFAULT_CHARSET' => 'Ndërto email mesazhe  në këtë komplet karaktere',
  'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Fshi shënimet e lidhura dhe bashkëngjitjet me emailet e fshira',
  'LBL_EMAIL_DEFAULT_EDITOR' => 'Ndërto email duke përdorur këtë klient',
  'LBL_EMAIL_GMAIL_DEFAULTS' => 'Parambush çaktivizimet e Gmail™',
  'LBL_EMAIL_LINK_TYPE' => 'Dergo email konsumatorit',
  'LBL_EMAIL_LINK_TYPE_HELP' => 'Posta e klientit Sugar: Dërgo një email duke perdorur emailin e klientit në aplikimin Sugar.<br />Posta e jashtme e klientit: Dërgoni email duke përdorur një email të jashtëm të klientit në aplikimin Sugar, të tilla si Microsoft Outlook.',
  'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Konfigurimi i maileve të dërguara',
  'LBL_EMAIL_PER_RUN_REQ' => 'Numri i emaileve të dërguara për grup',
  'LBL_EMAIL_SMTP_SSL' => 'Mundëso SMTP gjatë SSL',
  'LBL_EMAIL_USER_TITLE' => 'Çaktivizim i emaileve të përdoruesve',
  'LBL_EXCHANGE_LOGO' => 'Këmbe',
  'LBL_EXCHANGE_SMTPPASS' => 'Ndrysho fjalëkalimin',
  'LBL_EXCHANGE_SMTPPORT' => 'Këmbe  portin e Serverit',
  'LBL_EXCHANGE_SMTPSERVER' => 'Ndrysho Serverin',
  'LBL_EXCHANGE_SMTPUSER' => 'Ndrysho emrin e përdorimit',
  'LBL_FROM_ADDRESS_HELP' => 'Kur aktivizohen, caktimi i emrit përdoruesit/ve dhe adresa e emailit do të përfshihen në fushën Nga të   e-mail. Ky funksion mund të mos punoje me serverat SMTP që nuk lejojnë dërgimin nga llogari të ndryshme të emailit sesa në llogarinë server.',
  'LBL_GMAIL_LOGO' => 'Gmail',
  'LBL_GMAIL_SMTPPASS' => 'Fjalëkalimi i Gmailit',
  'LBL_GMAIL_SMTPUSER' => 'Email adresa në Gmail',
  'LBL_HELP' => 'ndihmë',
  'LBL_ID' => 'ID',
  'LBL_IN_QUEUE' => 'Në proces e sipër',
  'LBL_IN_QUEUE_DATE' => 'Datat e rradhitura',
  'LBL_LIST_CAMPAIGN' => 'Fushata',
  'LBL_LIST_FORM_PROCESSED_TITLE' => 'E procesuar',
  'LBL_LIST_FORM_TITLE' => 'Rradha',
  'LBL_LIST_FROM_EMAIL' => 'Nga emaili',
  'LBL_LIST_FROM_NAME' => 'Nga emri',
  'LBL_LIST_IN_QUEUE' => 'Në proces e sipër',
  'LBL_LIST_MESSAGE_NAME' => 'Mesazhi i marketingut',
  'LBL_LIST_RECIPIENT_EMAIL' => 'Pranuesi i emailit',
  'LBL_LIST_RECIPIENT_NAME' => 'Emri i pranuesit',
  'LBL_LIST_SEND_ATTEMPTS' => 'Tentimet e dërgimeve',
  'LBL_LIST_SEND_DATE_TIME' => 'Dërguar  në',
  'LBL_LIST_USER_NAME' => 'Emri i përdoruesit',
  'LBL_LOCATION_ONLY' => 'Lokacioni',
  'LBL_LOCATION_TRACK' => 'Gjetja e dosjeve të gjurmuesve të fushatave',
  'LBL_MAIL_SENDTYPE' => 'Faktori i transferit të mailit',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Përdor SMTP Autentikim?',
  'LBL_MAIL_SMTPPASS' => 'Fjalëkalimi',
  'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
  'LBL_MAIL_SMTPSERVER' => 'Severi i mailit të  SMTP',
  'LBL_MAIL_SMTPUSER' => 'Emri i përdorimit',
  'LBL_MARKETING_ID' => 'ID e marketingut',
  'LBL_MODULE_ID' => 'EmailNjeri',
  'LBL_MODULE_NAME' => 'Parametrat e emailit',
  'LBL_MODULE_NAME_SINGULAR' => 'Parametrat e emailit',
  'LBL_MODULE_TITLE' => 'Menaxhmenti i rradhëve të emaileve të dërguara për jashtë',
  'LBL_NO' => 'Jo',
  'LBL_NOTIFICATION_ON_DESC' => 'Kur aktivizohen, emailat janë dërguar përdoruesve kur të dhënat caktohen për ta.',
  'LBL_NOTIFY_FROMADDRESS' => 'Nga adresa',
  'LBL_NOTIFY_FROMNAME' => 'Nga emri',
  'LBL_NOTIFY_ON' => 'Njoftime të caktuara',
  'LBL_NOTIFY_SEND_BY_DEFAULT' => 'Dërgo njoftime tek përdoruesit e ri',
  'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Dërgo njoftim nga adresa e emailit për caktimin e përdoruesve',
  'LBL_NOTIFY_TITLE' => 'Opcionet e emailit',
  'LBL_OLD_ID' => 'Id e vjetër',
  'LBL_OUTBOUND_EMAIL_TITLE' => 'Opcionet e emaileve të dërguara për jashtë',
  'LBL_OUTGOING_SECTION_HELP' => 'Konfiguroni parazgjedhjen e postës së jashtme të serverit për të dërguar lajmërime, duke përfshirë sinjalizime për rrjedhjen e punës.',
  'LBL_PREPEND_TEST' => '[Testo]:',
  'LBL_RELATED_ID' => 'Id lidhur me',
  'LBL_RELATED_TYPE' => 'Lloji i lidhur me',
  'LBL_SAVE_OUTBOUND_RAW' => 'Ruaj Emailat e jashtëm të papërpunuara',
  'LBL_SEARCH_FORM_PROCESSED_TITLE' => 'Kërkim i procesuar',
  'LBL_SEARCH_FORM_TITLE' => 'Kërkimi i rradhëve',
  'LBL_SECURITY_APPLET' => 'Etiketë apleti',
  'LBL_SECURITY_BASE' => 'Etiketë themelore',
  'LBL_SECURITY_DESC' => 'Kontrollo atë që vijon se nuk duhet të lejohet përmes emailit derjtuar përbrenda në modulën e Emailit',
  'LBL_SECURITY_EMBED' => 'Etiketë e mbjellur',
  'LBL_SECURITY_FORM' => 'Etiketë e formës',
  'LBL_SECURITY_FRAME' => 'Etiketë e kornizës',
  'LBL_SECURITY_FRAMESET' => 'Etiketë e grupit të kornizave',
  'LBL_SECURITY_IFRAME' => 'Etiketë e iKornizës',
  'LBL_SECURITY_IMPORT' => 'Importo etiketën',
  'LBL_SECURITY_LAYER' => 'Etiketë e shtresës',
  'LBL_SECURITY_LINK' => 'Etiketë e lidhjes',
  'LBL_SECURITY_OBJECT' => 'Etiketë e objektit',
  'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Selekto Outlook parazgjedhjen e parametrave minimale të Sigurisë (gabon në anën e saktë të shqaqjes).',
  'LBL_SECURITY_SCRIPT' => 'Etiketë e skriptës',
  'LBL_SECURITY_STYLE' => 'Etiketë e stilit',
  'LBL_SECURITY_TITLE' => 'Parametrat e sigurisë së emailit',
  'LBL_SECURITY_TOGGLE_ALL' => 'Nyjëzo të gjitha opcionet',
  'LBL_SECURITY_XMP' => 'Etiketë Xmp',
  'LBL_SEND_ATTEMPTS' => 'Tentimet e dëruara',
  'LBL_SEND_DATE_TIME' => 'Data e dërgimit',
  'LBL_VIEW_PROCESSED_EMAILS' => 'Shih emailet e procesuara',
  'LBL_VIEW_QUEUED_EMAILS' => 'Shih emailet e rradhitura',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Fjalëkalimi i Yahoo! Mailit',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID e Yahoo! Mailit',
  'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail',
  'LBL_YES' => 'Po',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Vlera e Config.php setting site_url',
  'TXT_REMOVE_ME' => 'Për të larguar veten nga kjo listë e emaileve',
  'TXT_REMOVE_ME_ALT' => 'Për të larguar veten nga kjo listë e emaileve shkoni në',
  'TXT_REMOVE_ME_CLICK' => 'Shtyp këtu',
);

