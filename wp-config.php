<?php
define('WP_MEMORY_LIMIT', '64M');
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'cloud');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$}S5=~++-Y|u5wBvlP!L_8|%e=d)HB-a#lC%wf>39j2Z:CXVCp:=+j._3h4|&IEE');
define('SECURE_AUTH_KEY',  '@]P>D8p&Q3#tJywE`?v)y[ltT)V828xq3zd1-BK~/hEur(JOGRF`x zZ)Zs&to2?');
define('LOGGED_IN_KEY',    'L!yAM|Aor_:+3E<K{BA;3[wh}IchqT20CI eh]=*CT]4[]QtgkOT.J&$z<Yd&?E[');
define('NONCE_KEY',        'x9<9k*4Sf5[M1c&*RKM:VD<?PA$`aqDT.lkrzPj>|6=&5gK36H6/~POtvUJqo8{i');
define('AUTH_SALT',        'j1UN>o;}Q+U K.YdpQ=iJ+SjLQS.,E^E`0+Uw!=PWGAvU~HsJ=,1%U5P}DCPgxy/');
define('SECURE_AUTH_SALT', 'O`hNQ*3mdjuh;r~a6wa.M~5lD&:k:V`6m./Op).PqSTMbUfg2DTwc>Y8jXpHbW%x');
define('LOGGED_IN_SALT',   'kY-1dWQ|sJ5Z,w%+i,4n78NE)cXD d[XM{@^&PWxp4ARR]*$ol8dgS!<JhgOUrEC');
define('NONCE_SALT',       'B:;q$C$[ ed}GQ0q_zngK1Lm`rn+v! {K?@7>]0x>`kzVr Y*;eOyg-J`x`.@V7H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
