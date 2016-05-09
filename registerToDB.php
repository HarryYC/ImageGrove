<?php
// require_once('includes/conn.php');
require_once('./dbConnect.php');
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password'];
$type     = $_POST['type'];
$_conn    = dbConnect();
if ($_conn === false) {
    echo "Unable to connect.</br>";
    die(print_r(mysql_error(), true));
}
$page_title = "Sign up";
include("./includes/head.php");
echo "<body>";
$home_page = "false";
include("./includes/header.php");
echo '<div class="grid_2" style="padding-top: 60px;"><div class="container"> ';
if ($email == "" || $password == "") {
    echo "<p>Please type in email and password</p>";
} else {
    if ($type == "Artist") {
        $checkExist  = "SELECT * FROM Artists WHERE Username = '{$email}'";
        $checkResult = mysqli_query($_conn, $checkExist);
        if (mysqli_num_rows($checkResult) > 0) {
            $result = "";
        } else {
            $sql    = "INSERT INTO Artists VALUES ('','$name','$email','$password','0',"")";
            $result = mysqli_query($_conn, $sql);
        }
    } else {
        $checkExist  = "SELECT * FROM Customers WHERE Username = '{$email}'";
        $checkResult = mysqli_query($_conn, $checkExist);
        if (mysqli_num_rows($checkResult) > 0) {
            $result = "";
        } else {
            $sql    = "INSERT INTO Customers VALUES ('','$name','$email','$password','0',"")";
            $result = mysqli_query($_conn, $sql);
        }
    }
    $_conn->close();
    if ($result) {
        echo '<p> A new account has been created for you.</p>';
    } else {
        echo '<p>Email address already in use!</p>';
    }
}
echo '<div class="clearfix"></div><a href="javascript:history.back()">Go Back</a></div></div>';
include("./includes/footer.php");
echo "</body>";
?>