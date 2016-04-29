<div class="header">
   <div class="container">
      <div class="logo">
         <h1><a href="index.php">Image Grove</a></h1>
      </div>
      <?php if($home_page != "true") : ?>
      <div class="search">
          <ul class="nav1" style="margin-bottom: 0px;">
            <li id="search">
               <form action="./stock.php" method="get">
                  <input type="text" name="search_string" id="search_text" placeholder="Search"/>
                  <input type="button" name="search_button" id="search_button">
               </form>
            </li>
<!--            <li id="options">
               <a href="#">All Images</a>
               <ul class="subnav">
                  <li><a href="#">Images</a></li>
                  <li><a href="#">Video</a></li>
               </ul>
            </li>-->
         </ul>
      </div>
      <?php endif; ?>
      <div class="top_right">
         <ul>
            <li><a href="index.php">Home</a></li>|
            <li><a href="#">My Account</a></li>|
            <!--<li><a href="register.php">Contact</a></li>|-->
            <li><a href="support.php">Support</a></li>|
            <li><a href="register.php">Login</a></li>
            
         </ul>
      </div>
      <div class="clearfix"></div>
   </div>
</div>