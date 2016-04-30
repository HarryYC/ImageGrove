<?php

//  Samuel Gluss
//  4-24-2016

//  This view is pretty simple. When called, it returns the first image returned from an artist's media list
function getArtistData() {
    //  generate a big image from the first image in an artist's portfolio
    $artistID = $_GET['artistID'];
    return "<img src='./PHP/getImage.php?artistID={$artistID}&index=0&type=medium' class='img-responsive' alt='' style='height: 500px; width:750px;' />";
}

?>