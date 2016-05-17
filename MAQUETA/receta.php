<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <TITLE> Receta </TITLE>
</head>
<body>

<form action="nuevopaciente.php" method="get">

 <div id= "bienvenida"> 
 <h1>Chibil</h1>

 <br>
 <br>

 <h1>Receta</h1>

</div>


<div id="upmenu">
<a href="Bienvenido.php"> Mi página principal </a> &nbsp;&nbsp;&nbsp;
<a href="historiaclinica.php"> Historia Clinica </a> &nbsp;&nbsp;&nbsp;
<a href="nuevopaciente.php"> Pagina Principal del paciente </a> &nbsp;&nbsp;&nbsp;

</div>




<div >

   <form action="receta.php" method="get">

      <table align="left">

   
  <tr>
    <td> ---Nombre del paciente --- </td>
  </tr>
    
 <tr>
     <td>  Medicamento: 
     <select name="medicamento">
    <option value="carbamazepina">Carbamazepina</option>
    <option value="Crisomet">Crisomet</option>
    <option value="fagodol">Fagodol</option>
    <option value="Aciryl">Aciryl</option>
  </select>

</td>
  </tr>

  <tr>
     <td>  Dosis: 
     <select name="medicamento">
    <option value="1">1 pastilla</option>
    <option value="2">2 pastillas</option>
    <option value="120mg">120mg</option>
    <option value="300mg">300mg</option>
  </select>

</td>
  </tr>


<tr>
     <td>  Cada: 
     <select name="medicamento">
    <option value="24">24hrs</option>
    <option value="12">12hrs</option>
    <option value="8">8hrs</option>
    <option value="6">6hrs</option>
  </select>

</td>
  </tr>


  <tr>
     <td>  Duración: 
     <select name="medicamento">
    <option value="10">10 días</option>
    <option value="30">1 mes</option>
    <option value="60">2 meses</option>
    <option value="6ms">A6 meses</option>
  </select>

</td>
  </tr>

</div>


<div >

   <form action="receta.php" method="get">

      <table align="right">

   
  <tr>
    <td> ---Nombre del paciente --- </td>
  </tr>
    
 <tr>
     <td>  Medicamento: 
    <select name="medicamento">
    <option value="carbamazepina">Carbamazepina</option>
    <option value="Crisomet">Crisomet</option>
    <option value="fagodol">Fagodol</option>
    <option value="Aciryl">Aciryl</option>
  </select>

</td>
  </tr>

 <tr>
     <td>Dosis&nbsp;&nbsp;<input type="text" name= "txtDosis" placeholder="Dosis" ></input></td>
  </tr>

<tr>
     <td>Cada:&nbsp;&nbsp;<input type="text" name= "txtPeriodo" placeholder="Periodo" ></input></td>
  </tr>


  <tr>
     <td>Durante:&nbsp;&nbsp;<input type="text" name= "txtPDuracion" placeholder="Durante" ></input></td>
  </tr>

</div>




  
 

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