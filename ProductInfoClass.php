<?php

/*
 * This class consists of methods to fetch data pertaining to an artist from the database.
 */
require_once 'dbConnect.php';
require_once 'Product.php';

class ProductInfo {

    private $res;

    public function __construct() {
        $this->_conn = dbConnect();
    }

//function uploadImage() {
// $sql = "INSERT ";
//}
    /*
     * executeQuery performs the query to the database based on the parameter
     * '$sql' 
     * returns the result as an associative array. 
     */
    function executeQuery($sql) {
        $res = mysqli_query($this->_conn, $sql);
        if ($res) {
            return mysqli_fetch_array($res, MYSQLI_ASSOC);
        } else {
            echo "error with db query";
        }
    }

    /* getProductById retrieves the product blob file from the Media_File table in
      the database
      returns selected row in database table as an associative array */

    function getProductById($productID) {
        $sql = "select * FROM Media_File WHERE Media_Id=$productID";
        return self::executeQuery($sql);
    }

    /* getProductMetadataById retrieves the product columns based on id from 
     * the Media_Metadata table in the database.
     * returns selected row in database table as an associative array. 
     */

    function getProductMetadataById($productID) {
        $sql = "select * FROM Media_Metadata WHERE Media_Id=$productID";
        return self::executeQuery($sql);
    }

    /* getPriceByLicense retrieves the product from the Media_Metadata table in
     * the database
     * returns selected row in database table as an associative array 
     */

    function getPriceByLicense($Media_Id, $LicenseType) {
        $sql = "select Price FROM Media_Metadata WHERE Media_Id=$Media_Id and Licenses=$LicenseType";
        return self::executeQuery($sql);
    }

    function getThumbNailsById($productId) {
        $sql = "select ThumbNail FROM Media_Metadata WHERE Media_Id=$productId";
        return self::executeQuery($sql);
    }

//    function getAllProducts() {
//        $sql = "select * FROM Media_Metadata";
//        return self::executeQuery($sql);
//    }

    function getAllProductsByKeyword($keyword) {
        $listOfProducts = array();
        $sql = "SELECT * FROM `Media_Metadata` WHERE description LIKE '%{$keyword}%'";
        $res = mysqli_query($this->_conn, $sql);
        if ($res) {
            while ($obj = mysqli_fetch_object($res)) {
                $product = new Product($obj->Media_Id, $obj->Artist_Id
                        , $obj->Title, $obj->Description, $obj->ThumbNail, $obj->Price, $obj->Keywords
                        , $obj->Licenses, $obj->BlockStatus);
                array_push($listOfProducts, $product);
            }
        } else {
            echo "error with db query";
        }
        return $listOfProducts;
    }

    function deleteProductByID($productID) {
        $sql = "DELETE FROM Media_File WHERE Media_Id=$productID";
        return self::executeQuery($sql);
    }

    function closeDBConnection() {
        //echo "closing connection";
        //$this->res->free();
        $this->_conn->close();
    }

}

?>