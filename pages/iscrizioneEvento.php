<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crea un evento</title>
</head>
<body>
    <h1> Iscriviti ad un evento </h1>
    <form action="../Php/iscriviEventoController.php" method="post">
          <label for="fname">Nome dell'evento :</label><br>
            <label for="evento">Evento :</label><br>
            <select name="evento" id="evento" required>
                <?php include("../Php/stampaEventi.php"); ?>
            </select>
            <br>
            <input type="submit" value="Iscriviti">

    </form>
</body>
</html>