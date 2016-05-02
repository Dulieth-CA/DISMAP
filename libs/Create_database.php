<?php
class Create_database
{
	protected $pdo;
	
	public function __construct()
	{	
		$this->pdo = new PDO("mysql:host=".DB_HOST.";", DB_USER, DB_PASS);
	}
	//creamos la base de datos y las tablas que necesitemos
	public function my_db()
	{
        //creamos la base de datos si no existe
		$crear_db = $this->pdo->prepare('CREATE DATABASE IF NOT EXISTS '.DB_NAME.' COLLATE utf8_spanish_ci');							  
		$crear_db->execute();
		
		//decimos que queremos usar la tabla que acabamos de crear
		if($crear_db):
			$use_db = $this->pdo->prepare('USE '.DB_NAME);						  
			$use_db->execute();
		endif;
			
		//si se ha creado la base de datos y estamos en uso de ella creamos las tablas
		if($use_db):

			/***   TABLA DATOS DE REGIMEN FISCALES   ***/
			include 'DATA_BASE/t_regimen_fiscal.php';

			/***   TABLA USUARIOS   ***/
			// include 'DATA_BASE/t_usuarios.php';

			/***   TABLA DATOS DE EMPRESA   ***/
			include 'DATA_BASE/t_datos_empresa.php';

			/***   TABLA DATOS DE CFDI   ***/
			include 'DATA_BASE/t_datos_cfdi.php';

			/***   TABLA DATOS DE SUSCRIPCIONES   ***/
			include 'DATA_BASE/t_suscripcion_usuario.php';


		
		endif;
		
	}
}
//ejecutamos la función my_db para crear nuestra bd y las tablas
$db = new Create_database();
$db->my_db();
?>