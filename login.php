<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php include_once("html/styles.php");?>
</head>
<body>
    <?php include_once("html/header.php");?>
    <?php include_once("html/nav.php");?>

    <section>
        <div class="container">

        <!-- <div>login</div> -->
         
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
                        <h4>login / register</h4>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">login / register</a></li>
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
       LOGIN/REGISTER PAGE START
    ==============================-->
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__login_reg_area">
                        <ul class="nav nav-pills mb-3" id="pills-tab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-homes" type="button" role="tab" aria-controls="pills-homes"
                                        aria-selected="true">login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab2" data-bs-toggle="pill"
                                        data-bs-target="#pills-profiles" type="button" role="tab"
                                        aria-controls="pills-profiles" aria-selected="true">signup</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent2">
                            <div class="tab-pane fade show active" id="pills-homes" role="tabpanel"
                                 aria-labelledby="pills-home-tab2">
                                <div class="wsus__login">
                                    <form method="POST" action="/c_login_user.php">
                                        <!-- <input type="hidden" name="_token" value="6jJAp9m2GTpPGUckMi5nQ8MOAR95w0jdvkS4wJfp" autocomplete="off"> -->
                                        <!-- Email Address -->
                                        <div class="wsus__login_input">
                                            <i class="fas fa-user-tie"></i>
                                            <input id="email" type="email" name="email" value="" placeholder="Email">
                                        </div>

                                        <!-- Password -->

                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input id="password" name="password" type="password" placeholder="Password">
                                        </div>

                                        <!-- Remember Me -->
                                        <div class="wsus__login_save">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                       id="remember_me"
                                                       name="remember">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                                                    me</label>
                                            </div>
                                            <a class="forget_p" href="#">forget password ?</a>
                                        </div>

                                        <button class="common_btn" type="submit">login</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profiles" role="tabpanel"
                                 aria-labelledby="pills-profile-tab2">
                                <div class="wsus__login">
                                    <form method="POST" action="/c_create_user.php">
                                        <!-- <input type="hidden" name="_token" value="6jJAp9m2GTpPGUckMi5nQ8MOAR95w0jdvkS4wJfp" autocomplete="off"> -->
                                        <!-- Name -->
                                        <div class="wsus__login_input">
                                            <i class="fas fa-user-tie"></i>
                                            <input id="name" type="text" placeholder="Name" name="full_name" value="">
                                        </div>

                                        <!-- Email Address -->
                                        <div class="wsus__login_input">
                                            <i class="far fa-envelope"></i>
                                            <input type="text" placeholder="Email" name="email" id="email" value="">
                                        </div>

                                        <!-- Password -->
                                        <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input type="password" id="password" name="password" placeholder="Password">
                                        </div>

                                        <!-- Confirm Password -->
                                        <!-- <div class="wsus__login_input">
                                            <i class="fas fa-key"></i>
                                            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password">
                                        </div> -->

                                        <button class="common_btn mt-4" type="submit">signup</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
       LOGIN/REGISTER PAGE END
    ==============================-->
<!--==========================
    MAIN CONTENT END
===========================-->
        <!-- <div>login</div> -->          

        <!-- <div>login</div> -->

        </div>
    </section>
    <?php include_once("html/footer.php");?>
    <?php include_once("html/js.php");?> 
</body>
</html>