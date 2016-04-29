<?php

//  Samuel Gluss
//  4-24-2016

class ArtistProfileModel {

//  This cache will not work if the data changes in the database
    public static $DBCache = array();

    public static function getArtistDataFromDB($artistID) {
        // Connect to the database
        $dbLink = new mysqli('sfsuswe.com', 's16g07', 'team7db', 'student_s16g07');
        //$dbLink = new mysqli('sfsuswe.com', 'earaujo', 'swes2016db', 'student_earaujo');
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
        return $result;
    }
    
     public static function pushImageDataToDB($artistID)
     {
         
     }
}
?>