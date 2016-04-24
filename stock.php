<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <?php 
    $page_title = "Search Results";
    include("./includes/head.php");
    ?>
    <body>
        <div class="header">	
            <div class="container"> 
                <div class="logo">
                    <h1><a href="index.html">Image Grove</a></h1>
                </div>
                <div class="search">
                        <ul class="nav1">
                            <li id="search">
                                <form action="./stock.php" method="get">
                                    <input type="text" name="search_string" id="search_text" placeholder="Search"/>
                                    <input type="button" name="search_button" id="search_button">
                                </form>
                            </li>
                            <li id="options">
                                <a href="#">All Images</a>
                                <ul class="subnav">
                                    <li><a href="#">Images</a></li>
                                    <li><a href="#">Video</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                <div class="top_right">
                    <ul>
                        <li><a href="register.html">Register</a></li>|
                        <li class="login" >
                            <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                                <div id="loginBox">                
                                    <form id="loginForm">
                                        <fieldset id="body">
                                            <fieldset>
                                                <label for="email">Email Address</label>
                                                <input type="text" name="email" id="email">
                                            </fieldset>
                                            <fieldset>
                                                <label for="password">Password</label>
                                                <input type="password" name="password" id="password">
                                            </fieldset>
                                            <input type="submit" id="login" value="Sign in">
                                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                        </fieldset>
                                        <span><a href="#">Forgot your password?</a></span>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="stock_box">
            <div class="col-md-2 stock_left">
                <div class="w_sidebar">
                    <section class="sky-form">
                        <h4>Collections</h4>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All images</label>
                        </div><div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Standard</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Following</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Lorem Ipsum</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Injected humour</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Default model </label>
                        </div>
                    </section>
                    <section class="sky-form">
                        <h4>Freshness</h4>
                        <div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Any time</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Past 3 months</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Past month</label>
                        </div><div class="col col-4">
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Past week</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Past 3 days</label>
                            <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Any time</label>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-10 sap_tabs">	
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <?php
                    $search_string = $_GET['search_string'];

                    // Connect to the database
//              $dbLink = new mysqli('sfsuswe.com', 's16g07', 'team7db', 'student_s16g07');
                    $dbLink = new mysqli('sfsuswe.com', 'earaujo', 'swes2016db', 'student_earaujo');
                    if (mysqli_connect_errno()) {
                        die("MySQL connection failed: " . mysqli_connect_error());
                    }
                    $search_string = mysqli_real_escape_string($dbLink, $search_string);

                    // Query for a list of all existing files
                    $sql = "SELECT id, description, imageTitle FROM `file` WHERE description LIKE '%{$search_string}%'";

//              $sql = "SELECT Media_id, Description, Title FROM `Media_Metadata` WHERE Description LIKE '%{$search_string}%'";
                    $result = $dbLink->query($sql);
                    ?>
                    <ul class="resp-tabs-list">
                        <h2 class="resp-tab-item" aria-controls="tab_item-0" role="tab">
                            <?php
                            echo $result->num_rows;
                            if ($result->num_rows == 1) {
                                echo " Result ";
                            } else {
                                echo " Results ";
                            } echo "for \"" . $_GET['search_string'] . "\"";
                            ?></h2>
                        <div class="clearfix"></div>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                            <ul class="tab_img">

                                <?php
                                // Check if db query was successfull
                                if ($result) {
                                    // Make sure there are some files in there
                                    if ($result->num_rows == 0) {
                                        echo '<div class="col-sm-8 col-sm-offset-3"><h3>There are no matches for your search in the database</h3></div>';
                                    } else {
                                        // Display each file
                                        while ($row = $result->fetch_assoc()) {
                                            //if (strripos($row['description'], $search_string) !== false) {
                                            echo "
                                            <li><form id='product_details' action='./single.php' method='GET'>
                                                <input type='hidden' name='image_title' value='{$row['imageTitle']}'/>
                                                <button type='submit' style='padding: 0; border: 0;' name='image_id' value='{$row['id']}'><img src='./PHP/get.php?id={$row['id']}&type=thumbnail' class='img-responsive' alt='' style='width:200px;height:150px;'></button>
                                                <div class='tab_desc'>
                                                    <p>{$row['imageTitle']}</p>
                                                    <h4>id#{$row['id']}</h4>
                                                </div>
                                            </form></li>";
                                        }
                                    }
                                    //}
                                    //Free the result
                                    $result->free();
                                } else {
                                    echo '<br/>Error! SQL query failed:';
                                    echo "<pre>{$dbLink->error}</pre>";
                                }
                                // Close the mysql connection
                                $dbLink->close();
                                ?>
                                <div class="clearfix"></div>
                            </ul>
                        </div>		        					 	        					 
                    </div>	
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="grid_2">
            <div class="container"> 
                <div class="col-md-3 col_2">
                    <h3>Stock Photo<br>Categories</h3>
                </div>
                <div class="col-md-9 col_5">
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Abstract">Abstract</a></li>
                            <li><a href="./stock.php?search_string=Animals">Animals</a></li>
                            <li><a href="./stock.php?search_string=Arts">The Arts</a></li>
                            <li><a href="./stock.php?search_string=Textures">Textures</a></li>
                            <li><a href="./stock.php?search_string=Fashion">Fashion</a></li>
                            <li><a href="./stock.php?search_string=Landmarks">Landmarks</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Business">Business</a></li>
                            <li><a href="./stock.php?search_string=Celebrities">Celebrities</a></li>
                            <li><a href="./stock.php?search_string=Editorial">Editorial</a></li>
                            <li><a href="./stock.php?search_string=Education">Education</a></li>
                            <li><a href="./stock.php?search_string=Food">Food</a></li>
                            <li><a href="./stock.php?search_string=Healthcare">Healthcare</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Holidays">Holidays</a></li>
                            <li><a href="./stock.php?search_string=Illustrations">Illustrations</a></li>
                            <li><a href="./stock.php?search_string=Industrial">Industrial</a></li>
                            <li><a href="./stock.php?search_string=Interiors">Interiors</a></li>
                            <li><a href="./stock.php?search_string=Miscellaneous">Miscellaneous</a></li>
                            <li><a href="./stock.php?search_string=Model">Model</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_5 span_1_of_5">
                        <ul class="list1">
                            <li><a href="./stock.php?search_string=Nature">Nature</a></li>
                            <li><a href="./stock.php?search_string=Objects">Objects</a></li>
                            <li><a href="./stock.php?search_string=Parks">Parks</a></li>
                            <li><a href="./stock.php?search_string=People">People</a></li>
                            <li><a href="./stock.php?search_string=Religion">Religion</a></li>
                            <li><a href="./stock.php?search_string=Science">Science</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
      <?php include("./includes/footer.php");?>
    </body>
</html>		