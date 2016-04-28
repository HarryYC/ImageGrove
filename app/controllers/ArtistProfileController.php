<?php

//  Samuel Gluss
//  4-24-2016

include_once dirname(__FILE__) . '/../models/ArtistProfileModel.php';

//  the purpose of the controller is to deliver the necessary data from the model (DB)
//  to whatever view might need it, in an appropriate format
class ArtistProfileController {
    
    public function __construct() {
        parent::__construct();
    }

    public static function getArtistDataFromController() {
        //  this gets the artist id out of the URL
        //  so a URL should be structured like this example:
        //  http://sfsuswe.com/~sgluss/artist-page.php?artistID=53
        $artistID = $_REQUEST['artistID'];
        $data = ArtistProfileModel::getArtistDataFromDB($artistID);
        
        $imageRows = array();
        
        //  parse the data from the SQL response into an array for easier handling
        while ($row = $data->fetch_assoc())
        {
            $imageRows[] = $row;
        }
        
        return $imageRows;
    }

}

?>