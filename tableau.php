<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/style.css">
  <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <title>Tableau</title>
</head>

<body>
  <header>
    <div class="mask flex-center nav">
      <div class="row align-items-center">
        <div class="col-md-8 order-md-1 order-2">
          <blockquote contenteditable="true"><q>LISTE DES ETUDIANT DE L'UFR/SDS</q>
          </blockquote>
        </div>
        <div class="col-md-3 order-md-2 order-1">
          <img src="./img/logo.png" class="mx-auto" alt="slide" width="200" height="200">
        </div>
      </div>
      <!-- <div class="row"> -->
      <div class="col-md-12 col-sm-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <a href=" index.php"><Button>Inscription</Button></a>
      </div>
      <!-- </div> -->
    </div>
  </header>
  <table class="table table-striped table-bordered pad">
    <thead class="table-dark">
      <tr>
        <th scope="col">N°0</th>
        <th scope="col">NOM</th>
        <th scope="col">PRENOM</th>
        <th scope="col">GENRE</th>
        <th scope="col">DATE DE NAISSANCE</th>
        <th scope="col">DATE D'ADMISTION</th>
        <th scope="col">PERSONNE EN CAS DE BESOIN</th>
      </tr>
    </thead>
    <tbody>

      <?php
      require 'connexionbd.php';
      $query = "SELECT * FROM form";
      $stmt = $conn->query($query);
      while ($row = $stmt->fetch()) {
        // code pour afficher chaque ligne de résultats
        echo "<tr>
      <td>$row[id]</td>
      <td>$row[nom]</td>
      <td>$row[prenom]</td>
      <td>$row[genre]</td>
      <td>$row[date_naissance]</td>
      <td>$row[date_admistion]</td>
      <td>$row[personne_prevenir]</td>
     </tr>";
      }
      ?>
    </tbody>
  </table>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <p>Email: ufrsds@gmail.com</p>
        </div>
        <div class="col-md-3">
          <p>Tel: +226 25 40 00 00</p>
        </div>
        <div class="col-md-4">
          <p>Adresse: Ouagadougou/ Burkina Faso </p>
        </div>
      </div>
      <hr>
      <p>© Copyright Université Joseph Ki Zerbo UFR/SDS 2023</p>
    </div>
  </footer>
</body>

</html>