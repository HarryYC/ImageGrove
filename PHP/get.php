<?php
// connect to our database
    mysql_connect("sfsuswe.com", "s16g07", "team7db") or die(mysql_error());
    mysql_select_db("student_s16g07")  or die(mysql_error());
    
    $id = addslashes($_REQUEST['id']);
    $imageType = $_REQUEST['type'];
    
    $myDatabase = mysql_query("SELECT $imageType FROM Media_Metadata WHERE Media_Id=$id");
    $databaseRow = mysql_fetch_assoc($myDatabase);
    
    header("Content-type: image/jpeg");
    
    echo $databaseRow[$imageType];
?>

