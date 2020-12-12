<!-- Modal -->
<form id="theproductuploadform" method="post" enctype="multipart/form-data" autocomplete="off">
    <div class="modal fade" id="modal_postproducts" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg text-dynamic modal-dialog-centered" role="document">
    <div class="modal-content">

        <div id="prodprocess" style="background-color: rgba(0,0,0,0.9); top: 0; width: 100%; height: 100%; left: 0; right: 0; bottom: 0; position: absolute; z-index: 1000; display: none; border-radius: 4px;" class="text-dynamic">
        <center><h4 class="mt-5 mb-5">Processing your product</h4></center>
    </div>



      <div class="modal-header mod-head">
        <h5 class="modal-title" id="exampleModalLongTitle">Post Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mod-body">
        <input type="hidden" name="tag" value="POST_PRODUCT">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" required="" id="inpprod_name" name="tosell_productname">
        </div>
            </div>
            <div class="col-md-12">
                 <div class="form-group">
            <label>Specifications</label>
            <textarea class="form-control" required="" id="inpprod_specifications" name="tosell_specifications" rows="5"></textarea>
        </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
            <label>Product Condition</label>
            <select class="form-control" required="" id="inpprod_productcondition" name="tosell_condition">
                <option>New</option>
                <option>Used - But like new</option>
                <option>Used - Good</option>
                <option>Used - Fair</option>
            </select>
        </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
            <label>Availability</label>
            <select class="form-control" required="" id="inpprod_availability" name="tosell_availability">
               <option>Single Item (Single Item)</option>
                <option>In Stock (Multiple Items)</option>
            </select>
        </div>
            </div>
            <div class="col-md-12">
                 <div class="form-group">
                    <label>Product Photos</label>
                    <p><input type="file" id="inpprod_uploadfile" required="" name="tosell_screenshots[]" onchange="preview_image();" multiple></p>
                    <div class="card card-dynamic">
                        <div class="card-body">
                            <div id="image_preview">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                 <div class="form-group">
            <label>Category</label>
            <select class="form-control" required="" id="inpprod_category" name="tosell_category">
                <option>Electronic Devices</option>
                <option>Electronic Accessories</option>
                <option>TV and Home Appliances</option>
                <option>Health and Beauty</option>
                <option>Babies and Toys</option>
                <option>Groceries and Pets</option>
                <option>Home and Living</option>
                <option>Womens Fashion</option>
                <option>Mens Fashion</option>
                <option>Fashion Accessories</option>
                <option>Sports and Lifestyle</option>
                <option>Automotive and Motorcycles</option>
            </select>
        </div>
            </div>
            <div class="col-md-3">
                  <div class="form-group">
            <label>Price</label>
            <input type="number" required="" class="form-control" id="inpprod_price" name="tosell_prductprice">
        </div>
            </div>
            <div class="col-md-12">
                     <div class="card card-dynamic" style="display: none;">
        <div class="card-header">
           <div class="row">
            <div class="col-sm-10">
                <input type="text" placeholder="ex: bag, reg, leather" id="inpprod_tagtoadd" class="form-control" name="">
            </div> 
            <div class="col-sm-2">
                 <button class="btn btn-info btn-block" disabled="">Add Tag</button>
            </div>
           </div>
        </div>
           <div class="card-body">
            <textarea readonly="" class="form-control" id="inpprod_tags" name="tosell_tags"></textarea>
           </div>
       </div>
            </div>
        </div>
      </div>
      <div class="modal-footer mod-foot">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" >Post Product</button>
      </div>
    </div>
  </div>
</div>
</form>

<script type="text/javascript">
     $('form#theproductuploadform').submit(function(e) {

      e.preventDefault();    
        var formData = new FormData(this);
        $("#prodprocess").css("display","block");
        $.ajax({
           url: "../server/server.php",
            type:'POST',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){

                $('#image_preview').html("");
                $("#inpprod_name").val("");
                $("#inpprod_specifications").val("");
                $("#inpprod_productcondition").val("");
                $("#inpprod_availability").val("");
                $("#inpprod_uploadfile").val("");
                $("#inpprod_category").val("");
                $("#inpprod_price").val("");
                $("#inpprod_tagtoadd").val("");
                $("#inpprod_tags").val("");
  $("#prodprocess").css("display","none");
                $("#modal_postproducts").hide();
    $('.modal-backdrop').hide();
                alert("Product Posted!");
               HideSharePanel();
               PostAfterAction();
            }
        });
    });



function preview_image() 
{
 var total_file=document.getElementById("inpprod_uploadfile").files.length;
 // alert(JSON.stringify(event.target.files));
 $('#image_preview').html("");
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div style='width:100px; height:100px; display:block; float:left; margin-right:5px; margin-bottom:5px; background-image: url(" + URL.createObjectURL(event.target.files[i]) + "); ' class='bg_worthy' ></div>");
 }
}
</script>

