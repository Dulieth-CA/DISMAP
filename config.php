<?php 
//============================================================+
// File name   : config.php
// Begin       : 2016-03-07
// Last Update : none
//
// Description : Configuration file for facturas.
// Author      : Martin Flores - neupix.com - martin@neupix.com
//============================================================+


/**
 * Url del portal.
 */	
define('URL', ($_SERVER['HTTP_HOST'] == 'localhost') ? 'localhost' : 'http://dismap.esy.es' );

/**
 * Url del portal.
 */	
define('URL_tmp', ($_SERVER['HTTP_HOST'] == 'localhost') ? '/spaceapps/' : '/' );

/**
 *Url de las librerias
 */
define('LIBS', 'libs/');


const APP = true;

/**
 *Url de los modelos
 */
define('MODELS', 'models/');

/**
 *Url de las vistas
 */
define('VIEWS', 'views/');

/**
 *Url de los assets publicos
 */
define('PUBLIC_ASSETS', 'public/');

/**
 *Host de la base de datos 
 */
define('DB_HOST', ($_SERVER['HTTP_HOST'] == 'localhost') ? 'localhost' : 'mysql.hostinger.mx' );

/**
 *Nombre de la base de datos 
 */
define('DB_NAME', ($_SERVER['HTTP_HOST'] == 'localhost') ? 'u547341423_fac' : 'u659751130_disbd' );

/**
 *Usuario de la base de datos 
 */
define('DB_USER', ($_SERVER['HTTP_HOST'] == 'localhost') ? 'root' : 'u659751130_disus' );

/**
 *Contraseña de la base de datos 
 */
define('DB_PASS', ($_SERVER['HTTP_HOST'] == 'localhost') ? 'root' : 'dis123456' );