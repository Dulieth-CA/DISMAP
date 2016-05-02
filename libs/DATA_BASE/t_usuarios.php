<?php 

$crear_tb_users = $this->pdo->prepare( "CREATE TABLE IF NOT EXISTS t_usuarios (
   kUsuario 			int(11) NOT NULL AUTO_INCREMENT,
   sNombres 			varchar(255) NOT NULL,
   sEmail 				varchar(255) NOT NULL,
   sPassword 			varchar(512) NOT NULL,
   sCodigoUsuario 		varchar(20) NOT NULL COMMENT 'codigo de este',
   sCodigo 				varchar(20) DEFAULT NULL COMMENT 'codigo de quien lo recomendo',
   bConfirmacionEmail 	tinyint(1) NOT NULL DEFAULT '0',
   PRIMARY KEY (kUsuario),
   UNIQUE KEY sEmail (sEmail)
);" );
$crear_tb_users->execute();



$crear_tb_users = $this->pdo->prepare( "ALTER TABLE t_usuarios ADD 
   dtFechaRegistro datetime DEFAULT CURRENT_TIMESTAMP NOT NULL ;" );
$crear_tb_users->execute();