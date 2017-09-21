<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'newlook');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'homestead');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'secret');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'pq|LL4^I:P,6?M}f,~HB;lZpF74%A3uV?[)}OVNE Ia`~<6h<y1.w7b;KUf~/(8<');
define('SECURE_AUTH_KEY', 'H~DG${2~rD|IxLk*;ZPge`>FctUZM9=nKK-L9,$]C;+u)75;$;v*qU{0Wof:/6:d');
define('LOGGED_IN_KEY', 'a.MRGfYg%S<@T_[<#WbbR4*Tvr=NZhu0MHIz,-_NND7?Q/TTD9}l3*!R%?~D;NDL');
define('NONCE_KEY', 'MG^E*!R!KD}Wo_,e* bv4KVoM/o2tuI;`_)j+,;&C5Q2dGr]%{fxR{W2K>DFf#_*');
define('AUTH_SALT', 'o3p)r{Y=Nigfe^i0.iB`/T%~EJd~j.8&-Erw@6X>7fES{!qP2G:?r~?-jF=U@&P5');
define('SECURE_AUTH_SALT', '+6?&p.63EZW[?HFD<9.d|8=N9}=3Qg+9$>BJ8/Fj^kNN*/M;!@j1r_n;U+(yGv/3');
define('LOGGED_IN_SALT', 'aJ{` #k7jp6CtaW}5*;jz=q=BfcPPU52US`Q,hqM6^hylt#z(HKBm/rnGFK3Ph#V');
define('NONCE_SALT', 'gL&C^Izaq~>?yeMhsl,^h1z*SYih]r)ZM3_aNe`Q^]J_ZqE=/ /C?3y163|~)uHe');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

