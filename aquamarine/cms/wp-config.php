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
define('DB_NAME', 'aquamarine');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', ']u#,K>-I#}STy4w/qyVZ{e3bt96.uq~Y<,mLV0s%E)37^AAQ7$r!4X@e=%hQo+FE'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'i%I&(OC+F{cN:#12:`O]t!>So[F=<oJ]~YkC(@%mV8a3zRub<cYtrySG{^nVqols'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'Yk~n:l18YY|O=ns5j$W;+ n{QOH<1$/q/$S91rYu`Z7[9M8zz6[W%wp%[oo{ElR>'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '0j7ynpWIk++2|&6OwDPUI/XyfZHq/G?}pjE 12P[iK/^oLMI+N43Wp@5)hWOOt-O'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '7N9v+O@F@$#%C!3#D$K$>8H3ve+?$w-B4W}1C9$R^|9C! *|4|U`Pv3^vAln<pY&'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'l_fLg#-{cbTLmdrRzbqvK3_~WSQW1w7pRU(ff!.?qsoQq*P:t.LF8| WrKOJ9V/)'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'ue23!rxcZwQ.nWdj?1Z{:%i>~J4gzv-1Ou7..PL+5K&5c!YNo-=AXBM+|vm@n8,N'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'C/y|8*M-uh`-t$K};&uRdi]U)So/dVDxX+0~vk+=IUxhC0Cnm{sbXsc.vi(e7k5~'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

