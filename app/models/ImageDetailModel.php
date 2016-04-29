<?php

class ImageDetailModel {

    public static function getImageFromDB($mediaId) {
        // Connect to the database
        //include_once dirname(__FILE__) . '/../models/ArtistProfileModel.php';
      
        require_once '../../dbConnect.php';
        $conn = dbConnect();
        $sql = "SELECT Media FROM Media_File WHERE Media_Id =$mediaId";
        $res = mysqli_query($conn, $sql);
        $details = mysqli_fetch_array($res);
        return $details;
    }
        public static function getImageDataFromDB($mediaId) {
        // Connect to the database
        require_once '../../dbConnect.php';
        $conn = dbConnect();
        $sql = "SELECT * FROM Media_Metadata INNER JOIN Artists ON 
              Artists.Artist_Id = Media_Metadata.Artist_Id WHERE Media_Metadata.Media_Id =$mediaId";
        $res = mysqli_query($conn, $sql);
        $details = mysqli_fetch_array($res);
        return $details;
    }

    
}
//$productInfo= new ImageDetailModel; //uncomment to test
//$res1=$productInfo->getImageDataFromDB('291');
//     print_r($res1);
//$res=$productInfo->getImageFromDB('291');
//$image = $res['Media'];
//    header("Content-type: image/jpeg");
//     echo $image;
     