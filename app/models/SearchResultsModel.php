<?php

require_once 'app/models/Model.php';

class SearchResultsModel extends Model {

    public function __construct() {
        parent::__construct();
    }
    
    /* getAllProductsByKeyword retrieves the product metadata from the Media_Metadata table in
     * the database. For each for in the table that matches the query, a Product object
     * is created with the row's data.
     * returns an array of Product objects
     */

    function getAllProductsByDesc($keyword) {
        $sql = "SELECT * FROM `Media_Metadata` WHERE description LIKE '%{$keyword}%'";
        $result = mysqli_query($this->_conn, $sql);
        return $result;
    }
    /* getAllProductsByKeyword retrieves the product metadata from the Media_Metadata table in
     * the database. For each for in the table that matches the query, a Product object
     * is created with the row's data.
     * returns an array of Product objects
     */

    function getAllProductsByKeyword($keyword) {
        $sql = "SELECT * FROM `Media_Metadata` WHERE keywords LIKE '%{$keyword}%'";
        $result = mysqli_query($this->_conn, $sql);
        return $result;
    }
    /* getAllProducts retrieves the product metadata from the Media_Metadata table in
     * the database. For each for in the table that matches the query, a Product object
     * is created with the row's data.
     * returns an array of Product objects
     */

    function getAllProducts() {
        $sql = "select * FROM Media_Metadata";
        $result = mysqli_query($this->_conn, $sql);
        return $result;
    }

}
