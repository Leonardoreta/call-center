

<!DOCTYPE html>
<html lang="en">
<head>

    <title>cargar datos</title>
    
</head>

           
           <body style="background-color:orange;">
           <h1><font color="blue"><center>CARGA DE DATOS DE CAMPAÑA</font></center></h1>

           <form action="import.php" method="post" enctype="multipart/form-data" id="import_form">
<input type="file" name="file" />
<br>
<br>
<input class="form-control" type="text"  name="nom_campana" placeholder="NOMBRE DE CAMPAÑA">
<br>
<br>
<input class="form-control" type="text"  name="cant_vueltas" placeholder="CANTIDAD DE VUELTAS">

<br>
<br>

<input type="submit" name="import_data" value="Subir Archivo">


</body>
</html>


