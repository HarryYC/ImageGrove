<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include './includes/head.php';?>
      <title>ViewArtists</title>
   </head>
   <!--/head-->
   <body>
      <?php include './includes/header.php';?>
      <section id="adminList">
         <div class="header-top">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <a href="adminPage.php"><i class="fa fa-arrow-left"></i></a>                                        
                     <h2 class="title text-center ">List of All Artists</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="userList">
         <div class="container text-center">
            <div class="col-sm-12">
               <table class="table table-hover table-responsive">
                  <tbody>
                     <tr>
                        <td>Daniel</td>
                        <td><a class="btn btn-link" href="artist.php"/>View Profile</td>
                        <td><a class="btn btn-link" href="blockArtist.php"/>Block</td>
                     </tr>
                     <tr>
                        <td>Eddie</td>
                        <td><a class="btn btn-link" href="artist.php"/>View Profile</td>
                        <td><a class ="btn btn-link"href="blockArtist.php"/>Block</td>
                     </tr>
                     <tr>
                        <td>Harry</td>
                        <td><a class="btn btn-link" href="artist.php"/>View Profile</td>
                        <td><a class ="btn btn-link" href="blockArtist.php"/>Block</td>
                     </tr>
                     <tr>
                        <td>Marisa</td>
                        <td><a class="btn btn-link"href="artist.php"/>View Profile</td>
                        <td><a class="btn btn-link" href="blockArtist.php"/>Block</td>
                     </tr>
                     <tr>
                        <td>Meg</td>
                        <td><a class="btn btn-link" href="artist.php"/>View Profile</td>
                        <td><a class="btn btn-link" href="blockArtist.php"/>Block</td>
                     </tr>
                     <tr>
                        <td>Sam</td>
                        <td><a class="btn btn-link" href="artist.php"/>View Profile</td>
                        <td><a class="btn btn-link" href="blockArtist.php"/>Block</td>
                     </tr>
                     <tr>
                        <td class="text-center">Tom</td>
                        <td><a class="btn btn-link" href="#"/>View Profile</td>
                        <td><a class="btn btn-link disabled" href="#"/>Block</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </section>
      </header>
      <?php include './includes/footer.php';?>
      <script src="js/jquery.js"></script>
      <script src="js/price-range.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>
