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
         <div class="col-lg-3" id="first">
            <div class="p-3">
               <?php include'comp/side.php';?>
            </div>
            <!-- <div class="card m-3 card-dynamic" style="border:none;border-radius: 20px;">
               <img class="card-img-top" src="<?php echo $_SESSION["pic_coverphoto"]; ?>" alt="Card image cap" style="height: 250px;object-fit: cover; word-break: break-all; overflow: hidden;">
               <div class="card-body">
                  <a href="#" data-toggle="modal" data-target="#display_profile"> -->
            <!-- <img class="avatar" src="<?php echo $_SESSION['pic_profile'];  ?>"> -->
            <!--       <img class="post_profile" style="background-image: url(<?php echo $_SESSION['pic_profile'];  ?>);">
               <span style="" class="flex-wrap align-content-center text-dynamic navbar-brand"><?php echo $_SESSION["fullname"];?></span>
               </a>
               </div>
               </div>
               <div class="row text-dynamic m-3">
               <div class="col-sm-12">
               <span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-briefcase "></i> <span class="html_fill_job">Job</span><br>			
               <span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-phone-alt"></i> <span class="html_fill_contactno">Contact</span><br>			
               <span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-location-arrow"></i> <span class="html_fill_location">Place</span><br>
               <span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-book-reader"></i> <span class="html_fill_education">Education</span><br>			
               <span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-at"></i> <span class="html_fill_emailcontact">Email</span><br>
               </div>
               </div>
               <div class="dropdown-divider m-3"></div>
               <div class="m-3">
               <p class=" flex-wrap align-content-center " ><i class="fas fa-images"></i> Photos / Albums</p>
               <img class="photos" src="<?php echo $mainDIR; ?>/images/sirtoby/22.jpg">
               <img class="photos" src="<?php echo $mainDIR; ?>/images/sirtoby/22.jpg">
               <img class="photos" src="<?php echo $mainDIR; ?>/images/sirtoby/22.jpg">
               </div> -->
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
   					       	<h4 class="mt-4"><?php echo $_SESSION['wordsstory'];?></h4>
   				       	</center>
   	               </div>
	               </div>	

               </div>
               <script type="text/javascript">
                 
                  //lahat ng ginagawa na function sa global_js ay di automatic gumagana okay? kailangan sya tawagin. mas advisable sa pinka baba ng page sya tatawagin
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
                     <div class=""><?php include "comp/share_status.php"; ?></div>
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
            <div class="">
               <div class="card card-dynamic">
                  <div class="card-body">
                     <?php include "comp/clock.php"; ?>
                  </div>
               </div>
            </div>
            <div class="m-3">
            	<span style="" class="flex-wrap align-content-center text-dynamic navbar-brand"><?php echo $_SESSION["fullname"];?></span>
            </div>
            <div class="row text-dynamic m-3">
               <div class="col-sm-12">
               <span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-briefcase "></i> <span class=""><?php echo $_SESSION['job'];?></span><br>			
               <span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-phone-alt"></i> <span class=""><?php echo $_SESSION['contact'];?></span><br>			
               <span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-location-arrow"></i> <span class=""><?php echo $_SESSION['location'];?></span><br>
               <span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-book-reader"></i> <span class=""><?php echo $_SESSION['education'];?></span><br>			
               <span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-at"></i> <span class=""><?php echo $_SESSION['email_contact'];?></span><br>
               </div>
            </div>
            <div class="dropdown-divider m-3"></div>
            <div class="row pl-3 pr-3 ">
            	<div class="col-xl-6">
            		<h6 class="d-flex justify-content-center">Your Products</h6>
					<div class="bg_worthy prod p-1" style="height: 18vh; width: 100%; background-image: url(../images/blankitem.png);">
					</div>
						White Mug with the Girl
					
            	</div>
            	<div class="col-xl-6">
            		<h6 class="d-flex justify-content-center">Your Wishlist</h6>
            		<div class="bg_worthy prod p-1" style="height: 18vh; width: 100%; background-image: url(../images/blankitem.png);">
					</div>
						White Mug with the Girl
            		
            	</div>
            </div>
            
            <!-- <h5 class="mt-3">Highlight Stories</h5>
            <div class="m-3">
               <img class="avatar" src="<?php echo $mainDIR; ?>/images/sirtoby/40.jpg">
               <span class=" flex-wrap align-content-center text-dynamic pl-3" style="font-size: 100%">Highlights(stories/Myday)</span>
            </div>
            <div class="m-3">
               <img class="avatar" src="<?php echo $mainDIR; ?>/images/sirtoby/40.jpg">
               <span class=" flex-wrap align-content-center text-dynamic pl-3" style="font-size: 100%">Highlights(stories/Myday)</span>
            </div>
            <div class="m-3">
               <img class="avatar" src="<?php echo $mainDIR; ?>/images/sirtoby/40.jpg">
               <span class=" flex-wrap align-content-center text-dynamic pl-3" style="font-size: 100%">Highlights(stories/Myday)</span>
            </div>
            <div class="dropdown-divider"></div>
            <div class="list-group list-group-dynamic text-dynamic">
               <a href="#" type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#notif">
               <img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/notif.png"> Notifications <span class="notif_count badge badge-danger">0</span>
               </a>
               <a href="#" data-toggle="modal" data-target="#modal_friendrequest" class="list-group-item list-group-item-action">
               <img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/friends.png"> Friends
               </a>
               <a href="#" onclick="OpenSharePanel()" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#createnewpostmodal">
               <img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/post.png"> Create Post
               </a>
               <a href="#" type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#settings">				
               <img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/settings.png"> Settings
               </a>
            </div> -->
         </div>
     
      <div class="modal" tabindex="-1" role="dialog" id="createnewpostmodal">
         <div class="modal-dialog text-dynamic" role="document">
            <div class="modal-content">
               <div class="modal-header mod-head">
                  <h5 class="modal-title">Create New Post</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body mod-body">
                  <?php include "comp/share_status.php"; ?> 
               </div>
            </div>
         </div>
      </div>
      <!-- display profile info -->
      <div class="modal" id="display_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content text-dynamic">
               <div class="modal-header mod-head">
                  <h5 class="modal-title" id="exampleModalLabel">Profile Info</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body mod-body">
                  <div class="row">
                     <div class="col-lg-4 col-sm-12">
                        <div class="d-flex flex-wrap align-content-center" style="height: 81%">
                           <!-- 	<img class="" data-toggle="modal" data-dismiss="modal" data-target="#modal_changeprofilepic" src="<?php echo $mainDIR; ?>/images/sirtoby/40.jpg"> -->
                           <div class="post_profile_lg avatar-lg mx-auto d-block" style="background-image: url(<?php echo $_SESSION['pic_profile']; ?>);"></div>
                        </div>
                        <center>
                           <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#modal_changeprofilepic"><p class="mt-3">Change Profile Photo</p></a>
                        </center>
                     </div>
                     <div class="col-lg-8 col-sm-12">
                        <div id="coverview" class="carousel slide" data-ride="carousel" style="position: relative;">
                           <div id="modalCover">               
                           
                           </div>
                        </div>
                       <!--  <img class="cover-edit mx-auto d-block" data-toggle="modal" data-dismiss="modal" data-target="#modal_changecoverphoto" src="<?php echo $_SESSION["pic_coverphoto"]; ?>">  -->
                        <center>
                           <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#modal_changecoverphoto"><p class="mt-3">Change Cover Photo</p></a>
                        </center>
                     </div>
                  </div>
                  <div class="dropdown-divider m-3"></div>
                  <div class="pl-3 pr-3">
                     <h4 class="mb-4">Profile Information  <button type="button" class="btn btn-secondary float-right" data-dismiss="modal" data-toggle="modal" data-target="#editable_profile" ><i class="fas fa-user-edit"></i> Edit Info</button></h4>
                     <h5>6 Words Story</h5>
                     <p class=""><?php echo $_SESSION['wordsstory'];?>
                     </p>
                     <p class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-briefcase "></i> <span class=""><?php echo $_SESSION['job'];?></span></p>
                     <p class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-phone-alt"></i> <span class=""><?php echo $_SESSION['contact'];?></span></p>
                     <p class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-location-arrow"></i> <span class=""><?php echo $_SESSION['location'];?></span></p>
                     <p class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-book-reader"></i> <span class=""><?php echo $_SESSION['education'];?></span></p>
                     <p class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-at"></i> <span class=""><?php echo $_SESSION['email_contact'];?></span></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Edit profile -->
      <form action="../server/server.php" method="POST" id="updatesecondinfo">
         <input type="hidden" name="tag" value="UPDATE_SECONDARYINFO_SPECIFIC">
         <div class="modal" id="editable_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
               <div class="modal-content text-dynamic">
                  <div class="modal-header mod-head">
                     <h5 class="modal-title" id="exampleModalLabel">Edit Profile Information</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body mod-body">
                     <div class="pl-3 pr-3">
                        <div class="form-group">
                           <label> 6 Words Story</label>
                           <textarea type="text" name="wordsstory" class="form-control" placeholder="Be creative! Write your 6 Words Story" rows="6" ><?php echo $_SESSION['wordsstory'];?></textarea>
                           <span id="nowords" style="color: red;font-size: 12px;">You only have 6 word to put.<span>
                        </div>
                        <div class="form-group">
                           <label><i class="mt-3 fas fa-briefcase"></i> Job Description</label>
                           <input type="text" name="job" class="form-control html_fill_job" placeholder="Where do you work and what do you do here?" value="">
                        </div>
                        <div class="form-group">
                           <label><i class="mt-3 fas fa-phone-alt"></i> Contact Number</label>
                           <input type="text" name="contact" class="form-control html_fill_contactno" placeholder="Contact information" value="<?php echo $_SESSION['contact'];?>">
                        </div>
                        <div class="form-group">
                           <label><i class="mt-3 fas fa-location-arrow"></i> Where do you live</label>
                           <input type="text" name="location" class="form-control html_fill_location" placeholder="Where do you live?" value="<?php echo $_SESSION['location'];?>">
                        </div>
                        <div class="form-group">
                           <label><i class="mt-3 fas fa-book-reader"></i> Education</label>
                           <input type="text" name="education"  class="form-control html_fill_education" placeholder="Education information" value="<?php echo $_SESSION['education'];?>">
                        </div>
                        <div class="form-group">
                           <label><i class="mt-3 fas fa-at"></i>Contact Email</label>
                           <input type="text" name="email_contact" class="form-control html_fill_emailcontact" placeholder="Secondary email" value="<?php echo $_SESSION['email_contact'];?>">
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer mod-foot">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
               </div>
            </div>
         </div>
      </form>
      <!-- Settings -->
      <?php include 'settings.php';?>
   </body>
