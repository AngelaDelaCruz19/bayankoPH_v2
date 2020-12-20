<?php include 'comp/auth.php' ;?>
<!DOCTYPE html>
<html>
<head>
	<title>UME</title>
	<?php include '../style.php' ;?>
</head>
<body>
<?php include 'comp/header.php' ;?>
	<!-- <a href="#" onclick="topFunction()" id="top" style="position: fixed;bottom: 50px; right:550px;border-radius: 50%; width: 50px; height: 50px; font-size: 30px;" class="border"><center><i class="fas fa-angle-up flex-wrap align-content-center"></i></center></a> -->
	
<div class="container-fluid text-dynamic mt-3">
		<div class="row" id="whole_dash">
		<div class="col-lg-3 mb-3">
			<?php include'comp/side.php';?>
		</div>
		<div class="col-lg-6 mb-3">
			<div class="container">
		<?php include "comp/share_status.php"; ?>
		<br>
		<div id="parent_post" style="overflow-y: scroll; overflow-x: hidden; height: 100vh;  scrollbar-width: thin;">
			<div id="post_panel" >
				<div id="top"></div>
					<center>
						<h4>No things to catch-up for today.</h4>
					</center>
				</div>
		</div>
	</div>
		</div>
		<div class="col-lg-3 mb-3">
			<div class="container">
			<div class="card card-dynamic">
				<div class="card-body">
					<?php include "comp/clock.php"; ?>
				</div>
			</div>
			<div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
			  <div class="carousel-inner" role="listbox">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="../images/sirtoby/1.jpg" data-src="holder.js/900x400?theme=social" alt="900x400" data-holder-rendered="true" style="width: 900px; height: 400px;">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="../images/sirtoby/3.jpg" data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true" style="width: 900px; height: 400px;">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

				<h4 class="mt-3">Top on Swap</h4>
			<div class="row mt-3">
				<div class="col-sm-6 mb-4">
					<div class="bg_worthy prod p-1" style="height: 10vh; width: 100%; background-image: url(../images/blankitem.png);">
						</div>
						White Mug with the Girl
				</div>
				<div class="col-sm-6 mb-4">
					<div class="bg_worthy prod p-1" style="height: 10vh; width: 100%; background-image: url(../images/blankitem.png);">
						</div>
						Orange Sofa
				</div>
				<div class="col-sm-6 mb-4">
					<div class="bg_worthy prod p-1" style="height: 10vh; width: 100%; background-image: url(../images/blankitem.png);">
						</div>
					Bed with no bugs
				</div>
				<div class="col-sm-6 mb-4">
					<div class="bg_worthy prod p-1" style="height: 10vh; width: 100%; background-image: url(../images/blankitem.png);">
						</div>
					Basic Lantern
				</div>

			</div>
			</div>
		
			</div>
		</div>
	</div>




      <!-- Mobile view -->
        <div id="dash_mobile">
        	<div class="m-3">
        		<div class="btn-group special nav nav-pills nav-fill" role="group" aria-label="Basic example" id="btn_group">
					<a class="nav-link active btn btn-secondary" id="m_view_post-tab" data-toggle="pill" href="#m_view_post" role="tab" aria-controls="m_view_post" aria-selected="true"><i class="fas fa-sticky-note"></i></a>
					<a class="nav-link btn btn-secondary" id="m_view_notif-tab" data-toggle="pill" href="#m_view_notif" role="tab" aria-controls="m_view_notif" aria-selected="false"><i class="fas fa-bell"></i></a>
					<a class="nav-link btn btn-secondary" id="m_view_events-tab" data-toggle="pill" href="#m_view_events" role="tab" aria-controls="m_view_events" aria-selected="false"><i class="fas fa-calendar-day"></i></a>
					<a class="nav-link btn btn-secondary" id="m_view_r_out-tab" data-toggle="pill" href="#m_view_r_out" role="tab" aria-controls="m_view_r_out" aria-selected="false"><img src="<?php echo $mainDIR; ?>/images/logos/r_out.png"style="height: 20px;"></a>
				</div>        
			     <div class="tab-content" id="">
			       <div class="tab-pane fade show active mt-2" id="m_view_post" role="tabpanel" aria-labelledby="m_view_post-tab">
			       	<div id="parent_create2" class="mb-2"></div>
			       </div>
			       <div class="tab-pane fade text-dynamic p-3" id="m_view_notif" role="tabpanel" aria-labelledby="m_view_notif-tab"></div>
			       <div class="tab-pane fade text-dynamic p-3" id="m_view_events" role="tabpanel" aria-labelledby="m_view_events-tab"></div>
			       <div class="tab-pane fade text-dynamic p-3" id="m_view_r_out" role="tabpanel" aria-labelledby="m_view_r_out-tab"><h3 class="d-flex justify-content-center">Under Development</h3></div>
			     </div>
			 </div>
      	</div>
      
		     
      	<?php include 'settings.php';?>
