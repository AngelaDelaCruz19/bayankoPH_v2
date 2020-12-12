<!-- Modal --> 
<form action="<?php echo $mainDIR; ?>/server/server.php" method="POST" enctype='multipart/form-data'>
	<div class="modal fade" id="modal_changeprofilepic" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog text-dynamic modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header mod-head">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Profile Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mod-body">
        	<input type="hidden" name="tag" value="NEW_PROFILE_PICTURE">
        	<div class="form-group">
        		<label>Choose picture to upload</label>
        		<input type="file" readonly="" id="newprofilepicture" accept=".jpg, .png, .jpeg, .gif|image/*" name="NewProfilePicture">
    		  <div id="newprofilepreviewpic" src="#" alt="your image" class="img_post_preview_thumbnail" ></div>
        	</div>

      </div>
      <div class="modal-footer mod-foot">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">
	$(document).ready(function() {
		$("#newprofilepicture").change(function() {
		readURL(this,"newprofilepreviewpic");
		});
	});

</script>


<!-- Modal -->
<form id="change_covPhoto" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="modal fade" id="modal_changecoverphoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg text-dynamic modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header mod-head">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Cover Photos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mod-body">
        <input type="hidden" name="tag" value="POST_UPLCOVERPHOTOS">
        <div class="row">
            <div class="col-md-12">
                 <div class="form-group">
                    <label>Product Photos</label>
                    <p><input type="file" id="inpcover_uploadfile" required="" name="toUploadCovers[]" onchange="preview_image();" multiple></p>
                    <div class="card card-dynamic">
                        <div class="card-body">
                            <div id="cover_preview">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer mod-foot">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" >Apply</button>
      </div>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">
     $('form#change_covPhoto').change(function(e) {

      e.preventDefault();    
        var formData = new FormData(this);
        $.ajax({
           url: "../server/server.php",
            type:'POST',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){

                $('#cover_preview').html("");
                $("#inpcover_uploadfile").val("");
                $("#modal_changecoverphoto").hide();
                alert("Cover Photos Upladed");
            }
        });
    });



function preview_image() 
{
 var total_file=document.getElementById("inpcover_uploadfile").files.length;
 // alert(JSON.stringify(event.target.files));
 $('#cover_preview').html("");
 for(var i=0;i<total_file;i++)
 {
  $('#cover_preview').append("<div style='width:100px; height:100px; display:block; float:left; margin-right:5px; margin-bottom:5px; background-image: url(" + URL.createObjectURL(event.target.files[i]) + "); ' class='bg_worthy' ></div>");
 }
}
</script>



