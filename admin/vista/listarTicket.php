<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de usuarios</title>
    <link href="../../../public/vista/CSS/CSSADMINISTRADOR/listar.css" type="text/css"  rel="stylesheet"/>
</head>
<body>
<h1>Listado de Usuarios</h1>
<table >
    <tr>
        <th>Nombre del Cliente</th>
        <th>Fecha Ingreso</th>
        <th>Hora Ingreso</th>
        <th>Fecha Salida</th>
        <th>Hora Salida</th>
        <th>Placa</th>
        <th>Marca</th>
        <th>Modelo</th>
    </tr>
    <header>
    
    <?php
    include '../../config/conexionBD.php';
    $sql = "SELECT c.cli_nombre, t.fec_ing, t.hor_ing, t._fec_sal,t.hor_sal, v.veh_placa, v.veh_marca, v.veh_modelo FROM cliente c,ticket t, vehiculos v WHERE c.cli_cod = v.veh_cli_cod and v.veh_cli_cod = t. tik_veh_cod ";
    $result = $conn->query($sql);
   
    if ($result->num_rows > 0) {
   
       while($row = $result->fetch_assoc()) {
           echo "<tr>";
           echo " <td>" . $row["cli_nombre"] . "</td>";
           echo " <td>" . $row["tik_fec_ing"] . "</td>";
           echo " <td>" . $row['tik_hor_ing'] ."</td>";
           echo " <td>" . $row['tik_fec_sal'] . "</td>";
           echo " <td>" . $row['tik_hor_sal'] . "</td>";
           echo " <td>" . $row["veh_placa"] . "</td>";
           echo " <td>" . $row["veh_marca"] . "</td>";
           echo " <td>" . $row["veh_modelo"] . "</td>";
          }
       }
    $conn->close(); 
     ?>
</body>
</html>