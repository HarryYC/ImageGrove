<?php


//include_once dirname(__FILE__) . '/../models/ArtistProfileModel.php';
  require_once 'app/models/ImageDetailModel.php';

//  the purpose of the controller is to deliver the necessary data from the model (DB)
//  to whatever view might need it, in an appropriate format
 // include_once dirname(__FILE__) . '/../models/ImageDetailModel.php';
 class ImageDetailController {

    public function __construct() {
        parent::__construct();
    }

    public static function getImageDataFromController($mediaId) {
        $result = ImageDetailModel::getImageDataFromDB($mediaId);
        return $result;
    }

    public static function getImageFromController($mediaId) {
        $result = ImageDetailModel::getImageFromDB($mediaId);
        return $result;
    }

}

?>

