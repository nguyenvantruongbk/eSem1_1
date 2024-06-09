<!--============================
    HOME BLOGS START
==============================-->
<section id="wsus__blogs" class="home_blogs">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="wsus__section_header">
                    <h3>recent blogs</h3>
                    <a class="see_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row home_blog_slider">
            <!-- <div>theBlog1</div> -->                          
                    <?php foreach($news as $item):?>
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
    </div>
</section>
<!--============================
    HOME BLOGS END
==============================-->