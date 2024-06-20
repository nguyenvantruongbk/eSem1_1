    <!-- <div>Sidbar</div> -->
    <div class="col-xxl-3 col-xl-4 col-lg-4">
                <div class="wsus__blog_sidebar" id="sticky_sidebar">
                    <div class="wsus__blog_search">
                        <h4>Blog search</h4>
                        <form action="/blog_search.php" method="GET">
                            <input type="text" name="search" placeholder="Search"  required/>
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