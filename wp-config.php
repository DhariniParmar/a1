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
define('DB_NAME', 'a1assignment');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%V)8S;ey+M&2[EG}hNK}y[|zJJfe%>~SNXon*1[JGl(3e Fj5}^}YRikb_+9Tsz?');
define('SECURE_AUTH_KEY',  '1z>W)]@r${@!X>@;EW#Cay)C:1~ims)V6XKnwnas<+c)s#me)G(ynoT@q4e/v<6}');
define('LOGGED_IN_KEY',    'K*occ_%s j 1_nJp,9?Q*~vsfm^$]m(gDH=)PRjf:hz[L^hlQ}hRA/XQwb)g8C5,');
define('NONCE_KEY',        '2U3-pG_`Zmh}4m?jI<<C|n}^:YuhAcbX<iHk%YoRs7=_rn8/?CENXdvBeB:c0hN}');
define('AUTH_SALT',        'z[GVJEZ=>2B%*;@$mx|yv{|CW4v4[ v0WLDS+jcI&mVoSclVhC?u~`O~>P<u@r&q');
define('SECURE_AUTH_SALT', 'JXeY;]`)zmlb.|o9@Ug {4r4(gzBc]t>|X>ua{^ -Oqh&#YV|y*hr*D/S)FOI`j{');
define('LOGGED_IN_SALT',   'W|v}@%(+n|Ij=ieXo4|@ D.WHoUXQCCzTGCm5hb/lp)LOb0uTh!x,%yV;_xx9TdO');
define('NONCE_SALT',       '$trk^L?oIf/k<zk0P;1:[7s5);mRzG_,[=O}}.h.X2D i:su$Ikgr~tp>>}fuyjL');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
