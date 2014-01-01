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
  'DEF_CREATE_LOG' => 'Dokumentum létrehozva',
  'ERR_DELETE_CONFIRM' => 'Biztos, hogy törölni akarja ezt a dokumentum módosítást?',
  'ERR_DELETE_LATEST_VERSION' => 'Nincs jogosultsága törölni a dokumentum utolsó módosítását.',
  'ERR_DOC_ACTIVE_DATE' => 'Közzététel dátuma',
  'ERR_DOC_EXP_DATE' => 'Lejárat dátuma',
  'ERR_DOC_NAME' => 'Dokumentum neve',
  'ERR_DOC_VERSION' => 'Dokumentum verziója',
  'ERR_FILENAME' => 'Fájlnév',
  'ERR_INVALID_EXTERNAL_API_ACCESS' => 'A felhasználó érvénytelen külső API-hoz próbált kapcsolódni: ({0})',
  'ERR_INVALID_EXTERNAL_API_LOGIN' => 'A külső API-ba való bejelentkezés sikertelen: ({0})',
  'ERR_MISSING_FILE' => 'A dokumentumból hiányzik egy fájl, valószínűleg hibás feltöltésnek köszönhetően. Kérem, töltse fel újra a fájlt vagy lépjen kapcsolatba az adminisztrátorával!',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kliensek',
  'LBL_ACTIVE_DATE' => 'Közzététel dátuma',
  'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Hibák',
  'LBL_CASES_SUBPANEL_TITLE' => 'Esetek',
  'LBL_CATEGORY' => 'Kategória',
  'LBL_CATEGORY_VALUE' => 'Kategória:',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Nincs megadva',
  'LBL_CHANGE_LOG' => 'Változásnapló',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolatok',
  'LBL_CONTRACTS' => 'Szerződések',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kapcsolódó szerződések',
  'LBL_CONTRACT_NAME' => 'Szeződés neve:',
  'LBL_CONTRACT_STATUS' => 'Szerződés státusza:',
  'LBL_CREATED' => 'Létrehozta',
  'LBL_CREATED_BY' => 'Létrehozta',
  'LBL_CREATED_USER' => 'Létrehozott felhasználó',
  'LBL_DATE_ENTERED' => 'Rögzítés dátuma',
  'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
  'LBL_DELETED' => 'Törölve',
  'LBL_DESCRIPTION' => 'Leírás',
  'LBL_DET_IS_TEMPLATE' => 'Sablon?:',
  'LBL_DET_RELATED_DOCUMENT' => 'Kapcsolódó dokumentum:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Kapcsolódó dokumentum módosítás:',
  'LBL_DET_TEMPLATE_TYPE' => 'Dokumentum típusa:',
  'LBL_DOCUMENT' => 'Kapcsolódó dokumentum',
  'LBL_DOCUMENT_ID' => 'Dokumentum azonosító',
  'LBL_DOCUMENT_INFORMATION' => 'Áttekintés',
  'LBL_DOCUMENT_NAME' => 'Dokumentum neve',
  'LBL_DOCUMENT_REVISION_ID' => 'Javított kiadás azonosítója',
  'LBL_DOC_ACTIVE_DATE' => 'Közzététel dátuma:',
  'LBL_DOC_DESCRIPTION' => 'Leírás:',
  'LBL_DOC_EXP_DATE' => 'Lejárat dátuma:',
  'LBL_DOC_ID' => 'Dokumentum forrás azonosító',
  'LBL_DOC_NAME' => 'Dokumentum neve:',
  'LBL_DOC_REV_HEADER' => 'Dokumentum felülvizsgálata',
  'LBL_DOC_STATUS' => 'Állapot:',
  'LBL_DOC_STATUS_ID' => 'Státusz azonosító:',
  'LBL_DOC_TYPE' => 'Forrás',
  'LBL_DOC_TYPE_POPUP' => 'Adja meg a feltöltés helyét, ahonnan a dokumentum később letölthető lesz!',
  'LBL_DOC_URL' => 'Dokumentum forrás URL',
  'LBL_DOC_VERSION' => 'Módosítás:',
  'LBL_DOWNNLOAD_FILE' => 'Fájl letöltés:',
  'LBL_EXPIRATION_DATE' => 'Lejárat dátuma',
  'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Az alábbi listában az első 20 legutóbb módosított fájl található csökkenő sorrendben. Használja a Keresés gombot egyéb fájlok megtalálásához.',
  'LBL_FILENAME' => 'Fájlnév:',
  'LBL_FILE_EXTENSION' => 'Fájl kiterjesztése',
  'LBL_FILE_UPLOAD' => 'Fájl:',
  'LBL_FILE_URL' => 'Fájl URL',
  'LBL_HOMEPAGE_TITLE' => 'Dokumentumaim',
  'LBL_IS_TEMPLATE' => 'Egy sablon',
  'LBL_LASTEST_REVISION_NAME' => 'Utolsó módosítás neve:',
  'LBL_LAST_REV_CREATE_DATE' => 'Utolsó módosítás létrehozásának dátuma',
  'LBL_LAST_REV_CREATOR' => 'A módosítást készítette:',
  'LBL_LAST_REV_DATE' => 'Módosítás dátuma:',
  'LBL_LAST_REV_MIME_TYPE' => 'Utolsó módosítás MIME típusa',
  'LBL_LATEST_REVISION' => 'Utolsó módosítás',
  'LBL_LATEST_REVISION_ID' => 'Legutóbbi módosítás azonosítója',
  'LBL_LINKED_ID' => 'Kapcsolódó azonosító',
  'LBL_LIST_ACTIVE_DATE' => 'Közzététel dátuma',
  'LBL_LIST_CATEGORY' => 'Kategória',
  'LBL_LIST_DOCUMENT' => 'Dokumentum',
  'LBL_LIST_DOCUMENT_NAME' => 'Dokumentum neve',
  'LBL_LIST_DOC_TYPE' => 'Forrás',
  'LBL_LIST_DOWNLOAD' => 'Letöltés',
  'LBL_LIST_EXP_DATE' => 'Lejárat dátuma',
  'LBL_LIST_EXT_DOCUMENT_NAME' => 'Fájlnév',
  'LBL_LIST_FILENAME' => 'Fájl:',
  'LBL_LIST_FORM_TITLE' => 'Dokumentumlista',
  'LBL_LIST_IS_TEMPLATE' => 'Sablon?',
  'LBL_LIST_LAST_REV_CREATOR' => 'Közzétette',
  'LBL_LIST_LAST_REV_DATE' => 'Módosítás dátuma',
  'LBL_LIST_LATEST_REVISION' => 'Utolsó módosítás',
  'LBL_LIST_REVISION' => 'Módosítás',
  'LBL_LIST_SELECTED_REVISION' => 'Kiválasztott módosítás',
  'LBL_LIST_STATUS' => 'Állapot',
  'LBL_LIST_SUBCATEGORY' => 'Alkategória',
  'LBL_LIST_TEMPLATE_TYPE' => 'Dokumentum típus',
  'LBL_LIST_VIEW_DOCUMENT' => 'Nézet',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Körlevél sablon:',
  'LBL_MIME' => 'Mime típus',
  'LBL_MODIFIED' => 'Módosító azonosítója',
  'LBL_MODIFIED_USER' => 'Módosította',
  'LBL_MODULE_NAME' => 'Dokumentumok',
  'LBL_MODULE_NAME_SINGULAR' => 'Dokumentum',
  'LBL_MODULE_TITLE' => 'Dokumentumok: Főoldal',
  'LBL_NAME' => 'Dokumentum neve',
  'LBL_NEW_FORM_TITLE' => 'Új dokumentum',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Lehetőségek',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Termékek',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Árajánlatok',
  'LBL_RELATED_DOCUMENT_ID' => 'Kapcsolódó dokumentum azonosítója',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Kapcsolódó dokumentum módosítás azonosítója',
  'LBL_REVISION' => 'Módosítás',
  'LBL_REVISIONS' => 'Módosítások',
  'LBL_REVISIONS_PANEL' => 'Módosítás részletei',
  'LBL_REVISIONS_SUBPANEL' => 'Módosítások',
  'LBL_REVISION_NAME' => 'Felülvizsgálat száma',
  'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Fájlnév',
  'LBL_SEARCH_FORM_TITLE' => 'Dokumentum keresése',
  'LBL_SELECTED_REVISION_FILENAME' => 'Kiválasztott módosítás fájlneve',
  'LBL_SELECTED_REVISION_ID' => 'Kiválasztott módosítás azonosítója',
  'LBL_SELECTED_REVISION_NAME' => 'Kiválasztott módosítás neve:',
  'LBL_SF_ACTIVE_DATE' => 'Közzététel dátuma:',
  'LBL_SF_CATEGORY' => 'Kategória:',
  'LBL_SF_DOCUMENT' => 'Dokumentum neve:',
  'LBL_SF_EXP_DATE' => 'Lejárat dátuma:',
  'LBL_SF_SUBCATEGORY' => 'Alkategória',
  'LBL_STATUS' => 'Állapot',
  'LBL_SUBCATEGORY' => 'Alkategória',
  'LBL_SUBCATEGORY_VALUE' => 'Alkategória:',
  'LBL_TEAM' => 'Csoport:',
  'LBL_TEMPLATE_TYPE' => 'Dokumentum típus',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Visszaállítások',
  'LBL_TREE_TITLE' => 'Dokumentumok',
  'LNK_DOCUMENT_LIST' => 'Dokumentumok megtekintése',
  'LNK_NEW_DOCUMENT' => 'Dokumentum létrehozása',
  'LNK_NEW_MAIL_MERGE' => 'Körlevél',
);

