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
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Nuk mund të importoni përdorues të sistemit administrues.',
  'ERR_MISSING_MAP_NAME' => 'Mungon emri i përshtatur të hartave',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Mungojnë fushat e nevojshme:',
  'ERR_MULTIPLE' => 'Disa kolona janë të definuara me emër fushe të njejtë',
  'ERR_MULTIPLE_PARENTS' => 'Ju mund të keni vetëm një ID të Prindit të definuar',
  'ERR_SELECT_FILE' => 'Selekto dosje për ta ngarkuar',
  'ERR_SELECT_FULL_NAME' => 'Nuk mund të selektoni Emër të plotë kur emri dhe mbiemri janë selektuar.',
  'LBL_' => '',
  'LBL_ACCOUNTS_NOTE_1' => 'Fushat që mbarojnë me Adresa të Rrugës 2 dhe Adresa të Rrugës 3 janë të lidhura së bashku me fushën e rrugës kryesore të Adresës kur vendoset në bazën e të dhënave.',
  'LBL_ACT' => 'Vepro!',
  'LBL_ACT_NUM_1' => 'Nisja ACT!',
  'LBL_ACT_NUM_10' => 'Selekto të gjithë regjistrimet dhe pastaj kliko Mbaro',
  'LBL_ACT_NUM_2' => 'Selektoni menynë e Dosjes, menynë e shkëmbimit të opsionit të dhënave, pastaj eksportoni ... opsionin e menysë',
  'LBL_ACT_NUM_3' => 'Selektoni llojin e dosjes në Tekstin e palimituar',
  'LBL_ACT_NUM_4' => 'Zgjidhni emrin e dosjes dhe vendin për të dhënat e eksportuara dhe klikoni Tjetra',
  'LBL_ACT_NUM_5' => 'Selektoni vetëm kontaktët e regjistrimeve',
  'LBL_ACT_NUM_6' => 'Klikoni opsionin... e butonit',
  'LBL_ACT_NUM_7' => 'Selektoni presjen si karakter ndarës në fushën',
  'LBL_ACT_NUM_8' => 'Kontrolloni Po, eksportoni emrat kontrollit të fushës dhe klikoni OK',
  'LBL_ACT_NUM_9' => 'Klikoni Tjetër',
  'LBL_ADD_FIELD_HELP' => 'Përdoreni këtë opsion për të shtuar vlerën në fushën e të gjitha regjistrimeve të krijuara dhe/ose azhornuara. Selektoni fushën dhe pastaj hyni ose selektoni vlerën për atë fushë në kolonën e vlerës së parazgjedhur.',
  'LBL_ADD_ROW' => 'Shto fushë',
  'LBL_ARE_YOU_SURE' => 'A jeni të sigurtë? Kjo do të fshijë të gjitha të dhënat në këtë modul.',
  'LBL_ASSIGNED_USER' => 'Në qoftë se përdoruesi nuk ekziston përdor përdoruesin aktual',
  'LBL_AUTO_DETECT_ERROR' => 'Fusha me kufi dhe kualifikimet në dosjen e importit nuk mund të zbulohet. Ju lutemi verifikoni parametrat e pronave në dosjen e importit.',
  'LBL_BACK' => 'Kthe',
  'LBL_CANCEL' => 'Anulo',
  'LBL_CANNOT_OPEN' => 'Nuk mund të hapet dosja e importuar për leximin',
  'LBL_CHARSET' => 'Enkodimi i dosjes',
  'LBL_CONFIRM_EXT_TITLE' => 'Hapi {0}: Konfirmo Pronat e jashtme të Burimit',
  'LBL_CONFIRM_IMPORT' => 'Ju keni selektuar për të azhurnuar regjistrimet gjatë procesit të importit. Azhurnimet e bëra në regjistrimet ekzistuese nuk mund të anulohen. Megjithatë, regjistrimet e krijuara gjatë procesit të importit mund të anulohen (fshihen), nëse dëshironi. Klikoni Anulo për të selektuar vetëm krijimin e regjistrimeve të reja, ose klikoni OK për të vazhduar.',
  'LBL_CONFIRM_MAP_OVERRIDE' => 'Paralajmërim: Ju tashmë keni selektuar hartën me porosi për këtë import, a doni të vazhdoni?',
  'LBL_CONFIRM_TITLE' => 'Hapi {0}: Konfirmo Dosjen e Importit të Pronës',
  'LBL_CONTACTS_NOTE_1' => 'Qoftë Mbiemri ose Emri i plotë duhet të hartohen.',
  'LBL_CONTACTS_NOTE_2' => 'Nëse emri i plotë është hartuar, atëherë Emri dhe Mbiemri janë injoruar.',
  'LBL_CONTACTS_NOTE_3' => 'Nëse Emri i plotë është hartuar, atëherë të dhënat në emrin e plotë do të ndahen në emrin dhe mbiemrin kur futet në bazën e të dhënave.',
  'LBL_CONTACTS_NOTE_4' => 'Fushat që mbarojnë me Adresa të Rrugës 2 dhe Adresa të Rrugës 3 janë të lidhura së bashku me fushën e rrugës kryesore të Adresës kur vendoset në bazën e të dhënave.',
  'LBL_CREATED_TAB' => 'Krijimi i regjistrimeve',
  'LBL_CREATE_BUTTON_HELP' => 'Përdor këtë opcion për të krijuar regjistrime të reja. Shënim: Reshtat në dosjet e importuara që përmbajnë vlera që përshtaten me ID e regjistrimeve ekzistuese nuk do të importohen nëse vlerat janë të hartuara në fushën e ID.',
  'LBL_CSV' => 'Dosje në kompjuterin tim',
  'LBL_CURRENCY' => 'monedha',
  'LBL_CURRENCY_SIG_DIGITS' => 'Shifra të rëndësishme të monedhës',
  'LBL_CUSTOM' => 'Yakonshëm',
  'LBL_CUSTOM_CSV' => 'Përshtatja e palimituar me presje në dosje',
  'LBL_CUSTOM_DELIMITED' => 'Përshtatja e palimituar e dosjes',
  'LBL_CUSTOM_DELIMITER' => 'Fusha të determinuara sipas:',
  'LBL_CUSTOM_ENCLOSURE' => 'Fushat të kualifikuara sipas:',
  'LBL_CUSTOM_NUM_1' => 'Nisja e aplikimit dhe hapja e dosjes së të dhënave',
  'LBL_CUSTOM_NUM_2' => 'Selektoni Ruaj si ... ose Eksportoni ... opsionin e menysë',
  'LBL_CUSTOM_NUM_3' => 'Ruani dosjen në CSV ose ndani me presje vlerat e formatit',
  'LBL_CUSTOM_TAB' => 'Përshtatja e kartelës së palimituar në dosje',
  'LBL_DATABASE_FIELD' => 'Fusha e modulit',
  'LBL_DATABASE_FIELD_HELP' => 'Kjo kolonë shfaq të gjitha fushat në modulë. Selekto fushën për të shënuar të dhënat në reshtat e dosjeve të importuara.',
  'LBL_DATE_FORMAT' => 'Formati i datës',
  'LBL_DEBUG_MODE' => 'Aktivizo mënyrën e korigjimit',
  'LBL_DECIMAL_SEP' => 'Simboli decimal',
  'LBL_DEFAULT_VALUE' => 'Vlerë e gabuar',
  'LBL_DEFAULT_VALUE_HELP' => 'Tregoni vlerën për të përdorur fushën në regjistrimin e krijuar apo azhurnimin nëse fusha në dosjen e importit nuk përmban të dhënat.',
  'LBL_DELETE' => 'Fshi',
  'LBL_DELETE_MAP_CONFIRMATION' => 'A jeni te sigurtë që doni të fshini këtë grup të ruajtur në parametrat e importit?',
  'LBL_DELIMITER_COMMA_HELP' => 'Përdoreni këtë opsion për të selektuar dhe ngarkuar dosjen që përmban tabelën e të dhënat që ju dëshironi të importoni. Shembuj:. Presje e- kufizuar dosja .csv ose eksporti i dosjes nga Microsoft Outlook.',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Selektoni këtë opsion, nëse karakteri që ndan fushat në dosjen e importit nuk është as presje ose skedë, dhe shkruani karakterin në fushën ngjitur.',
  'LBL_DELIMITER_TAB_HELP' => 'Selektoni këtë opsion, nëse karakteri që ndan fushat në dosjen e importit është skedë, dhe dosja e zgjerimit është .txt.',
  'LBL_DESELECT' => 'deselektoni',
  'LBL_DONT_MAP' => '--Mos e hartoni këtë fushë--',
  'LBL_DUPLICATES' => 'Dyfishime të gjetura',
  'LBL_DUPLICATE_TAB' => 'Dublon',
  'LBL_DUP_HELP' => 'Këtu janë rreshtat në dosjen e importit që nuk janë importuar për shkak se ato përmbajnë të dhënat që përputhen me vlerat në regjistrimet ekzistuese të bazuara në kontrolin e kopjuar. Të dhënat që përputhen janë të theksuara. Për të ri-importuar këto rreshta, shkarkoni listën, bëni ndryshimet dhe klikoni Importo Përsëri.',
  'LBL_ENCLOSURE_HELP' => 'Karakteri kualifikues është përdorur për të rrethuar përmbajtjen e synuar të fushës, duke përfshirë çfarëdo karakteri që është përdorur si përndarës.<br /><br />Shembull: Nëse kufiri është një presje (,) dhe kualifikueset janë një shenjë e kuotimit ("),<br />"Cupertino, California" është importuar në një fushë në aplikimin dhe shfaqet si Cupertino, Kaliforni.<br />Nëse nuk ka karaktere për kualifikimet, ose në qoftë se një karakter i ndryshëm është kualifikues,<br />"Cupertino, California" është importuar në dy fusha të ngjitura si "Cupertino dhe" Kaliforni ".<br /><br />Shënim: Dosja e importit nuk mund të përmbajnë asnjë karakter kualifikues.<br />Kualifikimet e parazgjedhura të karakterit për presje-dhe-skedën e palimituar të dosjeve të krijuara në Excel është një shenjë kuotimi.',
  'LBL_ERROR' => 'Gabim:',
  'LBL_ERROR_DELETING_RECORD' => 'Gabim i fshirjes së regjistrimit',
  'LBL_ERROR_HELP' => 'Këtu janë rreshtat në dosjen e importit që nuk janë importuar për shkak të gabimeve. Për të ri-importuar këto rreshta, shkarkoni listën, të bëni ndryshime dhe klikoni Importo Përsëri',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Importimet nuk janë të vendosura për këtë llojë module',
  'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Importi i sasinë së dosjes që nuk është i shkrueshëm.',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Emri jovalid i llogarisë ose ID',
  'LBL_ERROR_INVALID_BOOL' => 'Vlerë jo vlaide(duhet të jetë 1 ose 0)',
  'LBL_ERROR_INVALID_CURRENCY' => 'Vlerë invalide e monedhës',
  'LBL_ERROR_INVALID_DATE' => 'Data jovalide në varg',
  'LBL_ERROR_INVALID_DATETIME' => 'Datë dhe kohë jo valide',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Datë dhe kohë jo valide',
  'LBL_ERROR_INVALID_EMAIL' => 'Adresa jovalide e Emailit',
  'LBL_ERROR_INVALID_FLOAT' => 'Numri jovalid i pikës qarkulluese',
  'LBL_ERROR_INVALID_ID' => 'ID i dhënë është shumë i gjatë për t&#39;u përshtatur në fushë (gjatësia maksimale është 36 karaktere)',
  'LBL_ERROR_INVALID_INT' => 'Vlera jovalide e numrit të plotë',
  'LBL_ERROR_INVALID_NAME' => 'Vargu shumë i gjatë për t&#39;u përshtatur në këtë fushë',
  'LBL_ERROR_INVALID_NUM' => 'vlerë numeruese jo valide',
  'LBL_ERROR_INVALID_PHONE' => 'Numër jovalid i telefonit',
  'LBL_ERROR_INVALID_RELATE' => 'Relacioni jovalid i fushës',
  'LBL_ERROR_INVALID_TEAM' => 'Emri jovalid të ekipit ose ID',
  'LBL_ERROR_INVALID_TIME' => 'Kohë jo valide',
  'LBL_ERROR_INVALID_USER' => 'Emër përdoruesi apo ID jo valide',
  'LBL_ERROR_INVALID_VARCHAR' => 'Vargu shumë i gjatë për t&#39;u përshtatur në këtë fushë',
  'LBL_ERROR_NOT_IN_ENUM' => 'Vlera nuk është në listën e rënies poshtë. Vlerat e lejuara janë:',
  'LBL_ERROR_SELECTING_RECORD' => 'Gabim i selektimit të regjistrimit:',
  'LBL_ERROR_SYNC_USERS' => 'Vlera jovalide për të sinkronizuar në Outlook:',
  'LBL_ERROR_TAB' => 'Gabime',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'E pamudur për tu publikuar. Ekziston hartë tjetër të importimit me të njejtën emër.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Në pamundësi për të nën-publikuar hartën në pronësi nga përdoruesi tjetër.Harta juaj e importit sipas emrit të njëjtë.',
  'LBL_EXAMPLE_FILE' => 'Shkarkoni dosjen e shablonit të importit',
  'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Për të caktuar regjistrimet e reja për përdoruesin tjetër se veten, përdorni parazgjedhjen e vlerës së kolonës për të selektuar përdorues të ndryshëm.',
  'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Shënoni vlerën për të përdorur për fushën në regjistrimin e krijuar nëse fusha në burim të jashtëm nuk përmban të dhëna.',
  'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Në pamundësi për të rifituar furnizim të jashtëm, ju lutemi provoni përsëri më vonë.',
  'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Në pamundësi për të rifituar burimin përshtatës, ju lutemi provoni përsëri më vonë.',
  'LBL_EXTERNAL_FIELD' => 'Fushë e jashtme',
  'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Kjo kolonë shfaq fushat në burim të jashtëm që përmbajnë të dhëna që do të përdoren për të krijuar regjistrime të reja.',
  'LBL_EXTERNAL_MAP_HELP' => 'Tabela e mëposhtme përmban fushat në burim të jashtëm dhe fushat e modulit për të cilat ata janë të planifikuara. Kontrolloni planifikimet për të siguruar që ato janë ato që ju prisni, dhe bëni ndryshimet, sipas nevojës. Jeni të sigurt në hartimin për të gjitha fushat e kërkuara (siç nga një asterisk).',
  'LBL_EXTERNAL_MAP_NOTE' => 'Importi do të jetë në përpjekje për kontaktet brenda të gjithë grupet e kontakteve Google.',
  'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Emrat e përdoruesit të sapo krijuara për përdoruesit do të jenë emrat e plotë të kontaktit Google nga parazgjedhja.Emrat e përdoruesit mund të ndryshohen pasi regjistrimet e përdoruesit të krijohen.',
  'LBL_EXTERNAL_MAP_SUB_HELP' => 'Klikoni tani importin për të filluar importimin. Regjistrimet do të krijohet vetëm për shënimet që përfshijnë emrat të fundit. Regjistrimet nuk do të krijohen për të dhënat e identifikuara si dublikatë në bazë të emrave dhe/ose adresat e emailit që përputhen me të dhënat ekzistuese.',
  'LBL_EXTERNAL_SOURCE' => 'aplikacion të jashtëm ose shërbim',
  'LBL_EXTERNAL_SOURCE_HELP' => 'Përdoreni këtë opsion për të importuar të dhënat drejtpërdrejt nga një aplikim të jashtëm ose të shërbimit, të tilla si Gmail.',
  'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Për të caktuar regjistrimet e reja për grupet tjera sesa ekipin tuaj të parazgjedhur, përdorni parazgjedhjen e vlerën së kolonës për të selektuar grupe të ndryshme.',
  'LBL_EXT_SOURCE_SIGN_IN' => 'Identifikohuni',
  'LBL_FAIL' => 'Dështim:',
  'LBL_FAILURE' => 'Importimi dështoi.',
  'LBL_FIELD_DELIMETED_HELP' => 'Kufiri i fushës specifikon karakterin e përdorur për të ndarë kolonat në fushë.',
  'LBL_FIELD_NAME' => 'Emri i fushës',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Dosja e importit ka qenë tashmë e përpunuar ose nuk ekziston',
  'LBL_FILE_OPTIONS' => 'Opcionet e dosjes',
  'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Selektoni dosjen që përmban të dhënat që janë të ndarë nga kufiri, të tilla si presje ose- skeda e- dosjes së-kufizuar. Dosjet e llojit të csv. janë të rekomanduara.',
  'LBL_FINISHED' => 'Përfundim',
  'LBL_GOOD_FILE' => 'Importimi i dosjeve të lexuara ishte e suksesshme',
  'LBL_HAS_HEADER' => 'Rreshti i Titullit',
  'LBL_HEADER_ROW' => 'Rreshti i Titullit',
  'LBL_HEADER_ROW_HELP' => 'Kjo kolonë shfaq etiketat në rreshtin e titullit të dosjes së importit.',
  'LBL_HEADER_ROW_OPTION_HELP' => 'Selektoni nëse rreshti në krye të dosjes së importit është një rresht i titullit që përmban etiketat në fushë.',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Fshih vetitë e dosjeve të importuara',
  'LBL_HIDE_NOTES' => 'Fshih shënimet',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Fsheh kolonat e pamjes',
  'LBL_IDS_EXISTED_OR_LONGER' => 'Regjistrimet janë anashkaluar përshkak se identitetet ose kanë ekzistuar, ose kanë qenë më shumë se 36 karakterë',
  'LBL_ID_EXISTS_ALREADY' => 'ID veqse ekziston në këtë tabelë',
  'LBL_IMPORT_ACT_TITLE' => 'Veproni! mund të eksportojë të dhënat në formatin e vlerave të ndara me presje, e cila mund të përdoret për të importuar të dhënat në sistem. Për të eksportuar të dhënat tuaja nga veprimii, ndiqni hapat e mëposhtëm:',
  'LBL_IMPORT_BUTTON' => 'Krijo vetëm regjistrime të reja.',
  'LBL_IMPORT_COMPLETE' => 'Dalje',
  'LBL_IMPORT_COMPLETED' => 'Importimi ka përfunduar',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Shumë aplikacione ju lejojnë që të eksportoni të dhënat në një dosje të palimituar të tekstit me presje (.cvs) duke ndjekur këto hapa të përgjithshme:',
  'LBL_IMPORT_ERROR' => 'Gabime të importimit ndodhën',
  'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Dosja e importit përmban {0} rreshta.Numri optimal i rreshtave është {1}. Më shumë rreshta mund të ngadalësojë procesin e importit. Kliko OK për të vazhduar importimin. Klikoni Anulo për rishikimin dhe ri-ngarkoni dosjen e  importit.',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Emri i përdoruesit ose ID',
  'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; ose &#39;1&#39;',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numerike (Decimale është e lejuar)',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Data',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Data dhe koha',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numerike (Jo Decimale)',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'Email adresa',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'lista',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numerike (Decimale është e lejuar)',
  'LBL_IMPORT_FIELDDEF_ID' => 'Numër unik i ID',
  'LBL_IMPORT_FIELDDEF_INT' => 'Numerike (Jo Decimale)',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Çdo tekst',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Numerike (Jo Decimale)',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Numri i telefonit',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Emri ose ID',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Emri i grupit ose ID',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Çdo tekst',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Ora',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Çdo tekst',
  'LBL_IMPORT_FILE_SETTINGS' => 'Importoni dosjen e parametrave',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Gjatë ngarkimit të dosjes tuaj të importit, disa prona të dosjes mund të jenë zbuluar automatikisht. Shikoni dhe menaxhoni këto prona, si<br />të nevojshme. Shënim: Parametrat e dhënë këtu i përkasin këtij importit<br />dhe nuk do të pranojnë parametrat tuaja të përgjithshme.',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Dosja është shumë e madhe. Maks:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Ndryshimi $ sugar_config [&#39;upload_maxsize&#39;] në config.php',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Dosja nuk u ngarkua me sukses. Kontrolloni të drejtat e dosjes në instalimin tuaj Sugar të drejtorisë së sasisë.',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Dosja nuk u ngarkua me sukses. Kjo mund të jetë sepse &#39;upload_max_filesize "vendosja në dosjen tuaj php.ini është vendosur në një numër të vogël',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'Në pamundësi për të publikuar. Ka publikuar tjetër Hartë Importi me të njëjtin emër.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Në pamundësi për të nën-publikuar një hartë në pronësi nga përdoruesi tjetër. Ju posedoni një hartë importi sipas të njëjtin emër.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Të dhënat',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'nuk ekzistojnë ose nuk janë të regjistruara',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Importi nuk është i vendosur për këtë llojë të moduli',
  'LBL_IMPORT_MODULE_NO_USERS' => 'KUJDES: Ju nuk keni përdoruesit e përcaktuar në sistemin tuaj. Nëse jeni të importuar pa shtuar përdoruesit e parë, të gjitha të dhënat do të jenë në pronësi nga administratori.',
  'LBL_IMPORT_MORE' => 'Importo përsëri',
  'LBL_IMPORT_NOW' => 'Importoni tani',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 dhe 2000 mund të eksportojnë të dhënat në formatin e ndarë me presje të vlerave, të cilat mund të përdoren për të importuar të dhënat në sistem. Për të eksportuar të dhënat tuaja nga Outlook, ndiqni hapat e mëposhtëm:',
  'LBL_IMPORT_RECORDS' => 'Importimi i regjistrimeve',
  'LBL_IMPORT_RECORDS_OF' => 'nga',
  'LBL_IMPORT_RECORDS_TO' => 'tek',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com mund të eksportojë të dhënat në formatin e ndarë me presje të vlerave, e cila mund të përdoret për të importuar të dhënat në sistem. Për të eksportuar të dhënat tuaja nga Salesforce.com, ndiqni hapat e mëposhtëm:',
  'LBL_IMPORT_STARTED' => 'Importimi ka filluar',
  'LBL_IMPORT_TAB_TITLE' => 'Shumë aplikacione ju lejojnë që të eksportoni të dhënat brenda një skedë të palimituar të tekstit të dosjes (tsv ose tab..) Duke ndjekur këto hapa të përgjithshme:',
  'LBL_IMPORT_TYPE' => 'Çfar dëshiron të bësh me të dhënat e importuara?',
  'LBL_INDEX_NOT_USED' => 'Fushat e disponueshme:',
  'LBL_INDEX_USED' => 'Fushat për të kontrolluar',
  'LBL_LAST_IMPORTED' => 'Krijuar',
  'LBL_LAST_IMPORT_UNDONE' => 'Imorti është i papërfunduar.',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Emërto formatin e shfaqur',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Shembull',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '"p" Përshëndetje, "e" Emri, "M" Mbiemri',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_MICROSOFT_OUTLOOK_HELP' => 'Përshtatja e hartave për Microsoft Outlook mbështetet në dosjen e importit duke qenë me presje-palimituar (. csv). Nëse dosja juaj e importit është kartela-palimituar, hartimi nuk do të zbatohet siç pritej.',
  'LBL_MIME_TYPE_ERROR_1' => 'Dosja e selektuar nuk duket të përmbajë listë të palimituar. Ju lutemi kontrolloni llojin e dosjes. Ne ju rekomandojmë  dosjen- me presje të palimituar (. csv).',
  'LBL_MIME_TYPE_ERROR_2' => 'Për të vazhduar me importimin e dosjeve të selektuara, klikoni OK. Për të ngarkoni një dosje të re, klikoni Provo Përsëri',
  'LBL_MISSING_HEADER_ROW' => 'Asnjë titull i reshtit nuk është gjetur',
  'LBL_MODULE_NAME' => 'Importo',
  'LBL_MODULE_NAME_SINGULAR' => 'Importo',
  'LBL_MY_PUBLISHED_HELP' => 'Përdoreni këtë opsion për të aplikuar para-vendosjen e parametrave të importit, duke përfshirë pronat e importit, hartimet, dhe çdo kopjim i parametarve të kontrollit, për këtë import.',
  'LBL_MY_SAVED' => 'Për të përdorur parametrat tuaja të ruajtur të importit, selektoni nga poshtë:',
  'LBL_MY_SAVED_ADMIN_HELP' => 'Përdoreni këtë opsion për të aplikuar parametrat para-vendosjes së importit tuaj, duke përfshirë pronat e importit, hartimet, dhe çdo parametër të kontrollit të kopjuar, për këtë import.<br /><br />Kliko Publikimi për të bërë hartimin në dispozicion për përdoruesit e tjerë.<br />Kliko Jo-Publikimi për të bërë hartimin në dispozicion për përdoruesit e tjerë.<br />Kliko Fshijë për të fshirë një hartim për të gjithë përdoruesit.',
  'LBL_MY_SAVED_HELP' => 'Përdoreni këtë opsion për të aplikuar parametrat para-vendosjes së importit tuaj, duke përfshirë pronat e importit, hartimet, dhe çdo parametër të kontrollit të kopjuar, për këtë import.<br /><br />Kliko Fshijë për të fshirë një hartim për të gjithë përdoruesit.',
  'LBL_NEXT' => 'Vijim',
  'LBL_NOLOCALE_NEEDED' => 'Asnjë konvertim i lokalizimit të nevojshëm',
  'LBL_NONE' => 'Asnjëra',
  'LBL_NOTES' => 'Shënimet',
  'LBL_NOT_MULTIENUM' => 'Nuk është shumë numërim',
  'LBL_NOT_SAME_NUMBER' => 'Nuk ka qenë numër i njëjtë i fushave në linjë të dosjes tuaj',
  'LBL_NOT_SET_UP' => 'Importi nuk është vendosur për këtë lloj moduli',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Importi nuk është vendosur për këtë lloj moduli',
  'LBL_NOW_CHOOSE' => 'Tani zgjidhni këtë dosje për të importuar:',
  'LBL_NO_DATECHECK' => 'Kaloni datën e kotrollimit (shpejtë, por do të dështojnë nëse çdo datë është e gabuar)',
  'LBL_NO_EMAILS' => 'Mos dërgoni Email të jashtëm të njoftimeve gjatë këtij importi',
  'LBL_NO_ID' => 'është e nevojshme ID',
  'LBL_NO_IMPORT_TO_UNDO' => 'Nuk kishte asnjë import për të anuluar.',
  'LBL_NO_LINES' => 'Nuk kishte linja të zbuluara në dosjen tuaj të importit. Ju lutemi sigurohuni që nuk ka linja bosh në dosjen tuaj dhe provoni përsëri.',
  'LBL_NO_PRECHECK' => 'Mënyra Amtare e Formatit',
  'LBL_NO_RECORD' => 'Asnjë regjistrim me këtë ID për të azhurnuar',
  'LBL_NO_WORKFLOW' => 'Mos drejtoni rrjedhën e punës gjatë këtij importi',
  'LBL_NUMBER_GROUPING_SEP' => '1000s separator',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_OK' => 'OK',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Thojëza (")',
  'LBL_OPTION_ENCLOSURE_NONE' => 'Asnjëra',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Tjetër:',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Citim i vetëm',
  'LBL_OUTLOOK_NUM_1' => 'Fillo Outlook-un',
  'LBL_OUTLOOK_NUM_2' => 'Selektoni dosjen e menysë, pastaj Importin dhe Eksportin ... opsionin e menysë',
  'LBL_OUTLOOK_NUM_3' => 'Selektoni Eksportin në një dosje dhe klikoni Vazhdo',
  'LBL_OUTLOOK_NUM_4' => 'Zgjidhni Vlerat e ndara me presje (Windows) dhe klikoni Vazhdo.<br />Shënim: Juve mund t$#39;ju kërkohet për të instaluar komponentën e eksportit',
  'LBL_OUTLOOK_NUM_5' => 'Selektoni dosjen e kontakteve dhe klikoni Vazhdo. Ju mund të selektoni kontaktet e ndryshme të dosjeve nëse kontaktet tuaja janë ruajtur në dosje të shumta',
  'LBL_OUTLOOK_NUM_6' => 'Zgjidh një emër dosje dhe shtyp Vijim',
  'LBL_OUTLOOK_NUM_7' => 'Shtyp Përfundo',
  'LBL_PRE_CHECK_SKIPPED' => 'Para-Kontrollim i anashkaluar',
  'LBL_PUBLISH' => 'Publiko',
  'LBL_PUBLISHED_SOURCES' => 'Për të përdorur para-vendosjen e importit të parametrave, selektoni nga poshtë:',
  'LBL_RECORDS_SKIPPED' => 'Regjistrimet u anashkaluan sepse mungonin një ose më shumë fusha të kërkuara',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Reshta nuk ëshin të importuara për shkak të një gabimi',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'Regjistrimi nuk mund të azhurnohet për shkak të çështjes së lejeve',
  'LBL_RELATED_ACCOUNTS' => 'Mos krijoni llogaritë të lidhura',
  'LBL_REMOVE_ROW' => 'Largo fushën',
  'LBL_REQUIRED_NOTE' => 'Fusha e kërkuar :',
  'LBL_REQUIRED_VALUE' => 'Vlera e kërkuar mungon',
  'LBL_RESULTS' => 'rezultate',
  'LBL_ROW' => 'Resht',
  'LBL_ROW_HELP' => 'Kjo kolonë shfaq të dhënat në rreshtin e parë pa-titullin e dosjes së importit. Nëse etiketat e rreshtit të titullit janë duke u shfaqur në këtë kolonë, klikoni Mbrapsht për të specifikuar rreshtin e titullit në pronat e skedës së importit.',
  'LBL_ROW_NUMBER' => 'Numri i reshtit',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_SAMPLE_URL_HELP' => 'Shkarkoni një shembull të dosjes së importit që përmban rreshtin e titullit të fushave të modulin. Dosja mund të përdoret si një shabllon për të krijuar një dosje të importit që përmban të dhënat që ju dëshironi për të importuar.',
  'LBL_SAVE_AS_CUSTOM' => 'Ruaj si porosi hartimi:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Emri i porosisë së hartimit:',
  'LBL_SAVE_MAPPING_AS' => 'Për të ruajtur parametrat e importit, ofroni një emër për parametrat e ruajtura:',
  'LBL_SAVE_MAPPING_HELP' => 'Shkruani një emër për të ruajtur parametrat e importit, duke përfshirë hartimin e fushës dhe indekse të përdorura për kontrollin e kopjuar. Parametrat e ruajtura të importit mund të përdoren për importet e ardhshme.',
  'LBL_SELECT_DS_INSTRUCTION' => 'Gati për të filluar importimin? Selektoni burimin e të dhënave që ju dëshironi të importoni.',
  'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Për të shmangur krijimin e regjistrimeve të kopjuara, selektoni cilat nga fushat e planifikuara ju dëshironi të përdorni për të kryer një kontroll të kopjuar, duke u importuar të dhënat. Vlerat brenda regjistrimeve ekzistuese në fushat e selektuara do të kontrollohen kundër të dhënave në dosjen e importit. Nëse të dhënat e përputhjes janë gjetur, rreshtat në dosjen e importit që përmbajnë të dhënat do të shfaqet së bashku me rezultatet e importit (faqja tjetër). Ju pastaj do të jeni në gjendje për të selektuar se cili prej këtyre rreshtave do të vazhdoje importimin.',
  'LBL_SELECT_FIELDS_TO_MAP' => 'Në listën më poshtë, selektoni fushat në dosjen e importit që duhet të importohet në çdo fushë të sistemit. Kur ju keni mbaruar, klikoni Vazhdo:',
  'LBL_SELECT_FILE' => 'Selekto dosje:',
  'LBL_SELECT_MAPPING_INSTRUCTION' => 'Tabela e mëposhtme përmban të gjitha fushat në modulin që mund të jetë plotësuar në të dhënat e dosjes së importit. Në qoftë se dosja përmban një rresht të titullit, kolonat në dosjen kanë qenë të plotësuara në fushat e përputhjes. Kontrolloni hartimet për të siguruar që ata janë ato që ju presni, dhe të bëni ndryshime, sipas nevojës. Për të ndihmuar juve kontrolloni hartimet, Rreshti 1 shfaq të dhënat në dosjen. Jeni të sigurtë në hartën për të gjitha fushat e kërkuara (theksuar nga një asterisk).',
  'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Këtu është se si në rreshtat e para disa dosjet e importit shfaqet me pronat e dosjeve të zbuluara. Nëse një rresht i titullit është zbuluar, ajo është shfaqur në krye të rreshtit të tabelës. Shikoni pronat e dosjes të importit për të bërë ndryshime në pronat e zbuluara dhe për të vendosur prona të tjera. Azhurnimi i parametrave do të azhurnojë të dhënat që paraqiten në tabelë.',
  'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Selektoni dosjen në kompjuterin tuaj që përmban të dhënat që ju dëshironi për të importuar, ose  shkarkoni shabllonin për të marrë kreun që të fillojë në krijimin e dosjes të importit.',
  'LBL_SF_NUM_1' => 'Hapni shfletuesin tuaj, shkoni në http://www.salesforce.com, dhe identifikoheni me emailin e adresës  tuaj dhe fjalëkalimin',
  'LBL_SF_NUM_10' => 'Në Raportin e eksportit: për dosjen e formatit Eksport:, zgjidhni palimitimin me presje .csv. Klikoni Eksporto.',
  'LBL_SF_NUM_11' => 'Një dialog do të hapet për ju që të ruani dosjen e eksportit në kompjuterin tuaj.',
  'LBL_SF_NUM_2' => 'Klikoni në butonin Raportet në krye të menysë',
  'LBL_SF_NUM_3' => 'Për të eksportuar llogaritë: Klikoni në linkun aktiv të Llogarive<br />Për të eksportuar kontaktët: Klikoni në linkun e listës së postimit',
  'LBL_SF_NUM_4' => 'Në Hapin e 1: Selektoni llojin tuaj të raportit, selektoni Raportin tabelar klikoni Vazhdo',
  'LBL_SF_NUM_5' => 'Në Hapin e 2: Selektoni kolonat e raportit, zgjedhni kolonat që doni të eksporti dhe klikoni Vazhdo',
  'LBL_SF_NUM_6' => 'Në Hapin e 3: Selektoni informacionin për të përmbledhur, vetëm klikoni Vazhdo',
  'LBL_SF_NUM_7' => 'Në Hapin e 4: Porositni kolonat e raportit, vetëm klikoni Vazhdo',
  'LBL_SF_NUM_8' => 'Në Hapin e 5: Selektoni kriterët tuaja të raportit, nën datën e fillimit, zgjidhni një datë shumë të mjaftueshme në të kaluarën që të përfshijë të gjitha llogaritë tuaja. Ju gjithashtu mund të eksportoni një nënbashkësi të Llogarive duke përdorur kriteret më të avancuara. Kur të përfundoni, klikoni Drejtimin e Raportit',
  'LBL_SF_NUM_9' => 'Një raport do të gjenerohet, dhe faqja do të shfaq Raportin e Gjeneruar të Statusit: Komplet. Tani klikoni Eksport në Excel',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Shih vetitë e dosjeve të importuara',
  'LBL_SHOW_HIDDEN' => 'Trego fushat që nuk janë normalisht të importuar',
  'LBL_SHOW_NOTES' => 'Shiko shënimet',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Tregoni kolonat e parapamjes',
  'LBL_SIGN_IN_HELP' => 'Për të aktivizuar këtë shërbim, ju lutemi nënshkruani nën butonin e jashtëm të Llogarive brenda faqës së parametrave tuaja të përdoruesit.',
  'LBL_START_OVER' => 'Fillo përsëri',
  'LBL_STEP_1_TITLE' => 'Step 1: Selekto burimin e të dhënës',
  'LBL_STEP_2_TITLE' => 'Hapi {0}: Ngarko Dosjet Hyrëse',
  'LBL_STEP_3_TITLE' => 'Hapi {0}: Konfirmoni fushën e hartimeve',
  'LBL_STEP_4_TITLE' => 'Hapi {0}: Importo dosjen',
  'LBL_STEP_5_TITLE' => 'Step {0}: Shih rezultatet e importimit',
  'LBL_STEP_DUP_TITLE' => 'Hapi {0}: Kontrolloni për kopjet e mundshme identike',
  'LBL_STEP_MODULE' => 'Cilat module dëshironi të importoni në të dhënat?',
  'LBL_STRICT_CHECKS' => 'Përdorni grup të reptë të rregullave (Kontrollo Email adresën dhe numrat e telefonit gjithashtu)',
  'LBL_SUCCESS' => 'sukses',
  'LBL_SUCCESSFULLY' => 'Importuar me sukses',
  'LBL_SUCCESSFULLY_IMPORTED' => 'Regjistrimet ishin të krijuara',
  'LBL_SUMMARY' => 'Përmbledhje',
  'LBL_TAB' => 'Kartela e palimituar e dosjes',
  'LBL_TAB_NUM_1' => 'Nisja e aplikimit dhe hapja e dosjes së të dhënave',
  'LBL_TAB_NUM_2' => 'Selektoni Ruaj si ... ose Eksportoni ... opsionin e menysë',
  'LBL_TAB_NUM_3' => 'Ruajeni dosjen në një TSV ose Skedën e ndarë të Vlerave të formatit',
  'LBL_TEST' => 'Test Importi (nuk do të ruaj ose të ndryshojë të dhënat)',
  'LBL_THIRD_PARTY_CSV_SOURCES' => 'Nëse të dhënat e skedës së importit është eksportuar nga çdo burim i mëposhtëm, selektoni njërën.',
  'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Selektoni burimin pë të aplikuar automatikisht me porosi hartimet në mënyrë që të thjeshtoni procesin e hartimit (Hapi tjetër).',
  'LBL_TIMEZONE' => 'Ora e zonës',
  'LBL_TIME_FORMAT' => 'Formati i kohës',
  'LBL_TRUNCATE_TABLE' => 'Zbrazë tabelën para importit (fshini të gjitha të dhënat)',
  'LBL_TRY_AGAIN' => 'Provo përsëri',
  'LBL_UNDO_LAST_IMPORT' => 'Anuloni importin',
  'LBL_UNIQUE_INDEX' => 'Zgjidhni indeksin për krahasim dublikatë',
  'LBL_UNPUBLISH' => 'E papublikuar',
  'LBL_UPDATE_BUTTON' => 'Krijo regjistrime të reja dhe rifresko regjistrimet ekzistuese',
  'LBL_UPDATE_BUTTON_HELP' => 'Përdor opcionin për të rinovuar regjistrimet ekzistuese. Të dhënat në dosjet e importuara do të përputhen me regjistrimet ekzituese të bazuara në ID e regjistruar',
  'LBL_UPDATE_RECORDS' => 'Azhurno të dhënat ekzistuese në vend të importimit të tyre (Pa Anulim)',
  'LBL_UPDATE_SUCCESSFULLY' => 'rifreskimi i regjistrimeve ishte i suksesshëm',
  'LBL_VALUE' => 'Vlera',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Gjeni regjistrimet ekzistuese në sistemin që mund të konsiderohet dublikatë identike të regjistrimeve për t$#39;u importuar duke kryer një kontroll të dublikimit për përputhjen me të dhënat. Fushat tërhiqen brenda kolonës të "Kontrollit të dhënave" që do të përdoren për kontrollin e dublikimit. Rreshtat në dosjen tuaj të importit që përmbajnë të dhënat e përputhjes do të jenë të listuara në faqën tjetër, dhe ju do të jeni në gjendje për të selektuar së cilat rreshta do të importoni',
  'LBL_VERIFY_DUPS' => 'Për të kontrolluar regjistrimet ekzistuese që përputhen me të dhënat në dosjen e importit, zgjidhni fushat për të kontrolluar.',
  'LBL_WHAT_IS' => 'Të dhënat e mia janë:',
  'LNK_DUPLICATE_LIST' => 'Shkarkoni listën e dublikatave',
  'LNK_ERROR_LIST' => 'Shkarkoni listën e gabimeve',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Shkarkoni listën e rreshtave që nuk janë të importuara',
);

