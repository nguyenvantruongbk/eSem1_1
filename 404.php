<?php
// require_once("functions/cart.php");
// require_once("functions/checkout.php");
// updateStatusPaid($order_id);

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
     <!--============================
        404 PAGE START
    ==============================-->
    <section id="wsus__404">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-10 col-lg-8 col-xxl-5 m-auto">
                    <div class="wsus__404_text">
                        <h2>404</h2>
                        <h4><span>Oops!!!</span> Something Went Wrong Here</h4>
                        <p>There may be a misspelling in the URL entered, or the page you are looking for may no longer
                            exist</p>
                        <a href="/" class="common_btn">Go Back Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        404 PAGE END
    ==============================-->


    
    <?php include_once("html/footer.php");?>
    <?php include_once("html/js.php");?> 
</body>