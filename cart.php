<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php if(count($_COOKIE['cookie_id']) > 0): ?>

            <?php foreach ($catalog as $id => $cookie):

                foreach ($_COOKIE['cookie_id'] as $cookie_id):
                    if ($cookie_id == $id): ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <figure class="thumbnail text-center">
                                <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>"
                                     class="img-responsive">
                                <figcaption class="caption">
                                    <h3><?= $cookie['name']; ?></h3>
                                    <p><?= $cookie['description']; ?></p>
                                </figcaption>
                            </figure>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endforeach; ?>

        <?php else: ?>
        <h2>Your Cart is empty !</h2>
        <?php endif; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
