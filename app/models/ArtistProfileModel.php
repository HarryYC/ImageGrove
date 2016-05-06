<?php

//  Samuel Gluss
//  4-24-2016
include_once dirname(__FILE__) . '/../../dbConnect.php';

class ArtistProfileModel {

    // TODO: SAM - our DB connect code is completely #$%@ed, so all connections in this file are manually established
    //      On the plus side, they are using Meg's config file so security is not an issue
    //      MEG - maybe teach sam how to do this correctly :)
//  This cache will not work if the data changes in the database
    public static $DBArtistDataCache = array();
    public static $DBImageCache = array();
    public static $DBImageMetaDataCache = array();

    public static function getArtistDataFromDB($artistID) {
        // Connect to the database
        $config = parse_ini_file('../config/config.ini');
        $dbLink = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

        if (mysqli_connect_errno()) {
            die("MySQL connection failed: " . mysqli_connect_error());
        }
        $artistID = mysqli_real_escape_string($dbLink, $artistID);

        //  This query gets all the relevant artist metadata that might be displayed on the artist page
        $sql = "SELECT Name, ArtistDesc, BlockStatus FROM `Artists` WHERE Artist_Id = {$artistID}";

        //  if the appropriate data was already cached, just use it. Otherwise, query the DB
        if (array_key_exists($sql, ArtistProfileModel::$DBArtistDataCache)) {
            $result = ArtistProfileModel::$DBArtistDataCache[$sql];
        } else {
            $result = $dbLink->query($sql);
            ArtistProfileModel::$DBArtistDataCache[$sql] = $result;
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

    public static function removeMediaDataFromDB($mediaID) {
        //  this code does not remove row from Orders Table which corresponds to Order_Media row which is removed
        //  Probably will never be fixed
        
        ArtistProfileModel::deleteMedia($mediaID,"Media_Metadata");
        ArtistProfileModel::deleteMedia($mediaID,"Order_Media");
        ArtistProfileModel::deleteMedia($mediaID,"Media_File");
    }

    private function deleteMedia($mediaID, $table)
    {
        // Connect to the database
        $config = parse_ini_file(dirname(__FILE__) . '/../../../config/config.ini');
        $dbLink = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

        if (mysqli_connect_errno()) {
            die("MySQL connection failed: " . mysqli_connect_error());
        }
        $mediaID = mysqli_real_escape_string($dbLink, $mediaID);

        $sql = "DELETE FROM {$table} WHERE Media_Id={$mediaID}";

        if (mysqli_query($dbLink, $sql)) {
            echo "Record deleted successfully" . "<br>";
        } else {
            echo "Error deleting record: " . mysqli_error($dbLink) . "<br>";
        }

        //  close connection, necessary to allow the class to be used again
        dbConClose($dbLink);
    }
    
}

?>
