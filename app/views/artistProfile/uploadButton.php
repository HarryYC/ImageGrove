<?php

/* 
 *  Samuel Gluss
 *  5-4-2016
 */
include_once("app/controllers/checkArtistLogin.php");

function getUploadButton()
{
    if(checkArtistLogin())
    {
        //  If the correct artist is logged in, show the upload modal button
        return '<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#uploadModal" style="background-color: #3b5889; border-color: black;">Upload Image</button>';
    }
}