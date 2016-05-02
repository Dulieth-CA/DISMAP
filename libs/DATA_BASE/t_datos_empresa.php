<?php 

$crear_tb_users = $this->pdo->prepare( "CREATE TABLE IF NOT EXISTS t_datos_empresa (
  kDatosEmpresa 	int(11) NOT NULL AUTO_INCREMENT,
  fkUsuario 		int(11) NOT NULL,
  sNombreEmpresa 	varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  sRFC 				varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  sEmail 			varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  sApellidos 		varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  sNombreComercial 	varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  sPaginaWeb 		varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  sTelefono 		varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  sCelular 			varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  sCalle 			varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  sNumero 			varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  nCodigoPostal 	varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  sMunicipio 		varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  sEstado 			varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  sPais 			varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (kDatosEmpresa)
);" );
$crear_tb_users->execute();


