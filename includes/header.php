<nav id="nav-bar" class="navbar navbar-fixed-top" role="navigation">
   <div class="container">
   <div class="navbar-header">
      <a href="index.php"><img class="navbar-brand" src="/~s16g07/images/logo.png"></a>
   </div>
   
   <?php if($home_page != "true") : ?>
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
         <form id="searchForm" class="navbar-form navbar-left" role="search" action="./stock.php" onsubmit="return validateForm()" method="GET">
            <div class="form-group has-feedback">
               <div class="input-group">
                  <input class="form-control" placeholder="Search for photos" type="text" name="search_string" id="searchbar" value="">
                  <div class="input-group-btn">
                     <button id="search_button" type="submit" >
                     <i style="color:white;"></i>
                     </button>
                  </div>
               </div>
            </div>
         </form>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php endif; ?>
      <div class="top_right">
         <ul>
            <?php
               if (!isset($_SESSION['email'])) {
                   echo '            
                                     <li><a href="index.php">Home</a></li>|
                                     <li><a href="#">My Account</a></li>|
                                     <!--<li><a href="register.php">Contact</a></li>|-->
                                     <li><a href="support.php">Support</a></li>|
                                     <li><a href="register.php">Sign in</a></li>
                                     ';
               } else {
                   echo '            
                                     <li><a href="index.php">Home</a></li>|
                                     <li><a href="#">My Account</a></li>|
                                     <!--<li><a href="register.php">Contact</a></li>|-->
                                     <li><a href="support.php">Support</a></li>|
                                     <li><a href="?signout=1">Sign out</a></li>
                                     ';
               }
               echo '</ul></div>';
               ?>
         </ul>
      </div>
   </div>
</nav>
