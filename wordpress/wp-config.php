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
define( 'DB_NAME', '31w' );

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
define( 'AUTH_KEY',         '4;bnj~VH>yuSKr) a`R<IE{eI9QdAgDP[{w9IA%(d+(mT0xkTj+F_&?{xqb6jhA*' );
define( 'SECURE_AUTH_KEY',  '{nh]v>;eJG^=J{{*CR[mD6$DyP2!7ODzg{:BMa>e@4x[t`VIM/ns}bvV;5st{gAs' );
define( 'LOGGED_IN_KEY',    '%B_nY;KfmNnzLzHpH?!VA(Y+N;0eRWp$*_<+kwZ[wTJ.DICzlx$SC!t{YB?[s5C_' );
define( 'NONCE_KEY',        '2{86x4%:aSn[tx,T.[-;^A~>vg6uP8[Qc@4pgn0SD$Q+q<Q$v Pihw1S%~-alKen' );
define( 'AUTH_SALT',        'm0{j0nTaXT*LM[xZIRE0b;BHA F{P4OB.Pna_MGO;]H}YAoSkCuHiKv8srzW]fCY' );
define( 'SECURE_AUTH_SALT', 'cM}!`B,%e_G^XCAvH3[bus&GIH0)fzx-86f?8Bd*3#IZk}%60Ko*Qb}F9>p!M/uL' );
define( 'LOGGED_IN_SALT',   'P@0I6&Xj~04 m>CPMCSNGj3A{p2@j4w}of^G*RVDEY;Cu(q!qZA+/|mq7;|!!-OP' );
define( 'NONCE_SALT',       'WM(WJJu`S77$u;xIL9yZk^C%:|x&,;+HWOm^!fkUi!L>^lOW?@oV0gCo^O#^m)`c' );

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
