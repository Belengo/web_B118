//Verificar que no está vacío

/* if ( ! empty ($_POST) ) {

 	echo "FORMULARIO RECIBIDO: <br/>";

 }*/


 			//Formulario Especialista


   		// Nombre
             if( empty($_POST['txtNombreP']) )
                $aErrores[] = "Debe especificar el nombre";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
                 if( preg_match($patron_texto, $_POST['txtNombreP']) )
                    $aMensajes[] = "Nombre: [".$_POST['txtNombreP']."]";
                else
                    $aErrores[] = "El nombre sólo puede contener letras y espacios";
            }




            // ApellidoPa:
            if( empty($_POST['txtApPaternoP']) )
                $aErrores[] = "Debe especificar Apellido Paterno";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
                if( preg_match($patron_texto, $_POST['txtApPaternoP']) )
                    $aMensajes[] = "ApellidoPa: [".$_POST['txtApPaternoP']."]";
                else
                    $aErrores[] = "Los apellidos sólo pueden contener letras y espacios";
            }



             // ApellidoMa:
            if( empty($_POST['txtApMaternoP']) )
                $aErrores[] = "Debe especificar Apellido Materno";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
                if( preg_match($patron_texto, $_POST['txtApMaternoP']) )
                    $aMensajes[] = "ApellidoMa: [".$_POST['txtApMaternoP']."]";
                else
                    $aErrores[] = "Los apellidos sólo pueden contener letras y espacios";
            }
  

           
          // $especialista = ParseCloud::run("registraREspecialista",[ $_POST['txtNombre'], "edad", "direccion especialista"]