<?php
    require_once("functions/product.php");
    $id = $_GET["id"];
    // tim san pham trong db
    $product = product_detail($id);
    $related_products = related_products($product["category_id"]);
    if($product == null)
        die("404 not found!");
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
 <!--============================
        BREADCRUMB START
==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
            
                <div class="row">
                    <div class="col-12">
                        <h4>products details</h4>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">product</a></li>
                            <li><a href="#">product details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        BREADCRUMB END
    ==============================-->
    <main class="main">

        <div class="container">
            <div class="wsus__details_bg">
                <div class="row">
                    <!-- <div>Anh San Pham</div> -->
                    <div class="col-xl-4 col-md-5 col-lg-5">
                    <div id="sticky_pro_zoom">
                            <div class="exzoom hidden" id="exzoom">
                                <div class="exzoom_img_box">
                                    <a class="venobox wsus__pro_det_video" data-autoplay="true" data-vbtype="video"
                                        href="https://www.youtube.com/watch?v=4LDH7ejRkfI">
                                        <i class="fas fa-play"></i>
                                    </a>
                                    <ul class='exzoom_img_ul'>
                                        <li><img class="zoom ing-fluid w-100" src="<?php echo $product["thumbnail"];?>" alt="product"></li>
                                        <li><img class="zoom ing-fluid w-100" src="<?php echo $product["image1"];?>" alt="product"></li>
                                        <li><img class="zoom ing-fluid w-100" src="<?php echo $product["image2"];?>" alt="product"></li>
                                        <li><img class="zoom ing-fluid w-100" src="<?php echo $product["image3"];?>" alt="product"></li>
                                        <li><img class="zoom ing-fluid w-100" src="<?php echo $product["image4"];?>" alt="product"></li>
                                        <li><img class="zoom ing-fluid w-100" src="<?php echo $product["image5"];?>" alt="product"></li>

                                    </ul>
                                </div>
                                <div class="exzoom_nav"></div>
                                <p class="exzoom_btn">
                                    <a href="javascript:void(0);" class="exzoom_prev_btn"> <i
                                            class="far fa-chevron-left"></i> </a>
                                    <a href="javascript:void(0);" class="exzoom_next_btn"> <i
                                            class="far fa-chevron-right"></i> </a>
                                </p>
                            </div>
                        </div>
                    </div>


                   <!-- <div>product infor</div> -->
                   <div class="col-xl-5 col-md-7 col-lg-7">
                        <div class="wsus__pro_details_text">
                            
                            <!-- <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                                neque
                                sint obcaecati asperiores dolor cumque. ad voluptate dolores reprehenderit hic adipisci
                                Similique eaque illum.</p> -->
                        
                                <form action="/add_to_cart.php" method="post" class="select_number">

                                    <a class="title" href="#"><?php echo $product["name"];?></a>
                                    <p class="wsus__stock_area"><span class="in_stock">in stock</span> (<?php echo $product["qty"];?> items)</p>
                                    <h4><?php echo $product["price"];?> $<del><?php echo $product["price_origin"];?>$</del></h4>
                                    <p class="review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>20 review</span>
                                    </p>
                                    <div class="wsus__quentity">
                                         <h5>quantity :</h5>
                                    </div>
                                    <input type="hidden" name="product_id" value="<?php echo $product["id"] ?>"/>
                                    <input value="1" type="number" name="bought_qty"/>
                                    
                                    <?php if($product["qty"] == 0):?>
                                        <p class="text-danger">Out of stock</p>
                                    <?php endif;?>
                                    <!-- <div class="wsus__selectbox">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6">
                                                <h5 class="mb-2">select:</h5>
                                                <select class="select_2" name="state">
                                                    <option>default select</option>
                                                    <option>select 1</option>
                                                    <option>select 2</option>
                                                    <option>select 3</option>
                                                    <option>select 4</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-sm-6">
                                                <h5 class="mb-2">select:</h5>
                                                <select class="select_2" name="state">
                                                    <option>default select</option>
                                                    <option>select 1</option>
                                                    <option>select 2</option>
                                                    <option>select 3</option>
                                                    <option>select 4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->

                                    <ul class="wsus__button_area">

                                    <li><button <?php if($product["qty"] == 0) echo "disabled";?>class="add_cart" type="submit">Add to cart</button></li>


                                    <!-- <li><a class="buy_now" href="#">buy now</a></li> -->
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <!-- <li><a href="#"><i class="far fa-random"></i></a></li> -->
                                    </ul>
                                    <p class="brand_model"><span>model :</span> <?php echo $product["model"] ?></p>
                                    <p class="brand_model"><span>brand :</span> <?php echo $product["brand"] ?></p>

                                </form>

                            

                            


                            <div class="wsus__pro_det_share">
                                <h5>share :</h5>
                                <ul class="d-flex">
                                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <a class="wsus__pro_report" href="#" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><i class="fal fa-comment-alt-smile"></i> Report incorrect
                                product information.</a>
                        </div>
                    </div>
                   <!-- <div>sidebar</div> -->
                   <div class="col-xl-3 col-md-12 mt-md-5 mt-lg-0">
                        <div class="wsus_pro_det_sidebar" id="sticky_sidebar">
                            <ul>
                                <li>
                                    <span><i class="fal fa-truck"></i></span>
                                    <div class="text">
                                        <h4>Return Available</h4>
                                        <!-- <p>Lorem Ipsum is simply dummy text of the printing</p> -->
                                    </div>
                                </li>
                                <li>
                                    <span><i class="far fa-shield-check"></i></span>
                                    <div class="text">
                                        <h4>Secure Payment</h4>
                                        <!-- <p>Lorem Ipsum is simply dummy text of the printing</p> -->
                                    </div>
                                </li>
                                <li>
                                    <span><i class="fal fa-envelope-open-dollar"></i></span>
                                    <div class="text">
                                        <h4>Warranty Available</h4>
                                        <!-- <p>Lorem Ipsum is simply dummy text of the printing</p> -->
                                    </div>
                                </li>
                            </ul>
                            <div class="wsus__det_sidebar_banner">
                                <img src="images/sale1.jpg" alt="banner" class="img-fluid w-100">
                                <div class="wsus__det_sidebar_banner_text_overlay">
                                    <div class="wsus__det_sidebar_banner_text">
                                        <p>Black Friday Sale</p>
                                        <h4>Up To 70% Off</h4>
                                        <a href="#" class="common_btn">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                   <!-- <div></div> -->

                </div>   
             <!-- <div></div> -->
             <!-- <div></div> -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="wsus__pro_det_description">
                            <!-- <div></div> -->
                            <div class="wsus__details_bg">
                                <!-- <div></div> -->
                                <ul class="nav nav-pills mb-3" id="pills-tab3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab7" data-bs-toggle="pill"
                                                data-bs-target="#pills-home22" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true">Description</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab7" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile22" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false">Information</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab2" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact2" type="button" role="tab"
                                                aria-controls="pills-contact2" aria-selected="false">Reviews</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-contact-tab239" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact239" type="button" role="tab"
                                                aria-controls="pills-contact239" aria-selected="false">faqs</button>
                                        </li>
                                    </ul>
                                <!-- <div></div> -->
                                <div class="tab-content" id="pills-tabContent4">
                                <div class="tab-pane fade  show active " id="pills-home22" role="tabpanel"
                                    aria-labelledby="pills-home-tab7">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="wsus__description_area">
                                                <p><?php echo $product["description"] ?></p>
                                                <h2><?php echo $product["descriptiontitle1"] ?></h2>
                                                
                                                <p><?php echo $product["description1"] ?></p>
                                                <img class="zoom ing-fluid w-100" src="<?php echo $product["image1"];?>" alt="product">
                                                <h2><?php echo $product["descriptiontitle2"] ?></h2>
                                                
                                                <p><?php echo $product["description2"] ?></p>
                                                <img class="zoom ing-fluid w-100" src="<?php echo $product["image2"];?>" alt="product">
                                                
                                                <p><?php echo $product["description3"] ?></p>
                                                <img class="zoom ing-fluid w-100" src="<?php echo $product["image3"];?>" alt="product">
                                            
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-4">
                                                <div class="description_single">
                                                    <h6><span>1</span> Free Shipping & Return</h6>
                                                    <p>We offer free shipping for products on orders above 50$ and
                                                        offer
                                                        free delivery for all orders in US.</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4">
                                                <div class="description_single">
                                                    <h6><span>2</span> Free and Easy Returns</h6>
                                                    <p>We guarantee our products and you could get back all of your
                                                        money anytime you want in 30 days.</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4">
                                                <div class="description_single">
                                                    <h6><span>3</span> Special Financing </h6>
                                                    <p>Get 20%-50% off items over 50$ for a month or over 250$ for a
                                                        year with our special credit card.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div></div> -->
                                <div class="tab-pane fade" id="pills-profile22" role="tabpanel"
                                    aria-labelledby="pills-profile-tab7">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 mb-4 mb-lg-0">
                                            <div class="wsus__pro_det_info">
                                                <h4>Additional Information</h4>
                                                <p><span>Fabric</span> 100% Cotton</p>
                                                <p><span>Materials</span> Yearn</p>
                                                <p><span>Packaging</span> 1 pice poly</p>
                                                <p><span>Cleaning</span> Washable</p>
                                                <p><span>Cash on Delivery</span> yes</p>
                                                <p><span>Payment Method</span> Cash / Credit Card</p>
                                                <p><span>Other Paymen Method</span> Wire Transfer</p>
                                                <p><span>Order Tracking</span> Yes </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="wsus__pro_det_info">
                                                <h4>Additional Information</h4>
                                                <p><span>Fabric</span> 100% Cotton</p>
                                                <p><span>Materials</span> Yearn</p>
                                                <p><span>Packaging</span> 1 pice poly</p>
                                                <p><span>Cleaning</span> Washable</p>
                                                <p><span>Cash on Delivery</span> yes</p>
                                                <p><span>Payment Method</span> Cash / Credit Card</p>
                                                <p><span>Other Paymen Method</span> Wire Transfer</p>
                                                <p><span>Order Tracking</span> Yes </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div></div> -->
                                <!-- <div></div> -->
                                <div class="tab-pane fade" id="pills-contact2" role="tabpanel"
                                    aria-labelledby="pills-contact-tab2">
                                    <div class="wsus__pro_det_review">
                                        <div class="wsus__pro_det_review_single">
                                            <div class="row">
                                                <div class="col-xl-8 col-lg-7">
                                                    <div class="wsus__comment_area">
                                                        <h4>Reviews <span>02</span></h4>
                                                        <div class="wsus__main_comment">
                                                            <div class="wsus__comment_img">
                                                                <img src="images/client_img_3.jpg" alt="user"
                                                                    class="img-fluid w-100">
                                                            </div>
                                                            <div class="wsus__comment_text reply">
                                                                <h6>Shopnil mahadi <span>4 <i
                                                                            class="fas fa-star"></i></span></h6>
                                                                <span>09 Jul 2021</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit.
                                                                    Cupiditate sint molestiae eos? Officia, fuga eaque.
                                                                </p>
                                                                <ul class="">
                                                                    <li><img src="images/headphone_1.jpg" alt="product"
                                                                            class="img-fluid w-100"></li>
                                                                    <li><img src="images/headphone_2.jpg" alt="product"
                                                                            class="img-fluid w-100"></li>
                                                                    <li><img src="images/kids_1.jpg" alt="product"
                                                                            class="img-fluid w-100"></li>
                                                                </ul>
                                                                <a href="#" data-bs-toggle="collapse"
                                                                    data-bs-target="#flush-collapsetwo">reply</a>
                                                                <div class="accordion accordion-flush"
                                                                    id="accordionFlushExample2">
                                                                    <div class="accordion-item">
                                                                        <div id="flush-collapsetwo"
                                                                            class="accordion-collapse collapse"
                                                                            aria-labelledby="flush-collapsetwo"
                                                                            data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body">
                                                                                <form>
                                                                                    <div
                                                                                        class="wsus__riv_edit_single text_area">
                                                                                        <i class="far fa-edit"></i>
                                                                                        <textarea cols="3" rows="1"
                                                                                            placeholder="Your Text"></textarea>
                                                                                    </div>
                                                                                    <button type="submit"
                                                                                        class="common_btn">submit</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wsus__main_comment">
                                                            <div class="wsus__comment_img">
                                                                <img src="images/client_img_1.jpg" alt="user"
                                                                    class="img-fluid w-100">
                                                            </div>
                                                            <div class="wsus__comment_text reply">
                                                                <h6>Smith jhon <span>5 <i
                                                                            class="fas fa-star"></i></span>
                                                                </h6>
                                                                <span>09 Jul 2021</span>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit.
                                                                    Cupiditate sint molestiae eos? Officia, fuga eaque.
                                                                </p>
                                                                <a href="#" data-bs-toggle="collapse"
                                                                    data-bs-target="#flush-collapsetwo2">reply</a>
                                                                <div class="accordion accordion-flush"
                                                                    id="accordionFlushExample2">
                                                                    <div class="accordion-item">
                                                                        <div id="flush-collapsetwo2"
                                                                            class="accordion-collapse collapse"
                                                                            aria-labelledby="flush-collapsetwo"
                                                                            data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body">
                                                                                <form>
                                                                                    <div
                                                                                        class="wsus__riv_edit_single text_area">
                                                                                        <i class="far fa-edit"></i>
                                                                                        <textarea cols="3" rows="1"
                                                                                            placeholder="Your Text"></textarea>
                                                                                    </div>
                                                                                    <button type="submit"
                                                                                        class="common_btn">submit</button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="pagination">
                                                            <nav aria-label="Page navigation example">
                                                                <ul class="pagination">
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"
                                                                            aria-label="Previous">
                                                                            <i class="fas fa-chevron-left"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="page-item"><a
                                                                            class="page-link page_active" href="#">1</a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">2</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">3</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">4</a></li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#" aria-label="Next">
                                                                            <i class="fas fa-chevron-right"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-5 mt-4 mt-lg-0">
                                                    <div class="wsus__post_comment rev_mar" id="sticky_sidebar3">
                                                        <h4>write a Review</h4>
                                                        <form action="#">
                                                            <p class="rating">
                                                                <span>select your rating : </span>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </p>
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="wsus__single_com">
                                                                        <input type="text" placeholder="Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="wsus__single_com">
                                                                        <input type="email" placeholder="Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="col-xl-12">
                                                                        <div class="wsus__single_com">
                                                                            <textarea cols="3" rows="3"
                                                                                placeholder="Write your review"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="img_upload">
                                                                <div class="gallery">
                                                                    <a class="cam" href="javascript:void(0)"><span><i
                                                                                class="fas fa-image"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <button class="common_btn" type="submit">submit
                                                                review</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div></div> -->
                                

                                <!-- <div></div> -->
                                <div class="tab-pane fade" id="pills-contact239" role="tabpanel"
                                    aria-labelledby="pills-contact-tab239">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="wsus__contact_question">
                                                <h5>People usually ask these</h5>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                How can I cancel my order?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Voluptatum voluptas ea hic excepturi sit, sapiente
                                                                    optio
                                                                    deleniti pariatur. Dolorum in quos magni?
                                                                    Necessitatibus
                                                                    recusandae cupiditate iste expedita amet voluptatem
                                                                    laudantium.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Why is my registration delayed?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Voluptatum voluptas ea hic excepturi sit, sapiente
                                                                    optio
                                                                    deleniti pariatur. Dolorum in quos magni?
                                                                    Necessitatibus
                                                                    recusandae cupiditate iste expedita amet voluptatem
                                                                    laudantium.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                What do I need to buy products?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Voluptatum voluptas ea hic excepturi sit, sapiente
                                                                    optio
                                                                    deleniti pariatur. Dolorum in quos magni?
                                                                    Necessitatibus
                                                                    recusandae cupiditate iste expedita amet voluptatem
                                                                    laudantium.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThreet1">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThreet1" aria-expanded="false"
                                                                aria-controls="collapseThreet1">
                                                                How can I track an order?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThreet1" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThreet1"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Voluptatum voluptas ea hic excepturi sit, sapiente
                                                                    optio
                                                                    deleniti pariatur. Dolorum in quos magni?
                                                                    Necessitatibus
                                                                    recusandae cupiditate iste expedita amet voluptatem
                                                                    laudantium.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThreet2">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThreet2" aria-expanded="false"
                                                                aria-controls="collapseThreet2">
                                                                How can I get money back?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThreet2" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThreet2"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Voluptatum voluptas ea hic excepturi sit, sapiente
                                                                    optio
                                                                    deleniti pariatur. Dolorum in quos magni?
                                                                    Necessitatibus
                                                                    recusandae cupiditate iste expedita amet voluptatem
                                                                    laudantium.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div></div> -->





                                <!-- <div></div> -->
                                <!-- <div></div> -->
                                <!-- <div></div> -->
                                <!-- <div></div> -->
                                <!-- <div></div> -->
                                <!-- <div></div> -->
                            </div>
                            <!-- <div></div> -->
                            <!-- <div></div> -->
                            <!-- <div></div> -->
                            <!-- <div></div> -->
                            <!-- <div></div> -->
                            <!-- <div></div> -->
                            <!-- <div></div> -->
                            <!-- <div></div> -->
                            <!-- <div></div> -->
                            <!-- <div></div> -->
                        </div>

                    </div>
                    
                </div>
             
             <!-- <div></div> -->
             <!-- <div></div> -->

             <!-- <div></div> -->
             <!-- <div></div> -->


             <!-- <div></div> -->
             <!-- <div></div> -->
                


            </div>
        </div>  

    <!-- <div></div> -->

    
    <!-- <div></div> -->
    <!-- <div></div> -->


    <!-- <div></div> -->
