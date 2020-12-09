<?php include 'header.php'; ?>

<?php if (!isset($_GET["category"])) {
  $_GET["category"] = "feuille";
}?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCategory" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-md-center" id="navbarCategory">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Légumes-feuilles<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Légumes-tiges</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bulbes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Légumes-fleurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Légumes-racines</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Légumes-fruits</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tubercules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Fines-herbes</a>
      </li>
    </ul>
  </div>
</nav>
<div class="content">

</div>
<?php include 'footer.php'; ?>
