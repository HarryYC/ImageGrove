<?php

//  Samuel Gluss
//  4-24-2016

include_once dirname(__FILE__) . '/../models/ArtistProfileModel.php';

//  the purpose of the controller is to deliver the necessary data from the model (DB)
//  to whatever view might need it, in an appropriate format
class ArtistProfileController {

    public static $imageRowsCache = array();
    public static $image;
    public static $artistMetaData = array();
    public static function getArtistDataFromController() {
        //  this gets the artist id out of the URL
        //  so a URL should be structured like this example:
        //  http://sfsuswe.com/~sgluss/artist-page.php?artistID=53
        $artistID = $_REQUEST['artistID'];
        $data = ArtistProfileModel::getArtistDataFromDB($artistID);

        if (empty(ArtistProfileController::$imageRowsCache)) {
            //  parse the data from the SQL response into an array for easier handling
            while ($row = $data->fetch_assoc()) {
                ArtistProfileController::$imageRowsCache[] = $row;
            }
        }
        return ArtistProfileController::$imageRowsCache;
    }

    public static function getArtistMetaDataFromController($artistID) {
        //  get all the metadata for one specific artist
        $data = ArtistProfileModel::getMediaMetaDataDataFromDB($artistID);

        //  get data out of mysqli result and put into array for easy parsing
        while ($row = $data->fetch_assoc()) {
            ArtistProfileModel::$DBImageMetaDataCache[] = $row;
        }

        return ArtistProfileModel::$DBImageMetaDataCache;
    }

    public static function getMediaFromController($mediaID) {
        //  just get one image file, so no parsing necessary
        $data = ArtistProfileModel::getMediaDataFromDB($mediaID);

        //  get data out of mysqli result and put into array for easy parsing
        while ($row = $data->fetch_assoc()) {
            ArtistProfileModel::$DBImageCache = $row;
        }

        return ArtistProfileModel::$DBImageCache;
    }

}

?>