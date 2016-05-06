/* 
 *  Samuel Gluss
 *  5-5-2016
 */

$( document ).ready(function() {
    var mediaID = -42;
    
    $(".deleteButton").click(function(){
        mediaID = event.target.id;
        
                //  update form submission
        $( "#deleteImageForm" ).attr('action', "app/controllers/deleteImage.php?mediaID=" + mediaID + "&artistID=" + get('artistID'));
           
        //   update modal dialog, change this to have image title later
        $("#deleteModalDialogText").html("Are you sure you want to delete image " + mediaID);
    });
    
});

//  this function allows the retrieval of Request parameters
//  e.g. deleteImage.php?mediaID=292&artistID=53
//  call get(artistID) will return 53
function get(name){
   if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
      return decodeURIComponent(name[1]);
}