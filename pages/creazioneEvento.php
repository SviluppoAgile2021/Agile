<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crea un evento</title>
</head>
<body>
    <form action="../Php/creaEventoController.php" method="post">
          <label for="fname">Nome dell'evento :</label><br>
          <input type="text" id="fname" name="nomeEvento" required><br>
            <br>
            <label for="luogo">Luogo dell'evento :</label><br>
            <select name="luogo" id="luogo" required>
                <?php include("../Php/stampaLuoghi.php"); ?>
            </select>
            <br>
            <label for="lname">Data :</label><br>
            <input type="date" id="lname" name="data" required><br>

            <label for="capienza">Capienza :</label><br>
            <input type="number" id="capienza" name="capienza" required><br>

            <label for="prezzo">Prezzo entrata (€) :</label><br>
            <input type="number" id="prezzo" name="prezzo" required><br>

            <label for="formale">E' un evento formale? :</label><br>
            <select name="formale" id="formale" required>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
            <br>
            <label for="offerta">E' in offerta? :</label><br>
            <select name="offerta" id="offerta" required>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
            <br>
            <label for="genere">Genere dell'evento :</label><br>
            <select name="genere" id="genere" required>
                <?php include("../Php/stampaGeneri.php"); ?>
            </select>

            <select class="country-select"  name="admin3" id="admin3" required>
                <?php include("../Php/stampaUtenti.php"); ?>
            </select>

            <br>
            <br>
            <input type="submit" value="Invia">

    </form>
</body>
</html>