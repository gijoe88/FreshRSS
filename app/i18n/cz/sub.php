<?php

return array(
	'api' => array(
		'documentation' => 'Copy the following URL to use it within an external tool.',	//TODO - Translation
		'title' => 'API',	//TODO - Translation
	),
	'bookmarklet' => array(
		'documentation' => 'Drag this button to your bookmarks toolbar or right-click it and choose "Bookmark This Link". Then click "Subscribe" button in any page you want to subscribe to.',	//TODO - Translation
		'label' => 'Subscribe',	//TODO - Translation
		'title' => 'Bookmarklet',	//TODO - Translation
	),
	'category' => array(
		'_' => 'Kategorie',
		'add' => 'Přidat kategorii',
		'archiving' => 'Archivace',
		'empty' => 'Vyprázdit kategorii',
		'information' => 'Informace',
		'new' => 'Nová kategorie',
		'position' => 'Display position',	//TODO - Translation
		'position_help' => 'To control category sort order',	//TODO - Translation
		'title' => 'Název',
	),
	'feed' => array(
		'add' => 'Přidat RSS kanál',
		'advanced' => 'Pokročilé',
		'archiving' => 'Archivace',
		'auth' => array(
			'configuration' => 'Přihlášení',
			'help' => 'Umožní přístup k RSS kanálům chráneným HTTP autentizací',
			'http' => 'HTTP přihlášení',
			'password' => 'Heslo',
			'username' => 'Přihlašovací jméno',
		),
		'clear_cache' => 'Always clear cache',	//TODO - Translation
		'css_help' => 'Stáhne zkrácenou verzi RSS kanálů (pozor, náročnější na čas!)',
		'css_path' => 'Původní CSS soubor článku z webových stránek',
		'description' => 'Popis',
		'empty' => 'Kanál je prázdný. Ověřte prosím zda je ještě autorem udržován.',
		'error' => 'Vyskytl se problém s kanálem. Ověřte že je vždy dostupný, prosím, a poté jej aktualizujte.',
		'filteractions' => array(
			'_' => 'Filter actions',	//TODO - Translation
			'help' => 'Write one search filter per line.',	//TODO - Translation
		),
		'information' => 'Informace',
		'keep_min' => 'Zachovat tento minimální počet článků',
		'moved_category_deleted' => 'Po smazání kategorie budou v ní obsažené kanály automaticky přesunuty do <em>%s</em>.',
		'mute' => 'mute',	//TODO - Translation
		'no_selected' => 'Nejsou označeny žádné kanály.',
		'number_entries' => '%d článků',
		'priority' => array(
			'_' => 'Visibility',	//TODO - Translation
			'archived' => 'Do not show (archived)',	//TODO - Translation
			'main_stream' => 'Zobrazit ve “Všechny kanály”',
			'normal' => 'Show in its category',	//TODO - Translation
		),
		'websub' => 'Okamžité oznámení s WebSub',
		'show' => array(
			'all' => 'Show all feeds',	//TODO - Translation
			'error' => 'Show only feeds with error',	//TODO - Translation
		),
		'showing' => array(
			'error' => 'Showing only feeds with error',	//TODO - Translation
		),
		'ssl_verify' => 'Verify SSL security',	//TODO - Translation
		'stats' => 'Statistika',
		'think_to_add' => 'Můžete přidat kanály.',
		'timeout' => 'Timeout in seconds',	//TODO - Translation
		'title' => 'Název',
		'title_add' => 'Přidat RSS kanál',
		'ttl' => 'Neobnovovat častěji než',
		'url' => 'URL kanálu',
		'validator' => 'Zkontrolovat platnost kanálu',
		'website' => 'URL webové stránky',
	),
	'firefox' => array(
		'documentation' => 'Follow the steps described <a href="https://developer.mozilla.org/en-US/Firefox/Releases/2/Adding_feed_readers_to_Firefox#Adding_a_new_feed_reader_manually">here</a> to add FreshRSS to Firefox feed reader list.',// TODO
		'obsolete_63' => 'From version 63 and onwards, Firefox has removed the ability to add your own subscription services that are not standalone programs.',	//TODO - Translation
		'title' => 'Firefox feed reader',	//TODO - Translation
	),
	'import_export' => array(
		'export' => 'Export',
		'export_opml' => 'Exportovat seznam kanálů (OPML)',
		'export_starred' => 'Exportovat oblíbené',
		'export_labelled' => 'Export your labelled articles',	//TODO
		'feed_list' => 'Seznam %s článků',
		'file_to_import' => 'Soubor k importu<br />(OPML, JSON nebo ZIP)',
		'file_to_import_no_zip' => 'Soubor k importu<br />(OPML nebo JSON)',
		'import' => 'Import',
		'starred_list' => 'Seznam oblíbených článků',
		'title' => 'Import / export',
	),
	'menu' => array(
		'bookmark' => 'Přihlásit (FreshRSS bookmark)',
		'import_export' => 'Import / export',
		'subscription_management' => 'Správa subskripcí',
		'subscription_tools' => 'Subscription tools',	//TODO - Translation
	),
	'title' => array(
		'_' => 'Správa subskripcí',
		'feed_management' => 'Správa RSS kanálů',
		'subscription_tools' => 'Subscription tools',	//TODO - Translation
	),
);
