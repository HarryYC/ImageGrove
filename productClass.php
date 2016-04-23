<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ProductFactory {

    function chooseLicense($type) {
         //require_once "config/dbConnect.php";
         
        
    }

    function uploadImage() {
        
    }

    function deleteProduct($productID) {
        require_once "config/dbConnect.php";
        $conn=dbConnect();
        $sql = "DELETE FROM Media_File WHERE Media_Id=$productID";
        if ($conn->query($sql) === TRUE) {
            echo "Product deleted successfully";
        } else {
            echo "Error deleting Product: " . $conn->error;
        }

        dbConClose($conn);
    }

    function displayProduct($productID) {
        require_once 'config/dbConnect.php'; 
        $conn=dbConnect();
        $sql = "select * FROM Media_File WHERE Media_Id=$productID";
        if ($conn->query($sql) === TRUE) {
            echo "Product displayed successfully";
        } else {
            echo "Error displaying Product: " . $conn->error;
        }

        dbConClose($conn);
        
        
    }
    function displayProducts() {
        //require_once 'config/dbConnect.php';
       

}
}
?>