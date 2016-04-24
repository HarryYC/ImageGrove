<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include './includes/head.php';?>
      <title>AdminPage</title>
   </head>
   <!--/head-->
   <body>
      <?php include './includes/header.php';?>
      <section id="adminList">
         <div class="header-top">
            <div class="container ">
               <div class="row">
                  <div class="col-sm-12">
                     <h2 class="title text-center ">Welcome To Admin Page</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="container ">
         <div class="adminList">
            <div class="list-group">
               <a href="viewArtists.php" class="list-group-item ">View Artists</a>
               <a href="viewCustomers.php" class="list-group-item ">View Customers</a>
               <a href="blockArtist.php" class="list-group-item ">Block an Artist</a>
               <a href="blockCustomer.php" class="list-group-item ">Block a Customer</a>
            </div>
         </div>
      </div>
      <?php include './includes/footer.php';?>
      <script src="js/jquery.js"></script>
      <script src="js/price-range.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>