<?php

require_once "app/controllers/ImageDetailController.php";
function DisplayData($mediaId) {
    $rowData = ImageDetailController::getImageDataFromController($mediaId);
    return $rowData;
}
function DisplayImage($mediaId){
    $rowData = ImageDetailController::getImageFromController($mediaId);
    $image = $rowData['Media'];
    return $image;
}

?>