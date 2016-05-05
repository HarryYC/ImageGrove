<!-- OVERALL REVIEW (Marisa): Overall, the code looks good. Just some minor things were off. -->
<!DOCTYPE html>
<html lang="en">
    <?php
    $page_title = "product-details";
    include("./includes/head.php");
    include("app/views/imageDetails/imageDetailView.php");
    /* 
    *   REVIEW (Marisa): The image IDs will be sent from stock.php as an array. Therefore
    *   the following $_GET variables will have to change accordingly. The array is called
    *   "compare" and can be accessed through $_GET['compare'].
    */
    $mediaId1 = $_GET['image_id'];
    $mediaId2 = $_GET['image_id2'];
    $imageDetails = DisplayData($mediaId1);
    $imageDetails2 = DisplayData($mediaId2);
    ?>
    <?php
    $home_page = "false";
    include("./includes/header.php");
    ?>
    <div class="container">
        <a href="stock.php"><h4>Back</h4></a>
        <div class="row">
            <div class="col-sm-6">
                <h2 class="title text-left"><?php echo $imageDetails['Title']; ?></h2>

                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-6">
                        <div class="view-product">
                            <img style='height: 100%; width: 100%; object-fit: contain' src="data:image/jpeg;base64,<?php echo base64_encode(DisplayImage($mediaId1)); ?>" />  
                        </div>
                    </div>
                </div>
                <!--/product-details-->
                <div class="container">
                    <div class="row">
                        <span style="color:black;">
                            <div><b>ArtistName: </b><?php echo "{$imageDetails['UserName']}" ?></div>
                            <div><b>Web ID: </b><?php echo "{$imageDetails['Media_Id']}" ?></div>
                            <div><b>Description: </b><?php echo "{$imageDetails['Description']}" ?></div>
                            <div style="padding: 12px"> </div>
                            <div><b>Pricing:</b></div>
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="optradio">WebPrice:$<?php echo "{$imageDetails['WebPrice']}" ?></label>
                            </div>
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="optradio">PrintPrice:$<?php echo "{$imageDetails['PrintPrice']}" ?></label>
                            </div>
                            <!-- REVIEW (Marisa): Is this button disabled because Unlimited Price column is NULL in the DB? -->
                            <div class="radio disabled">
                                <label class="radio-inline"><input type="radio" name="optradio">UnlimitedPrice:$<?php echo "{$imageDetails['UnlimitedPrice']}" ?></label><br>  
                            </div>
                        </span> 
                        <div >
                            <button align =center type="button" class="btn btn-primary btn-sm" onclick='buyAlert()'>
                                Buy
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <h2 class="title text-left"><?php echo $imageDetails2['Title']; ?></h2>
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-6">
                        <div class="view-product">
                            <img style='height: 100%; width: 100%; object-fit: contain' src="data:image/jpeg;base64,<?php echo base64_encode(DisplayImage($mediaId2)); ?>" />  
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <span style="color:black;">
                            <div><b>ArtistName: </b><?php echo "{$imageDetails2['UserName']}" ?></div>
                            <div><b>Web ID: </b><?php echo "{$imageDetails2['Media_Id']}" ?></div>
                            <div><b>Description: </b><?php echo "{$imageDetails2['Description']}" ?></div>
                            <div style="padding: 12px"> </div>
                            <div><b>Pricing:</b></div>
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="optradio">WebPrice:$<?php echo "{$imageDetails['WebPrice']}" ?></label>
                            </div>
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="optradio">PrintPrice:$<?php echo "{$imageDetails['PrintPrice']}" ?></label>
                            </div>
                            <div class="radio disabled">
                                <label class="radio-inline"><input type="radio" name="optradio">UnlimitedPrice:$<?php echo "{$imageDetails['UnlimitedPrice']}" ?></label><br>  
                            </div>
                        </span> 
                        <div class="col-sm-12 col-lg-offset-3">
                            <button align =center type="button" class="btn btn-primary btn-sm" onclick='buyAlert()'>
                                Buy
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include './includes/footer.php'; ?>
<script src="js/jquery.js"></script>
<script src="js/price-range.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
<script>
                        function purchaseAlert() {
                            alert("Thank you for purchasing.");
                        }
                        function buyAlert() {
                            alert("Please contact us via the Contact link above to put in an order for this item.");
                        }
</script>
</body>
</html>

