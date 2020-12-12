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
<form action="<?php echo $mainDIR; ?>/server/server.php" method="POST" enctype='multipart/form-data'>
	<div class="modal fade" id="modal_changecoverphoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog text-dynamic modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header mod-head">
        <h5 class="modal-title" id="exampleModalLongTitle">Change Cover Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mod-body">
      	<input type="hidden" name="tag" value="NEW_COVER_PICTURE">
        	<div class="form-group">
        		<label>Choose picture to upload</label>
        		<input type="file" readonly="" id="uploadnewcovph" name="NewCoverPhoto">
    		  <div id="newcoverphoto" src="#" alt="your image" class="img_post_preview_thumbnail" ></div>
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
		$("#uploadnewcovph").change(function() {
		readURL(this,"newcoverphoto");
		});
	});

</script>