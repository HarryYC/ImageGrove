<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './includes/head.php';?>

        <title>ViewCustomers</title>

    </head><!--/head-->

    <body>
          <?php include './includes/header.php';?>
        <section id="adminList">
                <div class="header-top">
                    <div class="container">
                        <div class="row">  		
                            <div class="col-sm-12">  
                                <a href="adminPage.php"><i class="fa fa-arrow-left"></i></a>                                        
                                <h2 class="title text-center ">List of All Customers</h2>  
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
                                    <td>Amanda</td>
                                    <td><a class="btn btn-link" href="customerAccount.php"/>View Account</td>
                                    <td><a class="btn btn-link" href="blockCustomer.php"/>Block</td>
                                </tr>
                                <tr>
                                    <td>Carter</td>
                                     <td><a class="btn btn-link" href="customerAccount.php"/>View Account</td>
                                    <td><a class ="btn btn-link"href="blockCustomer.php"/>Block</td>
                                </tr>
                                <tr>
                                    <td>Donald</td>
                                     <td><a class="btn btn-link" href="customerAccount.php"/>View Account</td>
                                    <td><a class ="btn btn-link" href="blockCustomer.php"/>Block</td>
                                </tr>
                                <tr>
                                    <td>Freida</td>
                                     <td><a class="btn btn-link" href="customerAccount.php"/>View Account</td>
                                    <td><a class="btn btn-link" href="blockCustomer.php"/>Block</td>
                                </tr>
                                <tr>
                                    <td>Steve</td>
                                     <td><a class="btn btn-link" href="customerAccount.php"/>View Account</td>
                                    <td><a class="btn btn-link" href="blockCustomer.php"/>Block</td>
                                </tr>
                                <tr>
                                    <td>Susan</td>
                                    <td><a class="btn btn-link" href="customerAccount.php"/>View Account</td>
                                    <td><a class="btn btn-link disabled" href="#"/>Block</td>
                                </tr>
                                <tr>
                                    <td class="text-center">Tony</td>
                                     <td><a class="btn btn-link" href="customerAccount.php"/>View Account</td>
                                    <td><a class="btn btn-link disabled" href="#"/>Block</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>       
       
      <?php include './includes/footer.php';?>

        <script src="js/jquery.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>