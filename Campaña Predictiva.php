
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
    <title>campaña predictiva</title>
    
</head>

<body style="background-color:blueviolet;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><font color="red">CAMPAÑA PREDICTIVA</font></h1>
           </div>
        </div>
   





<?php

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------
//-------------------------------------------------------DATOS DE TABLA ESTADISTICAS----------------------------------------------------------------------------------------------------------
$host="localhost";
$user="root";
$passwd="";
$db="tms";

$con=new mysqli($host, $user, $passwd, $db);


if (mysqli_connect_errno()) {
    printf("ERROR al conectar con la base de datos: %sn", mysqli_connect_error());
    exit();
    }

    $misql="SELECT * from estadisticas";

    if($res=$con->query($misql)){
        
    while ($row = $res->fetch_row()) {      // crea un array con los datos

        $array[] =$row;

    }

    $res->close();
    $con->close();
    }else {
        echo "ERROR AL ACCEDER A LA BASE DE DATOS";
    }

 //-----------------------------------------------------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------



//SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
$host="localhost";
$user="root";
$passwd="";
$db="tms";

$con1=new mysqli($host, $user, $passwd, $db);

if (mysqli_connect_errno()) {
    printf("ERROR al conectar con la base de datos: %sn", mysqli_connect_error());
    exit();
    }

    $misql="select * from campana";


    if($res1=$con1->query($misql)){
        
              //----------------------------------------------------------arma tabla--------------------------------------------------------------------------------
             
    echo "<table border='1'>";
    echo "<thead>";
    echo "<th>TELEFONOS</th>";
    echo "<th>TOTAL</th>";
    echo "<th>GESTIONADOS</th>";
    echo "<th>POR GESTIONAR</th>";
    echo "<th>ACCION</th>";
    echo "</thead>";

    $llamadas1=0;
    $numeros1=-1;
    $estado1="SIN INICIAR";
    
       while ($row1 = $res1->fetch_row()) {      // crea un array con los datos
        $numeros1=$numeros1+1;

     
        for($fila=0; $fila<COUNT($array); $fila++){  
       
        if( $row1[6]==$array[$fila][0]){                 //COMPARA LAS 2 BASES DE DATOS

              $llamadas1=$llamadas1+1;

              $estado1="EN PROCESO";

             }
         
    }  
    
  
}
echo "<tr>";
echo "<td>";
echo "NUMERO 1";
echo "</td>";
echo "<td>";
echo $numeros1;
echo "</td>";
echo "<td>";
echo $llamadas1;
echo "</td>";
echo "<td>";
echo $numeros1-$llamadas1;
echo "</td>";
echo "<td>";
echo $estado1;
echo "</td>";
echo "</tr>";


    $res1->close();
    $con1->close();
    }else {
        echo "ERROR AL ACCEDER A LA BASE DE DATOS";
    }
//SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
//SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
$host="localhost";
$user="root";
$passwd="";
$db="tms";

$con1=new mysqli($host, $user, $passwd, $db);

if (mysqli_connect_errno()) {
    printf("ERROR al conectar con la base de datos: %sn", mysqli_connect_error());
    exit();
    }

    $misql="SELECT* from campana";


    if($res1=$con1->query($misql)){
        
              //----------------------------------------------------------arma tabla--------------------------------------------------------------------------------
             
    echo "<table border='1'>";
    echo "<thead>";
    echo "<th>TELEFONOS</th>";
    echo "<th>TOTAL</th>";
    echo "<th>GESTIONADOS</th>";
    echo "<th>POR GESTIONAR</th>";
    echo "<th>ACCION</th>";
    echo "</thead>";

    $llamadas2=0;
    $numeros2=-1;
    $estado2="SIN INICIAR";
    
       while ($row1 = $res1->fetch_row()) {      // crea un array con los datos
        $numeros2=$numeros2+1;

     
        for($fila=0; $fila<COUNT($array); $fila++){  
       
        if( $row1[7]==$array[$fila][0]){                 //COMPARA LAS 2 BASES DE DATOS

              $llamadas2=$llamadas2+1;

              $estado2="EN PROCESO";

             }
         
    }  
    
  
}
echo "<tr>";
echo "<td>";
echo "NUMERO 2";
echo "</td>";
echo "<td>";
echo $numeros2;
echo "</td>";
echo "<td>";
echo $llamadas2;
echo "</td>";
echo "<td>";
echo $numeros2-$llamadas2;
echo "</td>";
echo "<td>";
echo $estado2;
echo "</td>";
echo "</tr>";


    $res1->close();
    $con1->close();
    }else {
        echo "ERROR AL ACCEDER A LA BASE DE DATOS";
    }
//SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

//SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
$host="localhost";
$user="root";
$passwd="";
$db="tms";

$con1=new mysqli($host, $user, $passwd, $db);

if (mysqli_connect_errno()) {
    printf("ERROR al conectar con la base de datos: %sn", mysqli_connect_error());
    exit();
    }

    $misql="SELECT * from campana";


    if($res1=$con1->query($misql)){
        
              //----------------------------------------------------------arma tabla--------------------------------------------------------------------------------
             
    echo "<table border='1'>";
    echo "<thead>";
    echo "<th>TELEFONOS</th>";
    echo "<th>TOTAL</th>";
    echo "<th>GESTIONADOS</th>";
    echo "<th>POR GESTIONAR</th>";
    echo "<th>ACCION</th>";
    echo "<th>VUELTAS COMPLETAS</th>";
    echo "</thead>";

    $llamadas3=0;
    $numeros3=-1;
    $estado3="SIN INICIAR";

       while ($row1 = $res1->fetch_row()) {      // crea un array con los datos
        $numeros3=$numeros3+1;

     
        for($fila=0; $fila<COUNT($array); $fila++){  
       
        if( $row1[8]==$array[$fila][0]){                 //COMPARA LAS 2 BASES DE DATOS

              $llamadas3=$llamadas3+1;

              $estado3="EN PROCESO";

             }
         
    }  
    
  
}
//----------------------------------------------------------CONTROLA LAS VUELTAS DE LAS LLAMADAS--------------------------------------------------
$vuelta_completa="VUELTA 1";

   if(($llamadas1 >= $numeros1)&&($llamadas2 >= $numeros2)&&($llamadas3 >= $numeros3)){                 
   $vuelta_completa="VUELTA 2"; 
}
   
if(($llamadas1 >= $numeros1*2)&&($llamadas2 >= $numeros2*2)&&($llamadas3 >= $numeros3*2)){                 
    $vuelta_completa="VUELTA 3"; 
 }
    



//---------------------------------------------------------------FIN CONTROL DE VELTAS--------------------------------------------------------------
//     (($llamadas1==$numeros1)&&($llamadas2==$numeros2)&&($llamadas3==$numeros3))
echo "<tr>";
echo "<td>";
echo "NUMERO 3";
echo "</td>";
echo "<td>";
echo $numeros3;
echo "</td>";
echo "<td>";
echo $llamadas3;
echo "</td>";
echo "<td>";
echo $numeros3-$llamadas3;
echo "</td>";
echo "<td>";
echo $estado3;
echo "</td>";
echo "<td>";
echo $vuelta_completa;
echo "</td>";
echo "</tr>";


    $res1->close();
    $con1->close();
    }else {
        echo "ERROR AL ACCEDER A LA BASE DE DATOS";
    }


//SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS


?>

     
        </div>
       
        <script src="Js/jquery-3.5.1.min.js"></script>
        <script src="Js/bootstrap.min.js"></script>
</body>
</html>
