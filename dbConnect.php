

<?php
function dbConnect(){
// Create connection
$servername = "sfsuswe.com";
$username = "s16g07";
$password = "team7db";
$dbname = "student_s16g07";
$conn = new mysqli($servername, $username, $password,$dbname);
       if(!$conn){
           die('Could not connect: ' . mysql_error());
       }
echo 'Connected successfully';


return $conn;

}
function dbConClose($conn){
    $conn->close();
}

dbConnect();
?>