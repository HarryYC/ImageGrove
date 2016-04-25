<?php
include_once("../../app/controllers/ArtistProfileController.php");

    //  generate a big image
    $rowData = ArtistProfileController::getArtistDataFromController();
    $image = $rowData[0]['Media'];

    header("Content-type: image/jpeg");
    
    echo $image;
?>
