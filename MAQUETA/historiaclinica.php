<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <TITLE> Historia clínica paciente </TITLE>
</head>
<body>

<form action="nuevopaciente.php" method="get">

 <div id= "bienvenida"> 
 <h1>Chibil</h1>

 <br>
 <br>

 <h1>Historia Clínica </h1>

</div>


<div id="upmenu">
<a href="Bienvenido.php"> Mi página principal </a> &nbsp;&nbsp;&nbsp;

<a href="Consulta.php"> Consulta </a> &nbsp;&nbsp;&nbsp;
<a href="Receta.php"> Receta </a> &nbsp;&nbsp;&nbsp;

</div>






   <form action="historiaclinica.php" method="get">

      <table align="center">

   
  <tr>
    <td> Alergias 
      <input type="text" name= "txtAlergias" placeholder="Escriba las alergias, separadas por coma. EJemplo \n  Penicilina, polvo, perros" required="true"></input></td>
  </tr>


  <tr>
    <tr> <td><b>Antecedentes médicos</b></td></tr>

    <tr> 
     <td> <b>Padre</b> </td>
     <tr><td><input type="checkbox" name= "padre_hipertension" value="Hipertensión"> Hipertensíon</input></td></tr>
     <tr><td><input type="checkbox" name= "padre_diabetes" value="Diabétes" >Diabetes</input></td></tr>
     <td><input type="checkbox"  name= "padre_cáncer"  value="Cáncer"  >Cáncer&nbsp;&nbsp;&nbsp;</input>
     <input type="text" name= "cancertype" placeholder="Escriba qué tipo cáncer"></input></td>
     <tr><td><input type="checkbox" name= "padre_obesidad" value="obesidad"> Obesidad</input></td></tr>
      <tr><td><textarea name= "otros" rows="5" cols="40" placeholder="Otros">Otros Padecimientos</textarea></td></tr>
    </tr>

    <tr>
        <td><b> Madre </b></td>
        <tr><td><input type="checkbox" name= "madre_hipertension" value="Hipertensión"> Hipertensíon</input></td></tr>
        <tr><td><input type="checkbox" name= "madre_diabetes" value="Diabétes" >Diabetes</input></td></tr>
        <td><input type="checkbox" name= "madre_cáncer" value="Cáncer"  >Cáncer&nbsp;&nbsp;&nbsp;</input>
        <input type="text" name= "cancertype" placeholder="Escriba qué tipo cáncer"></input></td>
        <tr><td><input type="checkbox" name= "madre_obesidad" value="obesidad"> Obesidad</input></td></tr>
       <tr><td><textarea name= "otros" rows="5" cols="40" placeholder="Otros">Otros Padecimientos</textarea></td></tr>
    </tr>
    </tr>

  </tr>







 

    <tr>
    <td align="center"><input type="submit" name="botonreg" value="Registrarme" ></input></td>
   </tr>



    </table>
</form>


<div id="footer">



TT- 2015-B118  &nbsp;  &nbsp;
<a href="acercade.html"> Acerca de</a> &nbsp;&nbsp;&nbsp;
</div>





</body>
</html>
