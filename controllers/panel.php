<?php 
//============================================================+
// File name   : controllers/panel.php
// Begin       : 2016-03-08
// Last Update : none
//
// Description : Login file
// Author      : Martin Flores - neupix.com - martin@neupix.com
//============================================================+
if(!defined('APP')) die (header('location:404'));
class panel extends controller{

	function __construct()
	{
		parent::__construct();
        $url = explode("/", URL_AC);
        if (empty($url[1])) {
            $this -> inicio();
        }
	}

	public function entrar()
	{
		//email,password
        if( isset($_POST["email"]) && isset($_POST["password"])){
            
            $q = $this -> model -> consultar_usuario("*", "sEmail = '".$_POST["email"]."'");
            $q = $q[0];

            if ( $q["sPassword"] == hash('sha256', $_POST["password"]) ) {
            	$this -> crearSesion($q["sNombres"], $q["kUsuario"]);
                $nombre = "martinsillo";
            	header('location:'.URL_tmp.'panel/inicio');
            }else{
            	header('location:'.URL_tmp.'entrar/error');
            }

        }else{
        	header('location:'.URL_tmp.'entrar/error');
        }
	}

	public function inicio()
    {
        Session::exist();
        $this -> view -> render($this, 'index');
    }


    public function mapa()
    {
        Session::exist();
        $this -> view -> render($this, 'mapa');
    }

    public function factura($data='')
    {
        Session::exist();
        switch ($data) {
            case 'nueva':
                $this -> view -> render($this, 'factura/nueva', $data);
                break;

            case 'emitidas':
                $this -> view -> render($this, 'factura/emitidas', $data);
                break;

            case 'canceladas':
                $this -> view -> render($this, 'factura/canceladas', $data);
                break;
            
            default:
                $this -> view -> render($this, 'factura/emitidas', $data);
                break;
        }
    }


