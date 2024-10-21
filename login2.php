<?php
/* Funcion para verificar navegador By Johnnatan Rodriguez Febrero 2017 *************************/
require_once('conexion.php');
global $conectado; $conn = $conectado;

$user_agent = $_SERVER['HTTP_USER_AGENT'];
function getBrowser($user_agent){
	if(strpos($user_agent, 'MSIE') !== FALSE)
	   return 'Internet explorer';
	 elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
	   return 'Microsoft Edge';
	 elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
	    return 'Internet explorer';
	 elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
	   return "Opera Mini";
	 elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
	   return "Opera";
	 elseif(strpos($user_agent, 'Firefox') !== FALSE)
	   return 'Mozilla Firefox';
	 elseif(strpos($user_agent, 'Chrome') !== FALSE)
	   return 'Google Chrome';
	 elseif(strpos($user_agent, 'Safari') !== FALSE)
	   return "Safari";
	 else
	   return 'No hemos podido detectar su navegador';
}
$navegador = getBrowser($user_agent);
if($navegador=='Mozilla Firefox'){

/** FORMULARIO DE LOGIN A ORFEO
  * Aqui se inicia session 
	* @PHPSESID		String	Guarda la session del usuario
	* @db 					Objeto  Objeto que guarda la conexion Abierta.
	* @iTpRad				int		Numero de tipos de Radicacion
	* @$tpNumRad	array 	Arreglo que almacena los numeros de tipos de radicacion Existentes
	* @$tpDescRad	array 	Arreglo que almacena la descripcion de tipos de radicacion Existentes
	* @$tpImgRad	array 	Arreglo que almacena los iconos de tipos de radicacion Existentes
	* @query				String	Consulta SQL a ejecutar
	* @rs					Objeto	Almacena Cursor con Consulta realizada.
	* @numRegs		int		Numero de registros de una consulta
	*/
    $fechah = date("dmy") . "_" . time("hms");
	$ruta_raiz = ".";
	$usua_nuevo=3;
	error_reporting(0);
	include_once("config.php");
if ($krd)
	{
	include "$ruta_raiz/session_orfeo.php";
	require_once("$ruta_raiz/class_control/Mensaje.php");
	//$db->conn->debug = true;
	//die ("Final de los mensajes ($usua_doc)($dependencia)($krd)... ");
	
    $date = new DateTime();
    $fechaActual = $date->format('Y-m-d');

    if($usua_nuevo==0)  //|| )
        {
		include($ruta_raiz."/contraxx.php");
		$ValidacionKrd = "NOOOO";
		if($j=1) die("<center> -- </center>");
		}
  	}

    if (!empty($fechaVencimientoPass) && $fechaVencimientoPass <= $fechaActual) {
        include($ruta_raiz."/contraxx.php");
		$ValidacionKrd = "NOOOO";
		if($j=1) die("<center> -- </center>");
    }

    
	$krd = strtoupper($krd);


  /* ****** vamos a llamar el aplicativo de encuestas*************** */
  //if (isset($_POST['Submit'])) {
    //$_SESSION["krdSurvey"]=$krd;
    //echo "Hello I have being test for surveys with this user:$krd";
    //sleep(10);
    //$fireSurvey="";
    //$sql = "select fire_survey('$krd') from dual";//buscando si este usuario debe responder alguna encuesta
    //$stid = oci_parse($conn, $sql);
    //oci_execute($stid);
    //while ($res = oci_fetch_array($stid)){
      //$fireSurvey=$res[0];
      //echo "this is fireSurvey:".$fireSurvey;
    //}
    //if ($fireSurvey>0){
      //$param=$krd."&filedSurv=21";
      //header("location: http://172.22.3.35/Encuesta/surveyA.php?orfeoUser=$krd&firedSurv=$fireSurvey");
      //header("location: http://172.22.3.35/Encuesta/surveyA.php?orfeoUser=$param");
      //exit();
   // }
  //}
  /* ****** fin del llamado aplicativo encuestas************** */
	$datosEnvio = "$fechah&".session_name()."=".trim(session_id())."&krd=$krd&swLog=1";

    /**
     * Genero cambios en el nombre de la entidad para correcto despliegue en el login 
     **/

    $entidad_largo_login = explode("-", $entidad_largo);
    $entidad_largo_login = $entidad_largo_login[0] ."<br>". $entidad_largo_login[1];
  ?>

<head>
    <title>.:: ORFEO, Módulo de validación::.</title>
    <link href="estilos/orfeo.css" rel="stylesheet" type="text/css">
    <!--Modified by Johnnatan Rodriguez 
	jonatanrod1@gmail.com
	Cambio logo de title para que aparezca el logo de ejercito.
	<link rel="shortcut icon" href="imagenes/arpa.gif"> -->
    <link rel="shortcut icon" href="./png/logo_<?=$entidad?>.png">
    <link rel="stylesheet" type="text/css" href="./consultas/css/sweetalert2.css">
    <script Language="JavaScript" src="./consultas/js/jquery.js"></script>
    <script type="text/javascript" src="./consultas/js/sweetalert2.js"></script>
    <script language="JavaScript" type="text/JavaScript">
        <!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es requerido.\n'; }
  } if (errors) alert('Asegurese de entrar usuario y password correctos:\n'+errors);
  document.MM_returnValue = (errors == '');
}
// Script Source: CodeLifter.com
// Copyright 2003
// Do not remove this header
//-->
    </script>
    <script>
    isIE = document.all;
    isNN = !document.all && document.getElementById;
    isN4 = document.layers;
    isHot = false;
    var tempX = 0;
    var tempY = 0;
    //alert(isN4);
    function ddInit(e) {

        hotDog = isIE ? event.srcElement : e.target;
        topDog = isIE ? "BODY" : "HTML";

        //capa = 



        while (hotDog.id.indexOf("Mensaje") == -1 && hotDog.tagName != topDog) {
            hotDog = isIE ? hotDog.parentElement : hotDog.parentNode;
        }
        size = hotDog.id.length;
        capa = (hotDog.id.substring(size - 1, size)); //returns "exce"
        whichDog = isIE ? document.all.theLayer : document.getElementById("capa" + capa);
        if (hotDog.id.indexOf("Mensaje") != -1) {

            offsetx = isIE ? event.clientX : e.clientX;
            offsety = isIE ? event.clientY : e.clientY;
            nowX = parseInt(whichDog.style.left);
            nowY = parseInt(whichDog.style.top);
            ddEnabled = true;
            document.onmousemove = dd;
        }
    }

    function dd(e) {

        if (!ddEnabled) return;
        whichDog.style.left = isIE ? nowX + event.clientX - offsetx : nowX + e.clientX - offsetx;
        whichDog.style.top = isIE ? nowY + event.clientY - offsety : nowY + e.clientY - offsety;
        return false;
    }

    function ddN4(layer) {

        isHot = true;
        // if (!isN4) return;
        if (document.layers) isN4 = document.layers
        else if (document.all) isN4 = document.all[layer];
        else if (document.getElementById) isN4 = document.getElementById(layer);

        N4 = document.getElementById(layer);

        //alert (document.all);		
        if (document.all)
            alert("hay documento ");
        // N4 = isN4;
        // alert (document.layers);
        //alert ("va...");
        // alert (N4); 
        window.captureEvents(Event.MOUSEDOWN | Event.MOUSEUP);
        N4.onmousedown = function(e) {
            tempX = e.pageX;
            tempY = e.pageY;


        }

        isN4.onmousemove = function(e) {

            if (isHot) {
                if (document.layers) {
                    document.layers[layer].left = e.pageX - tempX;
                } else if (document.all) {
                    document.all[layer].style.left = e.pageX - tempX;
                } else if (document.getElementById) {
                    document.getElementById(layer).style.left = e.pageX - tempX;
                }
                // Set ver 
                if (document.layers) {
                    document.layers[layer].top = e.pageY - tempY;
                } else if (document.all) {
                    document.all[layer].style.top = e.pageY - tempY;
                } else if (document.getElementById) {
                    document.getElementById(layer).style.top = e.pageY - tempY
                }

                // N4.moveBy( e.pageX-tempX,e.pageY-tempY);
                return false;
            }
        }
        N4.onmouseup = function() {
            // N4.releaseEvents(Event.MOUSEMOVE);
        }
    }

    function hideMe(layer) {

        if (document.layers) document.layers[layer].visibility = 'hide';
        else if (document.all) document.all[layer].style.visibility = 'hidden';
        else if (document.getElementById) document.getElementById(layer).style.visibility = 'hidden';
    }

    function showMe(layer) {
        if (document.layers) document.layers[layer].visibility = 'show';
        else if (document.all) document.all[layer].style.visibility = 'visible';
        else if (document.getElementById) document.getElementById(layer).style.visibility = 'visible';
    }

    document.onmousedown = ddInit;
    document.onmouseup = Function("ddEnabled=false");
    </script>
    <script>
    function loginTrue() {
        window.parent.location.href = "./index_frames.php";
    }
    var width = window.innerWidth; // ancho
    var height = window.innerHeight; // alto
    //alert("width es "+width+" y height es "+height);
    </script>
