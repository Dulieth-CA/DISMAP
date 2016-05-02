<?php 
if(!defined('APP')) die (header('location:404'));
class entrar_model extends model{

	function __construct()
	{
		parent::__construct();
	}

    function consultar_email($what, $table, $where)
	{
        return $this -> db -> check($what, $table, $where);
    }

    function consultar_password($select, $where)
	{
        return $this -> db -> select($select, 't_usuarios', $where);
    }


}