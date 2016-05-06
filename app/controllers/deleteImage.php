<?php

/* 
 *  Samuel Gluss
 *  5-5-2016
 */
include_once dirname(__FILE__) . "/../models/ArtistProfileModel.php";
//  media delete helper function

$mediaID = $_REQUEST['mediaID'];
$artistID = $_REQUEST['artistID'];

//  remove media from appropriate tables
ArtistProfileModel::removeMediaDataFromDB($mediaID);

//  redirect back to artist page
header('Location: ../../artist-page.php?artistID=' . $artistID);