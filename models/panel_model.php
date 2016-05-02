<?php 
if(!defined('APP')) die (header('location:404'));
class panel_model extends model{

	function __construct()
	{
		parent::__construct();
	}

	function consultar_usuario($select, $where)
	{
        return $this -> db -> select($select, 't_usuarios', $where);
    }

    function actualizar_info($table, $data, $where, $insertar = false)
    {   
        if ($insertar) {
            return $this -> db -> insert($table, $data);
        }else{
            return $this -> db -> update($table, $data, $where);
        }
    }


    function nuevo($table, $data)
    {   
        return $this -> db -> insert($table, $data);
    }


    function consultar_existente($what, $table, $val)
    {
        return $this -> db -> check('fkUsuario', 't_datos_empresa', $val);
    }

}