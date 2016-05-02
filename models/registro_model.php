<?php 
if(!defined('APP')) die (header('location:404'));
class registro_model extends model{

	function __construct()
	{
		parent::__construct();
	}

	function crear_usuario($table, $data)
	{
        return $this -> db -> insert($table, $data);
    }

    function consultar_email($what, $table, $where)
	{
        return $this -> db -> check($what, $table, $where);
    }

    function consultar_usuario($select, $where)
	{
        return $this -> db -> select($select, 't_usuarios', $where);
    }

    function consultar_codigo($select, $where='')
    {
        return $this -> db -> select($select, 't_usuarios', $where);
    }

    function exist_codigo($val)
    {
        return $this -> db -> check('sCodigoUsuario', 't_usuarios', $val);
    }
}