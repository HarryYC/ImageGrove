<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include './includes/head.php';?>
      <title>Contact | E-Shopper</title>
   </head>
   <!--/head-->
   <body>
      <?php include './includes/header.php';?>
      <div id="contact-page" class="container">
         <div class="bg">
            <div class="row">
               <div class="col-sm-12">
                  <h2 class="title text-center">Contact <strong>Us</strong></h2>
                  <div id="gmap" class="contact-map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60016.8820117656!2d-122.48517355616427!3d37.76076380011167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7db005c0e281%3A0xa57a7c9f946a45d3!2sSan+Francisco+State+University!5e0!3m2!1sen!2sus!4v1461043585379" width="1100" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
            <br><br><br>
            <div class="row">
               <div class="col-sm-8">
                  <div class="contact-form">
                     <h2 class="title text-center">Get In Touch</h2>
                     <div class="status alert alert-success" style="display: none"></div>
                     <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                        <div class="form-group col-md-6">
                           <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                           <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                           <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                        </div>
                        <div class="form-group col-md-12">
                           <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                           <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                        </div>
                     </form>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="contact-info">
                     <h2 class="title text-center">Contact Info</h2>
                     <address>
                        <p>Image Grove</p>
                        <p>1600 Holloway Avenue</p>
                        <p>San Francisco,CA 94132</p>
                        <p>Phone: +1(415) 338 1111</p>
                        <p>Fax: +1(415) 338 1111</p>
                        <p>Email: info@imagegrove.com</p>
                     </address>
                     <div class="social-networks">
                        <h2 class="title text-center">Social Networking</h2>
                        <ul>
                           <li>
                              <a href="#"><i class="fa fa-facebook"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-youtube"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/#contact-page-->
      <footer id="footer">
         <!--Footer-->
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-sm-2">
                     <div class="companyinfo">
                        <h2><span><img src="images/home/Logo.PNG" alt="ImageGrove" /></span></h2>
                        <p style="padding-left:20px;">The solution to all your image needs</p>
                     </div>
                  </div>
                  <div class="col-sm-3">
                     <div class="address">
                        <img src="images/home/map.png" alt="" />
                        <p>1600 Holloway, San Francisco</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <div class="row">
                  <p class="pull-left">Copyright © 2016 Image Grove. All rights reserved.</p>
               </div>
            </div>
         </div>
      </footer>
      <!--/Footer-->
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
      <script type="text/javascript" src="js/gmaps.js"></script>
      <script src="js/contact.js"></script>
      <script src="js/price-range.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>
