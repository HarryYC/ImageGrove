<!DOCTYPE html>
<html lang="en">
    <?php
    $page_title = "product-details";
    include("./includes/head.php");
    include("app/views/imageDetails/imageDetailView.php");
    $mediaId = $_GET['image_id'];
    $imageDetails = DisplayData($mediaId);

    $home_page = "false";
    include("./includes/header.php");

    if (isset($_GET['search_string'])) {
        $back_link = "stock.php?search_string={$_GET['search_string']}";
    } else {
        $back_link = "./index.php";
    }
    ?>

    <div class="container" style="margin-top: 70px;">
        <a href="<?php echo $back_link; ?>"><h4>Back</h4></a>
        <div class="row">
            <div class="col-md-8">
                <img style='height: 500px; width: 750px; object-fit: contain' src="data:image/jpeg;base64,<?php echo base64_encode(DisplayImage($mediaId)); ?>" />
            </div>
            <div class="col-md-4">
                <h2 class="title text-center"><?php echo ucfirst($imageDetails['Title']); ?></h2>
                <div class="col-sm-8">
                    <!--/product-details-->
                    <div class="container" >
                        <div class="row">
                            <div style="color:black;">
                                <div><b>Artist Name: </b><?php echo "<a href=\"artist-page.php?artistID={$imageDetails['Artist_Id']}\">{$imageDetails['UserName']}</a>" ?></div>
                                <div><b>Web ID: </b><?php echo "{$imageDetails['Media_Id']}" ?></div>
                                <div><b>Description: </b><?php echo "{$imageDetails['Description']}" ?></div>
                                <div><b>Pricing:</b></div>
                                <?php if ($imageDetails['WebPrice'] != NULL) : ?>
                                    <div class="radio" style="margin-top:5px; padding-left: 0px;">
                                        <label class="radio-inline"><input type="radio" name="optradio">Web Price:$<?php echo "{$imageDetails['WebPrice']}" ?></label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($imageDetails['PrintPrice'] != NULL) : ?>
                                    <div class="radio" style="margin-top:5px; padding-left: 0px;">
                                        <label class="radio-inline"><input type="radio" name="optradio">Print Price:$<?php echo "{$imageDetails['PrintPrice']}" ?></label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($imageDetails['UnlimitedPrice'] != NULL) : ?>
                                    <div class="radio disabled" style="margin-top:5px; padding-left: 0px;">
                                        <label class="radio-inline"><input type="radio" name="optradio">Unlimited Price:$<?php echo "{$imageDetails['UnlimitedPrice']}" ?></label><br>  
                                    </div>
                                <?php endif; ?>
                            </div> 
                            <div text-align-left>
                                <button align =center type="button" class="btn btn-primary btn-sm" data-toggle='modal' data-target='#buyModal'>Buy this Photo</button>
                            </div>
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
<?php
//  code to show modal
include("app/views/imageDetails/buyModal.php");
?>
</body>
</html>