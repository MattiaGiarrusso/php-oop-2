<?php
require_once __DIR__. '/../server.php';
require_once __DIR__ . '/../Models/products.php';
require_once __DIR__ . '/../Models/foods.php';
require_once __DIR__ . '/../Models/gadgets.php';
require_once __DIR__ . '/../Models/kennels.php';
require_once __DIR__ . '/../Models/specie.php';
include_once __DIR__.'/../Models/services.php';
include_once __DIR__.'/../Models/toileting.php';


?>

<div class="container d-flex py-5">
    <div class="row row-cols-3 g-2">
        <?php foreach ($products as $product) { ?>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo $product->image; ?>" class="card-img-top">
                        <h5 class="card-title">Prodotto: <?php echo $product->name; ?></h5>
                        <?php if (property_exists($product, 'quantities')) { ?>
                            <h6 class="card-subtite">Quantità disponibili: <?php echo $product->getQuantities(); ?></h6>
                        <?php } ?>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Marca: <?php echo $product->brand; ?></h6>
                        <div class="card-text">Tipo di prodotto: <?php echo $product->type; ?></div>
                        <div class="card-text">Specie: <?php echo $product->specie->animal; ?></div>
                        <div class="d-flex justify-content-between">
                            <div class="card-text">Prezzo: <?php echo $product->price; ?></div>
                        </div>
                    </div>
                </div>
            </div>
    <?php } ?>
    <?php foreach ($services as $service) { ?>
    <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Servizio: <?php echo $service->name; ?></h5>
                        <?php if (property_exists($service, 'quantities')) { ?>
                            <h6 class="card-subtite">Posti disponibili: <?php echo $service->getQuantities(); ?></h6>
                        <?php } ?>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Tipo di servizio: <?php echo $service->type; ?></h6>
                        <div class="d-flex justify-content-between">
                            <div class="card-text">Prezzo: <?php echo $service->price; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>