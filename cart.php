<?php session_start();
    require_once("functions/m_cart.php");
    $cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
    $products = get_cart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product["name"];?></title>
    <?php include_once("html/styles.php");?>
</head>
<body>
<?php include_once("html/header.php");?>
    <?php include_once("html/nav.php");?>
    <main class="main">
    <!--============================
        BREADCRUMB START
    ==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Cart View</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Cart</a></li>
                            <!-- <li><a href="#"><?php echo $blog["title"];?></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BREADCRUMB END
    ==============================-->
<!--============================
        CART VIEW PAGE START
    ==============================-->
    <section id="wsus__cart_view">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="wsus__cart_list">
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr class="d-flex">
                                        <th class="wsus__pro_img">
                                            product item
                                        </th>

                                        <th class="wsus__pro_name">
                                            product details
                                        </th>

                                        <th class="wsus__pro_status">
                                            status
                                        </th>

                                        <th class="wsus__pro_select">
                                            quantity
                                        </th>
                                        

                                        <th class="wsus__pro_tk">
                                            price
                                        </th>

                                        <th class="wsus__pro_icon">
                                            <a href="#" class="common_btn">clear cart</a>
                                        </th>
                                    </tr>
                                    <?php $totalCard=0;?>
                                    <?php foreach($products as $item):?>
                                    <tr class="d-flex">
                                        <td class="wsus__pro_img">
                                            <a href="/detail.php?id=<?php echo $item["id"];?>">
                                            <img href="/detail.php?id=<?php echo $item["id"];?>" src="<?php echo $item["thumbnail"] ?>" alt="product"
                                                class="img-fluid w-100">
                                        </td>

                                        <td class="wsus__pro_name">
                                           
                                            <p> 
                                            <a href="/detail.php?id=<?php echo $item["id"];?>"><?php echo $item["name"] ?>
                                            <span>Model:<?php echo $item["model"] ?></span>
                                            <span>Brand:<?php echo $item["brand"] ?></span>
                                        
                                        </p>
                                            
                                        </td>

                                        <td class="wsus__pro_status">
                                            <p>in stock</p>
                                        </td>
                                      
                                        <form action="/c_add_to_cart.php" method="post">
                                        <td >
                                            <p>
                                                    <input type="hidden" name="product_id" value="<?php echo $item["id"] ?>"/>
                                                    <input value="<?php echo $cart[$item["id"]] ?>" type="number" name="total_bought_qty" style="width: 30%;" min="0" max="40" />
                                                    <button  class= "btn btn-light" type="submit" style="width: 60px;height:40px ">update</button>
                                            </p>                                                                                                                                                                                   
                                        </td>
                                       
                                        </form>

                                        <td class="wsus__pro_tk">
                                            <h6><?php echo $item["price"] * $cart[$item["id"]] ?> $</h6>
                                            <?php $totalCard +=$item["price"] * $cart[$item["id"]] ?>
                                        </td>

                                        <td class="wsus__pro_icon">
                                            <a href="#"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="wsus__cart_list_footer_button" id="sticky_sidebar">
                        <h6>total cart</h6>
                        <p>subtotal: <span><?php echo $totalCard?> $</span></p>
                        <!-- <p>delivery: <span>$00.00</span></p>
                        <p>discount: <span>$10.00</span></p>
                        <p class="total"><span>total:</span> <span>$134.00</span></p> -->

                        <!-- <form>
                            <input type="text" placeholder="Coupon Code">
                            <button type="submit" class="common_btn">apply</button>
                        </form> -->
                        <a class="common_btn mt-4 w-100 text-center" href="/checkout.php">checkout</a>
                        <!-- <a class="common_btn mt-1 w-100 text-center" href="product_grid_view.html"><i
                                class="fab fa-shopify"></i> go shop</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="wsus__single_banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="wsus__single_banner_content">
                        <div class="wsus__single_banner_img">
                            <img src="images/Banner2.JPG" alt="banner" class="img-fluid w-100">
                        </div>
                        <div class="wsus__single_banner_text">
                            <h6>sell on <span>35% off</span></h6>
                            <h3>LED Spotlights</h3>
                            <a class="shop_btn" href="#">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="wsus__single_banner_content single_banner_2">
                        <div class="wsus__single_banner_img">
                            <img src="images/Banner4.JPG" alt="banner" class="img-fluid w-100">
                        </div>
                        <div class="wsus__single_banner_text">
                            <h6>New LED Collection</h6>
                            <h3>Cosmetics</h3>
                            <a class="shop_btn" href="#">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
          CART VIEW PAGE END
    ==============================-->


    </main>
    <?php include_once("html/footer.php");?>   
    <?php include_once("html/js.php");?> 
</body>
</html>