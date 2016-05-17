<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="cover.css" rel="stylesheet">
    <link rel="shortcut icon" href="SmallLogo.ico" />
	<TITLE>Chibil</TITLE>
</head>
<body>

<!-- Librería jQuery requerida por los plugins de JavaScript -->
<script src="http://code.jquery.com/jquery.js"></script>
<!-- Todos los plugins JavaScript de Bootstrap -->
<script src="js/bootstrap.min.js"></script>


<!-- Navbar -->
<nav class="navbar navbar-default">
 	<div class="container">
 	 	<div class="row">
	 		<div class="navbar-header">
	     		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	      		<span class="icon-bar"></span>
	       		<span class="icon-bar"></span>
	       		<span class="icon-bar"></span>                        
	     		</button>
	     	</div>

	   		     
	        <div class="collapse navbar-collapse" id="myNavbar">          >
	     		<ul class="nav navbar-nav navbar-right">
	                <li style="font-size: 12px; margin-top: 3px;">
	     				<a href="index.php" >
	     				<span id="colorletra" style="margin-top:3px;"><img src="linkedinstandard.png"></span> <h7 id="colorletra"> </h7></a> </img>
	                </li>
	            </ul><!-- /ul nav bar-->
	   	    </div>  <!-- div class="collapse navbar-collapse" -->.
    	</div>
    </div>
</nav> 


<div class="site-wrapper">
 <div class="container" >
  <div style="text-align:center;">
	<table border="1" style="margin: 0 auto;">
 	<h1 align="center" id="colorletra"> Registro Especialista </h1>
    <form action="Formulario_Registro_Especialista.php" method="get">
	    <table id="colorletra">
	    <br>
	    	<h3 id="colorletra" >Datos personales </h3> 
		    	
		    	
	    		<tr>
		    		<td><input type="text" class="form-control col-sm-12" name= "txtNombre" placeholder="Nombre(s)" required="true" align="center" ></input></td>
		 	  		<td><input type="text" class="form-control col-sm-12" name= "txtApPaterno" placeholder="Apellido Paterno" required="true"></input></td>
		 	  		<td><input type="text" class="form-control col-sm-12" name= "txtApMaterno" placeholder="Apellido Materno" required="true"></input></td>
		 	  		<td><input type="date" class="form-control col-sm-12" name="fecha_nac" placeholder="Fecha de Nacimiento" required="true"></input></td>
				</tr>

				<tr>
		 			<td><input type="radio"  placeholder="F" name="sexo" value="female" >Femenino</input>
		 	  		<input type="radio" placeholder="M" name="sexo" value="male">Masculino</input></td>
		 	  	

				
		 			<td><input type="text" class="form-control col-sm-12" name="txtcedula" placeholder="Cédula" required="true"></input></td>
					<td><input type="tel" class="form-control" name="tel" placeholder="teléfono" required="true"></input></td>

				</tr>

		 	    <tr>
		 			<td><input type="text" class="form-control col-sm-12" name="txtcalle"  placeholder="Calle" required="true"></input></td>
		 	  		<td><input type="text" class="form-control col-sm-12" name="txtnum_ext" placeholder="Num." required="true"></input></td>
		 			<td><input type="text" class="form-control col-sm-12" name="txtcolonia" placeholder="Colonia" required="true"></input></td>
		 	  		<td><input type="text" class="form-control col-sm-12" name="txtmunicipio" placeholder="Municipio"  required="true"></input></td>
		 	  		<td><input type="text" class="form-control col-sm-12" name="txtestado" placeholder="Estado"  required="true"></input></td>
		 	 		<td><input type="text" class="form-control col-sm-12" name="txtcodpost" placeholder="Código Postal" name="txtcp" required="true"></input></td>
		 		</tr> 

				<tr>
		 			<td><input type="email" class="form-control col-sm-12" name="email" placeholder="tucorreo@servicio.com" required="true"></input></td>
		 		
		 			<td><input type="password" class="form-control col-sm-12"  name="contrasena" placeholder="Contraseña" required="true"></input></td>
				
		 			<td><input type="text" class="form-control col-sm-12"  name="especialidades" placeholder="Especialidades" required="true"></input></td>
		 		</tr> 

			    <tr>
	     			<td><td><td align="center"><input type="submit" name="botonreg" value="Registrarme" ></input></td>
	    		</tr>

    	</table>
	</form> <!-- Form -->
	</div >
	</table >
  </div>
 </div> <!-- div class container-->
</div> <!-- div class site wrapper-->


<footer class="footer">
	<div class=" container">
    <p class="text-muted" id="colorletra">TT 2015-B118</p>
  	</div>
</footer>

<!-- Comienaz php -->


<?php 
 
// include Parse SDK autoloader
require 'vendor/autoload.php';


use Parse\ParseObject;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseClient;

 ParseClient::initialize( 'escom-epilepsia', '', 'epilepsiamasterkey');
 ParseClient::setServerURL('https://escom-epilepsia.herokuapp.com/parse');


   // save something to class TestObject
   /*$Especialista =ParseObject::create("Especialista");
	$Especialista->set ("nombre", "juan jose");
	$Especialista->save();*/

           
          // $especialista = ParseCloud::run("registraREspecialista",[ $_POST['txtNombre'], "edad", "direccion especialista"]

      $nombre=$_GET['txtNombre'];
   	  $apellido_paterno=$_GET['txtApPaterno'];
   	  $apellido_materno=$_GET['txtApMaterno'];
   	  $nac=$_GET['fecha_nac'];
   	  $calle=$_GET['txtcalle'];
   	  $numero=$_GET['txtnum_ext'];
   	  $colonia=$_GET['txtcolonia'];
   	  $delegacion=$_GET['txtmunicipio'];
   	  $estado=$_GET['txtestado'];
   	  $codigo_postal=$_GET['txtcodpost'];
   	  $cedula=$_GET['txtcedula'];
   	  $telefono=$_GET['tel'];
   	  $espacialidades=$_GET['especialidades'];
   	  $email=$_GET['email'];
   	  $password=$_GET['contrasena'];
   	  $date = DateTime::createFromFormat('Y-m-j', $nac);
	  //echo $date->format('Y-m-d');
   	 

    try{    	 
    $nuevoespecialista = ParseCloud::run("registrarEspecialista", array( 'nombre' => $nombre, 'email' => $email, 'password' => $password, 'apellido_paterno' => $apellido_paterno, 'apellido_materno' => $apellido_materno , 'fecha_nacimiento' => $date, 'calle' => $calle, 'numero' => $numero, 'colonia' => $colonia, 'delegacion' => $delegacion, 'estado' => $estado, 'codigo_postal' => $codigo_postal, 'cedula' => $cedula, 'telefono' => $telefono));
      echo $nuevoespecialista-> get('nombre');
      header("Location: Bienvenido.php");
    } catch (ParseException $er){
    echo $er -> getMessage();
    }



   ?>
<!-- Termina php -->



</body>
</html>


 