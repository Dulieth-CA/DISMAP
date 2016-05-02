<?php
//============================================================+
// File name   : index.php
// Begin       : 2016-03-08
// Last Update : none
//
// Description : Index file
// Author      : Martin Flores - neupix.com - martin@neupix.com
//============================================================+



require 'config.php';
// require 'libs/Create_database.php';
spl_autoload_register(function($class)
{
	if (file_exists(LIBS.$class.".php")) {
		require LIBS.$class.".php";
	}
});
// Controlador/Metodos/Parametros
$url = (isset($_GET['url'])) ? $_GET['url'] : "inicio";
$url = explode("/", $url);

(isset($_GET['url'])) ? define('URL_AC', $_GET['url']) : '';

if (isset($url[0])) 				  {$controller = $url[0];}
if (isset($url[1])){ if($url[1] != ''){$method 	   = $url[1];} }
if (isset($url[2])){ if($url[2] != ''){$params 	   = $url[2];} }

$path = 'controllers/'.$controller.'.php';

$browser = getenv("HTTP_USER_AGENT");
if (preg_match("/MSIE/i", "$browser") && !empty($_GET['url']))
{
    require 'controllers/index.php';
	$controller = new index('chrome');
}else{
	if ($controller != "inicio") {
		if (file_exists($path)) {

			require $path;
			$controller = new $controller();

			if (isset($method)) {
				if (method_exists($controller, $method)) {
					if (isset($params)) {

						$controller -> {$method}($params);

					}else{

						$controller -> {$method}();

					}
				}
			}
		}else{
			require 'controllers/index.php';
			$controller = new index(404);
		}
	}else{
		require 'controllers/index.php';
		$controller = new index();
	}
}

