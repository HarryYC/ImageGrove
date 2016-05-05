<?php

/* 
 *  Samuel Gluss
 *  5-5-2016
 */

//  these functions will only work on pages with an artistID in the request
//  e.g. /artist-page.php?artistID=53

function getArtistName()
{
    $artistID = $_REQUEST['artistID'];
    $metaData = ArtistProfileController::getArtistMetaDataFromController($artistID);

    //  Check to see if any data were returned
    if(array_key_exists(0,$metaData))
    {
        return $metaData[0]["Name"];
    }
}

function getArtistDesc()
{
    $artistID = $_REQUEST['artistID'];
    $metaData = ArtistProfileController::getArtistMetaDataFromController($artistID);

    //  Check to see if any data were returned
    if(array_key_exists(0,$metaData))
    {
        return $metaData[0]["ArtistDesc"];
    }
}

function getArtistBlockStatus()
{
    $artistID = $_REQUEST['artistID'];
    $metaData = ArtistProfileController::getArtistMetaDataFromController($artistID);

    //  Check to see if any data were returned
    if(array_key_exists(0,$metaData))
    {
        return $metaData[0]["BlockStatus"];
    }
}