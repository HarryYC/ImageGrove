<!--
   Samuel Gluss
   5-5-2016
-->

<div id = "confirmDeleteModal" class = "modal fade" role = "dialog">
    <div class = "modal-dialog modal-sm">
        <!--Modal content-->
        <div class = "modal-content">
            <div class = "modal-header">
                <button type="button" class="btn btn-default" id="closebtn" data-dismiss="modal" style="position:absolute; top:10px; right:15px;">&times;</button>
                <h4 class = "modal-title">Confirm Image Delete</h4></div>
            <div class = "modal-body">
                <h4 id = "deleteModalDialogText" >Are you sure you want to delete this image</h4>
                <form class = "form-horizontal" id = "deleteImageForm" action="app/controllers/validate.php?artistID= ?>" method="POST" enctype="multipart/form-data">        
                    <div align="center" style="padding-top: 30px">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button id="modalDeleteButton" type="submit" class="btn btn-danger btn-ok">Delete</button>
                    </div>
                </form >
            </div>
            <div class = "modal-footer">
            </div>
        </div>
    </div>
</div>
