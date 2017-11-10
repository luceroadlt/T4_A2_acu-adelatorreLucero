<?php


include("conexion.php");

    $conexion = conexion("localhost", "root", "", "escuela_prog_web");
    
   $buscarNombre = $_POST["cajaAlumno"];

   
$sql = "SELECT * FROM alumnos WHERE Nombre_Alumno LIKE '%$buscarNombre%'";

    if(mysqli_query($conexion, $sql)){
      header("location:../../paginas/buscar_registros.php");
    //   echo "Alumno encontrado" ;
        
    }else{
        //verificar un error de base de datos
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }


   
?>