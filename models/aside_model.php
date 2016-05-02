<?php 
if(!defined('APP')) die (header('location:404'));
class aside_model extends model{

	function __construct()
	{
		parent::__construct();
	}

	// function consultar_usuario($select, $where)
	// {
 //        return $this -> db -> select($select, 't_usuarios', $where);
 //    }

    function getData(){
    	return $this -> db -> select('*', 't_usuarios', 'kUsuario = '.$_SESSION['kUsuario']);
    }

    function alertas($caso){
    	switch ($caso) {
    		case 'empresa':
    			$val = array("fkUsuario" => $_SESSION['kUsuario']);
    			return $this -> db -> check('fkUsuario', 't_datos_empresa', $val);
    			break;
    	}
    }

}