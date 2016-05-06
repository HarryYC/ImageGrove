<?php

/*
 *  Samuel Gluss
 *  5-5-2016
 */

//<li><a href="#">My Account</a></li>|


function showMyAccountIfLoggedIn()
{
    //  set this flag to true to enable debug messages
    $debug = false;

    if ($debug)
    {
        var_dump($_SESSION);
    }
    //  first, check to see if user is logged in, by seeing if session even has a 'usertype' property yet
    if (isset($_SESSION['email']))
    {
        //  build correct HTML return based on the account type
        $retHTML = '<li><a href="';
        //  if user is logged in, check if they're an artist
        if ($_SESSION['userType'] == "Artist")
        {
            $retHTML .= 'artist-page.php?artistID=';
            $retHTML .= $_SESSION["accountID"];
        }
        else if ($_SESSION['userType'] == "Customer")
        {
            //  TODO - when we have a customer page, fill this in
        }
        else if ($_SESSION['userType'] == "Admin")
        {
            //  TODO - when we have a admin page, fill this in
        }
        $retHTML .= '">My Account</a></li>|';
        return $retHTML;
    }
    else
    {
        if ($debug)
        {
            echo "<br>you are not logged in!<br>";
        }
        //  if user is not logged in, don't output anything
        return "";
    }
}
