<div class="modal" tabindex="-1" role="dialog" id="modal_reactions" >
  <div class="modal-dialog modal-sided text-muted" role="document" >
    <div class="modal-content" style="border-radius:18px;background-color: transparent;border:none;">
      <div class="modal-header mod-head" style="border-radius:  18px 18px 0px 0px ; border:none;">
        <h5 class="modal-title">Interacts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mod-body" style="border-radius: 0px 0px  18px 18px">
      	<table class="table borderless" id="tbl_allpostreactors">
       

      	   
      	</table>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  
  function GetAllPostReactors(control_obj){
    var postid = $(control_obj).data("postid");
    // alert(postid);
    $.ajax({
      type: "POST",
      url:"../server/server.php",
      data: {tag:"GET_ALL_POST_REACTIONS", idofpost: postid},
      success: function(data){
        $("#tbl_allpostreactors").html(data);
      }
    })
  }
</script>

<!-- Modal -->
<div class="modal fade" id="modal_delpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-dynamic">
      <div class="modal-header mod-head">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mod-body">
        <p>Are you sure you want to delete this post forever?</p>
        <input type="hidden" id="del_postid" name="">
        <input type="hidden" id="del_htmlpostid" name="">
      </div>
      <div class="modal-footer mod-foot">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="DeleteAPost()">Delete</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  
  function PrepareDeletePostDialog(oid){
    $("#del_postid").val( $(oid).data("postid"));
    $("#del_htmlpostid").val($(oid).data("htmlpostidnumber"));
  }
  function DeleteAPost(){
    var postid =  $("#del_postid").val();
    var post_html_id =  $("#del_htmlpostid").val();

    $.ajax({
      type:"POST",
      url: "../server/server.php",
      data: {tag:"DELETE_ONE_POST",idofpost: postid},
      success: function(data){
        $("#htmlposid_" + post_html_id).css("display","none");
      }
    })
  }
</script>


<!-- Modal -->
<div class="modal fade" id="modal_sharepost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-dynamic">
      <div class="modal-header mod-head">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-share"></i> Share Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mod-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
             <textarea class="form-control" id="postsharedaddeddescription" rows="5" placeholder="Add description"></textarea>
            </div>
          </div>
          <div class="col-lg-12">
            <input type="hidden" id="theposttoshareid" name="">
           <div class="form-group">
              <label>Where do you want to share this post?</label>
        <select id="postprivacystatus" class="form-control">
          <option value="1">Public</option>
           <option value="2">My friends only</option>
            <option value="3">Friends of my friends</option>
        </select>
           </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group xxx">
              <label>Share this post</label>
            <small>
              <div class="card card-dynamic" style="overflow:hidden;
    max-height: 320px;">
              <div class="card-body">
                <a href='#'>
                  <span class='mb-0'><img style=' background-image: url("");' class='post_profile bg_contain' id="sharepost_hostuser_picture"> <span id="sharepost_hostuser"></span></span>
                  </a>
                  <div id="share_post_container" class="mt-3"></div>
              </div>
            </div>
            </small>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer mod-foot">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="ShareThisPostProtocol()"><i class="fas fa-share"></i> Share</button>
      </div>
    </div>
  </div>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    
<script type="text/javascript">

   var PostIMGToCapture = "";

  function ShareThisPostProtocol(){
    var post_id = $("#theposttoshareid").val();
    var post_description = $("#postsharedaddeddescription").val();
    var post_privacy_status = $("#postprivacystatus").val();


    $.ajax({
      type:"POST",
      url: "../server/server.php",
      data: {tag:"SHARE_POST_PROTOCOL",thepostid:post_id,thepostdesc:post_description,thepospriv:post_privacy_status},
      success: function(data){
        // alert(data);
        alert("Shared!");
        AfterShareAction();
      }
    })
  }
  
  function PrepareShareModal(control_obj){

    var SharerName = $(control_obj).data("fullnameshared");
    var SharerPictureLoc = $(control_obj).data("profilepicsharer");
    // alert(SharerPictureLoc);
    $("#sharepost_hostuser_picture").prop("src",SharerPictureLoc);
    $("#sharepost_hostuser").html(SharerName);
    $("#share_post_container").css("display","none");
    $("#theposttoshareid").val($(control_obj).data("postid"));
      var htmlpostidnumber = $(control_obj).data("htmlpostidnumber");
      var created_postownid = "#htmlposidbody_" + htmlpostidnumber;
      PostIMGToCapture = $(created_postownid).get(0);



      setTimeout(function(){
      $("#share_post_container").css("display","block");
      html2canvas(PostIMGToCapture).then(function(canvas) {
      var canvasWidth = canvas.width;
      var canvasHeight = canvas.height;
      $("#share_post_container").html(canvas);
      });

},500)
  }
   




</script>

<!-- Modal -->
<div class="modal fade" id="modal_editpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content text-dynamic">
      <div class="modal-header mod-head">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mod-body">
        <div class="form-group">
            <label>Edit post description</label>
            <textarea class="form-control" rows="8" value="" placeholder="Type the new post description here..." id="valtoedit"></textarea>
        </div>
      </div>
      <div class="modal-footer mod-foot">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info" onclick="SaveNewPostEdit()"  data-dismiss="modal">Save Post Changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  var toeditposid = "";
  var toeditpostid = "";
  var postdbid = "";
  function PrepareEditPostModal(control_obj){
    var postid_html = $(control_obj).data("htmlpostidnumber");
    toeditpostid = postid_html;
    var post_idtoeditcomp = "post_desc_html_" + postid_html;
    toeditposid = post_idtoeditcomp;
    
    postdbid = $(control_obj).data("postid");

    $("#valtoedit").val(CleanString($("#" + toeditposid).html()));
  }
  function SaveNewPostEdit(){
    if($("#valtoedit").val() != ""){
      $("#post_desc_holder_" + toeditpostid).css("display","inline-block");
    }else{
       $("#post_desc_holder_" + toeditpostid).css("display","none");
    }
    var strdesc = CleanString($("#valtoedit").val());
    $.ajax({
      type:"POST",
      url: "../server/server.php",
      data: {tag:"ATTEMP_POST_EDIT",proposeddescription: strdesc,idofpos:postdbid},
      success: function(data){
        // alert(data);
      }
    })
    $("#" + toeditposid).html(strdesc);
  }
</script>

<!-- Modal -->
<div class="modal fade" id="modal_reportpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-dynamic">
      <div class="modal-header mod-head">
        <h5 class="modal-title" id="exampleModalLongTitle">Report This Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mod-body">
      <div class="form-group">
         <label>Reason</label>
         <textarea class="form-control" placeholder="Type here..." rows="7"></textarea>
      </div>
      </div>
      <div class="modal-footer mod-foot">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
