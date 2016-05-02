
<?php 

$crear_tb_users = $this->pdo->prepare( "CREATE TABLE IF NOT EXISTS t_regimen_fiscal (
  kRegimenFiscal  int(11) NOT NULL AUTO_INCREMENT,
  sRegimenFiscal  varchar(255) NOT NULL,
  bDisponible	  boolean NOT NULL DEFAULT '1',
  PRIMARY KEY (kRegimenFiscal)
);" );
$crear_tb_users->execute();


