<?php 

$crear_tb_users = $this->pdo->prepare( "CREATE TABLE IF NOT EXISTS t_datos_cfdi (
  kDatosCfdi 	    int(11) NOT NULL AUTO_INCREMENT,
  fkUsuario       int(11) NOT NULL,
  fkRegimenFiscal int(11) NOT NULL,
  sPathCer        varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  sPathKey        varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (kDatosCfdi)
);" );
$crear_tb_users->execute();


