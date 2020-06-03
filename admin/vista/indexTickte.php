<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Gestión de usuarios</title>
 <link href="../../public/vista/CSS/indexTicket.css" type="text/css"  rel="stylesheet"/>
 <script  type="text/javascript" src="../vista/JavaScript/validacion.js"></script>
</head>
<body>
    <header>
        <div class="prin">
        <a href = "../publi/vista/imagenes/parqueadero.html"><img id = "log" src= "../../public/vista/imagenes/logo.png"/></a>
            <input  type="text" id="buscar" name="buscar" size="40"   onkeyup="return busquedaTelefono()" placeholder="Buscar cedula ....." /> 
            
        </div>     
    </header>

    <section id="Btlf">
        <h1>Busqueda de cedula</h1>
            
        <div id="informacion">
        <p>Aun no ah buscado nada......</p>
        </div>
    </section>
    <section id="tlf">
        <h1>vehiculo</h1>
            <table style="width:100%">
            <tr>
                
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
            </tr>

        <?php
            include '../../config/conexionBD.php';
            $id= $_GET["id"];
            $sql = "SELECT * FROM vehiculos WHERE veh_cli_cod='$id' ";
            $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo " <td>" . $row['veh_placa'] . "</td>";
                echo " <td>" . $row['veh_marca'] ."</td>";
                echo " <td>" . $row['veh_modelo'] . "</td>";
                //echo " <td> <a href='eliminarTel.php?codigo=" . $row['tel_cod'] . "'>Eliminar</a> </td>";
                //echo " <td> <a href='modificarTel.php?codigo=" . $row['tel_cod'] . "'>Modificar</a> </td>";  
                echo "</tr>";
            }
            }
            else{
                echo "<p>No tienes Vehiculos</p>";
            }
        $conn->close();
        ?>
        </table>
    </section>

    
</body>
</html>