<?php
//  Samuel Gluss
//  4-24-2016
include_once("app/controllers/ArtistProfileController.php");
// When called, this function generates a grid of images that does not include the first image
// in a portfolio
function generateArtistImageGrid() {
    $retHTML = "";
    // TODO : Sam - make it so that this script will ignore a specified image, other than the first if needed
    
    //  get the necessary metadata (including thumbnails) from the artist controller
    //  this will allow thumbnail generation and proper linking to associated image details pages
    $artistID = $_REQUEST['artistID'];
    $metaData = ArtistProfileController::getArtistMetaDataFromController($artistID);    
    //  please note the -1 decrement here. Not exactly sure why the count is off, but it is consistent for all artists
    $numImgs = count($metaData) - 1;
    
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
                        
                        $retHTML .= "<div class=\"col-sm-3 col-xs-6\"><a href=\"product-details.php?image_title=" . $metaData[$index]['Title'] . "&image_id=" . $metaData[$index]['Media_Id']. "\">";
                        //  this line actually does the image encoding inline, pretty slick
                        $retHTML .= '<img style="height: 140px; width: 200px " class="img-responsive portfolio-item" src="data:image/jpeg;base64,' . base64_encode( $metaData[$index]['ThumbNail'] ) . '"/>';
                        $retHTML .= "</a></div>";
                        $index++;
                    }
                    $retHTML .= "<br>";
                }
                return $retHTML;
}
?>