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
        <div class="register" style="padding-bottom: 160px">
            <div class="container">
                <section id="form"><!--form-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1">
                                <div class="login-form"><!--login form-->
                                    <h2>Sign in to your account</h2>
                                    <form method="post" action="login.php" style="align-items: left;">
                                        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                        <div>                                       
                                            <span>
                                                <input type="checkbox" class="checkbox"> 
                                                Keep me signed in
                                            </span>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-primary btn-block btn-signin">Sign in</button>
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
                                        <input name="name" type="text" class="form-control" placeholder="Name"/>
                                        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                        <span>
                                        <input type="radio" name="type" value="Artist">Artist<br>                                        
                                        </span>
                                        <br>
                                        <span>                                        
                                        <input type="radio" name="type" value="Costumer">Customer<br>
                                        </span>
                                        <br>                                        
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
