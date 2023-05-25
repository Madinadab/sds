<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/bootstrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/style.css">
  <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <title>form sds</title>

</head>

<body>
  <?php
  include('enregi.php');
  ?>
  <header>
    <div class="mask flex-center nav">
      <div class="row align-items-center">
        <div class=" col-md-8 order-md-1 order-2">
          <blockquote contenteditable="true"><q><span class="ma">UNIVERSITE, JOSEPH KI- ZERBO</span><br>Gestionnaire de l'UFR/SDS</q>
          </blockquote>
        </div>
        <div class="col-md-3 order-md-2 order-1">
          <img src="./img/logo.png" class="mx-auto" alt="slide" width="200" height="200">
        </div>
      </div>
      <!-- <div class="row"> -->
      <div class="col-md-12 col-sm-12 d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="tableau.php"><Button>LISTE</Button></a>
      </div>
      <!-- </div> -->
    </div>
  </header>
  <!-- main -->
  <div class="main-w3layouts wrapper">
    <h1>Fiche d'inscription</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        <form action="" method="post" id="Myform">

          <label for="text">Nom</label>
          <input class="text" type="text" name="nom" placeholder="Nom" required=""><br><br>

          <label for="text">Prenom</label>
          <input class="text" type="text" name="prenom" placeholder="Prenom" required=""><br><br>

          <label for="text">Genre</label>
          <select class="select" name="genre" required>
            <option value="">-- Sélectionnez --</option>
            <option value="masculin">Masculin</option>
            <option value="feminin">Feminin</option>
          </select><br><br>

          <label for="text">Date de naissance</label>
          <input class="text email" type="date" name="date_naissance" placeholder="Date de naissance" required=""><br><br>

          <label for="text">Date d'admistion</label>
          <input class="text" type="date" name="date_admistion" placeholder="Date d'admistion" required=""><br><br>

          <label for="text">Personne en cas de bésoin</label>
          <input class="text w3lpass" type="number" name="personne_prevenir" placeholder="Numero en cas de bésoin" required=""><br>

          <input type="submit" name="submit" value="S'incrire">
        </form>
      </div>
    </div>
    <ul class="colorlib-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>

  <!-- //main -->
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
  <script>
    window.addEventListener('beforeunload', function() {
      var form = document.getElementById('Myform');
      form.reset();
    });
  </script>
  <script src="script/web-animations.min.js"></script>
  <script src="script/jquery3.4.1.min.js"></script>
  <script src="script/popper.js"></script>
  <script src="script/popper/popper.min.js"></script>
  <script src="style/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  <script src="style/bootstrap-5.2.3-dist/js/bootstrap.min.css"></script>
  <script src="script/anime.min.js"></script>
  <script src="script/codepen.js"></script>
  <script src="script/jquery-2.1.0.min.js"></script>
</body>

</html>