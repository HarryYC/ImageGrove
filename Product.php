<?php

/* 
 * Product class allows image data from database table to be saved and easily 
 * accessed after it is retrieved. Contains get functions for each column of 
 * data in table. Used when there are multiple rows in the SQL result 
 * (e.g. search results page).
 */

class Product {

    private $media_id;
    private $artist_id;
    private $title;
    private $description;
    private $thumbnail;
    private $webPrice;
    private $printPrice;
    private $unlimitedPrice;
    private $keywords;
    private $blockStatus;

    public function __construct($media_id, $artist_id, $title, $description, $thumbnail, $webPrice, $printPrice,
            $unlimitedPrice, $keywords, $blockStatus) {
        $this->media_id = $media_id;
        $this->artist_id = $artist_id;
        $this->title = $title;
        $this->description = $description;
        $this->thumbnail = $thumbnail;
        $this->webPrice = $webPrice;
        $this->printPrice = $printPrice;
        $this->unlimitedPrice = $unlimitedPrice;
        $this->keywords = $keywords;
        $this->blockStatus = $blockStatus;
    }

    public function getMediaID() {
        return $this->media_id;
    }

    public function getArtistID() {
        return $this->artist_id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDesc() {
        return $this->description;
    }

    public function getThumbnail() {
        return $this->thumbnail;
    }

    public function getWebPrice() {
        return $this->webPrice;
    }
    
    public function getPrintPrice() {
        return $this->printPrice;
    }
    
    public function getUnlimitedPrice() {
        return $this->unlimitedPrice;
    }

    public function getKeywords() {
        return $this->keywords;
    }

    public function getBlockStatus() {
        return $this->blockStatus;
    }

}

?>