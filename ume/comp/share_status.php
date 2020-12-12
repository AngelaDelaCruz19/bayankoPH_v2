<div id="parent_create">  
<div class="sharepanel" style="position: relative;" id="child_create">
  <div id="postloading" style="background-color: rgba(0,0,0,0.9); top: 0; width: 100%; height: 100%; left: 0; right: 0; bottom: 0; position: absolute; z-index: 1000; display: none; border-radius: 4px;" class="text-dynamic">
    <center>Sharing...</center>
  </div>
  <div class="row">
  <div class="col-sm-12" id="sharepanel_1">
    <div class="">
      <button onclick="OpenSharePanel()" class="btn btn-primary btn-block"><i class="fas fa-plus-square"></i> Share Something</button>
    </div>
  </div>
  <div class="col-sm-12" id="sharepanel_2" style="display: none;">
    <form id="imageUploadForm" method="post" enctype="multipart/form-data"  onsubmit="return checkForm(this);">
  <input type="hidden" name="tag" value="POST_NEW_STATUS">
  <div class="row">
      <div class="col-lg-12">
        <h4>Share Something</h4>
        <textarea class="form-control inppost_input" placeholder="Say anthing here..." id="statusdescription" name="post_desc"></textarea>
      </div>
      <div class="col-lg-12">
        <div class="btn-group mt-3 special" role="group" aria-label="Basic example">
          <label type="button" for="imgInp" class="btn btn-success"><i class="fas fa-file-image"></i> Photo</label>
          <label type="button" for="inp_video" class="btn btn-primary"><i class="fas fa-film"></i> Video</label>
          <label type="button" for="inp_attachment" class="btn btn-info"><i class="fas fa-paperclip"></i> Attachment</label>
          <label type="button" data-toggle="modal" data-target="#modal_postproducts" class="btn btn-danger"><i class="fas fa-tag"></i> Product</label>
        </div>

      <input type="file" hidden title="Upload Photo"  name="fileToUpload" accept=".jpg, .png, .jpeg, .gif|image/*" id="imgInp">
      <input type="file" title="Upload Video"  hidden name="VideoUpload" accept=".mp4" id="inp_video" >
      <input type="file" hidden  title="Upload Attachment" name="AttachmentUpload" id="inp_attachment" accept=".pptx,.docx,.pdf,.csv,.xlsx,.zip,.txt">

      </div>
      <div class="col-lg-12">
         <div class="row">
          <div class="col-sm-12" style="overflow-x: hidden; overflow-y: scroll;">
            <div id="xminguploadprev" src="#" alt="your image" class="thumbnailworthy" style="background-size: cover; background-position: center;">
              <p style="margin-top: 110px; min-width: 600px;"></p>
            </div>
            <div class="thumbnailworthy" id="thumbnail_video" style="background-image: url(<?php echo $mainDIR; ?>/image_placeholders/video.png);">
              <p style="margin-top: 110px; min-width: 600px;"></p>
            </div>
            <div class="thumbnailworthy" id="thumbnail_attachment" style="background-image: url(<?php echo $mainDIR; ?>/image_placeholders/file.png);">
              <p style="margin-top: 110px; min-width: 600px;"></p>
            </div>
            <input type="hidden" id="imgres_val" name="img_screensize" value="">
          </div>
          
         </div>
      </div>
      <div class="col-lg-12">
         <span class="d-flex flex-wrap align-content-center mt-2 mr-1">
                <button  class="btn btn-primary" data-dismiss="modal" type="submit" value="Upload Image" >Share</button>
                <button  class="btn btn-link" type="button" onclick="HideSharePanel()" >Cancel</button>
              </span>


      </div>
    </div>
</form> 
  </div>
</div>   
</div>
</div>


<script type="text/javascript">

  $("#inp_video").change(function(){
    $("#inp_attachment").val(null);
    $("#imgInp").val(null);
    SetAllActive();
    var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
    if(filename != ""){
      $("#thumbnail_video").css("display","block");
      $("#thumbnail_video p").html(filename);
    }else{
      $("#thumbnail_video").css("display","none");
    }
    
  });

  $("#inp_attachment").change(function(){
    $("#inp_video").val(null);
    $("#imgInp").val(null);
    SetAllActive();
    var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
    if(filename != ""){
      $("#thumbnail_attachment").css("display","block");
      $("#thumbnail_attachment p").html(filename);
    }else{
      $("#thumbnail_attachment").css("display","none");
    }
  });

  $("#imgInp").change(function(){

    $("#inp_video").val(null);
    $("#inp_attachment").val(null);
    SetAllActive();
    var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
    readURL(this,"xminguploadprev");
    if(filename != ""){
      $("#xminguploadprev").css("display","block");
      $("#xminguploadprev p").html(filename);

    }else{
      $("#xminguploadprev").css("display","none");
    }
  });

function ClearInputs(){
  $("#inp_attachment").val(null);
$("#inp_video").val(null);
$("#inp_video").val(null);
$("#statusdescription").val("");
}

  function SetAllActive(){
    $("#xminguploadprev").css("display","none");
    $("#thumbnail_video").css("display","none");
    $("#thumbnail_attachment").css("display","none");

  }

    $('form#imageUploadForm').submit(function(e) {
      // alert("cocoa");
      $("#postloading").css("display","block");
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
                console.log("success");
               alert(data);
               HideSharePanel();
               PostAfterAction();
            },
            error: function(data){
                console.log("error");
                // alert(data);
                GetNewsFeed();
               HideSharePanel();
            }
        });
    });
    
  

  var _URL = window.URL || window.webkitURL;
$("#imgInp").change(function (e) {
    var file, img;
    if ((file = this.files[0])) {
        img = new Image();
        var objectUrl = _URL.createObjectURL(file);
        img.onload = function () {
           $("#imgres_val").val(this.width + "x" + this.height);
            _URL.revokeObjectURL(objectUrl);
        };
        img.src = objectUrl;
    }
});
  function OpenSharePanel(){
    ClearInputs();
    SetAllActive();
    $("#sharepanel_1").css("display","none");
    $("#sharepanel_2").css("display","block");
  }
  function HideSharePanel(){
    $("#sharepanel_1").css("display","block");
    $("#sharepanel_2").css("display","none");
     $("#statusdescription").val("");
                 $(".inppost_input").val(null);
 setTimeout(function(){
      $("#postloading").css("display","none");
     },1000)


  }
</script>