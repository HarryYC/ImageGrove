<?php

//Samuel Gluss
//4-28-2016

function showUploadModal()
{

$retHTML = "";
$retHTML .= '<div id = "myModal" class = "modal fade" role = "dialog">';
$retHTML .= '<div class = "modal-dialog">';
$retHTML .= '<!--Modal content-->';
$retHTML .= '<div class = "modal-content">';
$retHTML .= '<div class = "modal-header">';
$retHTML .= '<button type = "button" class = "close" data-dismiss = "modal">&times</button>';
$retHTML .= '<h4 class = "modal-title">Modal Header</h4></div>';
$retHTML .= '<div class = "modal-body">';
$retHTML .= '<p>Some text in the modal.</p></div>';
$retHTML .= '<div class = "modal-footer">';
$retHTML .= '<button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>';
$retHTML .= '</div></div></div></div>';

return $retHTML;
}