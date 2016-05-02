<?php 
//============================================================+
// File name   : controllers/registro.php
// Begin       : 2016-03-10
// Last Update : none
//
// Description : SignUp file
// Author      : Martin Flores - neupix.com - martin@neupix.com
//============================================================+
if(!defined('APP')) die (header('location:404'));
class registro extends controller{

	function __construct()
	{
		parent::__construct();
		if (Session::session_check()) {
			header('location:'.URL_tmp.'panel/');
		}
		$url = explode("/", URL_AC);
        if (empty($url[1])) {
			$this -> view -> render($this, 'registro');
        }elseif( $url[1] != 'error'){
        	$val = array("sCodigoUsuario"=> $url[1]);
        	if ($this -> model -> exist_codigo( $val ) ) {
        		$this -> view -> render($this, 'registro', $url[1]);
        	}elseif( $url[1] == 'consultar_codigo' ){
        		return;
        	}else{
        		header('location:'.URL_tmp.'registro');
        	}
        }
	}

	function nuevo(){
		if ( !empty($_POST['nombre']) && 
			 !empty($_POST['email']) &&
			 !empty($_POST['password']) ) 
		{

				// FORMARIANDO EMAIL TOMANDO LOS PRIMEROS 3 CARACTERES DEL EMAIL
				$preCodigo = strtoupper(substr($_POST['email'], 0, 3));
				$q = $this -> model -> consultar_codigo("sCodigoUsuario", "sCodigoUsuario LIKE '".$preCodigo."%'");

				// ARREGLO DONDE SE METERAN LOS NUMERO DE LOS CODIGOS DEVUELTOS
				$nArrCodes = array();

				//VAR DEL CODIGO A INSERTAR PARA EL USUARIO -> AÑADIENDO LOS PRIMEROS 3 CARACTERES
				$CODIGO = $preCodigo.'-';
				$nCOD;
				foreach ($q as $val) {
					echo $val['sCodigoUsuario'].'<br>';
					$push = substr($val['sCodigoUsuario'], 4);
					array_push($nArrCodes, $push);
				}

				print_r($nArrCodes);

				 $CODIGO = $preCodigo.'-'.$nCOD++;

				$nCOD = (int)max($nArrCodes);
				$nCOD+=1;
				if ($nCOD < 10) {
					$CODIGO = $CODIGO.'00'.$nCOD;
				}elseif($nCOD < 100){
					$CODIGO = $CODIGO.'0'.$nCOD;
				}elseif($nCOD < 1000){
					$CODIGO = $CODIGO.$nCOD;
				}

            $param = array("sEmail"=> $_POST['email']);
            if ( $this -> model -> consultar_email("sEmail", "t_usuarios", $param ) ) {
            	if ( empty($_POST['codigo']) ) {
            		header('location:'.URL_tmp.'registro/error/'.$_POST["nombre"]);
            	}else{
		            header('location:'.URL_tmp.'registro/'.$_POST['codigo'].'/error/'.$_POST["nombre"]);
		        }
            }else{
				$data["sNombres"] 	= $_POST["nombre"];
	            $data["sEmail"] 	= $_POST["email"];
	            $data["sPassword"] 	= hash('sha256', $_POST["password"]);
	            $data["sCodigo"] 	= $_POST["codigo"];
	            $data["sCodigoUsuario"] 	= $CODIGO;


				$q = $this -> model -> crear_usuario('t_usuarios', $data);


				$param = array("sEmail"=> $_POST['email']);
				if ($this -> model -> consultar_email("sEmail", "t_usuarios", $param )) {
            		$q = $this -> model -> consultar_usuario("*", "sEmail = '".$_POST["email"]."'");
            		$q = $q[0];
					
					$this -> enviar_email_bienvenida($q["kUsuario"] , $q["sEmail"], $q["sNombres"]);
            		
            		if ( $q["sPassword"] == hash('sha256', $_POST["password"]) ) {
		            	Session::setValue('sNombres', $q["sNombres"]);
   			      		Session::setValue('kUsuario', $q["kUsuario"]);
		            	header('location:'.URL_tmp.'panel/inicio');
		            }else{
		            	header('location:'.URL_tmp.'entrar/error');
		            }
				}else{
					echo "error intentelo mas tarde";
				}
            }
		}else{
			header('location:'.URL_tmp.'404');
		}
	}

	public function error($nombre=''){
		$this -> view -> render($this, 'registro');
		?><script type="text/javascript">$('#error').fadeToggle();$('#nom_empresa').val('<?php echo $nombre ?>');$('#email').focus();</script>><?php
	}

	function consultar_codigo($codigo){
		$val = array("sCodigoUsuario"=> $codigo);
		if ($this -> model -> exist_codigo( $val )) {
			echo '1';
		}else{
			echo '0';
		}
	}



	public function enviar_email_bienvenida($id, $email, $nombre){
		require LIBS.'PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer();
		$body = "<p>Hola ".$nombre.",<br>¡Bienvenido/a a FacturaFacilito! Por favor haz clic en el siguiente enlace para confirmar tu dirección de correo electrónico:</p><p><a href='".URL."confirmar/email/".base64_encode($email)."/".base64_encode($id)."'>Confirmar mi dirección de correo electrónico</a></p><p>Gracias,<br>Equipo FacturaFacilito<br><a href='".URL."'>www.facturafacilito.com</a></p>";
		$mail->Host = "mail.facturafacilito.hol.es";
		$mail->SetFrom('martin.floq@gmail.com', 'FacturaFacilito');
		$mail->Subject = "Binevenido a FacturaFacilito";
		$mail->AltBody = "Hola, Binevenido a FacturaFacilito";
		$mail->MsgHTML($body);
		$address = $email;
		$mail->AddAddress($address, $nombre);
		$mail->Send();
	}
	
}