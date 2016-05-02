<?php 

$crear_tb_suscripcion = $this->pdo->prepare( "CREATE TABLE IF NOT EXISTS t_suscripcion_usuario (
  kSuscripcion 	  			int(11) NOT NULL AUTO_INCREMENT,
  fkUsuario       			int(11) NOT NULL,
  fkPlan          			int(11) NOT NULL,
  dtFechaInicioPlan			datetime NOT NULL,
  dtFechaVencimientoPlan    datetime NOT NULL,
  PRIMARY KEY (kSuscripcion)
);" );
$crear_tb_suscripcion->execute();