</head>
<style type="text/css">
body {
    /*background-image: url("imagenes/fondo_pag.jpg");*/
    background-image: url("imagenes/index_propuesta_1.png");
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-color: black;
    height: 95%;
}

a {
    font-size: 100%;
    color: white;
}

#cotent_tablefields {
    width: 90%;
    float: right;
    height: 80%;

}

#conten_login {
    height: 73%;
    width: 80%;
}
</style>

<body valign=center onLoad='document.getElementById("krd").focus();'>

    <form name=formulario action='index_frames.php?fechah=<?=$datosEnvio?>' method=post>
        <input type="hidden" name="orno" value="1">
        <input type="hidden" name="ornot" value="1">
    </form>
    <!-- 
  Ing Camilo Pintor Octubre 2018
  Mensaje Informativo Temporal Cambios en Orfeo -->
    <script type="text/javascript">
    /*
     * Se comenta para que se puede reusar para generar comunicaciones dentro del aplicativo
     */

    /*sweetAlert({
         title:'',
         html: '<img src="img/encuesta.png" alt="" width="100%" height="150%">',
         allowOutsideClick : true,
         allowEscapeKey : true,
         allowEnterKey : true,
         confirmButtonText: 'OK',
         confirmButtonColor:'#981914',//color de boton  ook
         width: 800,
         height: 300,
         type:''
     });  */


    /*    sweetAlert({
            //title:'Información de Interés',
            html: '<img src="img/aviso_png.png" alt="" width="100%" height="150%">',
            //html: '<span style="style="color:black; text-align:justify; font-weight:bold;">El sistema de Gestión Documental Orfeo entrará en proceso de mantenimiento: </span><span style="color:black; text-align:justify; font-weight:bold;"><ul><li>Nota: La Ayudantía General  se permite informar que el  día 04 de febrero  se realiza mantenimiento preventivo al sistema de  Orfeo de  12:00   a  14:00 horas . </li></span>',
            allowOutsideClick : false,
            allowEscapeKey : false,
            allowEnterKey : false,
            width: 600,
            height: 300,
            //type:'info'
        });*/
    </script>





            
            


    <!--Fin Mensaje Informativo Temporal Cambios en Orfeo -->
        
    <h1 style="color: #e82709;"> AMBIENTE DE PRUEBAS ORFEO 2024</h1>
  
    <form action="login2.php?fechah=<?=$fechah?>" method="post"
        onSubmit="MM_validateForm('krd','','R','drd','','R');return document.MM_returnValue" name="form33">
        <div id="conten_login">
            <div id="cotent_tablefields">
                <!-- <table border ="0" cellpadding="0" align="center" style="float:right; margin-right:5%; padding-top:30%; color: white;font-weight: bold;"> -->
                <table border="0" cellpadding="0" align="center"
                    style="float:left; margin-right:5%; padding-top:30%; color: black;font-weight: bold;">
                    <tr>
                        <!-- <td style="margin-right: 20px; float: right; text-align:center; font-weight: bold; color:white; font-size:100%;" >  -->
                        <td
                            style="margin-right: 60px; float: left; text-align:left; font-weight: bold; color:black; font-size:100%;">
                            <label for="krd">USUARIO</label><br>
                            <font size="3" face="Arial, Helvetica, sans-serif">
                                <input type="text" id='krd' name="krd" class="tex_area2" tabindex="1"
                                    style="padding: 10px; font-size: 20px; background-color: #DDDFEA;border-width: 0 0 3px; border-color: black; width: 130%;">
                            </font>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <!-- <td style="margin-right: 20px; margin-top: 20px; float: right; text-align:center; font-weight: bold; color:white; font-size:100%;" > -->
                        <td
                            style="margin-right: 60px; margin-top: 20px; float: left; text-align:left; font-weight: bold; color:black; font-size:100%;">
                            <label for="krd">CONTRASE&Nacute;A</label>
                            <br>
                            <input type=password name="drd" id="drd" class="tex_area2" tabindex="2"
                                style="padding: 10px; font-size: 20px; background-color: #DDDFEA;border-width: 0 0 3px; border-color: black; width: 130%;">
                            </font>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                            <!-- <input name="Submit" type="submit" class="botones" value="INGRESAR" style=" margin: 0 auto; float: center;" tabindex="3"> -->
                            <input name="Submit" type="submit"
                                style="background-color:#7c0808; border-radius: 8px; cursor: pointer; color: #FFFFFF; font-size: 20px; font-weight: bold;padding: 10px 50px; text-decoration: none;"
                                value="INGRESAR" style=" margin: 0 auto; float: center;" tabindex="3">
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span face="Times New Roman" align="left"><a href="http://mesaayuda.ejc.ejercito.mil.co/"
                                    target="_blank" tabindex="4"
                                    style="font-weight: bold; color:#7c0808; float:left; margin-top: 20px;font-size: 25px; text-decoration: none;">Solicitar
                                    Usuario Orfeo</a></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span face="Times New Roman" align="left"><a href="./restaurar_pass.php" tabindex="4" style="font-weight: bold; color:#7c0808; float:left; margin-top: 5px;font-size: 25px; text-decoration: none;">RestaurarContraseña</a></span>
                        </td>
                    </tr>
                   
                    <tr>
                        <td align="center" colspan="2" height="15">
                            <input type=hidden name=tipo_carp value=0>
                            <input type=hidden name=carpeta value=0>
                            <input type=hidden name=order value='radi_nume_radi'>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>



        <!-- se agrega footer del sistema By - Geovanni Perez septimebre 2024 -->
            <style>
                .row {
                    display: flex;
                }
                .column {
                    background-color: #EBF4F6; 
                    flex: 1;
                    padding: 20px;
                    border: 1px solid #ddd; /* Añade bordes para visualizar las columnas */
                }
                a{
                    color: black;
                }
               .contenido{
                    text-align: left;
               }
            </style>



            <div class="row">
                <div class="column">
                    <div class="contenido">
                        <h3>Material de Apoyo</h3> 
                        <a href="./preguntas_frecuentes.php"><li>Preguntas Frecuentes</li></a>
                        <a href="https://caoccapp1.ejercito.mil.co/MesaAyuda-web/"><li>Mesa de Ayuda Ejército</li></a>
                        <a href="./bodega/manuales/normatividad_sistema_orfeo.pdf" ><li>Directiva Permanente N° 01024 de 2016</li></a>
                        <a href="./bodega/manuales/normatividad_sistema_orfeo.pdf" ><li>Instructivo Sistema Orfeo</li></a>
                    </div>
                </div>
                <div class="column">
                    <div class="contenido">
                        <h3>Legalidad</h3>
                        <a href="./preguntas_frecuentes.php"><li>Preguntas Frecuentes</li></a>
                        <a href="./preguntas_frecuentes.php"><li>Mesa de Ayuda Ejército</li></a>
                        <a href="./preguntas_frecuentes.php"><li>Normatividad Sistema Orfeo</li></a>
                    </div>
                </div>
                <div class="column">
                    <div class="contenido" >
                        <h3>Formatos</h3>
                        <a href="./bodega/manuales/formato_comunicaciones_oficiales.docx"><li>Formato de Comunicaciones Oficiales</li></a>
                        <a href="./preguntas_frecuentes.php"><li>Formato de Radiograma (HR)</li></a>
                        <a href="./preguntas_frecuentes.php"><li>Formato de Circular</li></a>
                        <a href="./preguntas_frecuentes.php"><li>Formato de Memorando</li></a>
                        <a href="./preguntas_frecuentes.php"><li>Formato de Acta de Reunión</li></a>
                        <a href="./preguntas_frecuentes.php"><li>Formato de Acta de Capacitacón</li></a>
                        <a href="./preguntas_frecuentes.php"><li>Formato de Acta de Entrega del Cargo</li></a>
                        <a href="./preguntas_frecuentes.php"><li>Formato de Acta de Transferencia</li></a>
                    </div>
                </div>
                <div class="column">
                    <div class="contenido">
                        <h3>Contacto</h3>
                        <a href="./preguntas_frecuentes.php"><li>Preguntas Frecuentes</li></a>
                        <a href="./preguntas_frecuentes.php"><li>Mesa de Ayuda Ejército</li></a>
                        <a href="./preguntas_frecuentes.php"><li>Normatividad Sistema Orfeo</li></a>
                    </div>
                </div>
            </div>

    <!-- <span face="Times New Roman" style="margin-top: 10%; font-weight: bold; color:white; float:left; font-size: 100%;" align="left"><?= $entidad_largo_login ?></span> -->
    <?
