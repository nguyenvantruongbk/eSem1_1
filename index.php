<?php
   require_once("functions/m_product.php");
   
    $newest_products = newest_products();
    $best_sellers = best_sellers();
    $hot_items = hot_items();
    $news = recent_blogs();


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
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>Newest products</h3>
                        <a class="see_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach($newest_products as $item):?>
                    <div class="col-xl-3 col-sm-6 col-lg-4">                                                  
                            <div class="wsus__product_item">
                                <a href="/detail.php?id=<?php echo $item["id"];?>">
                                <span  <?php if($item["price_origin"]==$item["price"]) echo 'style="display: none;"' ?>  class="wsus__minus">-<?php echo round(100*($item["price_origin"]-$item["price"])/$item["price_origin"]);?>%</span>
                                <a class="wsus__pro_link" href="/detail.php?id=<?php echo $item["id"];?>">
                                    <img src="<?php echo $item["thumbnail"] ?>" alt="product" class="img-fluid w-100 img_1" />
                                    <img src="<?php echo $item["thumbnail"] ?>" alt="product" class="img-fluid w-100 img_2" />
                                </a>
                                <ul class="wsus__single_pro_icon">
                                    
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    
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
                                    <p class="wsus__price">$<?php echo $item["price"] ?> <del>$<?php echo $item["price_origin"]?>0</del></p>
                                    <a class="add_cart" href="/detail.php?id=<?php echo $item["id"];?>">add to cart</a>
                                </div>
                            </div>
                        </div>
                <?php endforeach;?>    
            </div>
        </div>
        <?php include_once("html/largeBanner.php");?>
        <div class="container">

            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>Best sellers</h3>
                        <a class="see_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach($best_sellers as $item):?>
                    <div class="col-xl-3 col-sm-6 col-lg-4">                                                  
                            <div class="wsus__product_item">
                                <a href="/detail.php?id=<?php echo $item["id"];?>">
                                <span  <?php if($item["price_origin"]==$item["price"]) echo 'style="display: none;"' ?>  class="wsus__minus">-<?php echo round(100*($item["price_origin"]-$item["price"])/$item["price_origin"]);?>%</span>
                                <a class="wsus__pro_link" href="/detail.php?id=<?php echo $item["id"];?>">
                                    <img src="<?php echo $item["thumbnail"] ?>" alt="product" class="img-fluid w-100 img_1" />
                                    <img src="<?php echo $item["thumbnail"] ?>" alt="product" class="img-fluid w-100 img_2" />
                                </a>
                                <ul class="wsus__single_pro_icon">
                                    
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    
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
                                    <p class="wsus__price">$<?php echo $item["price"] ?> <del>$<?php echo $item["price_origin"]?>0</del></p>
                                    <a class="add_cart" href="/detail.php?id=<?php echo $item["id"];?>">add to cart</a>
                                </div>
                            </div>
                        </div>
                <?php endforeach;?>    
            </div>
        </div>
        <?php include_once("html/singleBanner.php");?>
        <div class="container">

            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>Hot items</h3>
                        <a class="see_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
   
                <!-- <div></div> -->
                <!-- <div class="row flash_sell_slider"> -->
                
                    <?php foreach($hot_items as $item):?>
                         <!-- <div></div> -->
                        <div class="col-xl-3 col-sm-6 col-lg-4">                                                  
                            <div class="wsus__product_item">
                                <a href="/detail.php?id=<?php echo $item["id"];?>">
                                <span  <?php if($item["price_origin"]==$item["price"]) echo 'style="display: none;"' ?>  class="wsus__minus">-<?php echo round(100*($item["price_origin"]-$item["price"])/$item["price_origin"]);?>%</span>
                                <a class="wsus__pro_link" href="/detail.php?id=<?php echo $item["id"];?>">
                                    <img src="<?php echo $item["thumbnail"] ?>" alt="product" class="img-fluid w-100 img_1" />
                                    <img src="<?php echo $item["thumbnail"] ?>" alt="product" class="img-fluid w-100 img_2" />
                                </a>
                                <ul class="wsus__single_pro_icon">
                                    
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                   
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
                                    <p class="wsus__price">$<?php echo $item["price"] ?> <del>$<?php echo $item["price_origin"]?>0</del></p>
                                    <a class="add_cart" href="/detail.php?id=<?php echo $item["id"];?>">add to cart</a>
                                </div>
                            </div>
                        </div>
                         <!-- <div></div> -->

                    <?php endforeach;?> 
                <!-- </div> -->
                <!-- <div></div> -->
              
                


            </div>
            <?php include_once("html/serviceBanner.php");?>
            <?php include_once("html/blog_homePage.php");?>
        </div>
    </main>
    <?php include_once("html/footer.php");?>
    <?php include_once("html/js.php");?> 
</body>
</html>