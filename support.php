<!DOCTYPE HTML>
<html>
    <?php
    $page_title = "Support";
    include("./includes/head.php");
    ?>
    <body>
        <?php $home_page = "false";
        include("./includes/header.php"); ?>
        <div class="register">
            <div class="container">
                <div class="col-md-9 col_3">
                    <h2>SUPPORT</h2>
                </div>
                <div class="map">
                    <iframe width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=SFSU&amp;aq=4&amp;oq=light&amp;sll=37.7219012,-122.4803981&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=SFSU&amp;t=m&amp;z=14&amp;ll=37.7219012,-122.4803981&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=SFSU&amp;aq=4&amp;oq=light&amp;sll=37.7219012,-122.4803981&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=SFSU&amp;t=m&amp;z=14&amp;ll=37.7219012,-122.4803981" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
                </div>
                <div class="section group">
                    <div class="col-md-9 support_left">
                        <h3>Contact Form</h3>
                        <form>
                            <div class="contact-to">
                                <input type="text" class="text" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Name...';
                                        }">
                                <input type="text" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Email...';}" style="margin-left: 10px">
                                <input type="text" class="text" value="Subject..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Subject...';}" style="margin-left: 10px">
                            </div>
                            <div class="text2">
                                <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Message';
                                        }">Message..</textarea>
                            </div>
                            <span><input type="submit" class="" value="Submit"></span>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <div class="col-md-3 support_right">
                        <h3>Contact Info</h3>
                        <div class="address">
                            <p>1600 Holloway,</p>
                            <p>San Francisco, CA,</p>
                            <p>USA</p>
                            <p>Phone : 1 415 555 1600</p>
                            <p>Fax : 1 415 555 1601</p>
                            <p>Email : <span>support@imagegrove.com</span></p>
                            <p>Follow on : <span>Facebook</span>, <span>Twitter</span></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>	
                </div>
            </div>
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
<?php include("./includes/footer.php"); ?>
    </body>
</html>		