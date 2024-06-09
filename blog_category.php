
<?php
   require_once("functions/product.php");
   //require("functions/product.php");   
    $blog_category_id = $_GET["id"];
    $blog_category = blog_category_detail($blog_category_id);
    $blogcategories = blog_categories_all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <?php include_once("html/styles.php");?>
</head>
<body>
    <?php include_once("html/header.php");?>
    <?php include_once("html/nav.php");?>
    <main>
<!--==========================
    MAIN CONTENT START
===========================-->
           <!--============================
        BREADCRUMB START
    ==============================-->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>blog</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">blog</a></li>
                            <li><a href="#"><?php echo $blog_category["name"];?></a></li>
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
        BLOGS DETAILS START
    ==============================-->
    <section>

    
    <div class="container">
        <div class="row">
            <!-- ------------------------------------------------ -->
            <!-- <div>Sidbar</div> -->
            <div class="col-xxl-3 col-xl-4 col-lg-4">
                <div class="wsus__blog_sidebar" id="sticky_sidebar">
                    <div class="wsus__blog_search">
                        <h4>Blog search</h4>
                        <form action="#" method="GET">
                            <input type="text" placeholder="Search" name="search">
                            <button type="submit" class="common_btn"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="wsus__blog_category">
                        <h4>Blog Categories</h4>
                        <ul>
                            <?php foreach($blogcategories as $item):?>
                                <li><a href="blog_category.php?id=<?php echo $item["id"]; ?>"><?php echo $item["name"]; ?></a></li>

                                <?php endforeach ?>
                        </ul>
                    </div>


                </div>
            </div>
                <!-- <div>EndSidbar</div> -->
                <!-- ------------------------------------------------ -->
            <div class="col-xxl-9 col-xl-8 col-lg-8">                                                                                                                              
                <div class="row">
                    <div class="col-xl-12">
                        <h5><?php echo $blog_category["name"];?></h5>
                    </div>
                </div>
                <!-- <div>blogsession</div> -->
                <!-- <div>end_blogsession</div> -->
                <!-- <div class="row blog_det_slider"> -->
                    <!-- <div>laydata tu phpdatabase</div> -->
                <div class="row">
                
                    <?php foreach($blog_category["blogs"] as $item):?>
                    <div class="col-xl-4">
                        <div class="wsus__single_blog wsus__single_blog_2">
                            <a class="wsus__blog_img" href="/blog_detail.php?id=<?php echo $item["id"];?>">
                                <img src="<?php echo $item["thumbnail"] ?>" alt="blog" class="img-fluid w-100">
                            </a>
                            <div class="wsus__blog_text">
                                <a class="blog_top red" href="/blog_detail.php?id=<?php echo $item["id"];?>">New</a>
                                <div class="wsus__blog_text_center">
                                    <a href="/blog_detail.php?id=<?php echo $item["id"];?>"><?php echo $item["title"] ?></a>
                                    <p class="date"><?php echo $item["Date"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div> 
                    <!-- <div>laydata tu phpdatabase</div> -->                                                              
                <!-- </div> -->
                <!-- <div>end_blogsession</div> -->                                        
            </div>
            <!-- ------------------------------------------------ -->

            
        </div>
    </div>
    </section>
    <!--============================
        BLOGS DETAILS END
    ==============================-->
<!--==========================
    MAIN CONTENT END
===========================-->
</main>
    <?php include_once("html/footer.php");?>
</body>
</html>