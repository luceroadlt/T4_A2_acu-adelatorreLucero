<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificarregistros</title>
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>
<body>
    
    <h1>Modificar Alumnos</h1>
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
                printf("<tr> <td> " . $fila['Num_Control']. "</td> " .
                            "<td> ". $fila['Nombre_Alumno'].  "</td> ".
                            "<td> " . $fila['Primer_Ap']. "</td>" .
                            "<td> " . $fila['Segundo_Ap']. "</td>" .
                            "<td> " . $fila['Edad_Alumno']. "</td>" .
                            "<td> " . $fila['Semestre_Alumno']. "</td>" .
                            "<td> " . $fila['Carrera_Alumno']. "</td> </tr>" .
                            "<td> 
                            <a href='../scripts/servidor/procesar_modificacion.php?noCon=%s'>
                            Guardar Cambios </a>" .
                            "<tr>" , $fila['Num_Control'] );
            }
            
        }else{
            echo "Tabla vacia";
        }

        ?>
    
<!--  //  <input type="text" name="caja" >-->

   
    </table>
               
    <hr>
       
          <script src="https://code.jquery.com/jquery-latest.js"></script>

</body>
</html>