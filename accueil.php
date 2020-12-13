<?php include 'header.php'; ?>

<div class="content mt-3 px-auto d-flex flex-row flex-wrap justify-content-center">
  <?php foreach ($legume as $key_cat => $category) {
    foreach ($category as $key_prod => $product) { ?>
    <div class="card mb-3 mr-3" style="width: 18rem;">
    <img class="card-img-top" src="<?php echo $product["urlImg"]; ?>" alt="Card image cap">
    <div class="card-body d-flex flex-row justify-content-between">
      <h5 class="card-title my-auto"><?php echo $key_prod; ?></h5>
      <span class="d-flex flex-row">
        <h6 class="my-auto mr-3 text-secondary"><?php echo $product["prix"]; ?>€/kg</h6>
        <a href="?panier_add=<?php echo $key_prod; ?>" class="btn btn-success"><img src="assets/img/cart_add.png" alt="ajouter au panier" width=32px></a>
      </span>
    </div>
  </div>
    <?php }
  } ?>
</div>

<?php include 'footer.php'; ?>
