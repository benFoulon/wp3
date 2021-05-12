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
define( 'DB_NAME', 'wp3' );

/** MySQL database username */
define( 'DB_USER', 'wp3' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'lraM}fX<?Q+O=NN)0k70bV=@qUrNDZzjQ?me/@=([NNhL^G/zq0r:?Fkw}>8HC^ ' );
define( 'SECURE_AUTH_KEY',   'Pf*Z.;@B(Z}7Gvr`4%Ci5b;`B89l{/U+DVlH@,{mhkDQH~iFgQ?jHF ]uc6OOXZE' );
define( 'LOGGED_IN_KEY',     'fYN8Wv{{dZU< }So&SazDqN4vHYR:uWRs%;v,?zr[Urlw AO-6Kc?oYx~{#4x|~!' );
define( 'NONCE_KEY',         'H.1Yl@L&*1t[g&ldM9sm4N<1#*h4tgnt6,iewoAC`OD?dLC%(rg Rl?T.T#M4SZ#' );
define( 'AUTH_SALT',         ';4|t>Rn=c-VPW$SJ }3 Q*dw.099N<s>aa(<SCXsTd8yR|3 #$Mk=-GnH(SUF~r]' );
define( 'SECURE_AUTH_SALT',  '2F942P3Oa9NTt-+)$6,?C8rYi^y_ o/G3-3N&3@<xvM]$HhJitYAx[vJDa9Wv^5X' );
define( 'LOGGED_IN_SALT',    '<yuMm{N$KMqI=zcbz~Dnn8|9tM0iQt`Q]P9q#]]deSK+9,.4-;@AKwfD9-}/c20P' );
define( 'NONCE_SALT',        '- 6a,k<9ri<9JO,dOtv;T._LOcq.W}VLp*Nd8Y9Svo$IhXq`p:G+4d-%mBy>.0^-' );
define( 'WP_CACHE_KEY_SALT', '6QZAFO3I%EQ/fLu?b&/ RL*|fk! BL7@{;z[?+IVd%^Wg*>3HzGi^Ft/.0qHGJ:d' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/* Debug mod */
@ini_set( 'display_errors', 'On' );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );   // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
