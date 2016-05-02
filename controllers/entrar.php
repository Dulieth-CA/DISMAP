<?php 
//============================================================+
// File name   : controllers/entrar.php
// Begin       : 2016-03-08
// Last Update : none
//
// Description : Login file
// Author      : Martin Flores - neupix.com - martin@neupix.com
//============================================================+
if(!defined('APP')) die (header('location:404'));
class entrar extends controller{

	function __construct()
	{
		parent::__construct();
		if (Session::session_check()) {
			header('location:'.URL_tmp.'panel/');
		}

		$url = explode("/", URL_AC);
        if (empty($url[1])) {
			$this -> view -> render($this, 'entrar');
        }elseif($url[1] == 'error'){
        	$this -> view -> render($this, 'entrar');
        }        
	}

	public function error(){
		?><script type="text/javascript">$('#error1').fadeToggle();</script><?php
	}

	public function olvidado(){
		$param = array("sEmail"=> $_POST['email']);
		if ( $this -> model -> consultar_email("sEmail", "t_usuarios", $param ) ) {
            require LIBS.'PHPMailer/PHPMailerAutoload.php';
// require_once(LIBS.'PHPMailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = "<h1>HOLA</h2>";
// $body             = eregi_replace("[\]",'',$body);

// $mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.facturafacilito.hol.es"; // SMTP server
// $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
// $mail->SMTPAuth   = true;                  // enable SMTP authentication
// $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
// $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
// $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
// $mail->Username   = "martin.floq@gmail.com";  // GMAIL username
// $mail->Password   = "majomajomajo1";            // GMAIL password

$mail->SetFrom('martin.floq@gmail.com', 'MartinSillo');

// $mail->AddReplyTo("name@yourdomain.com","First Last");

$mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = $_POST['email'];
$mail->AddAddress($address, "John Doe");

// $mail->AddAttachment("images/phpmailer.gif");      // attachment
// $mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
    
			
        }else{
        	header('location:'.URL_tmp.'entrar/?email=false');
        }
	}
	
}