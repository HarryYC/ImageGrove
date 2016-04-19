<?php
// connect to our database
    mysql_connect("sfsuswe.com", "earaujo", "swes2016db") or die(mysql_error());
    mysql_select_db("student_earaujo")  or die(mysql_error());
    
    $id = addslashes($_REQUEST['id']);
    $imageType = $_REQUEST['type'] . 'Data';
    
    $myDatabase = mysql_query("SELECT $imageType FROM file WHERE id=$id");
    $databaseRow = mysql_fetch_assoc($myDatabase);
    
    header("Content-type: image/jpeg");
    
    echo $databaseRow[$imageType];
?>