    /******************************/
    /*--- MODULO CONFIGURACION ---*/
    /******************************/
    public function configuracion($data='')
    {
        Session::exist();
        switch ($data) {
            /*--- VIEWS ---*/
            case 'usuario':
                $this -> view -> render($this, 'configuracion/usuario', $data);
                break;

            case 'empresa':
                $this -> view -> render($this, 'configuracion/empresa', $data);
                break;
                
            case 'cfdi':
                $this -> view -> render($this, 'configuracion/cfdi', $data);
                break;

            case 'afiliado':
                $this -> view -> render($this, 'configuracion/afiliado', $data);
                break;


            /*--- METODOS ---*/
            case 'guardar-afiliado':
                // $this -> view -> render($this, 'configuracion/afiliado', $data);
                break;

            /* GURADAR LOS DATOS DEL USUARIO */
            case 'guardar-usuario':
                if ( !empty($_POST['nombre']) ) {
                    $vals['sNombres'] = $_POST['nombre'];
                    $this -> model -> actualizar_info('t_usuarios', $vals, 'kUsuario ='.$_SESSION['kUsuario']);
                    header('location:'.URL_tmp.'panel/configuracion/usuario?n=1');
                }else{
                    header('location:'.URL_tmp.'404');
                }
                break;

            /* GURADAR LOS DATOS DE LA EMPRESA */
            case 'guardar-datos-empresa':
                if ( !empty($_POST['nom_emp']) &&
                     !empty($_POST['nom_rfc']) &&
                     !empty($_POST['nom_email']) &&
                     !empty($_POST['nom_calle']) &&
                     !empty($_POST['num_dir']) &&
                     !empty($_POST['cod_pos']) &&
                     !empty($_POST['nom_mun']) &&
                     !empty($_POST['nom_edo'])) {
                    
                    /* NOT NULL */
                    $vals['fkUsuario']          = $_SESSION['kUsuario'];
                    $vals['sNombreEmpresa']     = $_POST['nom_emp'];
                    $vals['sRFC']               = $_POST['nom_rfc'];
                    $vals['sEmail']             = $_POST['nom_email'];

                    /* NULL */
                    $vals['sApellidos']         = $_POST['nom_ape'];
                    $vals['sNombreComercial']   = $_POST['nom_com'];
                    $vals['sPaginaWeb']         = $_POST['pag_web'];
                    $vals['sTelefono']          = $_POST['num_tel'];
                    $vals['sCelular']           = $_POST['num_tel'];

                    /* NOT NULL */
                    $vals['sCalle']             = $_POST['nom_calle'];
                    $vals['sNumero']            = $_POST['num_dir'];
                    $vals['nCodigoPostal']      = $_POST['cod_pos'];
                    $vals['sMunicipio']         = $_POST['nom_mun'];
                    $vals['sEstado']            = $_POST['nom_edo'];


                    $checar['fkUsuario'] = $_SESSION['kUsuario'];
                    $ex = $this -> model -> consultar_existente('fkUsuario', 't_datos_empresa', $checar);
                    if ($ex) {
                        $this -> model -> actualizar_info('t_datos_empresa', $vals, 'fkUsuario ='.$_SESSION['kUsuario'], false);
                    }else{
                        $this -> model -> actualizar_info('t_datos_empresa', $vals, 'fkUsuario ='.$_SESSION['kUsuario'], true);
                    }

                    header('location:'.URL_tmp.'panel/configuracion/empresa?n=1');
                }else{
                    header('location:'.URL_tmp.'404');
                }
                break;




            /* GURADAR LOS DATOS DE CFDI */
            case 'guardar-datos-cfdi':
                echo "guardar-datos-cfdi";
                break;



            /* CAMBIAR CONTRSEÑA DEL USUARIO */
            case 'cambiar-contrasena':
                if ( !empty($_POST['nueva_contrasena']) ) {
                    $vals["sPassword"] = hash('sha256', $_POST["nueva_contrasena"]);
                    $this -> model -> actualizar_info('t_usuarios', $vals, 'kUsuario ='.$_SESSION['kUsuario']);
                    header('location:'.URL_tmp.'panel/configuracion/usuario?n=1');
                }else{
                    header('location:'.URL_tmp.'404');
                }
                break;

            default:
                $this -> view -> render($this, 'configuracion/usuario', $data);
                break;
        }
    }



    /******************************/
    /*--- MODULO ENFERMEDAD ---*/
    /******************************/
    public function enfermedad($data='')
    {
        Session::exist();
        switch ($data) {
            /*--- VIEWS ---*/
            case 'nueva':
                $val['sEnfermedad'] = $_POST['nom_enf'];
                $val['sSintomas'] = $_POST['niv_mor'];
                $val['sNivelMortalidad'] = $_POST['sSintomas'];
                $val['nLongitud'] = $_POST['long'];
                $val['nLatitud'] = $_POST['lat'];

                $this -> model -> nuevo('t_enfermedades', $val);

                header('location:'.URL_tmp.'panel/?n=1');
                break;

            case 'emitidas':
                $this -> view -> render($this, 'enfermedad/emitidas', $data);
                break;
            
            default:
                header('location:'.URL_tmp.'panel/');
                break;
        }
    }




    /******************************/
    /*--- MODULO CUENTA ---*/
    /******************************/
    public function cuenta($data='')
    {
        Session::exist();
        switch ($data) {
            /*--- VIEWS ---*/
            case 'suscripcion':
                $this -> view -> render($this, 'cuenta/suscripcion', $data);
                break;
            
            default:
                header('location:'.URL_tmp.'panel/');
                break;
        }
    }


    public function salir(){
        $this -> destruirSesion();
    }

	function crearSesion($username, $id){
        Session::setValue('sNombres', $username);
        Session::setValue('kUsuario', $id);
    }
        
    function destruirSesion(){
        Session::destroy();
        header('location:'.URL_tmp);
    }
	
}