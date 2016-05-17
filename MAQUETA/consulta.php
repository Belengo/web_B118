<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <TITLE> Consulta paciente </TITLE>
</head>
<body>

<form action="nuevopaciente.php" method="get">

 <div id= "bienvenida"> 
 <h1>Chibil</h1>

 <br>
 <br>

 <h1>Consulta</h1>

</div>


<div id="upmenu">
<a href="Bienvenido.php"> Mi página principal </a> &nbsp;&nbsp;&nbsp;

<a href="historiaclinica.php"> Historia Clinica </a> &nbsp;&nbsp;&nbsp;
<a href="receta.php"> Receta </a> &nbsp;&nbsp;&nbsp;

</div>






   <form action="consulta.php" method="get">

      <table align="center">

   
  <tr>
    <td> ---Nombre del paciente en consulta--- </td>
    

     <tr><td>Peso&nbsp;&nbsp;<input type="text" name= "txtPeso" placeholder="60.500kg" ></input></td></tr>
  </tr>
   

 <tr>
     <td> Presión arterial&nbsp;&nbsp;<input type="text" name= "txtPresion" placeholder="110/70" ></input></td>
  </tr>

  <tr><td><textarea name= "otros" rows="5" cols="40" placeholder="Otros">Comentarios</textarea></td></tr>

  
 

    <tr>
    <td align="center"><input type="submit" name="botonreg" value="Guardar" ></input></td>
   </tr>



    </table>
</form>


<div id="footer">


TT- 2015-B118  &nbsp;  &nbsp;
<a href="acercade.html"> Acerca de</a> &nbsp;&nbsp;&nbsp;
</div>





</body>
</html>
