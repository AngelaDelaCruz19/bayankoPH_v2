<?php include 'comp/auth.php' ;?>
<!DOCTYPE html>
<html>
<head>
	<title>UME - Profile</title>
	<?php include '../style.php' ;?>
</head>
<body>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
	<?php include 'comp/header.php'?>
	<?php include 'comp/profile_settings_modals.php'?>
	<div class="row text-dynamic">
		<div class="col-lg-3 " id="first">
			<div class="p-3">

               <?php include'comp/side.php';?>
            </div>
		</div>
		<div class="col-lg-6 " id="second">
            <div class="m-3">
            	<div class="d-inline">
            		<div id="hidden-third">
	                  <h5 class="mb-3">Highlight Stories</h5>
	                  <div id="mobile_story">
	                     <div id="vertical-parent">
	                        <div id="vertical-scroll">
	                           <div id="source_highlights" class=" mb-4">
	                              <img class="avatar m-1" src="<?php echo $mainDIR; ?>/images/sirtoby/40.jpg">
	                              <img class="avatar m-1" src="<?php echo $mainDIR; ?>/images/sirtoby/1.jpg">
	                              <img class="avatar m-1" src="<?php echo $mainDIR; ?>/images/sirtoby/2.jpg">
	                              <img class="avatar m-1" src="<?php echo $mainDIR; ?>/images/sirtoby/3.jpg">
	                              <img class="avatar m-1" src="<?php echo $mainDIR; ?>/images/sirtoby/4.jpg">
	                              <img class="avatar m-1" src="<?php echo $mainDIR; ?>/images/sirtoby/5.jpg">
	                              <img class="avatar m-1" src="<?php echo $mainDIR; ?>/images/sirtoby/6.jpg">
	                              <img class="avatar m-1" src="<?php echo $mainDIR; ?>/images/sirtoby/7.jpg">
	                              <img class="avatar m-1" src="<?php echo $mainDIR; ?>/images/sirtoby/8.jpg">
	                           </div>
	                        </div>
	                     </div>
	                     <div class="mt-3 mb-3">
	                        <a href="#" data-toggle="modal" data-target="#notif" class="btn btn-ol-dynamic text-dynamic">
	                        <img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/notif.png"> Notification <span class="notif_count badge badge-danger">0</span>
	                        </a>
	                        <a href="#" data-toggle="modal" data-target="#" class="btn btn-ol-dynamic text-dynamic">
	                        <img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/friends.png"> Gallery
	                        </a>
	                     </div>
	                  </div>
	                  <div id="small_desk_story">
	                     <div class="parent">
	                        <div class="child-container">
	                           <div id="child">
	                           </div>
	                           <div class="clear"></div>
	                        </div>
	                     </div>
	                  </div>
	               </div>
            	</div>
               
               <div class="">	
		            <div id="cover" class="carousel slide" data-ride="carousel" style="position: relative;">
                     <div class="covPhotos">	              
   		            
                     </div>
	                  <div class="" style="position: absolute;margin-top:-400px;z-index: 1;width: 100%;">
	                  	
   	                  		<a href="#" class="d-flex justify-content-center mt-5" data-toggle="modal" data-target="#display_profile" >
         		           				<img class="avatar-lg" src="<?php echo $_SESSION['pic_profile'];  ?>">
         					       	</a>
   	                  	
   	                  	 <center>
   		                  	
   				       		<div class="d-flex justify-content-center mt-3" style="">
   					       		<img class="p-2" src="<?php echo $mainDIR; ?>/images/bklogo.png" alt="Second slide" style="height: 50px; width: 100px; background-color: white;">
   					       	</div>
   					       	<h4 class="mt-4 text-white"><?php echo $_SESSION['wordsstory'];?></h4>
   				       	</center>
   	               </div>
	               </div>	

               </div>
               <script type="text/javascript">
                 
               </script>
               
               <div class="btn-group special nav nav-pills nav-fill" role="group" aria-label="Basic example" id="btn_group">
                  <a class="nav-link active btn btn-secondary" id="m_view_posst-tab" data-toggle="pill" href="#m_view_posst" role="tab" aria-controls="m_view_posst" aria-selected="true">Post</a>
                  <a class="nav-link btn btn-secondary" id="m_view_tagged-tab" data-toggle="pill" href="#m_view_tagged" role="tab" aria-controls="m_view_posst" aria-selected="true">Tagged</a>
                  <a class="nav-link btn btn-secondary" id="m_view_shared-tab" data-toggle="pill" href="#m_view_shared" role="tab" aria-controls="m_view_posst" aria-selected="true">Shared</a>
                  <a class="nav-link btn btn-secondary" id="m_view_likes-tab" data-toggle="pill" href="#m_view_likes" role="tab" aria-controls="m_view_posst" aria-selected="true">Likes</a>
                  <a class="nav-link btn btn-secondary" id="large_view_swap-tab" data-toggle="pill" href="#m_view_swap" role="tab" aria-controls="m_view_posst" aria-selected="true">Swap</a>
                  <li class="nav-link btn btn-secondary" id="m_view_dropdown">
                     <a class="" data-toggle="dropdown" href="#"  aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" id="m_view_swap-tab2" data-toggle="pill" href="#m_view_swap" role="tab" aria-controls="m_view_posst" >Swap</a>
                        <a class="dropdown-item " id="m_view_friends-tab" data-toggle="pill" href="#m_view_friends" role="tab" aria-controls="m_view_friends" >Friends</a>
                     </div>
                  </li>
               </div>
               <div class="tab-content">
                  <div class="tab-pane fade show active mt-3" id="m_view_posst" role="tabpanel" aria-labelledby="m_view_posst-tab" >
                     <!-- own post -->
                     <div class="">
                        <?php include "comp/share_status.php"; ?></div>
                     <div style="overflow-y: scroll; overflow-x: hidden; height: 100vh;  scrollbar-width: thin;">
                        <div id="post_panel"  class="mt-3">
                           <center>

                              <h4>No things to catch-up for today.</h4>
                           </center>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade mt-3" id="m_view_tagged" role="tabpanel" aria-labelledby="m_view_tagged-tab">
                     <!-- Tagged -->
                     <div  class="mt-3">
                        <center>
                           <h4>No Tagged to catch-up for today.</h4>
                        </center>
                     </div>
                  </div>
                  <div class="tab-pane fade mt-3" id="m_view_shared" role="tabpanel" aria-labelledby="m_view_shared-tab">
                     <!-- Shared -->
                     <div  class="mt-3">
                        <center>
                           <h4>No Shared to catch-up for today.</h4>
                        </center>
                     </div>
                  </div>
                  <div class="tab-pane fade mt-3" id="m_view_swap" role="tabpanel" aria-labelledby="m_view_swap-tab">
                     <!-- Swap -->
                     <div  class="mt-3">
                        <center>
                           <h4>Swap Under Development.</h4>
                        </center>
                     </div>
                  </div>
                  <div class="tab-pane fade mt-3" id="m_view_likes" role="tabpanel" aria-labelledby="m_view_likes-tab">
                     <!-- Likes -->
                     <div  class="mt-3">
                        <center>
                           <h4>No Likes to catch-up for today.</h4>
                        </center>
                     </div>
                  </div>
                  <div class="tab-pane fade text-dynamic p-3" id="m_view_friends" role="tabpanel" aria-labelledby="m_view_friends-tab">
                     <h4 class="d-flex justify-content-center"></h4>
                  </div>
              </div>
          </div>
      </div>

			<div class="col-md-3" id="third">
				<div class="m-3">
					<?php
		      		echo '
		      		<div class="row">
			      		<div class="col-md-12 col-xl-4 ">
							<span  style="font-size: 20px;">'.date("h:i a").'</span>
						</div>
						<div class=" col-md-12 col-xl-8 ">
							<span  style="font-size: 20px;">'.date("D, d F Y").'</span>
						</div>
					</div>
		      		';
					?>
				
				</div>
			</div>
			</div>	
