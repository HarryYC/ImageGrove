<?php
function dbConnect() {
    static $conn;
    if (!isset($conn)) {
        $config = parse_ini_file('C:\xampp\htdocs\PhpProject1\config\config.ini');
        $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
        if (!$conn) {
            die('Could not connect: ' . mysql_error());
        }
    }
    //echo 'Connected successfully';
    return $conn;
}
function dbConClose($conn) {
    $conn->close();
}

?>