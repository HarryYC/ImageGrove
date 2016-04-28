<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Models/SearchResultsModel.php';
include_once '../../Product.php';

class SearchResultsController {

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
            echo "error with db query";
        }
        return $array;
    }
    public static function searchResults($search_string) {
        $model = new SearchResultsModel();
        $result = $model->getAllProductsByKeyword($search_string); 
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
        if ($webPrice != NULL){
            $lowestPrice = $webPrice;
        }
        if (($printPrice != NULL) && ($webPrice > $printPrice)){
            $lowestPrice = $printPrice;
        }
        if (($unlimitedPrice != NULL) && ($lowestPrice > $unlimitedPrice)){
            $lowestPrice = $unlimitedPrice;
        }
        return $lowestPrice;
            
    }

}
