<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once dirname(__FILE__) . '/../../dbConnect.php';
$dbLink = dbConnect();

//  get form data, sanitize
$pic = addslashes(file_get_contents($_FILES['pic']['tmp_name']));
$target_file = mysql_escape_string($_FILES['pic']['name']);
$title = mysqli_real_escape_string($dbLink, $_POST['inputTitle']);
$desc = mysqli_real_escape_string($dbLink, $_POST['inputDesc']);
$tags = mysqli_real_escape_string($dbLink, $_POST['inputTags']);
$webPrice = mysqli_real_escape_string($dbLink, $_POST['web-price']);
$printPrice = mysqli_real_escape_string($dbLink, $_POST['print-price']);
$unlimPrice = mysqli_real_escape_string($dbLink, $_POST['unlim-price']);
$artistID = $_REQUEST['artistID'];

//  image validation
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$uploadOk = true;
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "<br/>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = false;
}

//  print debug as needed
//echo var_dump($pic) . '<br>';
echo $title . '<br>';
echo $desc . '<br>';
echo $tags . '<br>';
echo $webPrice . '<br>';
echo $printPrice . '<br>';
echo $unlimPrice . '<br>';
echo $artistID . '<br>';

$query = "
            INSERT INTO `Media_File` (
                `Media`
            )
            VALUES ('{$pic}')";  

if ($uploadOk) {
        //  query insert to Media table
    if ($res = mysqli_query($dbLink,$query)) {
        echo '<br/>Success! Your image was successfully added!';
        $last_id = $dbLink->insert_id;
        echo "<br>media ID incrememter value: " . $last_id;
    } else {
        echo '<br/>Error! Failed to insert the image';
        $uploadOk = false;
    }
}

//  build the appropriate query for `Media_Metadata` table
$query2 = "
            INSERT INTO `Media_Metadata` (
                `Media_Id`, `Artist_Id`, `Title`, `Description`, `ThumbNail`, `WebPrice`, 
                `PrintPrice`, `UnlimitedPrice`, `Keywords`, `BlockStatus`
            )
            VALUES ('{$last_id}', '{$artistID}', '{$title}', '{$desc}', '{$pic}',"
        . " '{$webPrice}', '{$printPrice}', '{$unlimPrice}', '{$tags}', '0')";

if ($uploadOk) {
        //  query insert to Media_Metadata table
    if ($res = mysqli_query($dbLink,$query2)) {
        echo '<br/>Success! Image metadata was successfully added!';
        $last_id = mysql_insert_id();
    } else {
        echo '<br/>Error! Failed to insert the image metadata';
    }
    
    //  go back to the appropriate artist page
    header('Location: ../../artist-page.php?artistID=' . $artistID);
}