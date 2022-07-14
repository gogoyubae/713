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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'yubae' );

/** Database password */
define( 'DB_PASSWORD', '0000' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
// define('AUTH_KEY',         'q,VrMu@W3N$8lsY~K;,&~}+mj|}PjcUdh)H0Lyk+jII0/ Plr^HP*(~IA#p#G%~p');
// define('SECURE_AUTH_KEY',  'KoGFkg1,vS+gINeNrx*BjS-pl#j[/Pi24PqPshVD?rm.`F*+}mU9*b d[F# l.qR');
// define('LOGGED_IN_KEY',    'E`{ub-R1I+7_0~$-wt6/7!},}uUc>Qwt#^?R[DUM~hfRDSnOz-LLc>z7s&!U?PMV');
// define('NONCE_KEY',        'h<F3U;b@z H>[+=/+Qz[e-eB5vw>>1-:{9-D^<p3rg futlYzO:a;R!COqggpM+Y');
// define('AUTH_SALT',        '>eX1*hly+,!f<<n1icTyla|MQi*|#_n{auFx+;mfyAwM[dvD{w1O`*]BobEE<PfT');
// define('SECURE_AUTH_SALT', '%uHMhw~C/!0L3h9emJ9YkMER{Ua?k%8/|ZNce!5<XM6?Q+)^v6ex):t&WxIq+@Pi');
// define('LOGGED_IN_SALT',   'nD*TTw#tk+uO{@iZ+YOHN`&*kuU@NMVSk/419Jr,,%Dfl-g?YdAi;` vW3N1FPs/');
// define('NONCE_SALT',       '+f=j&zTc0Pv8#JZKbQ96S1U!& <_tuapL!C9n_^Yy&$2Q*,,`{x2~l.?q#ZScOF+');
define( 'AUTH_KEY',          'Q}50X1+YQ&!*~ihLf0m/KY3iPMDw-{9--<ds{KBPRe3(%LHIX.x5FsNpzS5nED]<' );
define( 'SECURE_AUTH_KEY',   'B0x`rap{ma^r2RVQt#4IKF}fZa{hQHB: WxriHRq%WRxm{kflE5r.Qrzrs!MdDO#' );
define( 'LOGGED_IN_KEY',     'rSpbo;@}r<YGu#`f.($o=#:Mv>y/]yQ$Rd=8[#AluByv@P-c8F8?;+#_M.0llxfp' );
define( 'NONCE_KEY',         '[sm6>u;Q1clO;hx/ZG@RYXTG %,^t +i4@Keoqqrpiv!dx4ohF|(OXsPN-e f)NO' );
define( 'AUTH_SALT',         'Pz[yBHSHZ_#,cQ5pc}|L<jFL^0jR;]M|{bppsO=IC:hY{YB<m7@*rYo8 ds1{2WO' );
define( 'SECURE_AUTH_SALT',  'g(Le-%E0!{;JM}aZu1kZ?qF1YMu&Yk(~ItaEhsiuGUTQtRvj)()v=w2I;4Ud]qx~' );
define( 'LOGGED_IN_SALT',    'XT)20Wn+V1#HVVm`Yaat7z^X9rg^4>70s>K^T+!@jA |k?b2&51AiUY;gR~W8)Zr' );
define( 'NONCE_SALT',        '<mN#$,6$xYxC_NBD 8Q/g]a(i]ebPqM^MKc? ugu)$FT1PP[ K]+aUX:D95vmQ^n' );
define( 'WP_CACHE_KEY_SALT', 'W40-qD=X&4|0G{4BE]iT-F1[@pk*<8o vbG ICWiG.Xk9:1DgZUo&AsPS@?v&yg*' );
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
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
