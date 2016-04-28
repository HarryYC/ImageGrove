<?php

include_once dirname(__FILE__) . '/../app/controllers/ArtistProfileController.php';

    //  get the first image from the artist controller
    $rowData = ArtistProfileController::getArtistDataFromController();
    $index = $_GET['index'];
    $image = $rowData[$index]['Media'];

    header("Content-type: image/jpeg");
    
    echo $image;
?>
