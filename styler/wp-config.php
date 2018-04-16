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
define('DB_NAME', 'styler');

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
define('AUTH_KEY',         '>msF`g<RoOmJRXu]7C#Q<0sPzA&Tu[`NjfIimYzSw`~8f)GCXiV>ZMN2On(_X0F,');
define('SECURE_AUTH_KEY',  'hLb_6,[<}TRz,pov~^*hfVodlwH#X(j/.~&3LqDohN;7g3,(T%5Qj>0~[:t8z=~e');
define('LOGGED_IN_KEY',    '(ilHce#Qs,rEM!*]3Fq(l )Wcvg7eDkzBL>RdYgz@gC{Ltr/X&H]/: I`!66F?ux');
define('NONCE_KEY',        'p/64-o1E3Ii69gbF@9RxhqA /BjfU>;g8;X2C_pwJGOGTwkCOZRGYT9_Lvt|/zit');
define('AUTH_SALT',        'GM/mfv&.5yK#3=y{I)h+ =UHo:K0V?;=bn!Rk}Z`JEFkM~xiIU1T/SyV]D:<n/{/');
define('SECURE_AUTH_SALT', '@5!B{#)1{,*,aU&!uL=3$}{~9`^G?|/_?m6u%(Y{XI;a1l>S QWdt8b ffG0BIh*');
define('LOGGED_IN_SALT',   'cp#k=v>8AwO(]a(H#v^AjH`>i=8wR7RW/L!`Ot|E]Dwsbliuh(P nKJu+PysAi?~');
define('NONCE_SALT',       'Y8da,fAjQaumXF*%83h Kn4E5LguGbJEt.:6)y95LO;@SImhy)wOj$y<nZq_AQ]]');

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

define('FS_METHOD','direct');