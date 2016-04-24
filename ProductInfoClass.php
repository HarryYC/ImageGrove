<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ProductInfoClass {

    function getPriceByLicense($Media_Id, $LicenseType) {
        require_once "config/dbConnect.php";
        $conn = dbConnect();
        $sql = "select Price FROM Media_File WHERE Media_Id=$Media_Id and Licenses=$LicenseType";
        $price = mysqli_query($conn,$sql);
       // if ($conn->query($sql) === TRUE) {
       //     echo "Price fetched successfully";
       // } else {
       //     echo "Error fetching file: " . $conn->error;
       // }
        dbConClose($conn);
        return $price;
    }

    //function uploadImage() {
    //}

    function deleteProductByID($productID) {
        require_once "config/dbConnect.php";
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

    function getproductInfo() {
        require_once 'config/dbConnect.php';
        $conn = dbConnect();
        $sql = "select * FROM Media_Metadata where ";
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

?>