<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $name= $_POST['name'];
    $fechaNac = $_POST['fechaNac'];
    $gender=$_POST['gender'];
    $fechaCita=$_POST['fechaCita'];
    $direcc=$_POST['direcc'];
    $img=$_POST['img'];
    $dui=$_POST['dui'];
    
}
?>
    <h2>Mostrar datos enviados</h2>
        <table class="table table-dark">
            <tr>
                <th>Nombre completo</th>
                <th>Fecha de nacimiento</th>
                <th>Género</th>
                <th>Fecha de cita</th>
                <th>Dirección</th>
                <th>Foto</th>
                <th>DUI</th>
            </tr>
            <tr>
                <td><?php if(isset($name))  echo $name ; ?></td>
                <td><?php if(isset($fechaNac))  echo $fechaNac ; ?></td>
                <td><?php if(isset($gender))  echo $gender ; ?></td>
                <td><?php if(isset($fechaCita))  echo $fechaCita ; ?></td>
                <td><?php if(isset($direcc))  echo $direcc ; ?></td>
                <td><?php if(isset($img))  echo $img; ?></td>
                <td><?php if(isset($dui))  echo $dui ; ?></td>
            </tr>
        </table>




</body>
</html>

