<?php
    require_once("functions/product.php");
    $categories = categories_all();
?>
    
    <!--============================
        HEADER START
    ==============================-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-2 col-md-1 d-lg-none">
                    <div class="wsus__mobile_menu_area">
                        <span class="wsus__mobile_menu_icon"><i class="fal fa-bars"></i></span>
                    </div>
                </div>
                <div class="col-xl-2 col-7 col-md-8 col-lg-2">
                    <div class="wsus_logo_area">
                        <a class="wsus__header_logo" href="/">
                            <img src="images/Logo.png" alt="logo" class="img-fluid w-100">
                        </a>
                    </div>
                </div>


                <div class="col-xl-5 col-md-6 col-lg-4 d-none d-lg-block">
                    <div class="wsus__search">
                        <form action="/search.php" method="GET">
                            <input type="text" name="search" placeholder="Search..." value="<?php echo $search; ?>">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-3 col-md-3 col-lg-6">
                    <div class="wsus__call_icon_area">
                        <div class="wsus__call_area">
                            <div class="wsus__call">
                                <i class="fas fa-user-headset"></i>
                            </div>
                            <div class="wsus__call_text">
                                <p>hanoiDev1@gmail.com</p>
                                <p>+84919816883</p>
                            </div>
                        </div>
                        <ul class="wsus__icon_area">
                            <li><a href="wishlist.html"><i class="fal fa-heart"></i><span>0</span></a></li>
                            <!-- <li><a href="compare.html"><i class="fal fa-random"></i><span>0</span></a></li> -->
                            <li><a class="wsus__cart_icon" href="#"><i
                                        class="fal fa-shopping-bag"></i><span><?php echo isset($_SESSION["cart"])?count($_SESSION["cart"]):0; ?></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="wsus__mini_cart">
            <h4>shopping cart <span class="wsus_close_mini_cart"><i class="far fa-times"></i></span></h4>
            <ul>
                <li>
                    <div class="wsus__cart_img">
                        <a href="#"><img src="images/tab_2.jpg" alt="product" class="img-fluid w-100"></a>
                        <a class="wsis__del_icon" href="#"><i class="fas fa-minus-circle"></i></a>
                    </div>
                    <!-- <div class="wsus__cart_text">
                        <a class="wsus__cart_title" href="#">apple 9.5" 7 serise tab with full view display</a>
                        <p>$140 <del>$150</del></p>
                    </div> -->

            </ul>
            <!-- <h5>sub total <span>$3540</span></h5> -->
            <div class="wsus__minicart_btn_area">
                <a class="common_btn" href="/cart.php">view cart</a>
                <a class="common_btn" href="/checkout.php">checkout</a>
            </div>
        </div>

    </header>
    <!--============================
        HEADER END
    ==============================-->