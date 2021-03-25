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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'comet-chat-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'X#~@:ayQ95qEG#6yN` B;k?#foa}{e~qizqI5pHUsW$9RS0(b*,+[3oIEY7<y&-&' );
define( 'SECURE_AUTH_KEY',  'D3C(%QnI8aii#z+!!g{1LHr/^aMtZHYcC{I))OjJuHj7Ya~.&.<@,=Ss%0L{$U }' );
define( 'LOGGED_IN_KEY',    '~lpXqBGcwqUtBe?/I|_TOKRO9K:Y0p4(tX%59:y+i?6ABjqk{L.#I/So[c}SGDU^' );
define( 'NONCE_KEY',        'KaZpVN?I/ Vgo$DO?B=3_M%7tKB:)J`T5:7CO,t=yr,I6M,* 2JQeS=lHpR@98@ ' );
define( 'AUTH_SALT',        'p#_G-X585A/u$fc6GV]}b!dC]_nN7uP JYMlboy aOINTS&g:5{3)CTHm67-@nu.' );
define( 'SECURE_AUTH_SALT', 'FKamEqxi:u&o62mR+[)xjskdCJ$OgM}8=.NXZP<o<}VH.M/<B)aJ0PyTvh/h8YGA' );
define( 'LOGGED_IN_SALT',   '&6+JFT&Z60y]azQnOf_0j-J>N`!5z(y)o!!aBDm^zrl+btO@S(q$,)7l2al(3W12' );
define( 'NONCE_SALT',       'n.X0qA$A8o23J|],Ro}?@OIR+_*WFqDL;rN:ui&lsFT*B^Oz8^>v;^_}y|SI]j*U' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