</body>
</html>
<script type="text/javascript">
	var usr_id = <?php echo json_encode($_GET["usr"]); ?>;

	var fullname ="";
	var firstname ="";
	var middlename ="";
	var lastname ="";

	var picprofile ="";
	var piccoverphoto ="";

	GetUsrInformation(usr_id);


	function GetUsrInformation(usr_id){
    $.ajax({
      type:"POST",
      url: "../server/server.php",
        data: {tag:"LOAD_USER_DATA_PROFILEVIEW",user_id:usr_id},
        success: function(data){
          // alert(data);
          data = JSON.parse(data);

          fullname = data["fname"] + " " + data["mname"] + "" + data["lname"];
			firstname = data["fname"];
			middlename = data["mname"];
			lastname = data["lname"];

			picprofile = data["pic_profile"];
			piccoverphoto = data["pic_coverphoto"];
			GetProfileInfoBySpecificID(<?php echo json_encode($_GET["usr"]); ?>);
			DisplayInformationOnUI();
        }
    })
  }


	function AppearSecondaryInfotoPage(data){

		if(data == "none"){

		}else{
			data = JSON.parse(data);
			// motto 
			$(".html_fill_motto").html(data["motto"]);
			// contact no 
			$(".html_fill_contactno").html(data["contact"]);
			// location 
			$(".html_fill_location").html(data["location"]);
			// education 
			$(".html_fill_education").html(data["education"]);
			// email contact
			$(".html_fill_emailcontact").html(data["email_contact"]);
			// job info 
			$(".html_fill_job").html(data["job"]);

			// motto 
			$(":input.html_fill_motto").val(data["motto"]);
			// contact no 
			$(":input.html_fill_contactno").val(data["contact"]);
			// location 
			$(":input.html_fill_location").val(data["location"]);
			// education 
			$(":input.html_fill_education").val(data["education"]);
			// email contact
			$(":input.html_fill_emailcontact").val(data["email_contact"]);
			// job info 
			$(":input.html_fill_job").val(data["job"]);
		}

	}
	
  function DisplayInformationOnUI(){
  	$(".usr_profilcover").prop("src",piccoverphoto);
	$(".usr_profilepic").css("background-image","url(" + picprofile + ")");
	$(".usr_fullname").html(fullname);

	GetNewsFeed("other",usr_id);
  }

</script>