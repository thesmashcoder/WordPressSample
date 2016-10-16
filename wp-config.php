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
define('DB_NAME', 'ss_dbname_do4lbded74');

/** MySQL database username */
define('DB_USER', 'ZdknXkaH6vO2wrr');

/** MySQL database password */
define('DB_PASSWORD', 'Oi1bhRht8jilsF2B');

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
define('AUTH_KEY', 'CT$v?hhchFeuY%h/hKEkpcJT}WGWL]BkxNG+[IcmCgPI%!ykPB&=%>e!mD)]^Cw/xTqsG%}MjsegKy)KySQ-zlW{vYtz@YSW{DzLNNXP)DJ}gAFzP^*&XABjE[UyqMMa');
define('SECURE_AUTH_KEY', 'Mdy-()oLa}]{tjr]s*HVhs/q|=okoPK@Jz=u%le(jab;FWtwJ_YtgRcA&uq@ra(t)pT/u;=)/dOZCRJCYBpUWtOGmh@MoJ=(caNpee(+PiHRDb!PEv[JcqFr+qq]QdFU');
define('LOGGED_IN_KEY', 'nR>y>FBg&G|gBD<_-WCACglmb?Ef=^nf]bKi@@zPssk{bXUod?H>%[rsVkX-U]}%zo>XIcpPM]+YY=(wGqAxhkn]_?Si[(aQFFA|LBARWuMEp>=hfczPwmgv+dt}QEN/');
define('NONCE_KEY', 'aI_UyUhg];lr[vG)G@{O*=_QmvGv*_uCnptMAGyGqb@XIT=>U[NzVn>b@PO<&OXRSI$RIu;$;e_GiAII@*YiQ=MvZbOuPc=JWn*D)khp/_onFYw-g]V-vo*<[;DqHWj$');
define('AUTH_SALT', '{LOSgTx(*r)jL>xprhQIX&vIT;y_!>(q_Rac<]^XD^AYvLg)_[;zXw!T[{jxLpJjkuluEBENljFwb/f[Rt<U/j=Deu;Z^(FbK]rM-Gjuc$<k{{V?]LJsiiX=SPb=dhzV');
define('SECURE_AUTH_SALT', '*^y*vv_R^%x}aktYpQQXAwhmydYtRj>iVKnkYY+XDhAr%_Y$?@uf]@uWO?srx(pz{{r]-GOcz&l=d$E)OFIvvVi)fm=]v*wIKVP!ioth[!Y=bygxD*iCZ]%wvG/R!s<K');
define('LOGGED_IN_SALT', 'nuEaK^bPkd?hi_iwERCDdA^P[d?)VHxc@K=!HKEXu=)xl(i&pI{P%;bex}XbA-z[RbXpmpGt_G=E?iFKD/c(P!iU_IRhy}wMRC_xGmoXgmV(}i[GQ[WzdVQU)<k)tImI');
define('NONCE_SALT', 'AYXrn;|gt/SntJA-*WAzsefYl/t;Au)xL{YB*OX^(?fSrxyjT?KbB@gOITGd)W(QT/Cxo]_-iA-&AUN)]Atx=m^h&PwUj&ljfu)LLOK/m<UmDW-RI!*yFJ]!/I*F/@)s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_yuqu_';

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
