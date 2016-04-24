<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class User {
    private $id;
    private $name;
    private $username;
    private $password;
    private $blockStatus;

    public function __construct($id, $name, $username, $password, $blockStatus) {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->blockStatus = $blockStatus;
    }

    public function getID() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getBlockStatus() {
        return $this->blockStatus;
    }

}
?>