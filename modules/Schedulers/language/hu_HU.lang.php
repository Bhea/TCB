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
  'ERR_CRON_SYNTAX' => 'Érvénytelen cron szintaxis',
  'ERR_DELETE_RECORD' => 'Adjon meg egy azonosítót az ütemezés törléséhez!',
  'LBL_ADV_OPTIONS' => 'Speciális beállítások',
  'LBL_ALL' => 'Minden nap',
  'LBL_ALWAYS' => 'Mindig',
  'LBL_AND' => 'és',
  'LBL_AT' => 'ekkor',
  'LBL_AT_THE' => 'Ekkor',
  'LBL_BASIC_OPTIONS' => 'Alapbeállítások',
  'LBL_CATCH_UP' => 'Végrehajtás, ha nem talált',
  'LBL_CATCH_UP_WARNING' => 'Törölje, ha ennek a munkának a futtatása több időt vehet igénybe!',
  'LBL_CLEANJOBQUEUE' => 'Munkalista törlése',
  'LBL_CRONTAB_EXAMPLES' => 'A fentiek szabványos crontab jelölést használnak.',
  'LBL_CRONTAB_SERVER_TIME_POST' => '). Kérem, adja meg pontosan a kivitelezés idejét!',
  'LBL_CRONTAB_SERVER_TIME_PRE' => 'A cron specifikációk a szerver időzónája szerint futnak (',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'Átlépés a cron-beállítás fülre',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Átlépés a Windows feladatütemező beállításaiba',
  'LBL_CRON_LINUX_DESC' => 'Megjegyzés: ahhoz, hogy futtatni tudja a Sugar Ütemezőt, adja hozzá a következő sort a crontab fájlhoz:',
  'LBL_CRON_WINDOWS_DESC' => 'Megjegyzés: ahhoz, hogy futtatni tudja a Sugar Ütemezőt, hozzon létre egy batch fájlt, amelyet lefuttat a Windows Ütemezett feladatok között. A kötegelt fájlnak tartalmaznia kell a következő parancsokat:',
  'LBL_DATE_TIME_END' => 'Befejezés dátuma és ideje',
  'LBL_DATE_TIME_START' => 'Kezdés dátuma és ideje',
  'LBL_DAY_OF_MONTH' => 'dátum',
  'LBL_DAY_OF_WEEK' => 'nap',
  'LBL_EVERY' => 'Minden',
  'LBL_EVERY_DAY' => 'Minden nap',
  'LBL_EXECUTE_TIME' => 'Végrehajtás ideje',
  'LBL_FRI' => 'Péntek',
  'LBL_FROM' => 'Ettől',
  'LBL_HOUR' => 'óra',
  'LBL_HOURS' => 'óra',
  'LBL_HOUR_SING' => 'óra',
  'LBL_IN' => 'múlva',
  'LBL_INTERVAL' => 'intervallum',
  'LBL_JOB' => 'Munka',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Munkanapló',
  'LBL_JOB_URL' => 'Munka URL',
  'LBL_LAST_RUN' => 'Legutóbbi sikeres végrehajtás',
  'LBL_LIST_EXECUTE_TIME' => 'Következő végrehajtás:',
  'LBL_LIST_JOB_INTERVAL' => 'Intervallum:',
  'LBL_LIST_LIST_ORDER' => 'Ütemezők:',
  'LBL_LIST_NAME' => 'Ütemező:',
  'LBL_LIST_RANGE' => 'Tartomány:',
  'LBL_LIST_REMOVE' => 'Töröl:',
  'LBL_LIST_STATUS' => 'Állapot:',
  'LBL_LIST_TITLE' => 'Ütemezőlista:',
  'LBL_MINS' => 'perc',
  'LBL_MINUTES' => 'perc',
  'LBL_MIN_MARK' => 'percjelző',
  'LBL_MODULE_NAME' => 'Sugar Ütemező',
  'LBL_MODULE_NAME_SINGULAR' => 'Sugar Ütemező',
  'LBL_MODULE_TITLE' => 'Ütemezők',
  'LBL_MON' => 'Hétfő',
  'LBL_MONTH' => 'hónap',
  'LBL_MONTHS' => 'hó',
  'LBL_NAME' => 'A munka megnevezése',
  'LBL_NEVER' => 'Soha',
  'LBL_NEW_FORM_TITLE' => 'Új ütemezés létrehozása',
  'LBL_NO_PHP_CLI' => 'Ha a gép nem rendelkezik bináris PHP hozzáféréssel, akkor használhat wget-et vagy curl-t a feladat futtatásához.<br />for wget: *    *    *    *    *    wget --quiet --non-verbose http://translate.sugarcrm.com/latest/cron.php > /dev/null 2>&1<br />for curl: *    *    *    *    *    curl --silent http://translate.sugarcrm.com/latest/cron.php > /dev/null 2>&1',
  'LBL_OFTEN' => 'Amilyen gyakran lehetséges.',
  'LBL_ON_THE' => 'Pontosan',
  'LBL_OOTB_BOUNCE' => 'Email-kampány visszapattanóinak éjszakai feldolgozása',
  'LBL_OOTB_CAMPAIGN' => 'Éjszakai email-kampány indítása',
  'LBL_OOTB_CLEANUP_QUEUE' => 'Munkalista törlése',
  'LBL_OOTB_CREATE_NEXT_TIMEPERIOD' => 'Időperiódusok létrehozása',
  'LBL_OOTB_IE' => 'Ellenőrizze a bejövő postaládákat',
  'LBL_OOTB_PRUNE' => 'Adatbázis vágása a hónap első napján',
  'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Dokumentumok eltávolítása a fájlrendszerből',
  'LBL_OOTB_REPORTS' => 'Jelentéskészítő ütemezett feladatok futtatása',
  'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Email emlékeztető figyelmeztetések futtatása',
  'LBL_OOTB_SUGARFEEDS' => 'SugarFeed táblák metszése',
  'LBL_OOTB_TRACKER' => 'Követő táblázatok vágása',
  'LBL_OOTB_WORKFLOW' => 'Munkafolyamat feladatainak végrehajtása',
  'LBL_PERENNIAL' => 'folyamatos',
  'LBL_PERFORMFULLFTSINDEX' => 'Rendszerindexálás szöveges kereséshez',
  'LBL_POLLMONITOREDINBOXES' => 'Ellenőrizze a beérkező leveleit',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Email-kampány visszapattanóinak éjszakai feldolgozásának indítása',
  'LBL_PROCESSQUEUE' => 'Jelentéskészítő ütemezett feladatok futtatása',
  'LBL_PROCESSWORKFLOW' => 'Munkafolyamat feladatainak végrehajtása',
  'LBL_PRUNEDATABASE' => 'Adatbázis vágása a hónap első napján',
  'LBL_RANGE' => 'Eddig',
  'LBL_REFRESHJOBS' => 'Munkák frissítése',
  'LBL_REMOVEDOCUMENTSFROMFS' => 'Dokumentumok eltávolítása a fájlrendszerből',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Tömeges kampány emailek éjszakai kiküldése',
  'LBL_SAT' => 'Szombat',
  'LBL_SCHEDULER' => 'Ütemező:',
  'LBL_SEARCH_FORM_TITLE' => 'Ütemező keresése',
  'LBL_SENDEMAILREMINDERS' => 'Email emlékeztető figyelmeztetések küldése',
  'LBL_STATUS' => 'Állapot',
  'LBL_SUGARJOBCREATENEXTTIMEPERIOD' => 'Időperiódusok létrehozása',
  'LBL_SUN' => 'Vasárnap',
  'LBL_THU' => 'Csütörtök',
  'LBL_TIME_FROM' => 'Aktív ettől',
  'LBL_TIME_TO' => 'Aktív eddig',
  'LBL_TOGGLE_ADV' => 'Speciális beállítások megjelenítése',
  'LBL_TOGGLE_BASIC' => 'Alapbeállítások megjelenítése',
  'LBL_TRIMSUGARFEEDS' => 'SugarFeed táblák metszése',
  'LBL_TRIMTRACKER' => 'Követő táblák vágása',
  'LBL_TUE' => 'Kedd',
  'LBL_UPDATETRACKERSESSIONS' => 'Követő folyamattáblák frissítése',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'tracker_sessions tábláinak frissítése',
  'LBL_WARN_CURL' => 'Figyelem:',
  'LBL_WARN_CURL_TITLE' => 'cURL figyelem:',
  'LBL_WARN_NO_CURL' => 'Ez a rendszer nem rendelkezik  engedélyezett cURL könyvtárral /  PHP modulba befordítva --with-curl=/path/to/curl_library). Kérem, lépjen kapcsolatba a rendszergazdával, hogy megoldja ezt a problémát. A cURL funkcionalitás nélkül, az ütemező nem tudja végrehajtani a feladatokat.',
  'LBL_WED' => 'Szerda',
  'LNK_LIST_SCHEDULED' => 'Ütemezett feladatok',
  'LNK_LIST_SCHEDULER' => 'Ütemezők',
  'LNK_NEW_SCHEDULER' => 'Ütemező létrehozása',
  'NTC_DELETE_CONFIRMATION' => 'Biztos benne, hogy törölni kívánja ezt rekordot?',
  'NTC_LIST_ORDER' => 'Állítsa be a sorrendet, ahogy a határidő meg fog jelenni az Ütemező legördülő listájában',
  'NTC_STATUS' => 'Hogy eltávolítsa ezt az ütemezést a legördülő listából, állítsa állapotát inaktívra',
  'SOCK_GREETING' => 'Ez a SugarCRM Ütemező szolgáltatása. [Elérhető kiszolgáló parancsok: start | restart | shutdown | status] A kilépéshez írja be a "quit" szót, a szolgáltatás leállításához pedig billentyűzze be a "shutdown" parancsot!',
);