if($ValidacionKrd=="Si")  
{  
?>
    <script>
    loginTrue();
    </script>
    <?
} else {
  echo $mensajeValidaLogin;
}
?>
</body>

</html>
<?php
}else{
?>
<html>

<head>
    <title>.:: ORFEO, Módulo de validación::.</title>
    <link href="estilos/orfeo.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="./png/logo_EJC.png">
    <link rel="stylesheet" type="text/css" href="./consultas/css/sweetalert2.css">
    <script Language="JavaScript" src="./consultas/js/jquery.js"></script>
    <script type="text/javascript" src="./consultas/js/sweetalert2.js"></script>
    <style type="text/css">
    body {
        margin-left: 0px;
        margin-top: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        background-image: url("imagenes/Fondo_inicio.jpg");
        background-repeat: no-repeat;
        color: white;
        background-size: cover;
        background-attachment: fixed;
        height: 100%;
        width: 100%;
        border-radius: 20px;
        position: relative;
        background-color: black;
        background-position: center center;
        background-position: 0px;
    }
    </style>
</head>

<body>
    <h3>El navegador con el que estás visitando esta web es: <?php echo $navegador;?></h3><br>
    <script type="text/javascript">
    sweetAlert({
        title: 'ATENCIÓN:',
        html: 'El sistema de Gestión Documental Orfeo debe ser visualizado UNICAMENTE en el navegador <hr><span>MOZILLA FIREFOX</span><hr>si no tiene este navegador, solicitarlo por favor al TIC de su unidad.',
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        showConfirmButton: false,
        type: 'error'
    });
    //window.close();
    </script>
</body>

</html>
<?php
	/* Fin funcion para verificar navegador***********************************************************/
}
 
?>