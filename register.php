<!DOCTYPE HTML>
<html>
    <?php
    $page_title = "Home";
    include("./includes/head.php");
    ?>
    <body>
        <?php
        $home_page = "false";
        include("./includes/header.php");
        ?>
        <div class="register" style="padding-bottom: 160px">
            <div class="container">
                <section id="form"><!--form-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1">
                                <div class="login-form"><!--login form-->
                                    <h2>Login to your account</h2>
                                    <form action="#" style="align-items: left;">
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                        <div >
                                            <span>
                                                <input type="checkbox" class="checkbox"> 
                                                Keep me signed in
                                            </span>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-primary btn-block btn-signin">Login</button>
                                    </form>
                                </div><!--/login form-->
                            </div>
                            <div class="col-sm-1">
                                <h2 class="reg_or" style="color: white;">OR</h2>
                            </div>
                            <div class="col-sm-4">
                                <div class="signup-form"><!--sign up form-->
                                    <h2>New User Sign up!</h2>
                                    <form action="#">
                                        <input type="text" class="form-control" placeholder="Name"/>
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign up</button>
                                    </form>
                                </div><!--/sign up form-->
                            </div>
                        </div>
                    </div>
                </section><!--/form-->
            </div>
        </div>

        <?php include("./includes/footer.php"); ?>
    </body>
</html>		
