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



 <h1 id="colorletra" align="center"> Registro Paciente</h1>


   <form action="Formulario_Registro_Paciente.php" method="get">

      <table id ="colorletra" align="center">

   

    <td> Nombre Completo </td>

      <td><input type="text" class="form-control col-sm-12" name= "txtNombre" placeholder="Nombre (s)" required="true"></input></td>
      <td><input type="text" class="form-control col-sm-12" name= "txtApPaterno" placeholder="Apellido Paterno" required="true"></input></td>
      <td><input type="text" class="form-control col-sm-12" name= "txtApMaterno" placeholder="Apellido Materno" required="true"></input></td>

   </tr>

  
   <tr>
    <td>Fecha de Nacimiento</td>
      <td><input type="date" class="form-control col-sm-12" name="fecha_nac" placeholder="DD/MM//AAAA" required="true"></input></td>

   </tr>


   

   <tr>
    <td>Sexo</td>
      <td><input type="radio"  placeholder="Femenino" name="sexo" value="female" >F</input>
      <input type="radio" placeholder="Masculino" name="sexo" value="male">M</input></td>

   </tr>




   

     <tr>
    <td>Dirección</td>
      <td><input type="text" class="form-control col-sm-12" name="txtcalle"  placeholder="Calle" required="true"></input></td>
      <td><input type="text" class="form-control col-sm-12" name="txtnum_ext" placeholder="Num. exterior" required="true"></input></td>
    <tr><td></td>>
      <td><input type="text" class="form-control col-sm-12" name="txtcolonia" placeholder="Colonia" required="true"></input></td>
      <td><input type="text" class="form-control col-sm-12" name="txtmunicipio" placeholder="Municipio"  required="true"></input></td>
      <td><input type="text" class="form-control col-sm-12" name="txtestado" placeholder="Estado"  required="true"></input></td>
     <tr><td></td>><td><input type="text" class="form-control col-sm-12" name="txtcodpost" placeholder="código Postal" name="direccion" required="true"></input></td>
    </tr> </tr>
    </tr>


   <tr>
    <td>Tel&eacutefono</td>
      <td><input type="tel" class="form-control col-sm-12" name="tel" placeholder="55555555" required="true"></input></td>
   </tr>


   <tr>
    <td>Correo</td>
      <td><input type="email" class="form-control col-sm-12"  name="email" placeholder="tucorreo@servicio.com" required="true"></input></td>

   </tr> 

   <tr>
    <td >Contraseña</td>
      <td><input type="password" class="form-control col-sm-12"  name="contrasena" placeholder="Contraseña" required="true"></input></td>

   </tr> 

 

    <tr>
    <td></td> <td></td>
    <td align="center"><input type="submit" class="col-sm-12" name="botonreg" value="Registrar" ></input></td>

   </tr>



    </table>
</form>





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
     

     // $query = new ParseQuery("GameScore");
      //$query->equalTo("email", $email);
      //$object = $query->first();

    
   // if( $object == $email ){

     // echo <span> "El correo ya existe. Registre otro correo" </span> ;
    //}
    //else{
    try{       

    $nvopaciente = ParseCloud::run("registrarPaciente", array('nombre' => $nombre, 'email' => $email, 'password' => $password, 'apellido_paterno' => $apellido_paterno, 'apellido_materno' => $apellido_materno , 'fecha_nacimiento' => $date, 'calle' => $calle, 'numero' => $numero, 'colonia' => $colonia, 'delegacion' => $delegacion, 'estado' => $estado, 'codigo_postal' => $codigo_postal, 'telefono' => $telefono, 'especialistaId' => 'jcfjAZ5E37'));
      echo $nvopaciente->get('nombre');
      header("Location: nuevopaciente.php");
    } catch (ParseException $er){
    echo $er -> getMessage();
    }
    //}



   ?>
   
<!-- Termina php -->

</body>
</html>

