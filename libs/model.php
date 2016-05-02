<?php
//============================================================+
// File name   : model.php
// Begin       : 2016-03-08
// Last Update : none
//
// Description : Model file
// Author      : Martin Flores - neupix.com - martin@neupix.com
//============================================================+
if(!defined('APP')) die (header('location:404'));
class model{
	
	function __construct()
	{
		$this -> db = new MYSQLiManager(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	}
}