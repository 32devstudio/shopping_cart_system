<?php include 'header.php'; ?>
<div class="content mt-3 px-auto d-flex flex-row flex-wrap justify-content-center">
  <!-- <?php foreach ($categories as $category) {
    foreach ($products as $product) { ?>

      <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="<?php echo $product["lien"]; ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $product["nom"]; ?></h5>
        <a href="#" class="btn btn-primary"><img src="assets/img//cart_add.png" alt="ajouter au panier"></a>
      </div>
    </div>

    <?php }
  } ?> -->

  <?php for ($i=0; $i < 15; $i++) { ?>
    <div class="card mb-3 mr-3" style="width: 18rem;">
    <img class="card-img-top" src="assets/img/ail.jpg" alt="Card image cap">
    <div class="card-body d-flex flex-row justify-content-between">
      <h5 class="card-title my-auto">Ail</h5>
      <span class="d-flex flex-row">
        <h6 class="my-auto mr-3 text-secondary">1.99€/kg</h6>
        <a href="#" class="btn btn-success"><img src="assets/img//cart_add.png" alt="ajouter au panier" width=32px></a>
      </span>
    </div>
  </div>
  <?php } ?>
</div>
<?php include 'footer.php'; ?>
