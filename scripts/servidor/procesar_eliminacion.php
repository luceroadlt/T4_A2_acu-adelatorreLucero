<?php

    include("conexion.php");

    $conexion = conexion("localhost", "root", "", "escuela_prog_web");
    
    $noCont = $_GET['noCon'];

    $sql = "DELETE FROM alumnos WHERE Num_control = '$noCont' ";

    if(mysqli_query($conexion, $sql)){
      header("location:../../paginas/eliminar_registros.php");
     //   echo "Eliminacioncorrecta";
        
    }else{
        //verificar un error de base de datos
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

?>