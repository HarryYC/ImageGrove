<!--
Samuel Gluss
4-28-2016
-->

<div id = "myModal" class = "modal fade" role = "dialog">
    <div class = "modal-dialog">
        <!--Modal content-->
        <div class = "modal-content">
            <div class = "modal-header">
                <button type = "button" class = "close" data-dismiss = "modal">&times</button>

                <h4 class = "modal-title">Upload Image</h4></div>

            <div class = "modal-body">

                <form class = "form-horizontal" action="app/controllers/validate.php?artistID=<?php echo $_REQUEST['artistID']; ?>" method="POST" enctype="multipart/form-data">

                    <div class = "form-group">
                        <input class = "col-sm-12 control-label" type = "file" name = "pic" accept = "image/*">
                    </div>
                    <div class = "form-group">
                        <label class = "col-sm-2 control-label" for = "inputTitle">Media Title</label>
                        <div class = "col-sm-10">
                            <input type = "text" class = "form-control" name = "inputTitle" placeholder = "Title"/>
                        </div></div>
                    <div class = "form-group">
                        <label class = "col-sm-2 control-label" for = "inputDesc" >Media Description</label>
                        <div class = "col-sm-10">
                            <input type = "text" class = "form-control" name = "inputDesc" placeholder = "Description"/>
                        </div></div>
                    <div class = "form-group">
                        <label class = "col-sm-2 control-label" for = "inputDesc" >Media Tags</label>
                        <div class = "col-sm-10">
                            <input type = "text" class = "form-control" name = "inputTags" placeholder = "Tags"/>
                        </div></div>
                    <div class = "form-group">
                        <label class = "col-sm-2 control-label" for = "inputDesc" >Web Price</label>
                        <div class = "col-sm-2">
                            <input type = "text" class = "form-control" name = "web-price" placeholder = "0"/>
                        </div>
                        <label class = "col-sm-2 control-label" for = "inputDesc" >Print Price</label>
                        <div class = "col-sm-2">
                            <input type = "text" class = "form-control" name = "print-price" placeholder = "0"/>
                        </div>
                        <label class = "col-sm-2 control-label" for = "inputDesc" >Unlimited Price</label>
                        <div class = "col-sm-2">
                            <input type = "text" class = "form-control" name = "unlim-price" placeholder = "0"/>
                        </div></div>
                    <button type="submit" id="submit-file-btn" class = "btn btn-default btn-upload" >Upload</button>
                    <button type = "button" value="Send" class = "btn btn-default" data-dismiss = "modal">Close</button>
                </form >
            </div>
            <div class = "modal-footer">
            </div>
        </div>
    </div>
</div>
