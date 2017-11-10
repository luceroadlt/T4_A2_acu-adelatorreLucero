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

    <h2>Altas de Alumnos</h2>

    <form id="form_registro_alumno" name="form_registro_alumno" method="POST" action="../scripts/servidor/procesar_insercion.php">

        <label>No. control: </label> <input type="text" name="cajaNoControl"><br>
        <label>Nombre Alumno: </label> <input type="text" name="cajaNmbreAlumno"><br>
        <label>Primer Apellido: </label> <input type="text" name="cajaPrimerAp"><br>
        <label>Segundo Apellido: </label> <input type="text" name="cajaSegAp"><br>
        <label>Edad: </label> <input type="text" name="cajaEdad"><br>
        <label>Semestre: </label> <input type="text" name="cajaSemestre"><br>
        <label>Carrera: </label> <input type="text" name="cajaCarrera"><br>
        <hr>
        <input type="submit" value="Guardar Registro">

    </form>

    <script src="https://code.jquery.com/jquery-latest.js"></script>
</body>

</html>