<?php

return array(
	'auth' => array(
		'allow_anonymous' => 'הרשאה לאנונימיים לקרוא את מאמרי משתמש ברירת המחדל (%s)',
		'allow_anonymous_refresh' => 'הרשאה לאנונימיים לרענן את רשימת המאמרים',
		'api_enabled' => 'הרשאת גישה ל <abbr>API</abbr> <small>(נדרש ליישומים סלולריים)</small>',
		'form' => 'טופס אינטרנטי (מסורתי, דורש JavaScript)',
		'http' => 'HTTP (למשתמשים מתקדמים עם HTTPS)',
		'none' => 'ללא (מסוכן)',
		'title' => 'Authentication',	//TODO - Translation
		'title_reset' => 'איפוס אימות',
		'token' => 'מחרוזת אימות',
		'token_help' => 'Allows to access RSS output of the default user without authentication:',	//TODO - Translation
		'type' => 'שיטת אימות',
		'unsafe_autologin' => 'הרשאה להתחברות אוטומטית בפורמט: ',
	),
	'check_install' => array(
		'cache' => array(
			'nok' => 'יש לבדוק את ההרשאות בתיקייה <em>%s</em>. שרת הHTTP חייב להיות בעל הרשאות כתיבה.',
			'ok' => 'ההרשאות בתיקיית המטמון תקינות',
		),
		'categories' => array(
			'nok' => 'Category table is bad configured.',	//TODO - Translation
			'ok' => 'Category table is ok.',	//TODO - Translation
		),
		'connection' => array(
			'nok' => 'Connection to the database cannot being established.',	//TODO - Translation
			'ok' => 'Connection to the database is ok.',	//TODO - Translation
		),
		'ctype' => array(
			'nok' => 'הספרייה הנדרשת ל character type checking (php-ctype) אינה מותקנת',
			'ok' => 'הספרייה הנדרשת ל character type checking (ctype) מותקנת',
		),
		'curl' => array(
			'nok' => 'בURL לא מותקן (php-curl package)',
			'ok' => 'You have cURL extension.',	//TODO - Translation
		),
		'data' => array(
			'nok' => 'יש לבדוק את ההרשאות בתיקייה <em>%s</em>. שרת הHTTP חייב להיות בעל הרשאות כתיבה.',
			'ok' => 'ההרשאות בתיקיית הדאטא תקינות',
		),
		'database' => 'Database installation',	//TODO - Translation
		'dom' => array(
			'nok' => 'הספרייה הנדרשת לסיור ב DOM אינה מותקנת  (php-xml package)',
			'ok' => 'הספרייה הנדרשת לסיור ב DOM מותקנת',
		),
		'entries' => array(
			'nok' => 'Entry table is bad configured.',	//TODO - Translation
			'ok' => 'Entry table is ok.',	//TODO - Translation
		),
		'favicons' => array(
			'nok' => 'Check permissions on <em>./data/favicons</em> directory. HTTP server must have rights to write into',	//TODO - Translation
			'ok' => 'ההרשאות בתיקיית הfavicons תקינות',
		),
		'feeds' => array(
			'nok' => 'Feed table is bad configured.',	//TODO - Translation
			'ok' => 'Feed table is ok.',	//TODO - Translation
		),
		'fileinfo' => array(
			'nok' => 'Cannot find the PHP fileinfo library (fileinfo package).',	//TODO - Translation
			'ok' => 'You have the fileinfo library.',	//TODO - Translation
		),
		'files' => 'File installation',	//TODO - Translation
		'json' => array(
			'nok' => 'You lack JSON (php-json package).',	//TODO - Translation
			'ok' => 'You have JSON extension.',	//TODO - Translation
		),
		'mbstring' => array(
			'nok' => 'Cannot find the recommended library mbstring for Unicode.',	//TODO - Translation
			'ok' => 'You have the recommended library mbstring for Unicode.',	//TODO - Translation
		),
		'minz' => array(
			'nok' => 'You lack the Minz framework.',	//TODO - Translation
			'ok' => 'יש לכם את תשתית Minz',
		),
		'pcre' => array(
			'nok' => 'הספרייה הנדרשת לביטויים רגולריים אינה מותקנת (php-pcre)',
			'ok' => 'הספרייה הנדרשת לביטויים רגולריים מותקנת (PCRE)',
		),
		'pdo' => array(
			'nok' => 'PDO אינו מותקן או שאחד ממנהלי ההתקנים שלו חסר (pdo_mysql, pdo_sqlite)',
			'ok' => 'PDO מותקן ולפחות אחד ממנהלי ההתקן הנתמכים מותקן (pdo_mysql, pdo_sqlite)',
		),
		'php' => array(
			'_' => 'PHP installation',	//TODO - Translation
			'nok' => 'גירסת PHP שלכם היא %s אך FreshRSS דורש לפחות את גירסה %s',
			'ok' => 'גירסת PHP שלכם היא %s, שתואמת ל FreshRSS',
		),
		'tables' => array(
			'nok' => 'There is one or more lacking tables in the database.',	//TODO - Translation
			'ok' => 'Tables are existing in the database.',	//TODO - Translation
		),
		'title' => 'Installation checking',	//TODO - Translation
		'tokens' => array(
			'nok' => 'Check permissions on <em>./data/tokens</em> directory. HTTP server must have rights to write into',	//TODO - Translation
			'ok' => 'Permissions on tokens directory are good.',	//TODO - Translation
		),
		'users' => array(
			'nok' => 'Check permissions on <em>./data/users</em> directory. HTTP server must have rights to write into',	//TODO - Translation
			'ok' => 'Permissions on users directory are good.',	//TODO - Translation
		),
		'zip' => array(
			'nok' => 'You lack ZIP extension (php-zip package).',	//TODO - Translation
			'ok' => 'You have ZIP extension.',	//TODO - Translation
		),
	),
	'extensions' => array(
		'author' => 'Author',	//TODO - Translation
		'community' => 'Available community extensions',	//TODO - Translation
		'description' => 'Description',	//TODO - Translation
		'disabled' => 'Disabled',	//TODO - Translation
		'empty_list' => 'There is no installed extension',	//TODO - Translation
		'enabled' => 'Enabled',	//TODO - Translation
		'latest' => 'Installed',	//TODO - Translation
		'name' => 'Name',	//TODO - Translation
		'no_configure_view' => 'This extension cannot be configured.',	//TODO - Translation
		'system' => array(
			'_' => 'System extensions',	//TODO - Translation
			'no_rights' => 'System extension (you have no rights on it)',	//TODO - Translation
		),
		'title' => 'Extensions',	//TODO - Translation
		'update' => 'Update available',	//TODO - Translation
		'user' => 'User extensions',	//TODO - Translation
		'version' => 'Version',	//TODO - Translation
	),
	'stats' => array(
		'_' => 'סטטיסטיקות',
		'all_feeds' => 'כל ההזנות',
		'category' => 'קטגוריה',
		'entry_count' => 'סכום המאמרים',
		'entry_per_category' => 'מאמרים על פי קטגוריה',
		'entry_per_day' => 'מספר מאמרים ליום (30 ימים אחרונים)',
		'entry_per_day_of_week' => 'Per day of week (average: %.2f messages)',	//TODO - Translation
		'entry_per_hour' => 'Per hour (average: %.2f messages)',	//TODO - Translation
		'entry_per_month' => 'Per month (average: %.2f messages)',	//TODO - Translation
		'entry_repartition' => 'חלוקת המאמרים',
		'feed' => 'הזנה',
		'feed_per_category' => 'הזנות על פי קטגוריה',
		'idle' => 'הזנות שלא עודכנו',
		'main' => 'סטטיסטיקות ראשיות',
		'main_stream' => 'הזנה ראשית',
		'menu' => array(
			'idle' => 'הזנות שלא עודכנו',
			'main' => 'סטטיסטיקות ראשיות',
			'repartition' => 'חלוקת המאמרים',
		),
		'no_idle' => 'אין הזנות מובטלות!',
		'number_entries' => '%d מאמרים',
		'percent_of_total' => '%% מסך הכל',
		'repartition' => 'חלוקת המאמרים',
		'status_favorites' => 'מועדפים',
		'status_read' => 'נקרא',
		'status_total' => 'סך הכל',
		'status_unread' => 'לא נקרא',
		'title' => 'סטטיסטיקות',
		'top_feed' => 'עשרת ההזנות המובילות',
	),
	'system' => array(
		'_' => 'System configuration', //TODO - Translation
		'auto-update-url' => 'Auto-update server URL', //TODO - Translation
		'cookie-duration' => array(
			'help' => 'in seconds', //TODO - Translation
			'number' => 'Duration to keep logged in', //TODO - Translation
		),
		'force_email_validation' => 'Force email addresses validation', //TODO - Translation
		'instance-name' => 'Instance name', //TODO - Translation
		'max-categories' => 'Categories per user limit', //TODO - Translation
		'max-feeds' => 'Feeds per user limit', //TODO - Translation
		'registration' => array(
			'help' => '0 means that there is no account limit',	//TODO - Translation
			'number' => 'Max number of accounts',	//TODO - Translation
		),
	),
	'update' => array(
		'_' => 'מערכת העדכון',
		'apply' => 'החלת העדכון',
		'check' => 'בדיקת עדכונים חדשים',
		'current_version' => 'Your current version of FreshRSS is the %s.',	//TODO - Translation
		'last' => 'תאריך בדיקה אחרון: %s',
		'none' => 'אין עדכון להחלה',
		'title' => 'מערכת העדכון',
	),
	'user' => array(
		'articles_and_size' => '%s articles (%s)',	//TODO - Translation
		'create' => 'יצירת משתמש חדש',
		'delete_users' => 'Delete user',	//TODO - Translation
		'language' => 'שפה',
		'number' => 'There is %d account created',	//TODO - Translation
		'numbers' => 'There are %d accounts created',	//TODO - Translation
		'password_form' => 'סיסמה<br /><small>(לשימוש בטפוס ההרשמה)</small>',
		'password_format' => 'At least 7 characters',	//TODO - Translation
		'selected' => 'Selected user',	//TODO - Translation
		'title' => 'Manage users',	//TODO - Translation
		'update_users' => 'Update user',	//TODO - Translation
		'user_list' => 'רשימת משתמשים',
		'username' => 'שם משתמש',
		'users' => 'משתמשים',
	),
);
