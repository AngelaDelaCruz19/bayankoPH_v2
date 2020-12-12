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
			<div class="card m-3 card-dynamic" style="border:none;border-radius: 20px;">
				<img class="card-img-top usr_profilcover" src="" alt="Card image cap" style="height: 250px;object-fit: cover; word-break: break-all; overflow: hidden;">
				<div class="card-body" >
				  	<a href="#">
			  		<img class="post_profile usr_profilepic" style="display:inline-block;">
			  		<span style="" class="flex-wrap align-content-center text-dynamic navbar-brand usr_fullname" ></span>
				  	</a>
				</div>
			</div>
			<div class="row text-dynamic m-3">
				<div class="col-sm-12">
				  	<span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-briefcase "></i> <span class="html_fill_job">Job</span></span><br>			
				  	<span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-phone-alt"></i> <span class="html_fill_contactno">Contact</span></span><br>			
				  	<span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-location-arrow"></i> <span class="html_fill_location">Place</span></span><br>
				  	<span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-book-reader"></i> <span class="html_fill_education">Education</span></span><br>			
				  	<span class=" flex-wrap align-content-center " ><i class="mt-3 fas fa-at"></i> <span class="html_fill_emailcontact">Email</span></span><br>
				</div>				
			</div>
			<div class="dropdown-divider m-3"></div>
				<div class="m-3">
					<p class=" flex-wrap align-content-center " ><i class="fas fa-images"></i> Photos / Albums</p>
				    <img class="photos" src="<?php echo $mainDIR; ?>/images/sirtoby/22.jpg">
				    <img class="photos" src="<?php echo $mainDIR; ?>/images/sirtoby/22.jpg">
				    <img class="photos" src="<?php echo $mainDIR; ?>/images/sirtoby/22.jpg">
				</div>
			</div>
			<div class="col-lg-6" id="second">
				<div class="m-3">
					<div class="btn-group special " role="group" aria-label="Basic example">
						<button type="button" class="btn btn-secondary">Post</button>
						<button type="button" class="btn btn-secondary">Tagged</button>
						<button type="button" class="btn btn-secondary">Shared</button>
						<button type="button" class="btn btn-secondary">Likes</button>
						<button type="button" class="btn btn-secondary">Friends</button>
					</div>
					<!-- own post -->
					<div id="post_panel" class="mt-3">
					
						<center>
							<h4>No things to catch-up for today.</h4>
						</center>
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