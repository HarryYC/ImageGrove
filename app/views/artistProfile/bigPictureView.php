<?php

//  Samuel Gluss
//  4-24-2016
include_once("app/controllers/ArtistProfileController.php");

//  This view is pretty simple. When called, it returns the first image returned from an artist's media list
function getArtistData() {
    $artistID = $_REQUEST['artistID'];
    $metaData = ArtistProfileController::getArtistMetaDataFromController($artistID);
    $mediaID = $metaData[0]['Media_Id'];
    
    $imageData = ArtistProfileController::getMediaFromController($mediaID);
    //var_dump($metaData);
    //  generate a big image from the first image in an artist's portfolio
    $retHTML = "<div><a href=\"product-details.php?image_title=" . $metaData[0]['Title'] . "&image_id=" . $metaData[0]['Media_Id'] . "\">";
    //  this line actually does the image encoding inline, pretty slick
    $retHTML .= '<img class="img-responsive portfolio-item" src="data:image/jpeg;base64,' . base64_encode($imageData['Media']) . '" style="height: 500px; width:750px;" />';
    $retHTML .= "</a></div>";

    return $retHTML;
}

?>