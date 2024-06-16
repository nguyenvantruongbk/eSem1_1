
<?php
    require_once("functions/m_product.php");
    $categories = categories_all();
?>
   
<!--============================
    MAIN MENU START
==============================-->
<nav class="wsus__main_menu d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="relative_contect d-flex">
                    <div class="wsus_menu_category_bar">
                        <i class="far fa-bars"></i>
                    </div>
                    <ul class="wsus_menu_cat_item show_home toggle_menu">

                        <?php foreach($categories as $item):?>
                            <li><a href="/category.php?id=<?php echo $item["id"]; ?>"><i class="fas fa-star"></i><?php echo $item["name"]; ?></a></li>
                           
                        <?php endforeach;?> 
                        
                    </ul>
<!-- Navbar Menu -->
                    <ul class="wsus__menu_item">
                        <li><a class="active" href="/">home</a></li>                                                                         
                        <li>
                            <a href="#">Product Category</a>                                                                                                           
                                <div class="wsus__mega_menu">
                                            <div class="row">
                                                <?php foreach($categories as $item):?>
                                                    <div class="col-xl-3 col-lg-3">
                                                        <div class="wsus__mega_menu_colum">
                                                            <h4><a href="category.php?id=<?php echo $item["id"]; ?>"><?php echo $item["name"]; ?></a> <i class="fas fa-caret-down"></i></a> </h4>
                                                            <ul class="wsis__mega_menu_item">
                                                                <li><a href="#">New Arrivals</a></li>
                                                                <li><a href="#">Best Sellers</a></li>
                                                                <li><a href="#">Trending</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>   
                                                <?php endforeach;?>                                       
                                            </div>
                                </div>
                        </li>                                      
                        <li><a href="/about-us.php">about us</a></li>                        
                        <li><a href="/contact.php">contact</a></li>                                            
                        <li><a href="/blog.php">blog</a></li>                                              
                    </ul>
                    <ul class="wsus__menu_item wsus__menu_item_right">                                             
                        <?php if(isset($_SESSION["auth"]) && $_SESSION["auth"] != null):?>
                          

                                <!-- <div></div> -->
                                <li class="wsus__relative_li"><a href="#"><?php echo $_SESSION["auth"]["full_name"];?> <i class="fas fa-caret-down"></i></a>
                                
                                
                                    
                                    <ul class="wsus__menu_droapdown">
                                         <?php if($_SESSION["auth"]["full_name"]=="Web-admin"):?>
                                    
                                        <li><a href="/Admin_dash_board.php">Admin Dashboard</a></li>
                                        <!-- <li><a href="faqs.html">faq</a></li> -->
                                        <?php else:?><li><a href="/cart.php">My Card</a></li>
                                            <?php endif;?> 
                                    </ul>
                                
                                <!-- <div></div> -->
                                <!-- <div></div> -->


                            <li><a  href="/c_logout_user.php">Logout</a></li>                      
                        <?php else:?>                        
                        <li><a  href="/login.php"> Login/Register</a></li>
                        <?php endif;?>      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--============================
    MAIN MENU END
==============================-->


<!--============================
    MOBILE MENU START
==============================-->
<section id="wsus__mobile_menu">
    <span class="wsus__mobile_menu_close"><i class="fal fa-times"></i></span>
    <ul class="wsus__mobile_menu_header_icon d-inline-flex">
        <li><a href="wishlist.html"><i class="far fa-heart"></i> <span>2</span></a></li>
    </ul>
    <form action="/search.php" method="GET">
        <input type="text" placeholder="Search" name="search" value="<?php echo $search; ?>">
        <button type="submit"><i class="far fa-search"></i></button>
    </form>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                role="tab" aria-controls="pills-home" aria-selected="true">Categories</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                role="tab" aria-controls="pills-profile" aria-selected="false">main menu</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="wsus__mobile_menu_main_menu">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <ul class="wsus_mobile_menu_category">
                    <?php foreach($categories as $item):?>
                        <li><a href="/category.php?id=<?php echo $item["id"]; ?>"><i class="fas fa-star"></i><?php echo $item["name"]; ?></a></li>                       
                    <?php endforeach;?>    
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="wsus__mobile_menu_main_menu">
                <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">Product Category</a>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body">
                                    <ul>
                                    <?php foreach($categories as $item):?>
                                    <li><a href="/category.php?id=<?php echo $item["id"]; ?>"><i class="fas fa-star"></i><?php echo $item["name"]; ?></a></li>                                   
                                     <?php endforeach;?>   
                                    </ul>
                                </div>
                            </div>
                        </li>                        
                        <li><a href="/about-us.php">About us</a></li>
                        <li><a href="/contact.php">Contact</a></li>
                        <li><a href="/blog.php">Blog</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============================
    MOBILE MENU END
==============================-->
