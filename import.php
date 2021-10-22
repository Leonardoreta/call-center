<?php

//----------------------------------------ingresar a la base de datos-----------------------------------------------------------------------------------
    
$host="localhost";
$user="root";
$passwd="";
$db="tms";

$con=new mysqli($host, $user, $passwd, $db);

//-------------------------------------------------control-------------------------------------------------------------------------------------------
if (mysqli_connect_errno()) {
    printf("ERROR al conectar con la base de datos: %sn", mysqli_connect_error());
    exit();
    }
//---------------------------------------------------------------------------------------------------------------------------
$nombre_camp=$_POST['nom_campana'];                                         // datos obtenido para almacenar en base de datos
$cantidad_vuel=$_POST['cant_vueltas'];                                     // datos obtenido para almacenar en base de datos 



//--------------------------------------------------------------control-----------------------------------------------------------------------------------------
if(isset($_POST['import_data'])){
    
    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes)){
  
    $csv_file = fopen($_FILES['file']['tmp_name'], 'r');
    
    
    while(($emp_record = fgetcsv($csv_file)) !== FALSE){
   
        //-------------------------------------cargar datos en tabla campana------------------------------------------------------------------------------------
        $misql="INSERT INTO campana ( DNI, Nombre, Email, Localidad, Provincia, telefono1, telefono2, telefono3)
VALUES(


'".$emp_record[0]."',
'".$emp_record[1]."',
'".$emp_record[2]."',
'".$emp_record[3]."',
'".$emp_record[4]."',
'".$emp_record[5]."',
'".$emp_record[6]."',
'".$emp_record[7]."')";


$con->query($misql);
    
echo"CARGA DE CAMPAÑA EXITOSA ";
echo "<br>";

}

    fclose($csv_file);

      //-------------------------------------cargar datos en tablas configuracion------------------------------------------------------------------------------------

  $misql="INSERT INTO configuracion (NombreCampana, CantidadVueltas)

  VALUES(
  '$nombre_camp',
  ' $cantidad_vuel')";
  
  $con->query($misql);
  
  echo "<br>";
  echo"CARGA DE CONFIGURACION EXITOSA ";
  echo "<br>";
  echo "<br>";  
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------
  
    } else {
        echo"ERROR EN CARGA DE DATOS, ARCHIVO.CSV INVALIDO ";

    }

    }
 
    
?>


