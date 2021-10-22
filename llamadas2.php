<?php





$Num=$_POST['numeros'];                                // datos obtenido para almacenar en base de datos
$Est_llamada=$_POST['estado_llamada'];                                         // datos obtenido para almacenar en base de datos
$Est_cliente=$_POST['estado_cliente'];                                     // datos obtenido para almacenar en base de datos
$Observ=$_POST['observaciones'];                                        // datos obtenido para almacenar en base de datos





       echo "<br>";
       echo "GUARDADO EN BASE DE DATOS";
       echo "<br>";
       echo $Num;
       echo "<br>";
       echo $Est_llamada;
       echo "<br>";
       echo $Est_cliente;
       echo "<br>";
       echo $Observ;

       

     


      //----------------------------------------ingresar a la base de datos-----------------------------------------------------------------------------------
    
    $host="localhost";
    $user="root";
    $passwd="";
    $db="tms";
    
    $con=new mysqli($host, $user, $passwd, $db);
    
    //-------------------------------------cargar datos en tablas------------------------------------------------------------------------------------
    
            
    $misql="INSERT INTO estadisticas (numeros, est_llamados, est_clientes, observaciones)
    VALUES('$Num','$Est_llamada','$Est_cliente','$Observ')";
    $con->query($misql);
    
    
     //---------------------------------------------------------------------------------------------------------------------------

     header("location: llamadas.php");                             // redireciona a otra pagina
 
?>