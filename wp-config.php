<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-test-db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '6EZP[fH`vk#dG&:Q#]-J2D6* e&hk8@,tmxPxg(3#t|wYW.V[k$.MG,YK*JQz!g.' );
define( 'SECURE_AUTH_KEY',  'LoY}W<1v8>y1@7=67<o}mAoU[X<WR,=aKVnwgw^a<=v%XYplBToSi>1{z?`I_Oe%' );
define( 'LOGGED_IN_KEY',    'Z><HRJ=4i<162s7[Bip,${FUO=t@9J2}Q}UgzjZ**!T)yj<cF;l q1%~SZQQe>60' );
define( 'NONCE_KEY',        'R-jxiT+|l?He5OI}7.2r8ZTkR.EW2PZ^7>kj5:t-C wnUEH2,%HmisU{a&LIdeL{' );
define( 'AUTH_SALT',        '35|?_E>0*1I)cvV,VwQu,)K~[v]4ilENZ!vQS54neHx@^-:JCYBl4x)#?)Hisxz^' );
define( 'SECURE_AUTH_SALT', '&;]wKK<s_Riqrj{,J7zqg/$LtRR^bT7dng#m]tOIf]Tca0AGh=>I)(q-mIf0AKl}' );
define( 'LOGGED_IN_SALT',   'FdJ$ ^n;w&)7R[4G&_#pT>G=4ZJBKJ`D0]hxAIny1Yjrkm8;Pom=15N8-C<9]9LS' );
define( 'NONCE_SALT',       '3n:~[BOw70AOIDnPdxFEMOk60#9E$xcPE,R,x%%Y#%:B2bt;D)`*OpI6G]qg^x_R' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
