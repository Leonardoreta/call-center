
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    
    <style>
        .row> div {
            text-align: center ;
            margin: 20px 0;
        }
        .dos{background: #ec720d;}
        .tres{background: #000000;}
        .cuatro{background: #96c7d6;}
    </style>
    <title>reportes de llamadas</title>
    
</head>

<body style="background-color:paleturquoise;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><font color="red">REPORTES DE LLAMADAS</font></h1>
           </div>
        </div>
   





<?php
$host="localhost";
$user="root";
$passwd="";
$db="tms";

$con=new mysqli($host, $user, $passwd, $db);


if (mysqli_connect_errno()) {
    printf("ERROR al conectar con la base de datos: %sn", mysqli_connect_error());
    exit();
    }


$misql="select * from estadisticas";


if($res=$con->query($misql)){
    
    echo "<table border='1'>";
    echo "<thead>";
    echo "<th>Fecha</th>";
    echo "<th>Hora Inicio</th>";
    echo "<th>Hora Fin</th>";
    echo "<th>Numeros Telefonicos</th>";
    echo "<th>Estado de Llamadas</th>";
    echo "<th>Estado de Clientes</th>";
    echo "<th>Observaciones</th>";
    echo "</thead>";
  
   while ($row = $res->fetch_row()) {      // crea un array con los datos
    
       
    
    
        echo "<tr>";

        echo "<td>";
        echo "no programado";
        echo "</td>";

        echo "<td>";
        echo "no programado";
        echo "</td>";

        echo "<td>";
        echo "no programado";
        echo "</td>";

        echo "<td>";
        echo $row[0];
        echo "</td>";
        echo "<td>";
        echo $row[1];
        echo "</td>";
        echo "<td>";
        echo $row[2];
        echo "</td>";
        echo "<td>";
        echo $row[3];
        echo "</td>";
        echo "</tr>";
    
  
    
}
$res->close();
$con->close();
}

else {
    echo "la consulta fallo\n";
}
 
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------    

?>

</div>
       
       <script src="Js/jquery-3.5.1.min.js"></script>
       <script src="Js/bootstrap.min.js"></script>
</body>
</html>
