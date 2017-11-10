<?php

    include("conexion.php");

    $conexion = conexion("localhost","root","", "escuela_prog_web");

   // var_dump($conexion);

$nc = $_POST["cajaNoControl"];
$Nom = $_POST["cajaNmbreAlumno"];
$pap = $_POST["cajaPrimerAp"];
$sap = $_POST["cajaSegAp"];
$e = $_POST["cajaEdad"];
$se = $_POST["cajaSemestre"];
$car = $_POST["cajaCarrera"];

//Validacion
$validacionDatos = true;
//strlen longitud d euna cadena
if(strlen($nc)<=0){
 //   echo "Faltan datos";
    $validacionDatos = false;
}
//completar validaciones

if($validacionDatos){
    
    //para evitar SQL INJECTION se debe utilizar PREPAREMENT STATEMENTS (declaraciones preparadas)
    
  //INSERT INTO alumnos VALUES('01','x', 'x'....)
$sql = "INSERT INTO alumnos VALUES('$nc','$Nom', '$pap', '$sap', $e, $se, '$car')";
    
    if(mysqli_query($conexion, $sql)){
        echo "Registro agregado CORECTAMENTE!!";
    }else{
       // echo "ERORR!!";  
        echo "Error; " . mysqli_error($conexion);
    }
    
    }else{
        echo "Faltan datos!!!";
}
    
?>














