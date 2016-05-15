<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'app/models/SearchResultsModel.php';
include_once 'Product.php';

class SearchResultsController {
    /* 
     * resultToArray takes a mySQLi result, fetches the rows as objects and
     * creates Product objects to hold the row data. 
     * returns an array of Product objects
     */
    function resultToArray($result){
        $array = array();
        if ($result) {
            while ($obj = mysqli_fetch_object($result)) {
                $product = new Product($obj->Media_Id, $obj->Artist_Id,
                        $obj->Title, $obj->Description, $obj->ThumbNail,
                        $obj->WebPrice, $obj->PrintPrice, $obj->UnlimitedPrice,
                        $obj->Keywords, $obj->BlockStatus);
                array_push($array, $product);
            }
        } else {
            echo "error with db result";
        }
        return $array;
    }
    public static function searchResults($search_string) {
        $model = new SearchResultsModel();
        $result = $model->getAllProductsByKeyword($search_string); 
        return self::resultToArray($result);
    }
    public static function currentPage($search_string, $start_from, $result_limit) {
        $model = new SearchResultsModel();
        $result = $model->getCurrentPage($search_string, $start_from, $result_limit); 
        return self::resultToArray($result);
    }
   
    
    public static function browseAll(){
        $model = new SearchResultsModel();
        $result = $model->getAllProducts(); 
        return self::resultToArray($result);
    }
    
    public static function findLowestPrice(Product $product){
        $webPrice = $product->getWebPrice();
        $printPrice = $product->getPrintPrice();
        $unlimitedPrice = $product->getUnlimitedPrice();
        $type = "";
        if ($webPrice != NULL){
            $lowestPrice = $webPrice;
            $type = "Web";
        }
        if (($printPrice != NULL) && ($webPrice > $printPrice)){
            $lowestPrice = $printPrice;
            $type = "Print";
        }
        if (($unlimitedPrice != NULL) && ($lowestPrice > $unlimitedPrice)){
            $lowestPrice = $unlimitedPrice;
            $type = "Unlimited";
        }
        return array($lowestPrice, $type);
            
    }

}
