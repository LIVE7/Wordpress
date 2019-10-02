<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'autoset');

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
define('AUTH_KEY',         '<Ns>g,LTC:3Ft3=iHv.hJn1qJbi<|NZ o]LRO5@(I=Z!B=3z<#Oi{`Q[dP^2x?&~');
define('SECURE_AUTH_KEY',  '^#.4fs|L_}cdtHv0-}O/Q!n&!II!dltoI&dB+)d)lY{([2~/nMLS3,KgBa^_H4-k');
define('LOGGED_IN_KEY',    'E0_ QcXX_+>N0%d3OXKMM@I,&,i-IIN)=*6mJdT;b.X+(}:ZK9zm9LixJkd-_liT');
define('NONCE_KEY',        '1k6yz?1MS^lAH{z:)TUh9H4z&/~t@UesP-u7Q}4g7$oI.ZrKH*x*ntCvWPDd[m@[');
define('AUTH_SALT',        'q^z9RBI:dXwd SCj%7CF=wpSa`,dyME+=Y6v(K7]O^]OMn1;9-dcUXB}Tq>px:Wy');
define('SECURE_AUTH_SALT', '(mYfw2QB[F4YsaF(L3Z%KQ(MfayU?-9o;).r;A|h8f:0lO}jO|$ ?j9o=kN^Q`2b');
define('LOGGED_IN_SALT',   '+)odewT?m,Ys+9YLV8qhxHg+bv!AmWt}bbW,h-N8<r`;qUqGO1-]y[{/Nr6SZ)/C');
define('NONCE_SALT',       'DT_@ibFD=dU*MhLNe0|>g+&T8Rq@VsqomC^ #O/PoVZ-+Q(gVROY@<xY+if+D>KZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
