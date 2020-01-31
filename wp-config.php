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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Anamaria89#' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|(Q9So2@?4d=:~U)zz_Zez]Pn8Q-$U%-jLhlqGgWk;1;P-|nM[I:Pf#cVq1-*mAa');
define('SECURE_AUTH_KEY',  '!|H]y?Ze6,d<*O<p Gd{UTSL<,g!}H<2d|/k_.MRDf- B@Z+`8lEqyoG?U2_Tj3C');
define('LOGGED_IN_KEY',    'g:UB7<Qz AaWca#DB&EKr0cTZ*et-kyy;|+xF#>0{a0[- H%i$UtVwfvOT28jPky');
define('NONCE_KEY',        '2BK?65bWpmCp^g yC][TKzuCc`Mmb(5R<|ULQMkM*3>V#Nq4?+REn{S[u/J214Q5');
define('AUTH_SALT',        '>ml(O`yW*vb~NJn~K*wch=43tw~e8n77j)EbmzoPZ+CGB95?paD~N5v]p85!7E:<');
define('SECURE_AUTH_SALT', '|G|@Q<QE(p;D_FMB6SQV.3c}EkHd/(FA:!k|r7D-}Bw|~LbRbh)BI]swJ<gWJMtP');
define('LOGGED_IN_SALT',   '/+}[+H9zmdLk^C:2Z)O$?7kr|YM;P6KTE[:r4]7^F?wAP2y2{(+5pYz9a7)=COS&');
define('NONCE_SALT',       ']FU4H$K;j;^<|auB!j{|A/vczc724@;tCuVTXHG+F`^B-jqA4a *Zk+-p|D*GE20');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD', 'direct');
