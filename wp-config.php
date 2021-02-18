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
define( 'DB_NAME', 'demohotel' );

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
define( 'AUTH_KEY',         'PKRf>Y_x)x4)F&Vg-7l$s:qp,4kc3-cZwOeGVfZ)^KTgebeCdC<:A2S~5+%;{LG7' );
define( 'SECURE_AUTH_KEY',  'hmU5Q}9]U~$<%l^zRd<mE?/Gw:7Z?T^kQk,0?}X3-]Kuv-]o..:#CqCV(mvJGP1F' );
define( 'LOGGED_IN_KEY',    'S7@Rx~-{7/MPQF7qC`I6X4m}Qt`eoOe^,=}Nu}XvV~;FdCVC<LQ]F<>BOZHUR_u[' );
define( 'NONCE_KEY',        'a.xin4(C*o{a#JFQ3ew1A:F.CIf(1!c-cpjy;/9 f{5jKV11-]&|y>AP|f/.K$]A' );
define( 'AUTH_SALT',        'F~p~S@[DAra<7oyob$MUF0*f[:Om{vP|n;H7D:uVv(y R^J)elID+HUXlE.^r82b' );
define( 'SECURE_AUTH_SALT', 'iz?m-wP)vfg/MVx *uFjY-(%[|<-.ez*I!lWkz [?nvia>H_.<aqgoO9k(sfd_!S' );
define( 'LOGGED_IN_SALT',   'K<t;|eJjVwt1WfN(y}Yi(XvMNbfCc|V@-kTp@D$#0yEsC})gWcdnD6sB>PlV5aA%' );
define( 'NONCE_SALT',       'M4ymOy021oDQ%J;d!?}Rq|{v1zA}H~g4~4(rkUF XT`2a~z:_>V236jv<kA-I+$c' );

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
