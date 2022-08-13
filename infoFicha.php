<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información ficha</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>

<form action="ficha.php" method="post">
    <div clas="mb-3">
        <h5>Nombre completo:<br> </h5><input type="text" name="name"><br>
        <h5>Fecha de nacimiento:<br> </h5><input type="date" name="fechaNac"><br>
        <h5>Género: <br></h5>
            <label for="male">Masculino</label>
            <input type="radio" name="gender" id="male" value="Masculino" checked>
            <label for="female">Femenino</label>
            <input type="radio" name="gender" id="female" value="Femenino"> <br>
        <br>
        <h5>Fecha de cita: <br></h5><input type="date" name="fechaCita"><br>
        <h5>Dirección: <br></h5><input type="text" name="direcc"><br>
        <h5>Foto:<br> </h5><input type="file" id="img" name="img" accept="image/*"><br><br>
        <h5>Dui (Sin guión): <br></h5><input type="number" name="dui"><br>
        <input type="submit" name="submit">
    </div>
</form>
</body>
</html>