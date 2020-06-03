<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Usuario</title>
</head>
<body>
    <?php
    //incluir conexión a la base de datos
    include '../../config/conexionBD.php';
    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
    $fecha_ing = isset($_POST["fec_hor_ing"]) ? trim($_POST["fechaNacimiento"]): null;
    //$hora_ing = isset($_POST["fec_hor_ing"]) ? trim($_POST["fechaNacimiento"]): null;
    $fecha_sal = isset($_POST["fec_hor_ing"]) ? trim($_POST["fechaNacimiento"]): null;
    //$hora_sal = isset($_POST["fec_hor_ing"]) ? trim($_POST["fechaNacimiento"]): null;
    $placa = isset($_POST["placa"]) ? trim($_POST["placa"]): null;
    $marca = isset($_POST["marca"]) ? trim($_POST["marca"]): null;
    $modelo = isset($_POST["modelo"]) ? trim($_POST["modelo"]): null;
    $sql = "INSERT INTO ticket VALUES (0, '$fecha_ing', '$fecha_sal')";
    
    $res = $conn->query($sql);
    $id_user=mysqli_insert_id($conn);

    $veh
    if ($res === TRUE) {
        $sqlQ = "INSERT INTO vehiculo VALUES (0, '$placa', '$marca',$modelo)";
        $resS = $conn->query($sqlQ);
   } else {
        if($conn->errno == 1062){
            echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";
        }else{
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
        }
    }

     //cerrar la base de datos
     $conn->close();
     header("Location: ../vista/parqueadero.html");
    
     ?>
</body>
</html>