<?php

return array(
	'alert_email'				=> 'アラートの送信先',
	'alerts_enabled'			=> 'アラートを有効化',
	'asset_ids'					=> '資産ID',
	'auto_increment_assets'		=> '資産IDを自動採番で生成',
	'auto_increment_prefix'		=> 'プレフィクス (オプション)',
	'auto_incrementing_help'    => 'この初期値を使って資産IDの自動採番を有効化',
	'backups'					=> 'バックアップ',
	'barcode_type'				=> 'バーコードタイプ',
	'barcode_settings'			=> 'バーコード設定',
    'confirm_purge'			    => 'Confirm Purge',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone.',
	'custom_css'				=> 'カスタム CSS:',
	'custom_css_help'			=> '使用したいカスタムCSSを入力してください。&lt;style&gt;&lt;/style&gt; タグは含めないでください',
	'default_currency'  		=> '既定の通貨',
	'default_eula_text'			=> '既定のEULA',
  'default_language'					=> 'Default Language',
	'default_eula_help_text'	=> '特殊な資産カテゴリーにカスタムEULAを関連付けられます。',
    'display_asset_name'        => '資産名を表示',
    'display_checkout_date'     => 'チェックアウト日を表示',
    'display_eol'               => '表形式でEOLを表示',
    'display_qr'                => 'QRコードを表示',
    'eula_settings'				=> 'EULA設定',
    'eula_markdown'				=> 'この EULA は、<a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>で、利用可能です。',
    'general_settings'			=> '全般設定',
	'generate_backup'			=> 'バックアップを作成',
    'header_color'              => 'ヘッダーカラー',
    'info'                      => 'これらの設定は、あなたの設備の特性に合わせてカスタマイズできます。',
    'laravel'                   => 'Laravelバージョン',
    'ldap_enabled'              => 'LDAP enabled',
    'ldap_integration'          => 'LDAP Integration',
    'ldap_settings'             => 'LDAP Settings',
    'ldap_server'               => 'LDAP Server',
	'ldap_server_cert'			=> 'LDAP SSL certificate validation',
	'ldap_server_cert_ignore'	=> 'Allow invalid SSL Certificate',
	'ldap_server_cert_help'		=> 'Select this checkbox if you are using a self signed SSL cert and would like to accept an invalid SSL certificate.',
    'ldap_uname'                => 'LDAP Bind Username',
    'ldap_pword'                => 'LDAP Bind Password',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_username_field'       => 'Username Field',
    'ldap_lname_field'          => 'Last Name',
    'ldap_fname_field'          => 'LDAP First Name',
    'ldap_auth_filter_query'    => 'LDAP Authentication query',
    'ldap_version'              => 'LDAP Version',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_emp_num'              => 'LDAP Employee Number',
    'ldap_email'                => 'LDAP Email',
    'load_remote_text'          => 'リモートスクリプト',
    'load_remote_help_text'		=> 'Snipe-ITのインストールは、外部からスクリプトを読み込むことが可能です。',
    'logo'                    	=> 'ロゴ',
    'full_multiple_companies_support_help_text' => 'Restricting users (including admins) assigned to companies to their company\'s assets.',
    'full_multiple_companies_support_text' => 'Full Multiple Companies Support',
    'optional'					=> 'オプション',
    'per_page'                  => 'ページ毎の結果',
    'php'                       => 'PHPバージョン',
    'php_gd_info'               => 'QRコードを表示するためにphp-gdをインストールする必要があります。インストールインストラクションを参照して下さい。',
    'php_gd_warning'            => 'PHP Image Processing および GD plugin が、インストールされていません。',
    'qr_help'                   => 'QRコードを有効化',
    'qr_text'                   => 'QRコードテキスト',
    'setting'                   => '設定',
    'settings'                  => '設定',
    'site_name'                 => 'サイト名',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slack integration はオプションです。しかしながら endpoint と channel は必須です。 Slack integration を設定するためには, まず初めに Slack アカウントで <a href=":slack_link" target="_new">incoming web hook を作成</a> して下さい。',
    'snipe_version'  			=> 'Snipe-IT バージョン',
    'system'                    => 'システム情報',
    'update'                    => '設定を更新',
    'value'                     => '価値',
    'brand'                     => 'ブランディング',
    'about_settings_title'      => '設定について',
    'about_settings_text'       => 'これらの設定は、あなたのインストレーションの特性に合わせてカスタマイズできます。',
    'labels_per_page'           => 'Labels per page',
    'label_dimensions'              => 'Label dimensions (inches)',
    'page_padding'             => 'Page margins (inches)',
    'purge'                    => 'Purge Deleted Records',
    'labels_display_bgutter'    => 'Label bottom gutter',
    'labels_display_sgutter'    => 'Label side gutter',
    'labels_fontsize'           => 'Label font size',
    'labels_pagewidth'          => 'Label sheet width',
    'labels_pageheight'         => 'Label sheet height',
    'label_gutters'        => 'Label spacing (inches)',
    'page_dimensions'        => 'Page dimensions (inches)',
    'label_fields'          => 'Label visible fields',
    'inches'        => 'inches',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'text_pt'        => 'pt',
    'left'        => 'left',
    'right'        => 'right',
    'top'        => 'top',
    'bottom'        => 'bottom',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
);
