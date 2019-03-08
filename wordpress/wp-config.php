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
define( 'DB_NAME', 'u210710958_wphl' );

/** MySQL database username */
define( 'DB_USER', 'u210710958_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qco6o6evX7Yiies8Hl' );

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
define( 'AUTH_KEY',         ',E!^.4D|roA*xPG- 7)+_B}wi8HS:Q)@8Y QUPLVE,$^[=!I2TG[qP$u`0([D do' );
define( 'SECURE_AUTH_KEY',  '+GKxSDuqiB&fF`Kt<Y:Em3 u/B0 z3X??iWKpfR$g Gheo#<8E Y9X2c))NK/6m{' );
define( 'LOGGED_IN_KEY',    'z){U{GGj-lPLa*+{+tTS~z2:}6a(I?>[@U<M( f``0i9l[m?Xw%<Kev-5kpz4$=+' );
define( 'NONCE_KEY',        '#IQH#8.=x+oQ<1@j+6bc8V{`e ,AGco_$NU(])i+;Fr?u<T{i5&vg,0 ]6p,Ttrv' );
define( 'AUTH_SALT',        'dMIOB#P;iy&6~KS}g$=X(io2FOk]Gi;s~h3QlB45Z4-T;r.^9/FY@~%t%wgAAk/t' );
define( 'SECURE_AUTH_SALT', '9EIsiV*HjDQD[K3%M}Q@?LC8Ub,<S~T5MyFun=U%i^UKAt:S)nWEhuGzr<=EudeN' );
define( 'LOGGED_IN_SALT',   'NXXs0/wS~3y*n`L$4(PQ:7?&+g EXUo-.#n+j-?ZSbg>IZKK/;%b2F[v]G]i_QB:' );
define( 'NONCE_SALT',       'psJvRH9h6$Ibd}7hhht7kwwU/LBW:CORwuyX_E#6V9>[D+dUQNV97?&# Wt+_ 78' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
