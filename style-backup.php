<?php if (session_status() == PHP_SESSION_NONE) {
      session_start();
   }
 // $mainDIR = "http://" . $_SERVER["HTTP_HOST"];
	$mainDIR = "http://" . $_SERVER["HTTP_HOST"]  ."/bayankoPH";
    ?>
<!-- BOOTSTRAP -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?php echo $mainDIR; ?>/apicore/css/bootstrap.min.css">
<!-- JQUERY, POPPER, BOOTSRAP JS -->
<script type="text/javascript" src="<?php echo $mainDIR; ?>/apicore/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo $mainDIR; ?>/apicore/popper.min.js"></script>
<script type="text/javascript" src="<?php echo $mainDIR; ?>/apicore/js/bootstrap.min.js"></script>
 <!-- IMAGE CAPTURING TOOL -->
<script type="text/javascript" src="<?php echo $mainDIR; ?>/apicore/html2canvas/canvas2image.js"></script>
<script type="text/javascript" src="<?php echo $mainDIR; ?>/apicore/html2canvas/html2canvas.min.js"></script>
<!-- THEME -->
<link href="<?php echo $mainDIR; ?>/apicore/fontaws/css/all.css" rel="stylesheet">
<!-- DATA TABLE -->
<link rel="stylesheet" type="text/css" href="<?php echo $mainDIR; ?>/apicore/DataTables/datatables.min.css"/>
<script type="text/javascript" src="<?php echo $mainDIR; ?>/apicore/DataTables/datatables.min.js"></script>




