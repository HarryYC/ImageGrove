<?php
require_once('./dbConnect.php');
$email    = $_POST['email'];
$password = $_POST['password'];
$userType = $_POST['type'];
$_conn    = dbConnect();

if ($_conn === false) {
    echo "Unable to connect.</br>";
    die(print_r(mysql_error(), true));
}

$page_title = "Login";
include("./includes/head.php");

echo "<body>";
$home_page = "false";
include("./includes/header.php");
echo '<div class="grid_2" style="padding-top: 60px;"><div class="container"> ';

if ($email == "" || $password == "") {
    echo "<p>Please type in email and password</p>";
} else {
    if ($userType == "Artist") {
        $checkExist  = "SELECT * FROM Artists WHERE Username = '{$email}' AND Password = '{$password}'";
        $checkResult = mysqli_query($_conn, $checkExist);
        if (mysqli_num_rows($checkResult) > 0) {
            $_SESSION['email']    = $email;
            $_SESSION['userType'] = $userType;
            echo "Login successful!";
        } else {
            echo '<div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading">There was a problem</h4><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
            <ul class="a-nostyle a-vertical a-spacing-none">
            <li><span class="a-list-item">
            Your email or password was incorrect. Please try again.
            </span></li>
            </ul></div></div></div>';
        }
    } else {
        $checkExist  = "SELECT * FROM Customers WHERE Username = '{$email}' AND Password = '{$password}'";
        $checkResult = mysqli_query($_conn, $checkExist);
        if (mysqli_num_rows($checkResult) > 0) {
            
            $_SESSION['email']    = $email;
            $_SESSION['userType'] = $userType;
            echo "Login successful!";
        } else {
            echo '<div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading">There was a problem</h4><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
            <ul class="a-nostyle a-vertical a-spacing-none">
            <li><span class="a-list-item">
            Your email or password was incorrect. Please try again.
            </span></li>
            </ul></div></div></div>';
        }
    }
    $_conn->close();
    
}
echo '<div class="clearfix"></div><a href="javascript:history.back()">Go Back</a></div></div>';
include("./includes/footer.php");
echo "</body>";
?>