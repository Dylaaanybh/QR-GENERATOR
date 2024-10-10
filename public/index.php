<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qr-Generator</title>
</head>
<body>
    <h1>Generador de codigo qr</h1>
    <form action="generate.php" method="post">
        <p>
            <input type="text" name="data" placeholder="Contenido de calidad">
        </p>
        <p>
            <input type="text" name="label" placeholder="Etiqueta del código qr">
        </p>
        <p>
            <input type="text" name="imgname" placeholder="Nombre de la imagen">
        </p>
        <p>
            <input type="submit" value="Crear">
        </p>

    </form>
</body>
</html>