<?php

/*
 * This class consists of methods to fetch data pertaining to an artist from the database.
 * 
 */
class ProductInfoClass {
     
    function ProductInfoClass(){
     require_once "config/dbConnect.php";
     
    }
    function getPriceByLicense($Media_Id, $LicenseType) {
        $conn=  dbConnect();
        $sql = "select Price FROM Media_Metadata WHERE Media_Id=$Media_Id and Licenses=$LicenseType";
        $price = mysqli_query($conn,$sql);
        if ($conn->query($sql) === TRUE) {
      //     echo "Price fetched successfully";
      //  } else {
       //    echo "Error fetching file: " . $conn->error;
       // }
        dbConClose($conn);
        return $price;
    }
    function deleteProductByID($productID) {
        $conn = dbConnect();
        $sql = "DELETE FROM Media_File WHERE Media_Id=$productID";
        $res=mysqli_query($conn,$sql);
        //if ($conn->query($sql) === TRUE) {
        //    echo "Product deleted successfully";
       // } else {
         //   echo "Error deleting Product: " . $conn->error;
       // }
       
        dbConClose($conn);
        return $res;
    }

    /*returns a media file  pertaining to the given productID*/
    function getProductById($productID) {
        require_once 'config/dbConnect.php';
        $conn = dbConnect();
        $sql = "select * FROM Media_File WHERE Media_Id=$productID";
        //if ($conn->query($sql) === TRUE) {
         //   echo "Product displayed successfully";
        //} else {
         //   echo "Error displaying Product: " . $conn->error;
        //}
       $res=mysqli_query($conn,$sql);
        dbConClose($conn);
        return $res;
    }
 /*returns an array of the Thumbnails in the database*/
    function getThumbNails() {
        require_once 'config/dbConnect.php';
        $conn = dbConnect();
        $sql = "select ThumbNail FROM Media_Metadata";
       $res=mysqli_query($conn,$sql);
       // $res = mysql_query($sql);

        //if (mysql_num_rows($res) != 0) { //count the number of rowss
        //   while ($rowData = mysql_fetch_array($res)) {
        //       var_dump($rowData); //get the row data
        // }
        //}

        dbConClose($conn);
        return $res;
    }

    /* returns array of productInfo pertaining to the given productID*/
    function getproductInfo($productID,$LicenseType) {
        $conn = dbConnect();
        $sql = "select Price FROM Media_Metadata WHERE Media_Id=$productID and Licenses=$LicenseType";
        $res=mysqli_query($conn,$sql);
      //  $res = mysql_query($sql);
        //if (mysql_num_rows($res) != 0) { //count the number of rowss
        //   while ($rowData = mysql_fetch_array($res)) {
        //       var_dump($rowData); //get the row data
        // }
        //}
        dbConClose($conn);
        return $res;
    }

}
}
/*
 * use this following approach to fetch data .
$productInfo= new ProductInfoClass; //uncomment to test
$res=$productInfo->getPriceByLicense('291','print');
echo $res;
*/
?>