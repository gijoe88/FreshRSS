<?php

return array(
	'archiving' => array(
		'_' => 'Archivierung',
		'delete_after' => 'Entferne Artikel nach',
		'exception' => 'Purge exception',	//TODO - Translation
		'help' => 'Weitere Optionen sind in den Einstellungen der individuellen Feeds verfügbar.',
		'keep_favourites' => 'Never delete favourites',	//TODO - Translation
		'keep_min_by_feed' => 'Minimale Anzahl an Artikeln, die pro Feed behalten werden',
		'keep_labels' => 'Never delete labels',	//TODO - Translation
		'keep_unreads' => 'Never delete unreads',	//TODO - Translation
		'maintenance' => 'Maintenance',	//TODO - Translation
		'optimize' => 'Datenbank optimieren',
		'optimize_help' => 'Sollte gelegentlich durchgeführt werden, um die Größe der Datenbank zu reduzieren.',
		'policy' => 'Purge policy',	//TODO - Translation
		'policy_warning' => 'If no purge policy is selected, every article will be kept.',	//TODO - Translation
		'purge_now' => 'Jetzt bereinigen',
		'keep_max' => 'Maximum number of articles to keep',	//TODO - Translation
		'keep_period' => 'Maximum age of articles to keep',	//TODO - Translation
		'title' => 'Archivierung',
		'ttl' => 'Aktualisiere automatisch nicht öfter als',
	),
	'display' => array(
		'_' => 'Anzeige',
		'icon' => array(
			'bottom_line' => 'Fußzeile',
			'entry' => 'Artikel-Symbole',
			'publication_date' => 'Datum der Veröffentlichung',
			'related_tags' => 'Verwandte Tags',
			'sharing' => 'Teilen',
			'display_authors' => 'Authors',  //TODO - Translation
			'top_line' => 'Kopfzeile',
		),
		'language' => 'Sprache',
		'notif_html5' => array(
			'seconds' => 'Sekunden (0 bedeutet keine Zeitüberschreitung)',
			'timeout' => 'Zeitüberschreitung für HTML5-Benachrichtigung',
		),
		'show_nav_buttons' => 'Zeige Navigations-Buttons',
		'theme' => 'Erscheinungsbild',
		'title' => 'Anzeige',
		'width' => array(
			'content' => 'Inhaltsbreite',
			'large' => 'Gross',
			'medium' => 'Mittel',
			'no_limit' => 'Keine Begrenzung',
			'thin' => 'Klein',
		),
	),
	'profile' => array(
		'_' => 'Profil-Verwaltung',
		'delete' => array(
			'_' => 'Accountlöschung',
			'warn' => 'Dein Account und alle damit bezogenen Daten werden gelöscht.',
		),
		'email' => 'E-Mail-Adresse',
		'password_api' => 'Passwort-API<br /><small>(z. B. für mobile Anwendungen)</small>',
		'password_form' => 'Passwort<br /><small>(für die Anmeldemethode per Webformular)</small>',
		'password_format' => 'mindestens 7 Zeichen',
		'title' => 'Profil',
	),
	'query' => array(
		'_' => 'Benutzerabfragen',
		'deprecated' => 'Diese Abfrage ist nicht länger gültig. Die referenzierte Kategorie oder der Feed ist gelöscht worden.',
		'display' => 'Zeige Abfrage Ergebnisse',
		'filter' => 'Angewendeter Filter:',
		'get_all' => 'Alle Artikel anzeigen',
		'get_category' => 'Kategorie "%s" anzeigen',
		'get_favorite' => 'Lieblingsartikel anzeigen',
		'get_feed' => 'Feed "%s" anzeigen',
		'no_filter' => 'Kein Filter',
		'none' => 'Sie haben bisher keine Benutzerabfrage erstellt.',
		'number' => 'Abfrage Nr. %d',
		'order_asc' => 'Älteste Artikel zuerst anzeigen',
		'order_desc' => 'Neueste Artikel zuerst anzeigen',
		'remove' => 'Lösche Abfrage',
		'search' => 'Suche nach "%s"',
		'state_0' => 'Alle Artikel anzeigen',
		'state_1' => 'Gelesene Artikel anzeigen',
		'state_2' => 'Ungelesene Artikel anzeigen',
		'state_3' => 'Alle Artikel anzeigen',
		'state_4' => 'Lieblingsartikel anzeigen',
		'state_5' => 'Gelesene Lieblingsartikel anzeigen',
		'state_6' => 'Ungelesene Lieblingsartikel anzeigen',
		'state_7' => 'Lieblingsartikel anzeigen',
		'state_8' => 'Keine Lieblingsartikel anzeigen',
		'state_9' => 'Gelesene ohne Lieblingsartikel anzeigen',
		'state_10' => 'Ungelesene ohne Lieblingsartikel anzeigen',
		'state_11' => 'Keine Lieblingsartikel anzeigen',
		'state_12' => 'Alle Artikel anzeigen',
		'state_13' => 'Gelesene Artikel anzeigen',
		'state_14' => 'Ungelesene Artikel anzeigen',
		'state_15' => 'Alle Artikel anzeigen',
		'title' => 'Benutzerabfragen',
	),
	'reading' => array(
		'_' => 'Lesen',
		'after_onread' => 'Nach „Alle als gelesen markieren“,',
		'articles_per_page' => 'Anzahl der Artikel pro Seite',
		'auto_load_more' => 'Die nächsten Artikel am Seitenende laden',
		'auto_remove_article' => 'Artikel nach dem Lesen verstecken',
		'confirm_enabled' => 'Bei der Aktion „Alle als gelesen markieren“ einen Bestätigungsdialog anzeigen',
		'display_articles_unfolded' => 'Artikel standardmäßig ausgeklappt zeigen',
		'display_categories_unfolded' => 'Kategorien standardmäßig ausgeklappt zeigen',
		'hide_read_feeds' => 'Kategorien & Feeds ohne ungelesene Artikel verstecken (funktioniert nicht mit der Einstellung „Alle Artikel zeigen“)',
		'img_with_lazyload' => 'Verwende die "träges Laden"-Methode zum Laden von Bildern',
		'jump_next' => 'springe zum nächsten ungelesenen Geschwisterelement (Feed oder Kategorie)',
		'mark_updated_article_unread' => 'Markieren Sie aktualisierte Artikel als ungelesen',
		'number_divided_when_reader' => 'Geteilt durch 2 in der Lese-Ansicht.',
		'read' => array(
			'article_open_on_website' => 'wenn der Artikel auf der Original-Webseite geöffnet wird',
			'article_viewed' => 'wenn der Artikel angesehen wird',
			'scroll' => 'beim Scrollen bzw. Überspringen',
			'upon_reception' => 'beim Empfang des Artikels',
			'when' => 'Artikel als gelesen markieren…',
		),
		'show' => array(
			'_' => 'Artikel zum Anzeigen',
			'adaptive' => 'Anzeige anpassen',
			'all_articles' => 'Alle Artikel zeigen',
			'unread' => 'Nur ungelesene zeigen',
		),
		'sides_close_article' => 'Klick außerhalb des Artikel-Textes schließt den Artikel',
		'sort' => array(
			'_' => 'Sortierreihenfolge',
			'newer_first' => 'Neuere zuerst',
			'older_first' => 'Ältere zuerst',
		),
		'sticky_post' => 'Wenn geöffnet, den Artikel ganz oben anheften',
		'title' => 'Lesen',
		'view' => array(
			'default' => 'Standard-Ansicht',
			'global' => 'Globale Ansicht',
			'normal' => 'Normale Ansicht',
			'reader' => 'Lese-Ansicht',
		),
	),
	'sharing' => array(
		'_' => 'Teilen',
		'add' => 'Füge eine Teilen-Dienst hinzu',
		'blogotext' => 'Blogotext',
		'diaspora' => 'Diaspora*',
		'email' => 'E-Mail',
		'facebook' => 'Facebook',
		'more_information' => 'Weitere Informationen',
		'print' => 'Drucken',
		'remove' => 'Entferne Teilen-Dienst',
		'shaarli' => 'Shaarli',
		'share_name' => 'Anzuzeigender Teilen-Name',
		'share_url' => 'Zu verwendende Teilen-URL',
		'title' => 'Teilen',
		'twitter' => 'Twitter',
		'wallabag' => 'wallabag',
	),
	'shortcut' => array(
		'_' => 'Tastenkombination',
		'article_action' => 'Artikelaktionen',
		'auto_share' => 'Teilen',
		'auto_share_help' => 'Wenn es nur eine Option zum Teilen gibt, wird diese verwendet. Ansonsten sind die Optionen über ihre Nummer erreichbar.',
		'close_dropdown' => 'Menüs schließen',
		'collapse_article' => 'Einklappen',
		'first_article' => 'Zum ersten Artikel springen',
		'focus_search' => 'Auf das Suchfeld zugreifen',
		'global_view' => 'Wechsle zur globalen Ansicht',
		'help' => 'Dokumentation anzeigen',
		'javascript' => 'JavaScript muss aktiviert sein, um Tastaturkürzel benutzen zu können',
		'last_article' => 'Zum letzten Artikel springen',
		'load_more' => 'Weitere Artikel laden',
		'mark_favorite' => 'Als Favorit markieren',
		'mark_read' => 'Als gelesen markieren',
		'navigation' => 'Navigation',
		'navigation_help' => 'Mit der "Umschalttaste" finden die Tastenkombination auf Feeds Anwendung.<br/>Mit der "Alt-Taste" finden die Tastenkombination auf Kategorien Anwendung.',
		'navigation_no_mod_help' => 'The following navigation shortcuts do not support modifiers.',	//TODO - Translation
		'next_article' => 'Zum nächsten Artikel springen',
		'normal_view' => 'Wechsle zur normalen Ansicht',
		'other_action' => 'Andere Aktionen',
		'previous_article' => 'Zum vorherigen Artikel springen',
		'reading_view' => 'Wechsle zur Lese-Ansicht',
		'rss_view' => 'Öffne RSS Ansicht in neuem Tab',
		'see_on_website' => 'Auf der Original-Webseite ansehen',
		'shift_for_all_read' => '+ <code>Umschalttaste</code>, um alle Artikel als gelesen zu markieren.',
		'skip_next_article' => 'Focus next without opening',	//TODO - Translation
		'skip_previous_article' => 'Focus previous without opening',	//TODO - Translation
		'title' => 'Tastenkombination',
		'user_filter' => 'Auf Benutzerfilter zugreifen',
		'user_filter_help' => 'Wenn es nur einen Benutzerfilter gibt, wird dieser verwendet. Ansonsten sind die Filter über ihre Nummer erreichbar.',
		'views' => 'Ansichten',
	),
	'user' => array(
		'articles_and_size' => '%s Artikel (%s)',
		'current' => 'Aktueller Benutzer',
		'is_admin' => 'ist Administrator',
		'users' => 'Benutzer',
	),
);
