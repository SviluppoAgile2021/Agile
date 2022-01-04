<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin page</title>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>


<div class="main-content">

  <div class="table">
    <table class="content-table">
      <thead>
      <tr>
        <th>Nome</th>
        <th>Data Evento</th>
        <th>Capienza</th>
        <th>Prezzo</th>

      </tr>
      </thead>
      <tbody>
      <?php include("../Php/eventiSuggeriti.php"); ?>

      </tbody>
    </table>
  </div>
  </div>
</div>
</body>
</html>


