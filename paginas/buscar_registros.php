<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Agregar Alumno</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
<?php

    function conexion(){
 
//Variable que contendrá el resultado de la búsqueda
$texto = '';
//Variable que contendrá el número de resgistros encontrados
$registros = '';

if($_POST){
	
  $busqueda = trim($_POST['cajaAlumno']);

  $entero = 0;
  
  if (empty($busqueda)){
	  $texto = 'Búsqueda sin resultados';
  }else{
	  // Si hay información para buscar, abrimos la conexión
	  conexion();
      mysql_set_charset('utf8');  // mostramos la información en utf-8
	  
	  //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
    
	  $sql = "SELECT * FROM alumnos WHERE Nombre_Alumno LIKE '%" .$busqueda. "%'";
	  
	  $resultado = mysql_query($sql); //Ejecución de la consulta
      //Si hay resultados...
	  if (mysql_num_rows($resultado) > 0){ 
	     // Se recoge el número de resultados
		 $registros = '<p>HEMOS ENCONTRADO ' . mysql_num_rows($resultado) . ' registros </p>';
	     // Se almacenan las cadenas de resultado
		 while($fila = mysql_fetch_assoc($resultado)){ 
              $texto .= $fila['Nombre_Alumno'] . '<br />';
			 }
	  
	  }else{
			   $texto = "NO HAY RESULTADOS EN LA BBDD";	
	  }
	  // Cerramos la conexión (por seguridad, no dejar conexiones abiertas)
	  mysql_close($conexion);
  }
}
             }

    
    ?>



<h3>Buscar Alumno</h3>
    <hr>

    <form method="POST">
        <br>
        <label> Ingresa nombre alumno:</label> <input type="text" id="cajaAlumno" name="cajaAlumno">
        <br><br>
        <hr>
        
        
        <input type="submit" class="btn btn-primary" value="buscar" onclick="funcion();">
         <script>
                function funcion() {
                    alert("<?php echo conexion(); ?>");

                }
            </script>

        
    <hr>
<!--    CSS y jquery-->
    <table>
      <tr><th>No Control</th><th>Nombre Alumno</th><th>Primer Apellido</th><th>Segundo Apellido</th><th>Edad</th><th>Semestre</th><th>Carrera</th></tr>
       
       <?php
            include("../scripts/servidor/conexion.php");
            $conexion = conexion("localhost", "root", "", "escuela_prog_web");
        
            $sql = "SELECT * FROM alumnos";
        $resultado = mysqli_query($conexion, $sql);
        
        //verificar que no este vacia la tabla
        if(mysqli_num_rows($resultado) > 0){
            while( $fila= mysqli_fetch_assoc($resultado)){
                printf("<tr> <td> " . $fila['Num_Control']. "</td>" .
                            "<td> " . $fila['Nombre_Alumno']. "</td>" .
                            "<td> " . $fila['Primer_Ap']. "</td>" .
                            "<td> " . $fila['Segundo_Ap']. "</td>" .
                            "<td> " . $fila['Edad_Alumno']. "</td>" .
                            "<td> " . $fila['Semestre_Alumno']. "</td>" .
                            "<td> " . $fila['Carrera_Alumno']. "</td> </tr>" .
                            "<td> 
                            <a href='../scripts/servidor/procesar_busqueda.php?buscarNombre=%s'>  </a>" .
                            "<tr>" , $fila['Nombre_Alumno'] );
            }
            
        }else{
            echo "Tabla vacia";
        }

        ?>


   
    </table>
               
    <hr>
        
        
        </form>
  
    <script src="https://code.jquery.com/jquery-latest.js"></script>
</body>

</html>