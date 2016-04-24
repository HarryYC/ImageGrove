<!DOCTYPE HTML>
<html>
    <?php
    $page_title = "Support";
    include("./includes/head.php");
    ?>
    <body>
        <?php $home_page = "false";
        include("./includes/header.php");
        ?>
        <div class="register">
            <div class="container">
                <h2>Contact Us</h2>
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
                                            this.value = 'Email...';
                                        }" style="margin-left: 10px">
                                <input type="text" class="text" value="Subject..." onfocus="this.value = '';" onblur="if (this.value == '') {
                                            this.value = 'Subject...';
                                        }" style="margin-left: 10px">
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

<?php include("./includes/footer.php"); ?>
    </body>
</html>		