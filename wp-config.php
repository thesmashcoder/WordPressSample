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
define('DB_NAME', 'ss_dbname_nada4h72hj');

/** MySQL database username */
define('DB_USER', 'Vat9KjclCnV9gY8');

/** MySQL database password */
define('DB_PASSWORD', '0aZIpmQvVy1Qf5Sw');

/** MySQL hostname */
define('DB_HOST', 'countryboycreations.ipowermysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'UXxV*/vI%x_MkDve|pvrKRs=sUokRqhfVwW*[XFDU|e[GCM|sevv{lx(w^*T>Etta}|ZOBAd^RYX_}*FE<xQWGMBhE)w|hhVrVxAd*HGcsspAU^_pK//;AbESdWD%Cnc');
define('SECURE_AUTH_KEY', 'Lh_|_ldu+GteQUP]xX>pkpC@r*;e<v_pMfrA^U{pIff|OE@DxWT?z!X%};_^rXKZWbhh|[x^kopNQW-xm+ifGPvrLD(+{ob+QXrANz$mvCzUp<dYJh{v(mt^w!;}KKX=');
define('LOGGED_IN_KEY', '[Bho(iAR!L>&uZ}XJl+yTuTfS$IHf;ETzJ!YAUrJwf*DCRSQ&ik$TT+%x^yz$&XY^wS*OTT!EOI!kDQVP-ayVYcnXGxCtZpHvFoaAI<oTt+|)OtqJSPVPgKvkx@b&axo');
define('NONCE_KEY', 'naH*_{jNOpgVZAAX&=&zX^=IYOblT?le@LftWCWp!dO?qoEj;O_oGikbpaK/nRD|uPnRI)Z/KNTYuKk=)ah^%h?BHgxkHLEcc$O/i=S!MkXDYV<iZF&otoeVXmlkqUE@');
define('AUTH_SALT', '{IoSdZXW/qRHMN?rR_gAz<s>S>[HIqk_|@BibHM>i!n|;UBGg@bBFeSrRjnn_|{&gY@/%K[t!|BUYAN]_@+TsKqTD@_g/iA>Ic!l]zjUT@C{o+$&yB!tYF+BQC+EAFgS');
define('SECURE_AUTH_SALT', 'D*r$DIyAk;wRk}VpJcD!U!?{!-uvWReJD}|%z/tF^waStI&&fk;onaq-&Tx@aq_RCMEN<mBQlYW=P%Thy-=)cX*}[CS/mpmwaVtn+m]z(?qb@o>o<hex@ac=]sz|?cU}');
define('LOGGED_IN_SALT', 'ZNdFy)_y{FiUr*OJpat}FRvv;tHgp>+k%XzQgUh?sz}=gvPRE^V$kv=tpNU;Kec*MpR^Gyr=l=[$RdJeiz^/B)|nHQP<F!%b]|${NSoNIt_-EXXwO)RKrTkHJth@^xq^');
define('NONCE_SALT', '$)JpLhHGiELnnhOB?NYx]$]jvVDHGBD-qC(tB[Y<FIl@KDx_mvL/-hc}Wjpjnfl^WATpKgt[rgIxh?XhVhEVPN/ceeRzsE[]Ot&MY{Y|++CzhNKp_u}*(Bjgof?Jv;QF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_emxx_';

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
