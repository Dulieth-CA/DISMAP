<?php 
if(!defined('APP')) die (header('location:404'));
class confirmar_model extends model{

    function __construct()
    {
        parent::__construct();
    }

    function consultar_confirmacion($data){
        return $this -> db -> check('fkUsuario, sEmail', 't_confirmacion_email', $data);
    }

    function confirmacion_correcta($data){
        return $this -> db -> insert('t_confirmacion_email', $data);
    }

}