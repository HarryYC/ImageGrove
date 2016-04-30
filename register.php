<!DOCTYPE HTML>
<html>
    <?php
    $page_title = "Sign in/Sign up";
    include("./includes/head.php");
    ?>
    <body>
        <?php
        $home_page = "false";
        include("./includes/header.php");
        ?>
        <div class="register" style="padding-bottom: 160px; margin-top: 60px;">
            <div class="container">
                <section id="form"><!--form-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1">
                                <div class="login-form"><!--login form-->
                                    <h2>Sign in to your account</h2>
                                    <form method="post" action="login.php">
                                        <input style="height: 40px;" name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                        <input style="height: 40px;" name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                        
<!--                                        <label class="radio-inline"><input type="radio" name="optradio">Customer</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">Artist</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">Administrator</label>-->
                                        
                                        <button type="submit" class="btn btn-lg btn-primary btn-block btn-signin" style="margin-top:15px; ">Sign in</button>
                                    </form>
                                </div><!--/login form-->
                            </div>
                            <div class="col-sm-1">
                                <h2 class="reg_or" style="color: white;">OR</h2>
                            </div>
                            <div class="col-sm-4">
                                <div class="signup-form"><!--sign up form-->
                                    <h2>New User Sign up!</h2>
                                    <form method="post" action="registerToDB.php">
                                        <input style="height: 40px;" name="name" type="text" class="form-control" placeholder="Name"/>
                                        <input style="height: 40px;" name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                        <input style="height: 40px;"name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                        
                                        <label class="radio-inline"><input type="radio" name="optradio">Customer</label>
                                        <label class="radio-inline"><input type="radio" name="optradio">Artist</label>
                                        
                                        <button type="submit" class="btn btn-lg btn-primary btn-block" style="margin-top:15px;" >Sign up</button>
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
