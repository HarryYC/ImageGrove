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
                                    <form action="#">
                                        <input type="text" placeholder="Name" />
                                        <input type="email" placeholder="Email Address" />
                                        <span>
                                            <input type="checkbox" class="checkbox"> 
                                            Keep me signed in
                                        </span>
                                        <button type="submit" class="btn btn-default">Login</button>
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
                                        <input  style="color: black;" type="text" placeholder="Name"/>
                                        <input type="email" placeholder="Email Address"/>
                                        <input type="password" placeholder="Password"/>
                                        <button type="submit" class="btn btn-default">Sign up</button>
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