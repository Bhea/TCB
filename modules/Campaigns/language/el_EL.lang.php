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
  'ERR_FIX_MESSAGES' => 'Παρακαλώ διορθώστε τα ακόλουθα λάθη πριν προχωρήσετε',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Μόνο οι ακέραιες αξίες επιτρέπουν τον αριθμό των emails που στέλνονται ανά παρτίδα',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'Πολλαπλά Email Μηνύματα μάρκετινγκ έχουν οριστεί για αυτήν τη λίστα στόχων',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'Κανένα Email Μάρκετινγκ που διαπιστώθηκε για αυτήν τη λίστα στόχων',
  'ERR_NO_EMAIL_MARKETING' => 'Πρέπει να υπάρχει τουλάχιστον ένα ενεργό Email μήνυμα Μάρκετινγκ που  να σχετίζεται με την εκστρατεία.',
  'ERR_NO_MAILBOX' => 'Τα ακόλουθα μηνύματα μάρκετινγκ δεν έχουν λογαριασμό email που να συνδέονται με αυτά. Παρακαλούμε να τα διορθώσετε, πριν προχωρήσετε.',
  'ERR_NO_OPTS_SAVED' => 'Κανένα βέλτιστο δεν σώθηκε με τον Εσερχόμενο Λογαριασμό Email σας. Παρακαλώ αναθεωρήστε τις ρυθμίσεις',
  'ERR_NO_TARGET_LISTS' => 'Πρέπει να υπάρχει τουλάχιστον μία Στοχευμένη Λίστα που να σχετίζεται με την εκστρατεία.',
  'ERR_NO_TEST_TARGET_LISTS' => 'Πρέπει να υπάρχει τουλάχιστον ένας τύπος Στοχευμένης Λίστας. Δοκιμή που να σχετίζεται με την εκστρατεία.',
  'ERR_REVIEW_EMAIL_SETTINGS' => 'Παρακαλούμε αναθεωρήστε τις Ρυθμίσεις των Εισερχόμενων Email.',
  'ERR_SENDING_NOW' => 'Τα μηνύματα παραδίδονται, παρακαλώ δοκιμάστε αυτό αργότερα.',
  'LBL_ACCOUNTS' => 'Λογαριασμοί',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Λογαριασμοί',
  'LBL_ADD_TARGET' => 'Προσθήκη',
  'LBL_ADD_TRACKER' => 'Δημιουργία Σημείο Εντοπισμού',
  'LBL_ALERT' => 'Ειδοποίηση',
  'LBL_ALL_PROSPECT_LISTS' => 'Επιλέξτε όλες τις Λίστες Στόχου(ων) στην Εκστρατεία.',
  'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Εγγραφή Συνδρομής Σε Ενημερωτικά Δελτία',
  'LBL_AMOUNT_IN' => 'Ποσό',
  'LBL_ASSIGNED_TO' => 'Ανατέθηκε σε:',
  'LBL_ASSIGNED_TO_ID' => 'Ανατέθηκε σε:',
  'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε:',
  'LBL_AVALAIBLE_FIELDS_HEADER' => 'Διαθέσιμα Πεδία',
  'LBL_BACK_TO_CAMPAIGNS' => 'Πίσω στις Εκστρατείες',
  'LBL_BLOCKED_SUBPANEL_TITLE' => 'Εμποδισμένο',
  'LBL_CAMPAIGN' => 'Εκστρατεία:',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Λογαριασμοί',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'Ετήσιο Κόστος:',
  'LBL_CAMPAIGN_BUDGET' => 'Προϋπολογισμός:',
  'LBL_CAMPAIGN_CONTENT' => 'Περιγραφή:',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Κόστος Ανά Κλικ Μέσω:',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Κόστος ανά Εντύπωση:',
  'LBL_CAMPAIGN_DAYS_REMAIN' => 'Ημέρες που Απομένουν',
  'LBL_CAMPAIGN_DIAGNOSTICS' => 'Διαγνώσεις Εκστρατείας',
  'LBL_CAMPAIGN_END_DATE' => 'Ημερομηνία Λήξης:',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'Αναμενόμενο Κόστος:',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Αναμενόμενος Τζίρος:',
  'LBL_CAMPAIGN_FREQUENCY' => 'Συχνότητα:',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Εντυπώσεις:',
  'LBL_CAMPAIGN_INACTIVE_SCHEDULE' => 'Εκστρατεία &#39;{0} είναι σε κατάσταση &#39;Ανενεργή&#39;. Πρέπει να ρυθμίσετε την κατάσταση σε  &#39;Ενεργή&#39;.',
  'LBL_CAMPAIGN_INFORMATION' => 'Επισκόπηση',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
  'LBL_CAMPAIGN_NAME' => 'Όνομα Εκστρατείας:',
  'LBL_CAMPAIGN_NOT_SELECTED' => 'Επιλογή σύνδεση εκστρατείας:',
  'LBL_CAMPAIGN_OBJECTIVE' => 'Αντικείμενο:',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Κερδισμένες Ευκαιρίες:',
  'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Απάντηση Εκστρατείας από Δραστηριότητα Παραλήπτη',
  'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Επιστροφή Εκστρατείας στην Επένδυση',
  'LBL_CAMPAIGN_START_DATE' => 'Ημερομηνία Έναρξης:',
  'LBL_CAMPAIGN_STATUS' => 'Κατάσταση:',
  'LBL_CAMPAIGN_TYPE' => 'Τύπος:',
  'LBL_CAMPAIGN_WIZARD' => 'Οδηγός Εκστρατείας',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Επεξεργασία Εκστρατείας:',
  'LBL_CAMP_MESSAGE_COPY' => 'Κρατήστε τα αντίγραφα των μηνυμάτων εκστρατείας:',
  'LBL_CAMP_MESSAGE_COPY_DESC' => 'Θα επιθυμούσατε να αποθηκεύσετε τα πλήρη αντίγραφα για ΚΑΘΕ μήνυμα email που στέλνετε κατά τη διάρκεια όλων των εκστρατειών; Σας συνιστούμε καμία προεπιλογή. Επιλέγοντας "καμία" θα αποθηκεύσει μόνο το πρότυπο που αποστέλλεται και τις μεταβλητές που απαιτούνται για να αναδημιουργήσει το μεμονωμένο μήνυμα.',
  'LBL_CHARSET_NOTICE' => 'Σημείωση: Παρακαλώ σιγουρευτείτε ότι η σελίδα που περιέχει τη μορφή Διαδικτύου-σε-δυνητικό πελάτη έχει τις ακόλουθες γραμμές στο <επικεφαλής> τμήμα:',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Τύπος Εκστρατείας',
  'LBL_CHOOSE_NEXT_STEP' => 'Επιλέξτε το επόμενο βήμα σας',
  'LBL_CONFIRM' => 'Έναρξη',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Αποθηκεύσετε την εργασία και προχωρήστε σε Email Μάρκετινγκ',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => 'Θέλετε να αποθηκεύσετε τις πληροφορίες και να βγείτε;',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Αποθήκευση Επιλογών',
  'LBL_CONFIRM_SEND_SAVE' => 'Είστε έτοιμοι να φύγετε και να προχωρήσετε στην Αποστολή Email Εκστρατείας της σελίδας. Θέλετε να αποθηκεύσετε και να συνεχίσετε;',
  'LBL_CONTACTS' => 'Επαφές',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Επαφή',
  'LBL_COPY_AND_PASTE_CODE' => 'Ή αντιγραφή και επικόλληση του html κάτω σε μια υπάρχουσα σελίδα',
  'LBL_COPY_OF' => 'Αντίγραφο',
  'LBL_CREATED' => 'Δημιουργήθηκε από:',
  'LBL_CREATED_BY' => 'Δημιουργήθηκε από:',
  'LBL_CREATED_USER' => 'Δημιουργημένος Χειριστής',
  'LBL_CREATE_EMAIL_TEMPLATE' => 'Δημιουργία',
  'LBL_CREATE_MAILBOX' => 'Δημιουργία Νέου Λογαριασμού Ταχυδρομείου',
  'LBL_CREATE_NEWSLETTER' => 'Δημιουργία Ενημερωτικού Δελτίου',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Δημιουργία Νέου Email Μάρκετινγκ',
  'LBL_CREATE_TARGET' => 'Δημιουργία Στόχου',
  'LBL_CREATE_WEB_TO_LEAD_FORM' => 'Δημιουργία Διαδικτύου στη Μορφή Δυνητικού Πελάτη',
  'LBL_CURRENCY' => 'Νόμισμα:',
  'LBL_CURRENCY_ID' => 'Κώδικας Νομίσματος',
  'LBL_CUSTOM_LOCATION' => 'Ορίζεται από τον χειριστή',
  'LBL_DATE_CREATED' => 'Ημερομηνία Δημιουργίας:',
  'LBL_DATE_ENTERED' => 'Ημερομηνία Δημιουργίας',
  'LBL_DATE_LAST_MODIFIED' => 'Ημερομηνία Τροποποίησης:',
  'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
  'LBL_DATE_START' => 'Ημερομηνία Έναρξης',
  'LBL_DAY' => 'Ημέρα',
  'LBL_DEFAULT' => 'Λίστες Στόχων',
  'LBL_DEFAULT_FROM_ADDR' => 'Προεπιλογή:',
  'LBL_DEFAULT_LEAD_SUBMIT' => 'Υποβολή',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'Καμία καταχώρηση δεν βρέθηκε',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Οι καταχωρήσεις υποβλήθηκαν σε Επεξεργασία',
  'LBL_DEFAULT_LIST_NOT_FOUND' => 'Η λίστα στόχου του προεπιλεγμένου τύπου δεν βρέθηκε',
  'LBL_DEFAULT_LOCATION' => 'Προεπιλογή',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Εκστρατείες',
  'LBL_DEFINE_LEAD_HEADER' => 'Μορφή Επικεφλιδας:',
  'LBL_DEFINE_LEAD_POST_URL' => 'Θέση URL:',
  'LBL_DEFINE_LEAD_REDIRECT_URL' => 'Επαναπροσανατολισμός URL',
  'LBL_DEFINE_LEAD_SUBMIT' => 'Υποβολή Κουμπί Ετικέτας:',
  'LBL_DELETE' => 'Αφαίρεση',
  'LBL_DELETE_INLINE' => 'Διαγραφή',
  'LBL_DESCRIPTION_LEAD_FORM' => 'Περιγραφή Μορφής:',
  'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Η υποβολή αυτής της φόρμας θα δημιουργήσει έναν δυνητικό πελάτη και έναν σύνδεσμο με την εκστρατεία',
  'LBL_DIAGNOSTIC' => 'Διαγνωστικός',
  'LBL_DIAGNOSTIC_WIZARD' => 'Προβολή Διαγνωστικών',
  'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Παρακαλώ κατεβάστε το κείμενο Διδικτύου σας σε μορφή Δυνητικού Πελάτη',
  'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Διαδίκτυο στη Μορφή Δυνητικού Πελάτη',
  'LBL_DRAG_DROP_COLUMNS' => 'Μεταφορά και απόθεση των δυνητικών πεδίων στη στήλη 1 & 2',
  'LBL_EDIT_EMAIL_TEMPLATE' => 'Επεξεργασία',
  'LBL_EDIT_EXISTING' => 'Επεξεργασία Εκστρατείας',
  'LBL_EDIT_INLINE' => 'Επεξεργασία',
  'LBL_EDIT_LAYOUT' => 'Επεξεργασία Διάταξης',
  'LBL_EDIT_LEAD_POST_URL' => 'Επεξεργασία Ταχυδρομείου URL;',
  'LBL_EDIT_OPT_OUT' => 'Αποχώρηση Συνδέσμου:',
  'LBL_EDIT_OPT_OUT_' => 'Αποχώρηση Συνδέσμου;',
  'LBL_EDIT_TARGET_LIST' => 'Επεξεργασία Λίστας Στόχου',
  'LBL_EDIT_TRACKER_NAME' => 'Όνομα Σημείου Εντοπισμού:',
  'LBL_EDIT_TRACKER_URL' => 'Σημείο Εντοπισμού URL:',
  'LBL_ELECTED_TO_OPTOUT' => 'Έχετε επιλέξει να εξαιρεθείτε από τη παραλαβή emails.',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'Email Μάρκετινγκ',
  'LBL_EMAILS_PER_RUN' => 'Οι Αριθμοί των emails στέλνονται ανά στίβα:',
  'LBL_EMAILS_SCHEDULED' => 'Προγραμματισμένα Emails',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'Εκστρατείες Email',
  'LBL_EMAIL_COMPONENTS' => 'Εξαρτήματα Email',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'Email Μάρκετινγκ',
  'LBL_EMAIL_SETUP_DESC' => 'Συμπληρώστε τη παρακάτω φόρμα για να τροποποιήσετε τις ρυθμίσεις συστημάτων σας έτσι ώστε τα emails εκστρατείας να μπορούν να σταλούν.',
  'LBL_EMAIL_SETUP_WIZ' => 'Ρύθμιση Email Εκκίνησης',
  'LBL_EMAIL_SETUP_WIZARD' => 'Ρύθμιση Email',
  'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Ρύθμιση Email για Εκστρατείες',
  'LBL_FILTER_CHART_BY' => 'Φίλτρο Γραφήματος Από:',
  'LBL_FINISH' => 'Τέλος',
  'LBL_FROM_ADDR' => '"Aπό" Διεύθυνση',
  'LBL_FROM_MAILBOX_NAME' => 'Χρήση Λογαριασμού Αλληλογραφίας:',
  'LBL_FROM_NAME' => 'Από Όνομα:',
  'LBL_HOME_START_MESSAGE' => 'Επιλέξτε τον τύπο Εκστρατείας που θα επιθυμούσατε να δημιουργήσετε.',
  'LBL_IMPORT_PROSPECTS' => 'Εισαγωγή Στόχων',
  'LBL_INVALID' => 'Άκυρο',
  'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Άκυρο Email:',
  'LBL_INVITEE' => 'Επαφές',
  'LBL_LEADS' => 'Υποψήφιοι Πελάτες',
  'LBL_LEADS_DELETED_SINCE_CREATED' => '{0} ο δυνητικός πελάτης που δημιουργήθηκε μέσω αυτής της εκστρατείας έχει διαγραφεί από τότε που δημιουργήθηκε.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
  'LBL_LEAD_DEFAULT_HEADER' => 'Ιστοσελίδα για να οδηγήσει τη μορφή για Εκστρατεία',
  'LBL_LEAD_FOOTER' => 'Μορφή Υποσέλιδου:',
  'LBL_LEAD_FORM_FIRST_HEADER' => 'Μορφή Δυνητικού Πελάτη (Πρώτη Στήλη)',
  'LBL_LEAD_FORM_SECOND_HEADER' => 'Μορφή Δυνητικού Πελάτη (Δεύτερη Στήλη)',
  'LBL_LEAD_FORM_WIZARD' => 'Οδηγός Μορφής Δυνητικού Πελάτη',
  'LBL_LEAD_MODULE' => 'Δυνητικοί Πελάτες',
  'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Σχετική Εκστρατεία',
  'LBL_LEAD_SUBPANEL_TITLE' => 'Δυνητικός Πελάτης',
  'LBL_LINK_SUBPANEL_TITLE' => 'Σύνδεσμος',
  'LBL_LIST_CAMPAIGN_NAME' => 'Εκστρατεία',
  'LBL_LIST_END_DATE' => 'Ημερομηνία Λήξης',
  'LBL_LIST_FORM_TITLE' => 'Λίστα Εκστρατείας',
  'LBL_LIST_NAME' => 'Όνομα',
  'LBL_LIST_START_DATE' => 'Ημερομηνία Έναρξης',
  'LBL_LIST_STATUS' => 'Κατάσταση',
  'LBL_LIST_TO_ACTIVITY' => 'Προβολή Κατάστασης',
  'LBL_LIST_TYPE' => 'Τύπος',
  'LBL_LOCATION_TRACK' => 'Τοποθεσία των αρχείων παρακολούθησης εκστρατείας (όπως campaign_tracker.php):',
  'LBL_LOGIN' => 'Όνομα Χειριστή',
  'LBL_LOG_ENTRIES' => 'Καταγραφή Καταχωρήσεων',
  'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Καταστέλλεται από Διεύθυνση Email ή περιοχή',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Δημιουργία Επαφών',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Σφαλμένα Μηνύματα, Άκυρο Email',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Δημιουργία Δυνητικών Πελατών',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'Πατήστε στον σύνδεσμο-thru',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Αποχωρημένο',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Σφαλμένα Μηνύματα, Άλλο',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Απεσταλμένα Μηνύματα/Προσπάθειες',
  'LBL_LOG_ENTRIES_TITLE' => 'Απαντήσεις',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Προβολή Μηνυμάτων',
  'LBL_MAILBOX' => 'Ελεγχόμενος Φάκελος',
  'LBL_MAILBOX_CHECK1_BAD' => 'Κανένας λογαριασμός αλληλογραφίας δεν έχει ανιχνευθεί με σφαλμένο μήνυμα',
  'LBL_MAILBOX_CHECK1_GOOD' => 'Ανιχνεύθηκε λογαριασμός αλληλογραφίας με σφαλμένο email.',
  'LBL_MAILBOX_CHECK2_BAD' => 'Παρακαλώ διαμορφώστε τη διεύθυνση email του συστήματος σας. Οι Ρυθμίσεις E-mail δεν έχουν διαμορφωθεί ή είναι άκυρες.',
  'LBL_MAILBOX_CHECK2_GOOD' => 'Οι Ρυθμίσεις Email έχουν διαμορφωθεί:',
  'LBL_MAILBOX_CHECK_WIZ_BAD' => 'Κανένας λογαριασμός αλληλογραφίας δεν ανιχνεύθυηκε με σφαλμένα μήνυμα, παρακαλώ δημιουργήστε έναν νέο παρακάτω.',
  'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'Ανιχνεύθηκε λογαριασμός αλληλογραφίας με σφαλμένα μήνυμα. Δεν χρειάζεται να δημιουργήσετε έναν νέο, αλλά μπορείτε ακόμα να κάνετε έτσι παρακάτω.',
  'LBL_MAILBOX_DEFAULT' => 'ΕΙΣΕΡΧΟΜΕΝΑ',
  'LBL_MAILBOX_NAME' => 'Όνομα Λογαρισμού Ταχυδρομείου:',
  'LBL_MAIL_SENDTYPE' => 'Μεσάζων Μεταφοράς Αλληλογραφίας :',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Χρήση Πιστοποίησης SMTP;',
  'LBL_MAIL_SMTPPASS' => 'Κωδικός SMTP:',
  'LBL_MAIL_SMTPPORT' => 'Θύρα SMTP',
  'LBL_MAIL_SMTPSERVER' => 'Διακομιστής SMTP',
  'LBL_MAIL_SMTPUSER' => 'Όνομα Χειριστή SMTP',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Διαχείριση Συνδρομών',
  'LBL_MARKETING_CHECK1_BAD' => 'Κανένα Email μάρκετινγκ δεν ανιχνεύθηκε, εσείς θα πρέπει να δημιουργήσετε ένα για να ταχυδρομήσει έξω μια εκστρατεία.',
  'LBL_MARKETING_CHECK1_GOOD' => 'Τμήματα Email μάρκετινγκ που ανιχνεύονται.',
  'LBL_MARKETING_CHECK2_BAD' => 'Καμία λίστα στόχων δεν ανιχνεύθηκε, θα πρέπει να δημιουργήσετε μία από την επιθυμητή οθόνη εκστρατείας.',
  'LBL_MARKETING_CHECK2_GOOD' => 'Ανιχνεύθηκαν Λίστες Στόχων.',
  'LBL_MARK_AS_SENT' => 'Σημειωμένο ως Απεσταλμένο',
  'LBL_MASS_MAILING_TITLE' => 'Επιλογές Μαζικής Αποστολής',
  'LBL_MESSAGE_FOR' => 'Αποστολή Μηνύματος σε:',
  'LBL_MESSAGE_QUEUE_TITLE' => 'Ουρά Αναμονής Μηνύματος',
  'LBL_MODIFIED' => 'Τροποποιήθηκε από:',
  'LBL_MODIFIED_BY' => 'Τροποποιήθηκε από:',
  'LBL_MODIFIED_USER' => 'Τροποποιημένος Χειριστής',
  'LBL_MODULE_NAME' => 'Εκστρατείες',
  'LBL_MODULE_NAME_SINGULAR' => 'Εκστρατεία',
  'LBL_MODULE_TITLE' => 'Εκστρατείες: Αρχή',
  'LBL_MONTH' => 'Μήνα',
  'LBL_MORE_DETAILS' => 'Περισσότερες Λεπτομέρειες',
  'LBL_MRKT_NAME' => 'Όνομα',
  'LBL_NAME' => 'Όνομα:',
  'LBL_NAVIGATION_MENU_GEN1' => 'Επικεφαλίδα Εκστρατείας',
  'LBL_NAVIGATION_MENU_GEN2' => 'Προϋπολογισμός',
  'LBL_NAVIGATION_MENU_MARKETING' => 'Μάρκετινγκ',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Νέος Λογαριασμός Αλληλογραφίας',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Αποστολή Email',
  'LBL_NAVIGATION_MENU_SETUP' => 'Ρύθμιση Email',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Συνδρομές',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'Περίληψη',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'Σημεία Εντοπισμού',
  'LBL_NEWSLETTER' => 'Ενημερωτικά Δελτία',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'Ενημερωτικό Δελτίο:',
  'LBL_NEWSLETTERS' => 'Προβολή Ενημερωτικών Δελτίων',
  'LBL_NEWSLETTER_FORENTRY' => 'Ενημερωτικά Δελτία',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Λίστα Ενημερωτικού Δελτίου',
  'LBL_NEWSLETTER_TITLE' => 'Εκστρατείες: Ενημερωτικά Δελτία',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Επεξεργασία Ενημερωτικού Δελτίου:',
  'LBL_NEW_FORM_TITLE' => 'Νέα Εκστρατεία',
  'LBL_NO' => 'Όχι',
  'LBL_NONE' => 'καμία δημιουργία',
  'LBL_NON_ADMIN_ERROR_MSG' => 'Παρακαλώ ειδοποιήστε τον Διαχειριστή του Συστήματος σας έτσι ώστε να μποροέσει να διορθώσει αυτό το πρόβλημα',
  'LBL_NOTIFY_TITLE' => 'Επιλογές Ειδοποίησης Email',
  'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Δεν είναι έγκυρη διεύθυνση email',
  'LBL_NO_SUBS_ENTRIES_WARNING' => 'Δεν μπορείτε να στείλετε ένα email μάρκετινγκ έως ότου η λίστα εγγραφής σας να έχει τουλάχιστον μια είσοδο. Μπορείτε να συμπληρώσετε την λίστα σας μετά αφού τελειώσετε.',
  'LBL_NO_TARGETS_WARNING' => 'Δεν μπορείτε να στείλετε ένα email μάρκετινγκ μέχρι η εκστρατεία σας να έχει τουλάχιστον μία λίστα στόχου.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'Δεν μπορείτε να στείλετε ένα email μάρκετινγκ μέχρι η λίστα στόχου σας να έχει τουλάχιστον μία είσοδο. Μπορείτε να συμπληρώσετε τη λίστα σας μετά τον τερματισμό.',
  'LBL_OPPORTUNITIES' => 'Ευκαιρίες',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ευκαιρίες',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Ευκαιρίες',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'Κανένα-email Εκστρατείας',
  'LBL_PASSWORD' => 'Κωδικός',
  'LBL_PORT' => 'Θύρα Διακομιστή Ταχυδρομείου',
  'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Λίστα Προοπτικής',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Λίστα Στόχων',
  'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Παρακαλώ δώστε όλα τα απαραίτητα πεδία',
  'LBL_QUEUE_BUTTON_KEY' => 'U',
  'LBL_QUEUE_BUTTON_LABEL' => 'Αποστολή Emails',
  'LBL_QUEUE_BUTTON_TITLE' => 'Αποστολή Emails',
  'LBL_RECHECK_BTN' => 'Επαν-Επιλογή',
  'LBL_REFER_URL' => 'Ανακατεύθυνση URL Σημείου Εντοπισμού:',
  'LBL_REMOVE' => 'αφαί.',
  'LBL_REMOVED_SUBPANEL_TITLE' => 'Αφαιρέθηκε',
  'LBL_REPLY_ADDR' => '"Απάντηση σε" Διεύθυνση:',
  'LBL_REPLY_NAME' => '"Απάντηση σε" Όνομα:',
  'LBL_ROI_CHART_BUDGET' => 'Προϋπολογισμός',
  'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Αναμενόμενα Έσοδα',
  'LBL_ROI_CHART_INVESTMENT' => 'Επένδυση',
  'LBL_ROI_CHART_REVENUE' => 'Έσοδα',
  'LBL_ROLLOVER_VIEW' => 'Κυληθείτε στην μπάρα για προβολή λεπτομερειών.',
  'LBL_SAVED_SEARCH' => 'Αποθηκευμένη Αναζήτηση και Διάταξη',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Αποθήκευση και Συνέχεια',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Τέλος',
  'LBL_SCHEDULER_CHECK1_BAD' => 'Οι Προγραμματισμένες Εργασίες δεν έχουν καθοριστεί, για την επεξεργασία των Σφαλμένων Emails Εκστρατείας.',
  'LBL_SCHEDULER_CHECK2_BAD' => 'Οι Προγραμματισμένες Εργασίες δεν έχουν καθοριστεί, για την επεξεργασία των Emails Εκστρατείας.',
  'LBL_SCHEDULER_CHECK_BAD' => 'Δεν ανιχνεύθηκαν Προγραμματισμένες Εργασίες',
  'LBL_SCHEDULER_CHECK_GOOD' => 'Ανιχνεύθηκαν Προγραμματισμένες Εργασίες',
  'LBL_SCHEDULER_COMPONENTS' => 'Εξαρτήματα Προγραμματισμένων Εργασιών',
  'LBL_SCHEDULER_LINK' => 'πηγαίνετε στην οθόνη διαχείρισης "Προγραμματισμένες Εργασίες".',
  'LBL_SCHEDULER_NAME' => 'Προγραμματισμένες Εργασίες',
  'LBL_SCHEDULER_STATUS' => 'Κατάσταση',
  'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Εκστρατείας',
  'LBL_SELECT_LEAD_FIELDS' => 'Παρακαλώ επιλέξτε από τα διαθέσιμα πεδία',
  'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Παρακαλώ επιλέξτε τα απαραίτητα πεδία:',
  'LBL_SELECT_TARGET' => 'Χρήση υφιστάμενης Λίστας Στόχου',
  'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Λάθος Αποστολής',
  'LBL_SEND_AS_TEST' => 'Αποστολή Μάρκετινγκ Email ως Δοκιμή',
  'LBL_SEND_EMAIL' => 'Προγραμματισμός Email',
  'LBL_SERVER_TYPE' => 'Πρωτόκολλο Διακομιστή Ταχυδρομείου',
  'LBL_SERVER_URL' => 'Διεύθυνση Διακομιστή Ταχυδρομείου',
  'LBL_SSL' => 'Χρήση SSL',
  'LBL_SSL_DESC' => 'Εάν ο διακομιστής ταχυδρομείου σας υποστηρίζει ασφαλείς συνδέσεις υποδοχών, η διευκόλυνση αυτή θα αναγκάσει τις συνδέσεις SSL κατά την εισαγωγή email.',
  'LBL_START' => 'Έναρξη',
  'LBL_START_DATE_TIME' => 'Ημερομηνία & Ώρα Εκκίνησης:',
  'LBL_STATUS_TEXT' => 'Κατάσταση:',
  'LBL_SUBSCRIPTION_LIST' => 'Λίστα Συνδρομής',
  'LBL_SUBSCRIPTION_LIST_NAME' => 'Όνομα Λίστας Συνδρομής:',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Αυτό θα καθορίσει την λίστα στόχων του τύπου Συνδρομής για αυτή την εκστρατεία.<br />Αυτή η λίστα στόχων θα χρησιμοποιηθεί για να στείλει τα emails για αυτήν την εκστρατεία.<br />Εάν δεν έχετε μία έτοιμη λίστα, θα δημιουργηθεί μία κενή λίστα για σας.',
  'LBL_SUBSCRIPTION_TYPE_NAME' => 'Συνδρομή',
  'LBL_TARGETED' => 'Στοχευμένα',
  'LBL_TARGETED_SUBPANEL_TITLE' => 'Στοχευμένες',
  'LBL_TARGET_LIST' => 'Λίστα Στόχου:',
  'LBL_TARGET_LISTS' => 'Λίστες Στόχων',
  'LBL_TARGET_NAME' => 'Όνομα Λίστας Στόχου',
  'LBL_TARGET_TYPE' => 'Τύπος Λίστας Στόχου',
  'LBL_TEAM' => 'Ομάδα:',
  'LBL_TEMPLATE' => 'Πρότυπο Email:',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_TEST_BUTTON_LABEL' => 'Αποστολή Δοκιμής',
  'LBL_TEST_BUTTON_TITLE' => 'Αποστολή Δοκιμής',
  'LBL_TEST_EMAILS_SENT' => 'Απεσταλμένα Emails Δοκιμής',
  'LBL_TEST_LIST' => 'Λίστα Δοκιμής',
  'LBL_TEST_LIST_NAME' => 'Όνομα Λίστας Δοκιμής:',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'Αυτό θα καθορίσει την λίστα στόχων του τύπου Δοκιμή για αυτήν την εκστρατεία.<br />Αυτή η λίστα στόχων θα χρησιμοποιηθεί για να στείλει τα emails δοκιμής για αυτήν την εκστρατεία.<br />Εάν δεν έχετε μία έτοιμη λίστα, θα δημιουργηθεί μία κενή λίστα για σας.',
  'LBL_TEST_TYPE_NAME' => 'Δοκιμή',
  'LBL_TIME_START' => 'Ώρα Έναρξης',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_TODETAIL_BUTTON_LABEL' => 'Προβολή Λεπτομερειών',
  'LBL_TODETAIL_BUTTON_TITLE' => 'Προβολή Λεπτομερειών',
  'LBL_TOP_CAMPAIGNS' => 'Καλύτερες Εκστρατείες',
  'LBL_TOP_CAMPAIGNS_DESCRIPTION' => 'Κορυφαίες Εκστρατείες ανά Έσοδα',
  'LBL_TOP_CAMPAIGNS_NAME' => 'Όνομα Εκστρατείας',
  'LBL_TOP_CAMPAIGNS_REVENUE' => 'Έσοδα',
  'LBL_TOTAL_ENTRIES' => 'Καταχωρήσεις',
  'LBL_TOTAL_TARGETED' => 'Σύνολο Στοχευμένων',
  'LBL_TO_WIZARD' => 'Εκκίνηση',
  'LBL_TO_WIZARD_TITLE' => 'Εκκίνηση Οδηγού',
  'LBL_TRACKED_URLS' => 'URLs Σημείων Εντοπισμού',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'URLs Σημείων Εντοπισμού',
  'LBL_TRACKERS' => 'Σημεία Εντοπισμού',
  'LBL_TRACKER_COUNT' => 'Αρίθμηση Σημείου Εντοπισμού:',
  'LBL_TRACKER_KEY' => 'Σημείο Εντοπισμού:',
  'LBL_TRACKER_TEXT' => 'Σύνδεσμος Κειμένου Σημείου Εντοπισμού:',
  'LBL_TRACKER_URL' => 'URL Σημείου Εντοπισμού:',
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_TRACK_BUTTON_LABEL' => 'Προβολή Κατάστασης',
  'LBL_TRACK_BUTTON_TITLE' => 'Προβολή Κατάστασης',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Διαγραφή Δοκιμαστικών Καταχωρήσεων',
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Διαγραφή Δοκιμαστικών Καταχωρήσεων',
  'LBL_TRACK_DELETE_CONFIRM' => 'Αυτή η επιλογή θα διαγράψει τις καταχωρήσεις ημερολογίου που δημιουργούνται από τη δοκιμαστική λειτουργία. Συνέχεια;',
  'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'Παρακολούθηση Ουράς Αναμονής',
  'LBL_TRACK_ROI_BUTTON_LABEL' => 'Προβολή ROI',
  'LBL_UNSUBSCRIBED_HEADER' => 'Διαγραφή Συνδρομής Σε Διαθέσιμα/Ενημερωτικά Δελτία',
  'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Η αφαίρεση του ενημερωτικού δελτίου στα Διαθέσιμα Ενημερωτικά Δελτία/Διαγραμμένα Ενημερωτικά Δελτία από την λίστα Συνδρομής, θα προσθέσει την επαφή στην λίστα Διαγραφή Συνδρομής για αυτό το ενημερωτικό δελτίο. Δεν θα αφαιρέσει την επαφή από τον αρχική Λίστα Συνδρομής ή την Λίστα Στόχων.',
  'LBL_UNSUBSCRIPTION_LIST' => 'Λίστα Κατάργησης Συνδρομής',
  'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Όνομα Λίστας Κατάργησης Συνδρομής:',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Αυτό θα καθορίσει την λίστα στόχων του τύπου Κατάργηση Συνδρομής για αυτήν την εκστρατεία.<br />Αυτή η λίστα στόχων περιέχει τα ονόματα των ανθρώπων που έχουν αποχωρήσει από την εκστρατεία σας και δεν πρέπει να έρθει σε επαφή μέσω email.<br />Εάν δεν έχετε μία έτοιμη λίστα, θα δημιουργηθεί μία κενή λίστα για σας.',
  'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Κατάργηση Συνδρομής',
  'LBL_USERS_CANNOT_OPTOUT' => 'Οι Χειριστές Συστημάτων δεν μπορούν να εξαιρεθούν από τη παραλαβή emails.',
  'LBL_USE_EXISTING' => 'Χρήση Υφιστάμενου',
  'LBL_VALID' => 'Έγκυρο',
  'LBL_VIEWED_SUBPANEL_TITLE' => 'Εμφανίσεις',
  'LBL_VIEW_INLINE' => 'Προβολή',
  'LBL_WEB_TO_LEAD' => 'Δημιουργία Μορφής Δυνητικού Πελάτη',
  'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Δημιουργία Μορφής Δυνητικού Πελάτη: Επιλογή πεδίων',
  'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Δημιουργία Μορφής Δυνητικού Πελάτη: Ιδιότητες μορφής',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'Εισάγετε τον προϋπολογισμό για να υπολογίσετε το ROI.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'Είστε ήδη στο πρώτο βήμα.',
  'LBL_WIZARD_HEADER_MESSAGE' => 'Συμπληρώστε τα απαραίτητα πεδία για να βοηθήσετε να προσδιορίσει την εκστρατεία.',
  'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Είστε ήδη στο τελευταίο στάδιο.',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'Συμπληρώστε τη μορφή για να δημιουργήσετε παρακάτω μια περίπτωση emai για το ενημερωτικό δελτίο σας. Αυτό θα επιτρέψει να σας διευκρινίσει τις πληροφορίες σχετικά με το όταν και το πώς πρέπει να διανεμηθεί το ενημερωτικό δελτίο σας.',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'Αυτό είναι το τελευταίο βήμα στη διαδικασία. Επιλέξτε εάν επιθυμείτε να στείλετε ένα email δοκιμής, να προγραμματίσει το ενημερωτικό δελτίο σας για τη διανομή, ή αποθηκεύστε τις αλλαγές και προχωρήστε στη συνοπτική σελίδα.',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => 'Κάθε ενημερωτικό δελτίο πρέπει να έχει τρεις λίστες στόχων (συνδρομή, κατάργηση συνδρομής, και δοκιμή). Μπορείτε να ορίσετε μία υπάρχουσα λίστα στόχων. Εάν όχι, θα δημιουργηθεί μία κενή λίστα στόχων όταν αποθηκεύσετε το ενημερωτικό δελτίο.',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'Επιλέξτε ή δημιουργήστε μία λίστα στόχων για τη χρήση με την εκστρατεία σας. Αυτή η λίστα θα χρησιμοποιηθεί στέλνοντας emails με τα μηνύματα μάρκετινγκ σας.',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'Ή δημιουργήστε μία νέα λίστα στόχων χρησιμοποιώντας την παρακάτω μορφή:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'Καθορίστε ένα σημείο εντοπισμού URL για να το χρησιμοποιήσετε εδώ με αυτήν την εκστρατεία. Πρέπει να εισάγετε και το όνομα και την διεύθυνση URL για να δημιουργήσετε το σημείο εντοπισμού.',
  'LBL_WIZ_FROM_ADDRESS' => 'Μορφή Διεύθυνσης:',
  'LBL_WIZ_FROM_NAME' => 'Μορφή Ονόματος:',
  'LBL_WIZ_MARKETING_TITLE' => 'Email Μάρκετινγκ',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Επικεφαλίδα Εκστρατείας',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Προϋπολογισμός Εκστρατείας',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'Σημείου Εντοπισμού Εκστρατείας URLs',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Πληροφορία Συνδρομής',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Περίληψη',
  'LBL_WIZ_SENDMAIL_TITLE' => 'Αποστολή Email',
  'LBL_WIZ_TEST_EMAIL_TITLE' => 'Δοκιμή Email',
  'LBL_YEAR' => 'Έτος',
  'LBL_YES' => 'Ναι',
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'Η Εκστρατεία δεν μπορεί να λειτουργήσει ως επιθυμητή και το email σας δεν μπορεί να αποσταλεί για τους ακόλουθους λόγους:',
  'LNK_CAMPAIGN_LIST' => 'Προβολή Εκστρατειών',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Προβολή Προτύπων Email',
  'LNK_NEW_CAMPAIGN' => 'Δημιουργία Εκστρατείας (Κλασσική)',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Δημιουργία Προτύπου Email',
  'LNK_NEW_PROSPECT' => 'Δημιουργία Στόχων',
  'LNK_NEW_PROSPECT_LIST' => 'Δημιουργία Λίστας Στόχων',
  'LNK_PROSPECT_LIST' => 'Προβολή Στόχων',
  'LNK_PROSPECT_LIST_LIST' => 'Προβολή Λίστες Στόχων',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'Δημιουργία Εκστρατείας (Οδηγός)',
  'NTC_DELETE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτή την εγγραφή;',
  'NTC_NO_LEGENDS' => 'Κανένα',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Αξία από Config.php ρύθμιση site_url',
);

