<?php 
//============================================================+
// File name   : controllers/confirmar.php
// Begin       : 2016-03-08
// Last Update : none
//
// Author      : Martin Flores - neupix.com - martin@neupix.com
//============================================================+
if(!defined('APP')) die (header('location:404'));
class confirmar extends controller{

	function __construct()
	{
		parent::__construct();
		$url = explode("/", URL_AC);
        if (empty($url[2])) {
			header('location:'.URL);
        }
	}

	function email(){
		$url 				= explode("/", URL_AC);
		$data['sEmail'] 	= base64_decode( $url[2] );
		$data['fkUsuario'] 	= base64_decode( $url[3] );
		
		if (!$this -> model -> consultar_confirmacion($data)) {
			if ($this -> model -> confirmacion_correcta($data)) {
				$this -> view -> render($this, 'confirmar', 'Tu correo electrónico se ha confirmado correctamente.');
			}
		}else{
			$this -> view -> render($this, 'confirmar', 'Lo sentimos, la URL introducida es incorrecta o ha caducado.');
		}
	}

}