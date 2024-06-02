<?php
   require_once("functions/product.php");
   //require("functions/product.php");
    $newest_products = newest_products();
    $best_sellers = best_sellers();
    $hot_items = hot_items();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

    <title>LedStore || Ledstore online</title>


    <?php include_once("html/styles.php");?>
</head>
<body>
    <?php include_once("html/header.php");?>
    <?php include_once("html/nav.php");?>
    <?php include_once("html/banner.php");?>
    <?php include_once("html/bannerSlider.php");?>
    
    <main class="main">
        <div class="container">
            <h2>Newest products</h2>
            <div class="row">
                <?php foreach($newest_products as $item):?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <a href="/detail.php?id=<?php echo $item["id"];?>">
                            <img src="<?php echo $item["thumbnail"] ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item["name"] ?></h5>
                                <p class="card-text"><?php echo $item["description"] ?></p>
                                <p class="text-danger"><?php echo $item["price"] ?></p>
                                <a href="/detail.php?id=<?php echo $item["id"];?>" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>    
            </div>
        </div>
        <?php include_once("html/largeBanner.php");?>
        <div class="container">
            <h2>Best sellers</h2>
            <div class="row">
                <?php foreach($best_sellers as $item):?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <a href="/detail.php?id=<?php echo $item["id"];?>">
                            <img src="<?php echo $item["thumbnail"] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item["name"] ?></h5>
                                <p class="card-text"><?php echo $item["description"] ?></p>
                                <p class="text-danger"><?php echo $item["price"] ?></p>
                                <a href="/detail.php?id=<?php echo $item["id"];?>" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>    
            </div>
        </div>
        <?php include_once("html/singleBanner.php");?>
        <div class="container">
            <h2>Hot items</h2>
            <div class="row">
                <?php foreach($hot_items as $item):?>
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <a href="/detail.php?id=<?php echo $item["id"];?>">
                            <img src="<?php echo $item["thumbnail"] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item["name"] ?></h5>
                                <p class="card-text"><?php echo $item["description"] ?></p>
                                <p class="text-danger"><?php echo $item["price"] ?></p>
                                <a href="/detail.php?id=<?php echo $item["id"];?>" class="btn btn-primary">Add to cart</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>    
            </div>
        </div>
    </main>
    <?php include_once("html/footer.php");?>
</body>
</html>