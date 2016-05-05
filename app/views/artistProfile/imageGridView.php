<?php
//  Samuel Gluss
//  4-24-2016
include_once("app/controllers/ArtistProfileController.php");
include_once("app/controllers/checkArtistLogin.php");
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
                        
                        $retHTML .= "<div class=\"col-sm-3 col-xs-6 portfolio-item-div\"><div style=\"display: inline-block;\"><a href=\"product-details.php?image_title=" . $metaData[$index]['Title'] . "&image_id=" . $metaData[$index]['Media_Id']. "\">";
                        //  this line actually does the image encoding inline, pretty slick
                        $retHTML .= '<img style="height: 140px; width: 200px " class="img-responsive portfolio-item portfolio-custom" src="data:image/jpeg;base64,' . base64_encode( $metaData[$index]['ThumbNail'] ) . '"/>';
                        $retHTML .= "</a>";
                        
                        //  only add delete button if correct artist is logged in
                        if(checkArtistLogin())
                        {
                            $retHTML .= '<button type="button" class="btn btn-danger deleteButton" id="' . $metaData[$index]['Media_Id']. '">Delete</button>';
                        }
                        $retHTML .= '</div></div>';
                        $index++;
                    }
                    $retHTML .= "<br>";
                }
                return $retHTML;
}
?>