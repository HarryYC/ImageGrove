<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Product {

    private $media_id;
    private $artist_id;
    private $title;
    private $description;
    private $thumbnail;
    private $price;
    private $keywords;
    private $licenses;
    private $blockStatus;

    public function __construct($media_id, $artist_id, $title, $description, $thumbnail, $price, $keywords, $licenses, $blockStatus) {
        $this->media_id= $media_id;
        $this->artist_id = $artist_id;
        $this->title = $title;
        $this->description = $description;
        $this->thumbnail = $thumbnail;
        $this->price = $price;
        $this->keywords = $keywords;
        $this->licenses = $licenses;
        $this->blockStatus = $blockStatus;
    }
    
    public function getMediaID(){
        return $this->media_id;
    }
    public function getArtistID(){
        return $this->artist_id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDesc(){
        return $this->description;
    }
    public function getThumbnail(){
        return $this->thumbnail;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getKeywords(){
        return $this->keywords;
    }
    public function getLicenses(){
        return $this->licenses;
    }
    public function getBlockStatus(){
        return $this->blockStatus;
    }
}


?>