</body>
</html>
<script type="text/javascript">
	function AfterShareAction(){
		//occurs when a post is shared.
		GetNewsFeed();
	}
   $(document).ready(function() {
   	"use strict";
  
  $(".prof").hover(
    function () {
      let refID = '#' + $(this).data('modal_reactions');
      $(refID).modal('show');
    },
    function () {
      let refID = '#' + $(this).data('modal_reactions');
      $(refID).modal('hide');
    });
   	GetNewsFeed();
   	GetAllFriends();
   	$("#imgInp").change(function() {
   	readURL(this,"image_preview");
   	});
   });
   	$('[data-toggle="popover"]').popover({
      placement : 'top',
      trigger : 'hover'
    });


   var currstat = "";

function PostAfterAction(){
	GetNewsFeed();
}

$(window).on('load resize', function() {
    if($(window).width() < 576  && currstat != "1") {
    	currstat = "1";
    	// alert(currstat);
        var destination=$('#m_view_post');
        var source=$('#post_panel');
        source.appendTo(destination);
        $('#whole_dash').addClass('hide');
        $('#dash_mobile').removeClass('hide');
        $('#mobile_nav').removeClass('hide');
        var destination2=$('#m_view_events');
        $('.d_time').addClass('col-sm-12');
        $('.d_time').removeClass('col-xl-8');
        $('.d_time2').removeClass('col-xl-4');
        var source2=$('#source_event');
        source2.appendTo(destination2);
        var destination3=$('#m_view_notif');
        var source3=$('#source_notif');
        source3.appendTo(destination3);
        var destination4=$('#parent_create2');
        var source4=$('#child_create');
        source4.appendTo(destination4);


    }else if($(window).width() < 995 &&  currstat != "1"){
    	currstat = "1";
    	// alert(currstat);
    	var destination=$('#parent_post');
        var source=$('#post_panel');
        source.appendTo(destination);
        $('#whole_dash').removeClass('hide');
        $('#dash_mobile').addClass('hide');
        $('#mobile_nav').addClass('hide');
        $('.d_time').addClass('col-sm-12');
        $('.d_time').removeClass('col-xl-8');
        $('.d_time2').removeClass('col-xl-4');



        var destination2=$('#parent_event');
        var source2=$('#source_event');
        source2.appendTo(destination2);
        var destination3=$('#parent_notif');
        var source3=$('#source_notif');
        source3.appendTo(destination3);
        var destination4=$('#parent_create');
        var source4=$('#child_create');
        source4.appendTo(destination4);

    }else if( currstat != "1"){
    	currstat = "1";
    	// alert(currstat);
    	var destination=$('#parent_post');
        var source=$('#post_panel');
        source.appendTo(destination);
        $('#whole_dash').removeClass('hide');
        $('#dash_mobile').addClass('hide');
        $('#mobile_nav').addClass('hide');
        var destination2=$('#parent_event');
        var source2=$('#source_event');
        source2.appendTo(destination2);
        var destination3=$('#parent_notif');
        var source3=$('#source_notif');
        source3.appendTo(destination3);
        $('.d_time').removeClass('col-sm-12');
        $('.d_time').addClass('col-xl-8');
        $('.d_time2').addClass('col-xl-4');
        var destination4=$('#parent_create');
        var source4=$('#child_create');
        source4.appendTo(destination4);

      
    }
})
</script>
