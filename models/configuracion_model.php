<?php 
if(!defined('APP')) die (header('location:404'));
class configuracion_model extends model{

	function __construct()
	{
		parent::__construct();
	}

    function getData($section){
    	switch ($section) {
    		case 'usuario':
                return $this -> db -> select('*', 't_usuarios', 'kUsuario = '.$_SESSION['kUsuario']);
            break;

            case 'empresa':
                return $this -> db -> select('*', 't_datos_empresa', 'fkUsuario = '.$_SESSION['kUsuario']);
            break;

            case 'cfdi':
                return $this -> db -> select('kRegimenFiscal, sRegimenFiscal', 't_regimen_fiscal', 'bDisponible = 1');
            break;
    	}
    }

}