</html>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!-- own post -->
<script type="text/javascript">
   $('#nowords').hide();
   var content;
   $('textarea').on('keyup', function(){
       // count words
       var words = $(this).val().split(/\s+/).length;
       // limit message
       if(words<7){
         $("#nowords").hide();
       } else {    
         $("#nowords").show();
       }
   });
    $('form#updatesecondinfo').submit(function(e) {
      if($('#nowords').is(":visible")){
         alert('Cant update your information, please check your 6 words story');
      }else{

      }
   });

    DisplayCoverPhotos();
    ModalCoverPhotos();
   function PostAfterAction(){

   GetNewsFeed("me");
   $("#createnewpostmodal").hide();
   $('.modal-backdrop').hide();
}

function AfterShareAction(){
      //occurs when a post is shared.
      GetNewsFeed("me");
   }
   $(document).ready(function() {
      GetNewsFeed("me");
      GetAllFriends();
      GetProfileInfoBySpecificID(<?php echo json_encode($_SESSION["user_id"]); ?>);
   });

// AppearSecondaryInfotoPage();

  



 var currstat = "";
   $(window).on('load resize', function() {
      if($(window).width() < 576 && currstat != "1") {
         currstat = "1";

         // story
         var destination=$('#vertical-scroll');
           var source=$('#source_highlights');
           source.appendTo(destination);
           // friends
           var destination2=$('#m_view_friends');
           var source2=$('#friends_panel');
           source2.appendTo(destination2);
           $('#mobile_story').removeClass('hide');
           $('#small_desk_story').addClass('hide');
           $('#third').addClass('hide');
           $('#hidden-third').removeClass('hide');
           $('#m_view_friends-tab').removeClass('hide');
           $('#btn_group').addClass('btn-group-sm');

           my_element_jq = $('#large_view_swap-tab');
         var comment = document.createComment(my_element_jq.get(0).outerHTML);
         my_element_jq.replaceWith(comment);
         $(comment2).replaceWith(comment2);
       }else if($(window).width() < 1706 && currstat != "1") {
         currstat = "1";
         $('#first').removeClass('col-lg-3');
         $('#second').removeClass('col-lg-6');
           $('#first').addClass('col-lg-4');
           $('#third').addClass('hide');
           $('#second').addClass('col-lg-8');
           $('#hidden-third').removeClass('hide');
           $('#small_desk_story').removeClass('hide');
           $('#mobile_story').addClass('hide');
           // $('#m_view_friends-tab').addClass('hide');
           $('#btn_group').removeClass('btn-group-sm');

           // story
           var destination=$('#child');
           var source=$('#source_highlights');
           source.appendTo(destination);
           // friends
           var destination2=$('#parent_friend');
           var source2=$('#friends_panel');
           source2.appendTo(destination2);

           // mobile view dropdown
           my_element_jq2 = $('#m_view_dropdown');
         var comment2 = document.createComment(my_element_jq2.get(0).outerHTML);
         my_element_jq2.replaceWith(comment2);
         $(comment).replaceWith(comment);

           

       }else if ( currstat != "1") {

         currstat = "1";
           $('#first').removeClass('col-lg-4');
           $('#first').addClass('col-lg-3');
           $('#second').removeClass('col-lg-8');
         $('#second').addClass('col-lg-6');
           $('#third').removeClass('hide');
           $('#hidden-third').addClass('hide');
           // $('#m_view_friends-tab').addClass('hide');
           $('#btn_group').removeClass('btn-group-sm');
           
           // friends
           var destination2=$('#parent_friend');
           var source2=$('#friends_panel');
           source2.appendTo(destination2);

              // mobile view dropdown
           my_element_jq2 = $('#m_view_dropdown');
         var comment2 = document.createComment(my_element_jq2.get(0).outerHTML);
         my_element_jq2.replaceWith(comment2);
         $(comment).replaceWith(comment);



                        

       }
   })

   $('#Select').on('change', function (e) {
    $('.tab-pane').hide();
    $('.tab-pane').eq($(this).val()).show(); 
});


jQuery("#child").draggable({ 
    cursor: "move", 
    containment: "parent",
    stop: function() {
      if(jQuery("#child").position().left < 1){
                jQuery("#child").css("left", "720px");
      }
    }
});
</script>

