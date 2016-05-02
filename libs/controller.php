<?php 
//============================================================+
// File name   : controller.php
// Begin       : 2016-03-08
// Last Update : none
//
// Description : Controller file
// Author      : Martin Flores - neupix.com - martin@neupix.com
//============================================================+

if(!defined('APP')) die (header('location:404'));

Class controller{

	
	function __construct()
	{
		session::init();
		$this -> view = new view();
		$this -> loadModel();

	}

	function loadModel()
	{
		$model = get_class($this).'_model';
		$path  = 'models/'.$model.'.php';
		if (file_exists($path)) {
			require $path;
			$this -> model = new $model();

		}
	}

}