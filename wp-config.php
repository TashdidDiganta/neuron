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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'neuron' );

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
define( 'AUTH_KEY',         'U=4;B5Iu9&(fqMR.ZwVH[LH]K~xUV-%p1*k6QokrYB>wU3O){nvszSN(=3qYOc(!' );
define( 'SECURE_AUTH_KEY',  '&gdu.$}}X~@r3hWFb5fw]K_gCfUw[0P@{eAUmz-]JPj-;8HUlaR0z7gwUh9-u/$G' );
define( 'LOGGED_IN_KEY',    'e]w9Je/$mrjJRmmc+<o,5tv 6yRA2};< b!T**1FTwF]q;P<lB^v4ZXf]p.)wpg)' );
define( 'NONCE_KEY',        '|C2R(4~T(VCx@*99lKu,nWtBDL8c2}:putR+;_]S(`?R}k*;=$N`q6<b=L0}Aq@|' );
define( 'AUTH_SALT',        'JD$nNAXp!.Uq&walM*`].tJh3{]h`NtZ!?gP95M>@A*qCA7V~l,oB,qmGd5yQtDy' );
define( 'SECURE_AUTH_SALT', 'CSkDQR%qpc~GC*wjEIs[9IVztm[dULRBED.)-jy[&X,]7`?V,WZ^+21~$1$$6NwE' );
define( 'LOGGED_IN_SALT',   'y%Pxd/.7 #JI>B|w[)pQ^A:qik{7>g%)rdMN gQ`emB$((_Fpon44Yp.JUg JVBb' );
define( 'NONCE_SALT',       'A~a8TLF`PzC]RYX8?WRpbElPzgx?I3FJCt&+n+UVtT)bovMXvxO$+f] vB+[)s%J' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
