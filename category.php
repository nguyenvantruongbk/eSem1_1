<?php
    require_once("functions/product.php");
    $category_id = $_GET["id"];
    $category = category_detail($category_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("html/styles.php");?>
</head>
<body>
    <?php include_once("html/header.php");?>
    <?php include_once("html/nav.php");?>
    <main class="main">
        <div class="container">
            <h2><?php echo $category["name"];?></h2>
            <div class="row">
           
                <?php foreach($category["products"] as $item):?>
                    <div class="col-xl-3 col-sm-6 col-lg-4">
                    
                    <div class="wsus__product_item">
                        <a href="/detail.php?id=<?php echo $item["id"];?>">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="/detail.php?id=<?php echo $item["id"];?>">
                            <img src="<?php echo $item["thumbnail"] ?>" alt="product" class="img-fluid w-100 img_1" />
                            <img src="<?php echo $item["thumbnail"] ?>" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#"><?php echo $item["category"] ?> </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(120 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="/detail.php?id=<?php echo $item["id"];?>"><?php echo $item["name"] ?></a>
                            <p class="wsus__price">$<?php echo $item["price"] ?> <del>$<?php echo $item["price"] *1.1?>0</del></p>
                            <a class="add_cart" href="/detail.php?id=<?php echo $item["id"];?>">add to cart</a>
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