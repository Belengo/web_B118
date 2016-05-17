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
  
  <form action="index.php" method="GET">
     
		<!-- Navbar -->
		<nav class="navbar navbar-default">
 			<div class="container">
 				  
          <div class="navbar-header">
     			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      				  <span class="icon-bar"></span>
       			  <span class="icon-bar"></span>
       			  <span class="icon-bar"></span>                        
     			  </button>
     		  </div>
   		     
          <div class="collapse navbar-collapse" id="myNavbar">
          <form action="index.php" method="get">
     			  <ul class="nav navbar-nav navbar-right">
               <li style="font-size: 12px; margin-top: 3px;">
     				    <a href="Formulario_Registro_Especialista.php" >
     				    <span class="glyphicon glyphicon-user" id="colorletra"></span> <h7 id="colorletra">Sign in </h7></a>
               </li>
      				 <li>
     				     <div class="dropdown" style="font-size: 12px;" >
     				     <li class="dropdown-header" id="menu1" data-toggle="dropdown"> <a href="#">
     				     <span class="glyphicon glyphicon-log-in" id="colorletra"></span><h7 id="colorletra"> Log in </h7></a>
               </li>
                   <!-- Datos que va a desplegar el dropdown --> 				
   					     <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
    					 	    <div class="container" id="login">
    							    <form class="form-signin">
       							   <h2 class="form-signin-heading" id="colorletra">Inicie sesión</h2>
       							   <label for="inputEmail" >Correo </label>
       							   <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
       							   <label for="inputPassword" class="sr-only">Contraseña</label>
       							   <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
       							   <div class="checkbox">
         							  <label id="colorletra"> <input type="checkbox"   value="remember-me"> Recuerda mi contraseña</label>
           					   </div>
       							   <button class="btn btn-lg btn-primary btn-block" id="colorfondo" id="btnaceptar" type="submit">Aceptar</button>
     								  </form>
     						    </div> <!-- /container login dropdown-->
     					   </ul> <!-- /ul  login dropdown-->
 					      </div> <!-- /div  login dropdown-->
     				  </li>  <!-- /lista  login dropdown-->
            </ul><!-- /ul nav bar-->
   			  </div>  <!-- div class="collapse navbar-collapse" -->
      </div>
		</nav> 


<div class="site-wrapper">
  <div class="site-wrapper-inner">
	  <div class="cover-container">
      <div class="inner cover">
        <h1 id="colorletra">Chibil</h1>
        <p class="lead" id="colorletra">Bienvenido y Bienvenida a Chibil la herramienta web que auxilia a especialistas que tratan a pacientes con epilepsia haciendo uso del dispositivo vestible.</p>
        <img src="SmallLogo.png" alt="Chibil">
         <p class="lead" id="colorletra">¿Por qué Chibil? </p>
        <p class="lead" id="colorletra"> La cultura maya fue una de las mas importantes. Ellos identificaron diferentes padeciemientos aunque los consideraban como un castigo inflijido por los dioses al hombre</p>
        <p class="lead" id="colorletra">Los mayas nombraron a la epilepsia CHIBIL.</p>
        <!--<p class="lead" id="colorletra"> En un intento para dar a conocer la cultura maya, decidimos nombrar chibil a nuestro sistema, combinando así los conocimientos antigüos con las nuevas tecnologías</p> -->
        
<!-- Comienza php-->





      </div>
    </div>
  </div>
</div>


<footer class="footer">
  <div class=" container">
    <p class="text-muted" id="colorletra">TT 2015-B118</p>
  </div>
</footer>
	


</body>
</html>


<?php
 echo "PRUEBA GITHUB";
         
?> <!-- Termina php-->