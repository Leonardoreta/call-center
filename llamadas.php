<!DOCTYPE html>
<html lang="en">
<head>

    <title>llamadas</title>
    
</head>

           
<body style="background-color:olivedrab;">
           <h1><font color="blue"><center>LLAMADAS DEL OPERADOR</font></center></h1>



           <form action="llamadas2.php" method="post">

<label for="nombre">TELEFONO DEL CLIENTE:</label>
 <input class="form-control" type="text"  name="numeros" placeholder="ingrese NUMERO">



<label for="nombre">ESTADO DE LA LLAMADA</label>
<select name="estado_llamada" onchange="salta(this.form)">
<option selected> ---------------
<option value="No conecta">NO CONECTA
<option value="No contesta">NO CONTESTA
<option value="Atendido">ATENDIDO
</select>


<label for="nombre">ESTADO DEL CLIENTE</label>
<select name="estado_cliente" onchange="salta(this.form)">
<option selected> -------------------------
<option value="Rellamar">Rellamar
<option value="Lo va a pensar">Lo va a pensar
<option value="Ya lo llamaron este mes">Ya lo llamaron este mes
<option value="No le interesa">No le interesa
<option value="Mensaje a otro contacto">Mensaje a otro contacto
<option value="Telefono equivocado">Telefono equivocado
<option value="Venta telefonica">Venta telefonica
</select>

<P> </P>


<label for="nombre">OBSERVACIONES:</label>
 <input class="form-control" type="text" size="100" maxlength="100"  name="observaciones" placeholder="ingrese observacion">




<input type="submit" value="GUARDAR DATOS"/>
</form>
<P> </P>

<h1><font color="blue"><center>LISTA DE CLIENTES A LLAMAR</font></center></h1>

<P> </P>









<?php

$host="localhost";
$user="root";
$passwd="";
$db="tms";

$con=new mysqli($host, $user, $passwd, $db);

//--------------------------------------controla coneccion-----------------------------------------------------------------------------------

if (mysqli_connect_errno()) {
    printf("ERROR al conectar con la base de datos: %sn", mysqli_connect_error());
    exit();
    }


//-------------------------------------consulta de tabla 1--------------------------------------------------------------------------------------

$misql="select * from campana";


if($res=$con->query($misql)){
    
    echo "<table border='1'>";

   while ($row = $res->fetch_row()) {      // crea un array con los datos
    
        echo "<tr>";
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
        echo $row[6];
        echo "</td>";
        echo "<td>";
        echo $row[7];
        echo "</td>";
        echo "<td>";
        echo $row[8];
        echo "</td>";
        echo "</tr>";
     
}
$res->close();
$con->close();

}

else {
    echo "la consulta fallo\n";
}

//----------------------------------------------------------------------------------------------------------------------------------------------------------












//-------------------------------------consulta de tabla 2--------------------------------------------------------------------------------------

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
        
        
    //-----------------------------------------------------------------------------------------------------------------------------------------------------
    $Atendidos=0;
    $no_contesta=0;
    $no_conec=0;
    $cant_llamadas=0;

    while ($row = $res->fetch_row()) {      // crea un array con los datos

    if( $row[1]=='Atendido'){                 // comparar la base de datos con variable obtenidas submit
     $Atendidos=$Atendidos+1;
    }

    if( $row[1]=='No contesta'){                 // comparar la base de datos con variable obtenidas submit
        $no_contesta=$no_contesta+1;
       }

       if( $row[1]=='No conecta'){                 // comparar la base de datos con variable obtenidas submit
        $no_conec=$no_conec+1;
       }

    }
      
    $cant_llamadas= $Atendidos+ $no_contesta+ $no_conec;
     
        //----------------------------------------------------------arma tabla--------------------------------------------------------------------------------
        echo "<table border='1'>";
        echo "<thead>";
        echo "<th>Cantidad de llamados</th>";
        echo "<th>Atendidos</th>";
        echo "<th>No Contesta</th>";
        echo "<th>No Conecta</th>";
        echo "</thead>";

//------------------------------------------------------------------carga tabla------------------------------------------------------------------------------
        echo "<tr>";
        echo "<td>";
        echo $cant_llamadas;
        echo "</td>";
        echo "<td>";
        echo $Atendidos;
        echo "</td>";
        echo "<td>";
        echo  $no_contesta;
        echo "</td>";
        echo "<td>";
        echo $no_conec;
        echo "</td>";
        echo "</tr>";
    
//-----------------------------------------------------------------------------------------------------------------------------------------------------------
    $res->close();
    $con->close();
    }else {
        echo "ERROR AL ACCEDER A LA BASE DE DATOS";
    }

//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------    

?>


</body>
</html>
