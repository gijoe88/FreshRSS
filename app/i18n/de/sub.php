<?php

return array(
	'api' => array(
		'documentation' => 'Kopieren Sie die folgende URL, um sie in einem externen Tool zu verwenden.',
		'title' => 'API',
	),
	'bookmarklet' => array(
		'documentation' => 'Ziehen Sie diese Schaltfläche auf Ihre Lesezeichen-Symbolleiste oder klicken Sie mit der rechten Maustaste darauf und wählen Sie "Als Lesezeichen hinzufügen". Klicken Sie dann auf einer beliebigen Seite, die Sie abonnieren möchten, auf die Schaltfläche "Abonnieren".',
		'label' => 'Abonnieren',
		'title' => 'Bookmarklet',
	),
	'category' => array(
		'_' => 'Kategorie',
		'add' => 'Eine Kategorie hinzufügen',
		'archiving' => 'Archivierung',
		'empty' => 'Leere Kategorie',
		'information' => 'Information',
		'new' => 'Neue Kategorie',
		'position' => 'Display position',	//TODO - Translation
		'position_help' => 'To control category sort order',	//TODO - Translation
		'title' => 'Titel',
	),
	'feed' => array(
		'add' => 'Einen RSS-Feed hinzufügen',
		'advanced' => 'Erweitert',
		'archiving' => 'Archivierung',
		'auth' => array(
			'configuration' => 'Anmelden',
			'help' => 'Die Verbindung erlaubt Zugriff auf HTTP-geschützte RSS-Feeds',
			'http' => 'HTTP-Authentifizierung',
			'password' => 'HTTP-Passwort',
			'username' => 'HTTP-Nutzername',
		),
		'clear_cache' => 'Nicht cachen (für defekte Feeds)',
		'css_help' => 'Ruft gekürzte RSS-Feeds ab (Achtung, benötigt mehr Zeit!)',
		'css_path' => 'Pfad zur CSS-Datei des Artikels auf der Original-Webseite',
		'description' => 'Beschreibung',
		'empty' => 'Dieser Feed ist leer. Bitte stellen Sie sicher, dass er noch gepflegt wird.',
		'error' => 'Dieser Feed ist auf ein Problem gestoßen. Bitte stellen Sie sicher, dass er immer lesbar ist und aktualisieren Sie ihn dann.',
		'filteractions' => array(
			'_' => 'Filter actions',	//TODO - Translation
			'help' => 'Write one search filter per line.',	//TODO - Translation
		),
		'information' => 'Information',
		'keep_min' => 'Minimale Anzahl an Artikeln, die behalten wird',
		'moved_category_deleted' => 'Wenn Sie eine Kategorie entfernen, werden deren Feeds automatisch in die Kategorie <em>%s</em> eingefügt.',
		'mute' => 'Stumm schalten',
		'no_selected' => 'Kein Feed ausgewählt.',
		'number_entries' => '%d Artikel',
		'priority' => array(
			'_' => 'Sichtbarkeit',
			'archived' => 'Nicht anzeigen (archiviert)',
			'main_stream' => 'In Haupt-Feeds zeigen',
			'normal' => 'Zeige in eigener Kategorie',
		),
		'websub' => 'Sofortbenachrichtigung mit WebSub',
		'show' => array(
			'all' => 'Show all feeds',	//TODO - Translation
			'error' => 'Show only feeds with error',	//TODO - Translation
		),
		'showing' => array(
			'error' => 'Showing only feeds with error',	//TODO - Translation
		),
		'ssl_verify' => 'Überprüfe SSL Sicherheit',
		'stats' => 'Statistiken',
		'think_to_add' => 'Sie können Feeds hinzufügen.',
		'timeout' => 'Zeitlimit in Sekunden',
		'title' => 'Titel',
		'title_add' => 'Einen RSS-Feed hinzufügen',
		'ttl' => 'Aktualisiere automatisch nicht öfter als',
		'url' => 'Feed-URL',
		'validator' => 'Überprüfen Sie die Gültigkeit des Feeds',
		'website' => 'Webseiten-URL',
	),
	'firefox' => array(
		'documentation' => 'Folge den <a href="https://developer.mozilla.org/en-US/Firefox/Releases/2/Adding_feed_readers_to_Firefox#Adding_a_new_feed_reader_manually">hier</a> beschriebenen Schritten um FreshRSS zu Deiner Firefox RSS-Reader Liste hinzuzufügen.',
		'obsolete_63' => 'From version 63 and onwards, Firefox has removed the ability to add your own subscription services that are not standalone programs.',	//TODO - Translation
		'title' => 'Firefox RSS-Reader',
	),
	'import_export' => array(
		'export' => 'Exportieren',
		'export_opml' => 'Liste der Feeds exportieren (OPML)',
		'export_starred' => 'Ihre Favoriten exportieren',
		'export_labelled' => 'Export your labelled articles',	//TODO
		'feed_list' => 'Liste von %s Artikeln',
		'file_to_import' => 'Zu importierende Datei<br />(OPML, JSON oder ZIP)',
		'file_to_import_no_zip' => 'Zu importierende Datei<br />(OPML oder JSON)',
		'import' => 'Importieren',
		'starred_list' => 'Liste der Lieblingsartikel',
		'title' => 'Importieren / Exportieren',
	),
	'menu' => array(
		'bookmark' => 'Abonnieren (FreshRSS-Lesezeichen)',
		'import_export' => 'Importieren / Exportieren',
		'subscription_management' => 'Abonnementverwaltung',
		'subscription_tools' => 'Abonnement-Tools',
	),
	'title' => array(
		'_' => 'Abonnementverwaltung',
		'feed_management' => 'Verwaltung der RSS-Feeds',
		'subscription_tools' => 'Abonnement-Tools',
	),
);