<style type="text/css">
	   .slide_thumbnail{
            height: 20vh;
            width: 20vh;
            height: 15vh;
            display: block;
            float: left;
         }
	#share_post_container{
		display: none;
		border-radius: 10px;
		overflow:hidden;
		max-height: 400px;
		background-color: white;
		background-size: cover;
		transition: 0.5s all;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.4);
	}
	#share_post_container canvas{
		width: 100% !important;
		height:auto !important;
	}
	#post_panel{
		padding-bottom: 500px;
	}
	/* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  background: rgba(0,0,0,0.1); 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
	.img_rounded_themed{
		border-radius: 5px;
		box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
		background-color:  rgba(0,0,0,0.1);
		border: 1px solid rgba(189, 195, 199,0.1);
	}
video::-webkit-media-controls-fullscreen-button
{
    display: none !important;
}
#post_panel{
	max-width: 650px;
	margin: auto;
	
}
.borderless td, .borderless th {
    border: none;
}
.sharepanel{
	max-width: 650px;
	margin: auto;
}
@media only screen and (max-width: 600px) {
  #post_panel{
	max-width: 100%;
	margin: auto;
	}
	.sharepanel{
		max-width: 100%;
		margin: auto;
	}
}
		@font-face {
  font-family: mplus;
  src: url(<?php echo $mainDIR; ?>/font/mplus.ttf);
}
	@font-face {
  font-family: mplus_eb;
  src: url(<?php echo $mainDIR; ?>/font/mplus_eb.ttf);
}

	@font-face {
  font-family: f1;
  src: url(<?php echo $mainDIR; ?>/font/jelly.otf);
}

	@font-face {
  font-family: f2;
  src: url(<?php echo $mainDIR; ?>/font/gorva.otf);
}
	@font-face {
  font-family: mainfont;
  src: url(<?php echo $mainDIR; ?>/font/verdana.ttf);
}

	@font-face {
  font-family: caviar;
  src: url(<?php echo $mainDIR; ?>/font/right.ttf);
}

.featurefont{
	font-family: caviar;
}
.gray{
	background-color: #B3B3B3;
}
body{
	font-family: mainfont;
	animation-name: ftoblack;
	animation-duration: 2s;

}
pre{
	font-family: mainfont;
	 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
}
h1{
	font-family: caviar;
}
h2{
	font-family: caviar;
}
h3{
	font-family: f2;
}

h4{
	font-family: f2;
}
h5{
	font-family: f2;
}
h6{
	font-family: f2;
}
a:hover{
	text-decoration: none;
}
	.highlight{
		border: 1px solid #f9ca24;
		background-color: #f6e58d;
		border-radius: 4px;
		color: black;
	}
	.remark_input{
		border-radius: 100px;
	}
	.remarks_bubble{
	display: block;
	margin-top: 20px;
	}
	.nav-fixed{
		position: fixed;
		width: 100%;
		top: 0;
		left: 0;
		right: 0;
		z-index: 1000;
	}
.side_link{
	display: block;
	margin-bottom: 15px;
}
.img_post_preview_thumbnail{
	display: none;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	height: 100px;
	width: 100px;
	background-color: silver;
	border-radius: 4px;
	margin-top:20px;
	float: left;
	margin-right: 10px;
	margin-bottom: 30px;
}
.thumbnailworthy{
	height: 100px; width: 100px; background-color: silver; border-radius: 4px; margin-top:20px;
	display: none;
	float: left;
	margin-right: 10px;
	margin-bottom: 30px;
}
		.avatar{
			height: 80px;
			width: 80px;
			object-fit: cover;
			border-radius: 50%;
			background-color: black ! important;
		}
		.avatar-lg{
			height: 200px;
			width: 200px;
			object-fit: cover;
			border-radius: 50%;
		}
		.cover-edit{
			width: 90%;
			height: 230px;
			object-fit: cover;
			border-radius: 15px;
		}
		
	.bg_contain{
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}
	.round-logo{
		border-radius: 50%;
		object-fit: cover;
		height: 30px;
		width: 30px;
		background-color: #4D4D4D;
		border:none;
		padding: 5px;
	}
	.round-logo-borderless{
		border-radius: 50%;
		object-fit: cover;
		height: 30px;
		width: 30px;
		background-color: black;
		border:none;;
	}
	.round-logo-friend{
		border-radius: 100px;
		object-fit: cover;
		height: 50px;
		width: 50px;
		background-color: #4D4D4D;
		border:none;
		padding: 3px;
	}
	.share-icon

	{
		color: #B3B3B3;
		font-size: 20px;
	}
	.postt{
		background-color: #B3B3B3;
		border-radius: 15px;
		color: white;
	}
	.comment-avatar{
		border-radius: 50%;
		object-fit: cover;
		height: 20px;
		width: 20px;
		background-color: #4D4D4D;
		border:none;
		padding: 5px;
	}
	.small-avatar{
		border-radius: 50%;
		object-fit: cover;
		height: 30px;
		width: 30px;
		border:none;
	}
	.slide_down{
		animation-name: slidedown;
		animation-duration: 0.3s;
	}
	@keyframes slidedown{
		0%{
			margin-top: -20px;
			opacity: 0;
		}
	}
	.reaction{
		font-size: 20px;
		padding: 50px;
		transition: transform .2s;
		 margin: 0 auto;
	}
	.reaction:hover {
		transform: scale(1.5); 
	}
	.prod {
		width: /*45%*/;
		border-radius: 5px;
	}
	.photos{
		width: 30%;
		border-radius: 5px;
	}
