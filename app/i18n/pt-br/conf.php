<?php

return array(
	'archiving' => array(
		'_' => 'Arquivar',
		'delete_after' => 'Remover artigos depois',
		'exception' => 'Purge exception',	//TODO - Translation
		'help' => 'Mais opções estão disponíveis nas configurações individuais do feed',
		'keep_favourites' => 'Never delete favourites',	//TODO - Translation
		'keep_min_by_feed' => 'Número mínimo de artigos para deixar no feed',
		'keep_labels' => 'Never delete labels',	//TODO - Translation
		'keep_unreads' => 'Never delete unreads',	//TODO - Translation
		'maintenance' => 'Maintenance',	//TODO - Translation
		'optimize' => 'Otimizar banco de dados',
		'optimize_help' => 'Faça ocasionalmente para reduzir o tamanho do banco de dados',
		'policy' => 'Purge policy',	//TODO - Translation
		'policy_warning' => 'If no purge policy is selected, every article will be kept.',	//TODO - Translation
		'purge_now' => 'Purge agora',
		'keep_max' => 'Maximum number of articles to keep',	//TODO - Translation
		'keep_period' => 'Maximum age of articles to keep',	//TODO - Translation
		'title' => 'Arquivar',
		'ttl' => 'Não atualize automaticamente mais frequente que',
	),
	'display' => array(
		'_' => 'Exibição',
		'icon' => array(
			'bottom_line' => 'Linha inferior',
			'entry' => 'Ícones de artigos',
			'publication_date' => 'Data da publicação',
			'related_tags' => 'Tags relacionadas',	//TODO - Translation
			'sharing' => 'Compartilhar',
			'display_authors' => 'Authors',  //TODO - Translation
			'top_line' => 'Linha superior',
		),
		'language' => 'Ídioma',
		'notif_html5' => array(
			'seconds' => 'segundos (0 significa sem timeout)',
			'timeout' => 'Notificação em HTML5 de timeout',
		),
		'show_nav_buttons' => 'Show the navigation buttons',	//TODO - Translation
		'theme' => 'Tema',
		'title' => 'Exibição',
		'width' => array(
			'content' => 'Largura do conteúdo',
			'large' => 'Largo',
			'medium' => 'Médio',
			'no_limit' => 'Sem lmite',
			'thin' => 'Fino',
		),
	),
	'profile' => array(
		'_' => 'Gerenciamento de perfil',
		'delete' => array(
			'_' => 'Remover conta',
			'warn' => 'Sua conta e todos os dados relacionados serão removidos.',
		),
		'email' => 'Endereço de e-mail',
		'password_api' => 'Senha da API<br /><small>(p.s., para aplicativos móveis)</small>',
		'password_form' => 'Senha<br /><small>(para o método de formulário web)</small>',
		'password_format' => 'Ao menos 7 caracteres',
		'title' => 'Perfil',
	),
	'query' => array(
		'_' => 'Queries do usuário',
		'deprecated' => 'Esta não é mais válida. A categoria ou feed relacionado foi deletado.',
		'display' => 'Display user query results',	//TODO - Translation
		'filter' => 'Filtro aplicado:',
		'get_all' => 'Mostrar todos os artigos',
		'get_category' => 'Visualizar "%s" categoria',
		'get_favorite' => 'Visualizar artigos favoritos',
		'get_feed' => 'Visualizar "%s" feed',
		'no_filter' => 'Sem filtro',
		'none' => 'Você não criou nenhuma query de usuário ainda.',
		'number' => 'Query n°%d',
		'order_asc' => 'Exibir artigos mais antigos primeiro',
		'order_desc' => 'Exibir artigos mais novos primeiro',
		'remove' => 'Remove user query',	//TODO - Translation
		'search' => 'Busca por "%s"',
		'state_0' => 'Exibir todos os artigos',
		'state_1' => 'Exibir artigos lidos',
		'state_2' => 'Exibir artigos não lidos',
		'state_3' => 'Exibir todos os artigos',
		'state_4' => 'Exibir artigos favoritos',
		'state_5' => 'Exibir artigos favoritos lidos',
		'state_6' => 'Exibir artigos favoritos não lidos',
		'state_7' => 'Exibir artigos favoritos',
		'state_8' => 'Exibir artigos que não são favoritos',
		'state_9' => 'Exibir artigos que não são favoritos lidos',
		'state_10' => 'Exibir artigos que não são favoritos não lidos',
		'state_11' => 'Exibir artigos que não são favoritos',
		'state_12' => 'Exibir todos os artigos',
		'state_13' => 'Exibir artigos lidos',
		'state_14' => 'Exibir artigos não lidos',
		'state_15' => 'Exibir todos os artigos',
		'title' => 'Queries de usuários',
	),
	'reading' => array(
		'_' => 'Leitura',
		'after_onread' => 'Depois de "marcar todos como lido",',
		'articles_per_page' => 'Número de artigos por página',
		'auto_load_more' => 'Carregar mais artigos no final da página',
		'auto_remove_article' => 'Esconder artigos depois de lidos',
		'confirm_enabled' => 'Exibir uma caixa de diálogo de confirmação quando acionar "marcar todos como lido"',
		'display_articles_unfolded' => 'Mostrar aritogs abertos por padrão',
		'display_categories_unfolded' => 'Mostrar artigos abertos por padrão',
		'hide_read_feeds' => 'Esconder categorias e feeds com nenhum artigo não lido (não funciona com a configuração "Mostrar todos os artigos”)',
		'img_with_lazyload' => 'Utilizar o modo "lazy load" para carregar as imagens',
		'jump_next' => 'Vá para o próximo irmão não lido (feed ou categoria)',
		'mark_updated_article_unread' => 'Marcar artigos atualizados como não lidos',
		'number_divided_when_reader' => 'Dividido por 2 no modo de leitura .',
		'read' => array(
			'article_open_on_website' => 'quando o artigo é aberto no site original',
			'article_viewed' => 'Quando o artigo é visualizado',
			'scroll' => 'enquando scrolling',
			'upon_reception' => 'ao receber um artigo',
			'when' => 'Marcar artigo como lido…',
		),
		'show' => array(
			'_' => 'Artigos para exibir',
			'adaptive' => 'Ajustar visualização',
			'all_articles' => 'Exibir todos os artigos',
			'unread' => 'Exibir apenas não lido',
		),
		'sides_close_article' => 'Clicando fora da área do texto do artigo fecha o mesmo',
		'sort' => array(
			'_' => 'Ordem de visualização',
			'newer_first' => 'Novos primeiro',
			'older_first' => 'Antigos primeiro',
		),
		'sticky_post' => 'Coloque o artigo no topo quando aberto',
		'title' => 'Lendo',
		'view' => array(
			'default' => 'Visualização padrão',
			'global' => 'Visualização global',
			'normal' => 'Visualização normal',
			'reader' => 'Visualização de leitura',
		),
	),
	'sharing' => array(
		'_' => 'Compartilhando',
		'add' => 'Add a sharing method',	//TODO - Translation
		'blogotext' => 'Blogotext',
		'diaspora' => 'Diaspora*',
		'email' => 'Email',
		'facebook' => 'Facebook',
		'more_information' => 'Mais informação',
		'print' => 'Imprimir',
		'remove' => 'Remove sharing method',	//TODO - Translation
		'shaarli' => 'Shaarli',
		'share_name' => 'Nome de visualização para compartilhar',
		'share_url' => 'URL utilizada para compartilhar',
		'title' => 'Compartilhando',
		'twitter' => 'Twitter',
		'wallabag' => 'wallabag',
	),
	'shortcut' => array(
		'_' => 'Atalhos',
		'article_action' => 'Ações no artigo',
		'auto_share' => 'Compartilhar',
		'auto_share_help' => 'Se há apenas um modo de compartilhamento, ele é usado. Caso contrário, serão acessíveis pelo seu número.',
		'close_dropdown' => 'Fechar menus',
		'collapse_article' => 'Fechar',
		'first_article' => 'Ir para o primeiro artigo',
		'focus_search' => 'Acessar a caixa de busca',
		'global_view' => 'Switch to global view',	//TODO - Translation
		'help' => 'Mostrar documentação',
		'javascript' => 'JavaScript deve ser habilitado para utilizar atalhos',
		'last_article' => 'Ir para o último artigo',
		'load_more' => 'Carregar mais artigos',
		'mark_favorite' => 'Marcar como favorito',
		'mark_read' => 'Marcar como lido',
		'navigation' => 'Navegação',
		'navigation_help' => 'Com o modificador "Shift", atalhos de navegação aplicam aos feeds.<br/>Com o "Alt" modificador, atalhos de navegação aplicam as categorias.',
		'navigation_no_mod_help' => 'The following navigation shortcuts do not support modifiers.',	//TODO - Translation
		'next_article' => 'Pule para o próximo artigo',
		'normal_view' => 'Switch to normal view',	//TODO - Translation
		'other_action' => 'Outras ações',
		'previous_article' => 'Pule para o artigo anterior',
		'reading_view' => 'Switch to reading view',	//TODO - Translation
		'rss_view' => 'Open RSS view in a new tab',	//TODO - Translation
		'see_on_website' => 'Visualize o site original',
		'shift_for_all_read' => '+ <code>shift</code> para marcar todos os artigos como lido',
		'skip_next_article' => 'Focus next without opening',	//TODO - Translation
		'skip_previous_article' => 'Focus previous without opening',	//TODO - Translation
		'title' => 'Atalhos',
		'user_filter' => 'Acesse filtros de usuário',
		'user_filter_help' => 'Se há apenas um filtro, ele é utilizado. Caso contrário, os filtros serão acessíveis pelos seus números.',
		'views' => 'Views',	//TODO - Translation
	),
	'user' => array(
		'articles_and_size' => '%s artigos (%s)',
		'current' => 'Usuário atual',
		'is_admin' => 'é administrador',
		'users' => 'Usuários',
	),
);
