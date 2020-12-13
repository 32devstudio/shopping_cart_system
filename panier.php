<?php include 'header.php'; ?>

<?php $panier_price = 0.0  ;?>

<div class="content">
  <!-- message si aucun article selectionné -->
  <?php if (count(unserialize($_COOKIE['panier']))==0) {?>
    <div class="alert alert-success alert-dismissible fade show mx-3 my-3" role="alert">
      <strong>Aucun article sélectionné !</strong> Vous pouvez parcourir nos articles <a href="accueil.php">ici</a>.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php } ?>

  <!-- articles dans le panier -->
  <div class="content mt-3 px-auto d-flex flex-row flex-wrap justify-content-center">
    <?php foreach ($legume as $key_cat => $category) {
      foreach ($category as $key_prod => $product) {
        foreach (unserialize($_COOKIE['panier']) as $key_cookie => $cookie_prod) {
          if ($key_prod == $cookie_prod) {?>
            <div class="card mb-3 mr-3" style="width: 18rem;">
              <img class="card-img-top" src="<?php echo $product["urlImg"]; ?>" alt="Card image cap">
              <div class="card-body d-flex flex-row justify-content-between">
                <h5 class="card-title my-auto"><?php echo $key_prod; ?></h5>
                <span class="d-flex flex-row">
                  <h6 class="my-auto mr-3 text-secondary"><?php echo $product["prix"]; ?>€/kg</h6>
                  <a href="?panier_delete=<?php echo $key_prod; ?>" class="btn btn-danger"><img src="assets/img/cart_delete.png" alt="ajouter au panier" width=32px></a>
                </span>
              </div>
            </div>
    <?php $panier_price += $product["prix"];
          }
        }
      }
    }?>

    <!-- Coût total du panier -->
    <div class="w-100 d-flex justify-content-center">
      <button type="button" class="btn btn-success">
        TOTAL <span class="badge badge-light"><?php echo $panier_price; ?>€</span>
      </button>
    </div>
  </div>

</div>

<?php include 'footer.php'; ?>
