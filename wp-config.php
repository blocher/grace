<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'grace' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '  ;=Zau)XQem%#$z]gycKa&sWtLD|~_<:}@;%MDZ.-y%m2J(N*X9@8 [{SmA<ER9' );
define( 'SECURE_AUTH_KEY',   '8~xa|eW^4J|gh?8E>&c7YENu<XJ+ U^Kre-YOs#gUn#6i6RVn]VOgd&&TG9%s_SZ' );
define( 'LOGGED_IN_KEY',     'TMTC`]4n!DcAXo.1tVLgK)V,c#8P26j5<-9TP^&DS@bb9i[p[7+mmKS` ,NbZQ, ' );
define( 'NONCE_KEY',         'nKQYON.ZwTRjZ`!_;DMwzloG`KP5erSru}YLOUEkN=d])TRUH9U#h1ggWozd*LTR' );
define( 'AUTH_SALT',         '@d,3G-vz<g~vq.^7*;zWXE]Zt@wIiX+#0A`>,)Op:TGc4<@~@UGh-pt*(vnfXI6D' );
define( 'SECURE_AUTH_SALT',  'pul@*vC01xJp7L,0veF5ba|s<BXf,~n!!96{-L?<].L;{Y^[aSN3CPN%,RTe^h.4' );
define( 'LOGGED_IN_SALT',    '3HcH?laP-/**_nDu30Cw`$.ir)cw0:<<]>&<i%*!<eh{-Ltzwv&]YS,eO6)]]QNj' );
define( 'NONCE_SALT',        'HL*s&Y#_Q#,IoAY6(?;EGx}KBGzUI1K-!n([ORh{}.Tx@!410Q{ItG.9EWt>F3%[' );
define( 'WP_CACHE_KEY_SALT', 'Be#By!(FE,NM3#`Zn8i0ZKI`+&D=_(RXt>^1aPu7${i(o2R6Y4ekpL?};7e2v`)!' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'grace_';

if (strpos($_SERVER['HTTP_HOST'],'www.gracealex.org')!==false) {
    define('WP_HOME', 'https://www.gracealex.org');
    define('WP_SITEURL', 'https://www.gracealex.org');

} elseif (strpos($_SERVER['HTTP_HOST'],'gracealex.org') !== false) {
    define('WP_HOME', 'https://www.gracealex.org');
    define('WP_SITEURL', 'https://www.gracealex.org');
}

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
