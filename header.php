<?php include 'data.php'; ?>

<?php
// vérification de l'existance d'un panier
if (!isset($_COOKIE['panier'])) {
  $panier = array ();
}else{
  $panier = unserialize($_COOKIE['panier']);
}

// demande de suppression d'un élément du panier
if (isset($_GET['panier_delete'])) {
  foreach ($panier as $panier_key => $panier_content) {
    if ($_GET['panier_delete']==$panier_content) {
      array_splice($panier, $panier_key, 1);
      setcookie('panier', serialize($panier), time()+365*24*3600);
      header('Location: panier.php');
    }
  }
}

// demande d'ajout d'un élément au panier
if (isset($_GET['panier_add'])  AND !in_array($_GET['panier_add'], $panier)) {
  $panier[] = $_GET['panier_add'];
  setcookie('panier', serialize($panier), time()+365*24*3600);
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0, minimum-scale=1, user-scalable=yes"/>

    <title>Mes légumes frais</title>

    <link rel="icon" type="image/png" href="assets/img/logo.png" />

    <!-- feuilles de style (d'abord bootstrap puis own) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="accueil.php"><img src="assets/img/logo.png" alt="logo pasteque" style="height:30px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="accueil.php">Accueil<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="categories.php">Catégories</a>
          </li>
        </ul>
        <form class="form-inline" action="panier.php">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Panier</button>
        </form>
      </div>
    </nav>
