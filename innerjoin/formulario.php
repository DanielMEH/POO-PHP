<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="usuario.php" method="post">

        <label for="name">Ingrese su nombre</label>
        <input type="text" name="nombre" placeholder="ingrese su nombre">
        <br>

        <label for="lastname">Ingrese su apellido</label>
        <input type="text" name="lastname" placeholder="ingrese su apellido">
        <br>
        <input type="submit" value="enviar datos">
    </form>

    <hr>
    <hr>
    <br>
    <br>
    <br>
    <form action="publicar.php" method="post">

        <label for="name">Ingrese su nombre de publicacion</label>
        <input type="text" name="namete" placeholder="nombre">
        <br>

        <label for="lastname">Ingrese su tema</label>
        <input type="text" name="tema" placeholder="ingrese su tema">
        <br>
        <input type="submit" value="enviar datos">
    </form>


</body>

</html>