<?php
require_once __DIR__. '/../server.php';
require_once __DIR__ . '/../Models/products.php';
require_once __DIR__ . '/../Models/dogsitem.php';
require_once __DIR__ . '/../Models/catsItem.php';


?>

<div class="container d-flex py-5">
    <div class="row row-cols-4 g-2">
        <?php foreach ($products as $product) { ?>
            <div class="col-4">            
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo $product->image; ?>" class="card-img-top">
                        <h5 class="card-title"><?php echo $product->name; ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $product->brand; ?></h6>
                        <div class="card-text"><?php echo $product->type; ?></div>
                        <div class="card-text"><?php echo $product->species; ?></div>
                        <div class="d-flex justify-content-between">
                            <div class="card-text"><?php echo $product->amount; ?></div>
                            <div class="card-text"><?php echo $product->price; ?></div>
                        </div>
                    </div>
                </div>
            </div>
    <?php } ?>
    </div>
</div>