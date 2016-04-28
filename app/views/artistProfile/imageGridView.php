<?php
//  Samuel Gluss
//  4-24-2016
include_once("app/controllers/ArtistProfileController.php");

// When called, this function generates a grid of images that does not include the first image
// in a portfolio
function generateArtistImageGrid() {
    $retHTML = "";
    // TODO : Sam - make it so that this script will ignore a specified image, other than the first if needed
    
    //  get the first image from the artist controller
    $rowData = ArtistProfileController::getArtistDataFromController();
    
    $artistID = $_GET['artistID'];
    $numImgs = count($rowData);
    
    //  output all but the first image
            $index = 1;
                //  generate a 3x4 grid of images, or all available images
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 4; $j++) {
                        //  terminate once all available images have been printed
                        if($index >= $numImgs)
                        {
                            return $retHTML;
                        }
                        $retHTML .= "<div class=\"col-sm-3 col-xs-6\"><a href=\"#\">";
                        $retHTML .= "<img class=\"img-responsive portfolio-item\" src='./PHP/getImage.php?artistID={$artistID}&index={$index}&type=medium' alt=\"\">";
                        $retHTML .= "</a></div>";
                        $index++;
                    }
                    $retHTML .= "<br>";
                }
                return $retHTML;
}
?>