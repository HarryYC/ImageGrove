<?php

require_once('includes/conn.php');

class CustomerInfo{
	private $_conn;

  function __construct(){

     $this->_conn = new mysqli(DB_SERVER, UID, PWD, DB);
     if($this->_conn === false ){
  		echo "Unable to connect.</br>";
      die( print_r( mysql_error(), true));
		}
	}
  
  function get_Customers(){
		$sql ="SELECT	* FROM Customers";
		$result = mysqli_query($this->_conn,$sql);
		$this->_conn->close();
		return $result;
	}

}
// Controller test//
// <?php
// require_once('customerInfo.php');
// $test = new CustomerInfo();
// $result = $test->get_Customers();
// while($row = $result->fetch_array())
  // {
  // echo $row['Customer_Id'] . " " . $row['Name'] . " " . $row['UserName'] . " " . $row['Password']. " " . $row['BlockStatus'];
  // echo "<br />";
  // }
  // end php
//
?>
