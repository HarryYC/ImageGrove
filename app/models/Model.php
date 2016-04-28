<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './config/dbConnect.php';

class Model {
    
    protected $_conn;
    
    public function __construct() {
        $this->_conn = dbConnect();
    }

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
}