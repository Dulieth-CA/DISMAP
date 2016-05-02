<?php 
//============================================================+
// File name   : controllers/index.php
// Begin       : 2016-03-08
// Last Update : none
//
// Description : Index file for front page
// Author      : Martin Flores - neupix.com - martin@neupix.com
//============================================================+
if(!defined('APP')) die (header('location:404'));
class index extends controller{

	function __construct($param="")
	{
		parent::__construct();
		if (!empty($param)) {
			if ($param == 404) {
				$this -> view -> render($this, '404');
			}elseif ($param == 'chrome') {
				$this -> view -> render($this, 'chrome');
			}
		}else{
			$this -> view -> render($this, 'index');
			$email = 'martin@neupix.com';
			$email = substr($email, 0, 3);

			$cant = 100;
			if ($cant < 10) {
				$email = $email.'-00'.'1';
			}elseif($cant < 100){
				$email = $email.'-0'.'10';
			}elseif($cant < 1000){
				$email = $email.'-100';
			}
			$email = strtoupper($email);
			echo $email;
		}
	}

}