<?php

//  Samuel Gluss
//  4-24-2016

include_once dirname(__FILE__) . '/../models/ArtistProfileModel.php';

//  the purpose of the controller is to deliver the necessary data from the model (DB)
//  to whatever view might need it, in an appropriate format
class ArtistProfileController {

    public static function getArtistMediaMetaDataFromController($artistID) {
        //  get all the metadata for one specific artist
        $data = ArtistProfileModel::getMediaMetaDataDataFromDB($artistID);

        //  get data out of mysqli result and put into array for easy parsing
        while ($row = $data->fetch_assoc()) {
            ArtistProfileModel::$DBImageMetaDataCache[] = $row;
        }

        return ArtistProfileModel::$DBImageMetaDataCache;
    }

        public static function getArtistMetaDataFromController($artistID) {
        //  get all the metadata for one specific artist
        $data = ArtistProfileModel::getArtistDataFromDB($artistID);

        //  get data out of mysqli result and put into array for easy parsing
        while ($row = $data->fetch_assoc()) {
            ArtistProfileModel::$DBArtistDataCache[] = $row;
        }

        return ArtistProfileModel::$DBArtistDataCache;
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