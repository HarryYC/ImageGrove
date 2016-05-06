<?php

/* 
    Samuel Gluss
    5-4-2016
 */

//  this function will only work on pages with the 'artistID=##' in the URL
function checkArtistLogin() {
    //  set this flag to true to enable debug messages
    $debug = false;
    
    if($debug){var_dump($_SESSION);}
    //  first, check to see if user is logged in, by seeing if session even has a 'usertype' property yet
    if(isset($_SESSION['email']))
    {
        //  if user is logged in, check if they're an artist
        if($_SESSION['userType'] == "Artist")
        {
            //  lastly, if they are an artist, see if this is their homepage. If so, enable special content
            if($_SESSION["accountID"] == $_REQUEST['artistID'])
            {
                if($debug){echo "<br>This is your homepage!<br>";}
                return true;
                //  show upload button
                echo '<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: #3b5889; border-color: black;">Upload Image</button>';
            }
            else
            {
                if($debug){echo "<br>you are an artist, but this is not your homepage!<br>";}
            }
        }
        else
        {
            if($debug){echo "<br>you are NOT an artist!<br>";}
        }
    }
    else
    {
        if($debug){echo "<br>you are not logged in!<br>";}
    }
    return false;
}