.form-control{
	border-radius: 20px;
}
.btn{
border-radius: 20px;
}
.btn-circle{
	border-radius: 50%;
}
	.zoom {
		transition: 0.2s all;
		font-size: 20px;
		text-align: center !important; 
		background-color: transparent;
		transform-origin: center center;
	}

	.zoom:hover {
		text-shadow: 0px 0px 20px #FFC73D;
	  transform: scale(2);
	  z-index: 1000; /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
	}


	.wrapper {
		
	}
	 .wrapper .file-upload {
		 height: 40px;
		 width: 40px;
		 border-radius: 100px;
		 position: relative;
		 display: flex;
		 justify-content: center;
		 align-items: center;
		 border: 4px solid #fff;
		 overflow: hidden;
		 background-image: linear-gradient(to bottom, #B3B3B3 50%, #fff 50%);
		 background-size: 100% 200%;
		 transition: all 1s;
		 color: #fff;
		 font-size: 20px;
	}
	 .wrapper .file-upload input[type='file'] {
		 height: 40px;
		 width: 40px;
		 position: absolute;
		 top: 0;
		 left: 0;
		 opacity: 0;
		 cursor: pointer;
	}
	 .wrapper .file-upload:hover {
		 background-position: 0 -100%;
		 color: #B3B3B3;
	}
.btn-group.special {
  display: flex;
}
.notif_count{
	display: none;
}
.notif_count_notif{
	display: none;
}
.notif_count_friend_req{
	display: none;
}
.special .btn {
  flex: 1
}
.nav-bottomborder{
	border-bottom: 1px solid rgba(0,0,0,0.1) !important;
}
.dropdown-item.iconed img{
	width: 16px;
	height: 16px;
}
.post_profile_lg{
	border-radius: 1000px;
	height: 180px;
	width: 180px;
	margin-right: 5px;
	background-repeat: no-repeat;
	background-color: black !important;
	background-position: center;
	background-size: cover;
}
.post_profile{
	border-radius: 1000px;
	height: 45px;
	width: 45px;
	margin-right: 5px;
	background-repeat: no-repeat;
	background-color: black !important;
	background-position: center;
	background-size: cover;

}
.post_profile-sm{
border-radius: 1000px;
	height: 3vh;
	width: 3vh;
	margin-right: 3px;
	background-repeat: no-repeat;
	background-color: black !important;
	background-position: center;
	background-size: cover;
}


.decore-none{
	text-decoration: none;
}
.decore-none:hover{
	text-decoration: none;
}



.no-res-link{
	text-decoration: none;
}
.no-res-link:hover{
	text-decoration: none;

}
.time{
	margin-left: 78px;
	margin-top: -18px;
	font-size: 12px;
}
.notif-img{
	height: 30px;
	width: 30px;
	object-fit: cover;
}
.no-border{
	border: none;
}
#vertical-parent {
    width:100%;
    height: 100px;
    overflow: hidden;
}
#vertical-scroll {
    height:120; /* 40px - more place for scrollbar, is hidden under parent box */
    padding:5px;
    white-space:nowrap;
    overflow-x: scroll;
    overflow-y: hide;
	-webkit-overflow-scrolling:touch;
}
.hide{
	display: none;
	/*visibility: hidden;*/
}
.parent{
	width:100%; 
	overflow:hidden; 
	left:20px
}
.child-container{
	width:1730px;
	left:-710px;
	position:relative;
}
#child{ 
	width:1000px; 
	float:left; 
	font-size:15px; 
	font-family:arial; 
	padding:10px 5px 10px 0;
	left:720px; 
}
.clear{
	clear:both;
}
.nav-dynamic{
	background-color: #636363;
}



/**/
</style>
<style type="text/css">
/*@import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700);
@import url(https://raw.github.com/FortAwesome/Font-Awesome/master/docs/assets/css/font-awesome.min.css);*/


.wrap {
  display: inline-block;
  position: relative;
  float: right;

  position: relative;
}

.input[type="search"] {
  height: 40px;
  font-size: 15px;
  display: inline-block;
  font-weight: 100;
  border: none;
  outline: none;
  padding: 3px;
  padding-right: 30px;
  width: 0px;
  position: absolute;
  top: 0;
  right: 0;
  background: none;
  z-index: 3;
  transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
  cursor: pointer;
}

.input[type="search"]:focus:hover {
  border-bottom: 1px solid #BBB;
}

.input[type="search"]:focus {
  width: 200px;
  z-index: 1;
  border-bottom: 1px solid #BBB;
  cursor: text;
}


.input[type="submit"]:hover {
  opacity: 0.8;
}
#backtotop {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#backtotop:hover {
  background-color: #555;
}
.modal-sided{
  top: 10vh;
  right: 30vw;
}
</style>
<?php 
if(isset($_SESSION["page_mode"])){
		if($_SESSION["page_mode"]  == "0"){
			include 'style_light.php';
		}else{
			include 'style_dark.php';
		}
	}else{
		include 'style_dark.php';
	}
 ?>

 <script type="text/javascript">
	function NightAndLightToggle(){
		$.ajax({
		type:"POST",
		url:<?php echo json_encode($mainDIR); ?> + "/functions/functions.php",
		data: {tag : "toggle_night_dark_mod"},
		success: function(data){
			location.reload();
		}
	})
	}

</script>

