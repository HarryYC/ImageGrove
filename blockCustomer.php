<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include './includes/head.php';?>
      <title>BlockCustomer</title>
   </head>
   <!--/head-->
   <body>
      <?php include './includes/header.php';?>
      <section id="adminList">
         <div class="header-top">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <a href="viewCustomers.php"><i class="fa fa-arrow-left"></i></a>                                
                     <h2 class="title text-center ">Block A Customer</h2>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="BlockPage">
         <div class="container">
            <div class ="row">
               <div class="col-sm-3"></div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <label for="reason">Reason:</label>
                     <textarea class="form-control text-center" rows="5" id="reason"></textarea>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="header-middle">
         <div class="container">
            <div class="row">
               <div class="col-sm-3"></div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <!-- Form code begins -->
                  <form method="post">
                     <div class="form-group">
                        <!-- Date input -->
                        <label class="control-label" for="date">Block until</label>
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                     </div>
                     <div class="form-group">
                        <!-- Submit button -->
                        <button class="btn btn-primary " name="submit" type="submit">Submit</button>
                     </div>
                  </form>
                  <!-- Form code ends --> 
               </div>
            </div>
         </div>
      </div>
      </header>
      <?php include './includes/footer.php';?>
      <script src="js/jquery.js"></script>
      <script src="js/price-range.js"></script>
      <script src="js/jquery.scrollUp.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.prettyPhoto.js"></script>
      <script src="js/main.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
      <script>
         $(document).ready(function () {
             var date_input = $('input[name="date"]'); //our date input has the name "date"
             var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
             date_input.datepicker({
                 format: 'mm/dd/yyyy',
                 container: container,
                 todayHighlight: true,
                 autoclose: true,
             })
         })
      </script>
   </body>
</html>