<!--============================
    RELATED PRODUCT START
==============================-->
    <section id="wsus__flash_sell">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>Related Products</h3>
                        <a class="see_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>


            <div class="row flash_sell_slider">


                <!-- <div></div> -->
                <?php foreach($related_products as $item):?>
                    <div class="col-xl-3 col-sm-6 col-lg-4">                                                  
                            <div class="wsus__product_item">
                                <a href="/detail.php?id=<?php echo $item["id"];?>">
                                <span  <?php if($item["price_origin"]==$item["price"]) echo 'style="display: none;"' ?>  class="wsus__minus">-<?php echo round(100*($item["price_origin"]-$item["price"])/$item["price_origin"]);?>%</span>
                                <a class="wsus__pro_link" href="/detail.php?id=<?php echo $item["id"];?>">
                                    <img src="<?php echo $item["thumbnail"] ?>" alt="product" class="img-fluid w-100 img_1" />
                                    <img src="<?php echo $item["thumbnail"] ?>" alt="product" class="img-fluid w-100 img_2" />
                                </a>
                                <ul class="wsus__single_pro_icon">
                                    <!-- <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="far fa-eye"></i></a></li> -->
                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                    <!-- <li><a href="#"><i class="far fa-random"></i></a> -->
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
                <!-- <div></div> -->

            </div>

<!-- <div></div> -->
<!-- <div></div> -->
<!-- <div></div> -->
<!-- <div></div> -->


            </div>
                

        </div>
    </section>

<!--============================
    RELATED PRODUCT END
==============================-->
    
    </main>
    <?php include_once("html/footer.php");?>
</body>
</html>