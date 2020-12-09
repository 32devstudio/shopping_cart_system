<?php include 'header.php'; ?>

<?php if (!isset($_GET["category"])) {
  $_GET["category"] = "légumes-feuilles";
}?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCategory" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-md-center" id="navbarCategory">
    <ul class="navbar-nav">
      <?php foreach ($legume as $key => $category) { ?>
        <li class="nav-item <?php if ($_GET["category"]==$key) { echo "active"; } ?>">
          <a class="nav-link" href="?category=<?php echo $key ?>"><?php echo $key ?><?php if ($_GET["category"]==$key) { echo "<span class='sr-only'>(current)</span>"; } ?></a>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>
<div class="content">
  <div class="content mt-3 px-auto d-flex flex-row flex-wrap justify-content-center">
    <?php foreach ($legume[$_GET["category"]] as $key_prod => $product) { ?>
      <div class="card mb-3 mr-3" style="width: 18rem;">
      <img class="card-img-top" src="<?php echo $product["urlImg"]; ?>" alt="Card image cap">
      <div class="card-body d-flex flex-row justify-content-between">
        <h5 class="card-title my-auto"><?php echo $key_prod; ?></h5>
        <span class="d-flex flex-row">
          <h6 class="my-auto mr-3 text-secondary"><?php echo $product["prix"]; ?>€/kg</h6>
          <a href="#" class="btn btn-success"><img src="assets/img//cart_add.png" alt="ajouter au panier" width=32px></a>
        </span>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

<?php include 'footer.php'; ?>
