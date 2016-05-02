<?php 
if(!defined('APP')) die (header('location:404'));
class enfermedad_model extends model{

	function __construct()
	{
		parent::__construct();
	}

    function getData($section){
    	switch ($section) {
    		case 'enfermedades':
                return $this -> db -> select('*', 't_enfermedades');
            break;
    	}
    }

}