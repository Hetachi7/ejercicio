<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    @srcf
    <form action="SoldadoModel.php " method="post">
        <label for="cod_s">Cod_s:</label>
    <input type="text" name="cod_s" id="cod_s" required><br>

    <label for="nom_s">Nom_s:</label>
    <input type="text" name="nom_s" id="nom_s" required><br>

    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" id="apellidos" required><br>

    <label for="grados">Grados:</label>
    <input type="text" name="grados" id="grados" required><br>

    <label for="cod_com1">Cod_com1:</label>
    <input type="text" name="cod_ce1" id="cod_com1" required><br>

    <label for="cod_com1">Num_com1:</label>
    <input type="text" name="Num_com1" id="Num_com1" required><br>

    <label for="cod_c2">Cod_c2:</label>
    <input type="text" name="cod_c2" id="cod_c2" required><br>

    <input type="submit" value="Enviar">
    </form>
    
</body>
</html>