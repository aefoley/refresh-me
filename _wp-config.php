<?php
# Database Configuration
define( 'DB_NAME', 'snapshot_annfoley2' );
define( 'DB_USER', 'annfoley2' );
define( 'DB_PASSWORD', 'cumZ3frnHvci1hMq' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'ZXp9k%w)T6t[ai$fs>P+YN<Lz1cYE~0(PRQuHn+L@wQ5y,Es3xHf,|Wx={3o|d#X');
define('SECURE_AUTH_KEY',  '-99a IxD/_~;gK4ONHf9/Z/idM{s%Oz^r7Vqu)!VFhXM+I/gU_E,6|(j4ftY^b=/');
define('LOGGED_IN_KEY',    's)[4cn7M1 9>;mlz{uC);2 ]]fF+IF+-r2E,JEkC|>IPc!^Z3MN-~K<N=h0]k=(g');
define('NONCE_KEY',        'BQ]CXOY*B2Ai# 8N|aKE#hlDYI.CYv6+~CR~*D&(;aSclC<i2l-yVWE^NU>$YQ0i');
define('AUTH_SALT',        'g/_0*|I!MXO,dgd68=({qf;=YCcNl]bZfC{|pvuEuW,3|Cp}g*=efeqgCh(]u,Dp');
define('SECURE_AUTH_SALT', 'JPK_/N82<[nd[!Pclo?N4SbKPc4h~/<Fpf38]-dd>l:[ Oa?N${%)O9=,`Fc"c)|');
define('LOGGED_IN_SALT',   'c!C;g4I@@-65}Z};]0iJ*[f${-(YsBA;{Vvj)BX8J ?,2A>R@ydV+RP5!(?(Bj"N');
define('NONCE_SALT',       'Y$NF!O@HO)cnF`)4knTMnP7nA*W9(~%e|rmfZJM20-c)K6*xIKFK3J/.L5z:1.uN');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'annfoley2' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '023a0cad43f044ef1671d37c641f8cd5a49221e7' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '101035' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

define( 'WP_DEBUG', true );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'annfoley2.wpengine.com', 1 => 'annfoley.com', 2 => 'www.annfoley.com', );

$wpe_varnish_servers=array ( 0 => 'pod-101035', );

$wpe_special_ips=array ( 0 => '104.155.192.84', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WP_SITEURL', 'http://annfoley2.staging.wpengine.com' );

define( 'WP_HOME', 'http://annfoley2.staging.wpengine.com' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
