<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include './includes/head.php';?>
      <title>Home</title>
   </head>
   <!--/head-->
   <body>
      <?php include './includes/header.php';?>
      <section id="search-box" >
         <!--search-box-->
         <div class="container">
            <div id="searchbar">
               <form id="search-form" action="./shop.php" method="GET" enctype="multipart/form-data">
                  <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-1 col-lg-8 col-lg-offset-2">
                     <div class="input-group input-group-lg">
                        <input id="searchbox" class="form-control" type="text" placeholder="Search for Images" name="search_string">
                        <span class="input-group-btn">
                        <button id="search-button" type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                        </span>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!--/searchbox-->
      <?php include './includes/footer.php';?>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/price-range.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>
