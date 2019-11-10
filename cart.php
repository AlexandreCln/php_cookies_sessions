<?php

require 'inc/data/products.php';

session_start();

var_dump($_COOKIE);

$articlesId = array_slice($_COOKIE, 2);
var_dump($articlesId);

?>

<?php  ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
<!--        --><?php //if(count($_COOKIE['']) > 0): ?>

            <?php foreach ( $cartArticles as $cookie) { ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <p><?= $cookie['description']; ?></p>
                            </a>
                        </figcaption>
                    </figure>
                </div>
            <?php } ?>

<!--        --><?php //else: ?>
<!--        <h2>Your Cart is empty !</h2>-->
<!--        --><?php //endif; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
