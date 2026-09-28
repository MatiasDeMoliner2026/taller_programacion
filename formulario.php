<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index2.php" method="GET">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <br>

        <label for="Literatura">Asignatura</label>
        <select id="asignatura" name="asignatura">
        <option value="Ingles">Ingles</option>
        <option value="Matematica">Matematica</option>
        <option value="Ciencias">Ciencias</option>
        <option value="Lenguaje">Lenguaje</option>
    </select>
<br><br>

<label for="opcion-1">
    <input type="checkbox" value="manzana" id="opcion-1" name="frutas"> Manzana </label>

    <br><br><br>

    <button type="submit">Enviar</button>


    </form>

</body>
</html>