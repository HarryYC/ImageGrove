<!-- OVERALL REVIEW (Marisa): Overall, the code looks good. Just some minor things were off. -->
<!DOCTYPE html>
<html lang="en">
    <?php
    $page_title = "Image Compare";
    include("./includes/head.php");
    include("app/views/imageDetails/imageDetailView.php");

    /* 
    *   REVIEW (Marisa): The image IDs will be sent from stock.php as an array. Therefore
    *   the following $_GET variables will have to change accordingly. The array is called
    *   "compare" and can be accessed through $_GET['compare'].
    */
    
   // $mediaId1 = $_GET['image_id']; 
   // $mediaId2 = $_GET['image_id2'];
    //incorporating the changes according to the review to enable the integration
    $array = $_GET['compare'];
    $mediaId1 = $array[0];
    $mediaId2 = $array[1];

    $imageDetails = DisplayData($mediaId1);
    $imageDetails2 = DisplayData($mediaId2);
    ?>
    <?php
    $home_page = "false";
    include("./includes/header.php");
    ?>
    <div class="container" style="margin-top: 70px;">
        <a href="stock.php"><h4>Back</h4></a>
        <div class="row">
            <div class="col-sm-6"><h2>Image Comparison</h2></div>
        </div>
        <div class="row">
            <div class="table-responsive">          
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="col-sm-4"><img style='height: 400px; width: 350px; object-fit: contain' src="data:image/jpeg;base64,<?php echo base64_encode(DisplayImage($mediaId1)); ?>" />  </th>
                            <th class="col-sm-4"><img style='height: 400px; width: 350px; object-fit: contain' src="data:image/jpeg;base64,<?php echo base64_encode(DisplayImage($mediaId2)); ?>" />  </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-3">Title</td>
                            <td><?php echo ucfirst($imageDetails['Title']); ?></td>
                            <td><?php echo ucfirst($imageDetails2['Title']); ?></td>
                        </tr>
                        <tr>
                            <td>Artist</td>
                            <td><?php echo $imageDetails['UserName']; ?></td>
                            <td><?php echo $imageDetails2['UserName']; ?></td>
                        </tr>
                        <tr>
                            <td>ID #</td>
                            <td><?php echo $imageDetails['Media_Id']; ?></td>
                            <td><?php echo $imageDetails2['Media_Id']; ?></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><?php echo $imageDetails['Description']; ?></td>
                            <td><?php echo $imageDetails2['Description']; ?></td>
                        </tr>
                        <tr>
                            <td>Web Price</td>
                            <?php
                            if ($imageDetails['WebPrice'] != NULL) {
                                echo "<td>$" . $imageDetails['WebPrice'] . "</td>";
                            } else {
                                echo "<td>Not Available</td>";
                            }
                            if ($imageDetails2['WebPrice'] != NULL) {
                                echo "<td>$" . $imageDetails2['WebPrice'] . "</td>";
                            } else {
                                echo "<td>Not Available</td>";
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>Print Price</td>
                            <?php
                            if ($imageDetails['PrintPrice'] != NULL) {
                                echo "<td>$" . $imageDetails['PrintPrice'] . "</td>";
                            } else {
                                echo "<td>Not Available</td>";
                            }
                            if ($imageDetails2['PrintPrice'] != NULL) {
                                echo "<td>$" . $imageDetails2['PrintPrice'] . "</td>";
                            } else {
                                echo "<td>Not Available</td>";
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>Unlimited Price</td>
                            <?php
                            if ($imageDetails['UnlimitedPrice'] != NULL) {
                                echo "<td>$" . $imageDetails['UnlimitedPrice'] . "</td>";
                            } else {
                                echo "<td>Not Available</td>";
                            }
                            if ($imageDetails2['UnlimitedPrice'] != NULL) {
                                echo "<td>$" . $imageDetails2['UnlimitedPrice'] . "</td>";
                            } else {
                                echo "<td>Not Available</td>";
                            }
                            ?>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <?php if ($imageDetails['WebPrice'] != NULL) : ?>
                                    <div class="radio" style="margin-top:5px; padding-left: 0px;">
                                        <label class="radio-inline"><input type="radio" name="optradio">Web Price: $<?php echo "{$imageDetails['WebPrice']}" ?></label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($imageDetails['PrintPrice'] != NULL) : ?>
                                    <div class="radio" style="margin-top:5px; padding-left: 0px;">
                                        <label class="radio-inline"><input type="radio" name="optradio">Print Price: $<?php echo "{$imageDetails['PrintPrice']}" ?></label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($imageDetails['UnlimitedPrice'] != NULL) : ?>
                                    <div class="radio" style="margin-top:5px; padding-left: 0px;">
                                        <label class="radio-inline"><input type="radio" name="optradio">Unlimited Price: $<?php echo "{$imageDetails['UnlimitedPrice']}" ?></label><br>  
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($imageDetails2['WebPrice'] != NULL) : ?>
                                    <div class="radio" style="margin-top:5px; padding-left: 0px;">
                                        <label class="radio-inline"><input type="radio" name="optradio">Web Price: $<?php echo "{$imageDetails2['WebPrice']}" ?></label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($imageDetails2['PrintPrice'] != NULL) : ?>
                                    <div class="radio" style="margin-top:5px; padding-left: 0px;">
                                        <label class="radio-inline"><input type="radio" name="optradio">Print Price: $<?php echo "{$imageDetails2['PrintPrice']}" ?></label>
                                    </div>
                                <?php endif; ?>
                                <?php if ($imageDetails2['UnlimitedPrice'] != NULL) : ?>
                                    <div class="radio" style="margin-top:5px; padding-left: 0px;">
                                        <label class="radio-inline"><input type="radio" name="optradio">Unlimited Price: $<?php echo "{$imageDetails2['UnlimitedPrice']}" ?></label><br>  
                                    </div>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr><td></td>
                            <td>
                                <button style='margin:15px 0 0 0; padding: 6px 18px;' type='button' class='btn_3' data-toggle='modal' data-target='#buyModal'>Buy</button>
                            </td>
                            <td>
                                <button style='margin:15px 0 0 0; padding: 6px 18px;' type='button' class='btn_3' data-toggle='modal' data-target='#buyModal'>Buy</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div></div>


    <?php
    include("app/views/imageDetails/buyModal.php");
    ?> 
    <?php include './includes/footer.php'; ?>
    <script src="js/jquery.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

