
<?php
   require_once("functions/m_product.php");
   //require("functions/product.php");   
    $blog_id = $_GET["id"];
  
    $blogcategories = blog_categories_all();
    $blog = blog_detail($blog_id);
    $relatedBlog = related_blogs($blog_id);
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
                            <li><a href="#"><?php echo $blog["title"];?></a></li>
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
            <?php include_once("html/blogSideBar.php");?>
                <!-- ------------------------------------------------ -->
            <div class="col-xxl-9 col-xl-8 col-lg-8">                                                                                                                              


                <!-- <div>blog detail here</div>                 -->
                <h1><?php echo $blog["title"];?></h1> 
                <div class="wsus__main_blog_img">
                            <img src="<?php echo $blog["thumbnail"];?>" alt="blog" class="img-fluid w-100">
                </div>

                <p class="wsus__main_blog_header">
                            <span><i class="fas fa-user-tie"></i> by <?php echo $blog["author"];?></span>
                            <span><i class="fal fa-calendar-alt"></i> <?php echo $blog["Date"];?></span>
                </p>
                <div class="wsus__description_area">
                    <h1><?php echo $blog["title1"];?>

                    </h1>
                    <p>
                              <?php echo $blog["description11"];?>
                    </p>
                    <div class="wsus__main_blog_img">
                            <img src="<?php echo $blog["image1"];?>" alt="blog image" class="img-fluid w-100">
                     </div>
                    <p>
                              <?php echo $blog["description12"];?>
                    </p>
                </div>
                <div class="wsus__description_area">
                    <h1><?php echo $blog["title2"];?>

                    </h1>
                    <p>
                              <?php echo $blog["description21"];?>
                    </p>
                    <div class="wsus__main_blog_img">
                            <img src="<?php echo $blog["image2"];?>" alt="blog image" class="img-fluid w-100">
                     </div>
                    <p>
                              <?php echo $blog["description22"];?>
                    </p>
                </div>
                <div class="wsus__description_area">
                    <h1><?php echo $blog["title3"];?>

                    </h1>
                    <p>
                              <?php echo $blog["description31"];?>
                    </p>
                    <div class="wsus__main_blog_img">
                            <img src="<?php echo $blog["image3"];?>" alt="blog image" class="img-fluid w-100">
                     </div>
                    <p>
                              <?php echo $blog["description32"];?>
                    </p>
                </div>
                <!-- <div>share</div> -->
                <div class="wsus__share_blog">
                            <p>share:</p>
                            <ul>
                                <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>

                                <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>

                                <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                <!-- <div>share</div> -->
                <!-- <div>share</div> -->
                <!-- <div>relate blog detail here</div>                 -->
                <div class="row">
                                <div class="col-xl-12">
                                    <h5>Related posts</h5>
                                </div>
                            </div>
                <div class="row home_blog_slider">           
                
                    <?php foreach($relatedBlog as $item):?>
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
                
            <!-- <div>End-theBlog1</div> -->

            
                           
        </div>

             <!-- <div>comment</div> -->
             <div class="wsus__comment_area">
                    <h4>comments <span>0</span></h4>
                    <i>Be a first one to comment! </i>                            
                        <div id="pagination">
                            <div class="mt-5">
                            </div>
                        </div>
                </div>
                <div class="wsus__post_comment">
                    <h4>post a comment</h4>
                        <p>Please login to comment on post!</p>
                        <a class="common_btn" href="#" >Login</a>
                </div>
             <!-- <div>comment</div> -->

                <!-- <div>blog comment here</div>                 -->
                <!-- <div>blog comment here</div>                 -->
                <!-- <div>blog comment here</div>                 -->
                <!-- <div>blog comment here</div>                 -->
                <!-- <div>blog comment here</div>                 -->
                                        
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
    <?php include_once("html/js.php");?> 
</body>
</html>