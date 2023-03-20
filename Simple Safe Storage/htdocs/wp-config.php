<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_33829184_w398' );

/** Database username */
define( 'DB_USER', '33829184_6' );

/** Database password */
define( 'DB_PASSWORD', '01@8]Sp426' );

/** Database hostname */
define( 'DB_HOST', 'sql208.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gfmuteqepiwlccnof1dwphqedeowur6nes0podgbqqky2odpfgbfncinmhjydrwq' );
define( 'SECURE_AUTH_KEY',  'd7mg7quey1uxneu4t3gfvnbdymbwpflpvayr3tddxwavdmjaltfsawfyeywu7cpy' );
define( 'LOGGED_IN_KEY',    'nhgwxxzhlcfmkmokur5g6vops940jxbivkvrg0xh1vlovok2rbvngb4dokozjly4' );
define( 'NONCE_KEY',        'yynf4ddc48iqqivt8hvoanwlijk4xxmx6qixa0bgoga2taiuuyycti4tzrlnmuzs' );
define( 'AUTH_SALT',        'zvrpzojmoq0uodhzzc3z4s5ns0edrez85w5ys6fzewczpgvlmkvabe6cpxugsyvy' );
define( 'SECURE_AUTH_SALT', 'n8lvhyd4pzk1n8tfonownkl9fevpqxf7vmnbv9il9e2fgkdpouovfqjdodfanjig' );
define( 'LOGGED_IN_SALT',   'wk4gfvkaep2idsjxfl8fccogrd9pvcqrm49hwp9klotmbgehfq7nlsqcbrkpzqc8' );
define( 'NONCE_SALT',       'amay6xocteglhawxev63sonu2p2sht4v9v40tkdshka2dzekxlbilfhxalp58jfr' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpre_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
