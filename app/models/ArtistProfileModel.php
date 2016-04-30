<?php

//  Samuel Gluss
//  4-24-2016
include_once dirname(__FILE__) . '/../../dbConnect.php';

class ArtistProfileModel {
    
    // TODO: SAM - our DB connect code is completely #$%@ed, so all connections in this file are manually established
    //      On the plus side, they are using Meg's config file so security is not an issue
    //      MEG - maybe teach sam how to do this correctly :)
    
//  This cache will not work if the data changes in the database
    public static $DBCache = array();
    public static $DBImageCache = array();
    public static $DBImageMetaDataCache = array();

    //  This extremely wasteful method is now DEPRECATED
    //  DO NOT USE IT
    //  thanks, the management
    public static function getArtistDataFromDB($artistID) {
        // Connect to the database
        $config = parse_ini_file('../config/config.ini');
        $dbLink = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
        
        if (mysqli_connect_errno()) {
            die("MySQL connection failed: " . mysqli_connect_error());
        }
        $artistID = mysqli_real_escape_string($dbLink, $artistID);
        
        // This query is kinda gnarly
        // it gets all items from the Media_Metadata table which matches the artist ID
        // it also obtains all images from the Media_File table which have Media_Id's present in the matched Media_Metadata entries
        $sql = "SELECT * FROM `Media_Metadata` INNER JOIN `Media_File` ON `Media_Metadata`.Media_Id=`Media_File`.Media_Id WHERE Artist_Id = {$artistID}";

        //  if the appropriate data was already cached, just use it. Otherwise, query the DB
        if (array_key_exists($sql, ArtistProfileModel::$DBCache)) {
            $result = ArtistProfileModel::$DBCache[$sql];
        } else {
            $result = $dbLink->query($sql);
            ArtistProfileModel::$DBCache[$sql] = $result;
        }

        //  close connection, necessary to allow the class to be used again
        dbConClose($dbLink);

        return $result;
    }

    public static function getMediaMetaDataDataFromDB($artistID) {
        // Connect to the database
        $config = parse_ini_file('../config/config.ini');
        $dbLink = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
        
        if (mysqli_connect_errno()) {
            die("MySQL connection failed: " . mysqli_connect_error());
        }
        $artistID = mysqli_real_escape_string($dbLink, $artistID);

        $sql = "SELECT * FROM `Media_Metadata` WHERE Artist_Id = {$artistID}";

        //  if the appropriate data was already cached, just use it. Otherwise, query the DB
        if (array_key_exists($sql, ArtistProfileModel::$DBImageMetaDataCache)) {
            $result = ArtistProfileModel::$DBImageMetaDataCache[$sql];
        } else {
            $result = $dbLink->query($sql);
            ArtistProfileModel::$DBImageMetaDataCache[$sql] = $result;
        }
        //  close connection, necessary to allow the class to be used again
        dbConClose($dbLink);

        return $result;
    }

    public static function getMediaDataFromDB($mediaID) {
        // Connect to the database
        $config = parse_ini_file('../config/config.ini');
        $dbLink = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

        if (mysqli_connect_errno()) {
            die("MySQL connection failed: " . mysqli_connect_error());
        }
        $mediaID = mysqli_real_escape_string($dbLink, $mediaID);

        $sql = "SELECT Media FROM `Media_File` WHERE Media_Id = {$mediaID}";

        //  if the appropriate data was already cached, just use it. Otherwise, query the DB
        if (array_key_exists($sql, ArtistProfileModel::$DBImageCache)) {
            $result = ArtistProfileModel::$DBImageCache[$sql];
        } else {
            $result = $dbLink->query($sql);
            ArtistProfileModel::$DBImageCache[$sql] = $result;
        }
        //  close connection, necessary to allow the class to be used again
        dbConClose($dbLink);

        return $result;
    }

    public static function pushImageDataToDB($artistID) {
        
    }

}

?>