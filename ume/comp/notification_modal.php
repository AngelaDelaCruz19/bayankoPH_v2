<div class="modal" id="notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
	    <div class="modal-content text-dynamic">
	      <div class="modal-header mod-head">
	        <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
	        <ul class="navbar-nav mr-auto"></ul>
	        <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		      </button>
		    </form>

	      </div>
	      <div class="modal-body mod-body pl-3 pr-3" id="parent_notif">
	      	<div id="source_notif">
	      		<ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="notific-tab"  data-toggle="tab" href="#notific" role="tab" aria-selected="true">
			    	<span class="word_notif">Notification</span>
			    	<span class="icon_notif"><i class="fas fa-concierge-bell"></i></span>
			    	<span class="notif_count_notif badge badge-danger">0</span>
			    </a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="friend-req-tab" data-toggle="tab" onclick="CleaNotif_FriendReq()" href="#friend-req" role="tab" aria-selected="false">
			    	<span class="word_notif">Friend Request</span>
			    	<span class="icon_notif"><i class="fas fa-user-friends"></i></span>
			    	 <span class="notif_count_friend_req badge badge-danger">0</span></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="swap-tab" data-toggle="tab" href="#swap" role="tab" aria-selected="false">
			    	<span class="word_notif">Swap Room</span>
			    	<span class="icon_notif"><img src="<?php echo $mainDIR; ?>/images/logos/swa.png"style="height: 25px;"></span>
			    </a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="organization-tab" data-toggle="tab" href="#organization" role="tab" aria-selected="false">
			    	<span class="word_notif">Organization</span>
			    	<span class="icon_notif"><img src="<?php echo $mainDIR; ?>/images/logos/org.png"style="height: 25px;"></span>
			    </a>
			  </li>
			</ul>
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="notific" role="tabpanel" aria-labelledby="notific-tab">
			  <div id="my_notifications">
			  	
			  </div>
			  </div>
			  <div class="tab-pane fade" id="friend-req" role="tabpanel" aria-labelledby="friend-req-tab">
				<!-- ALL OF UME FRIEND REQUEST WILL DISPLAY HERE			  	 -->
			  	<div id="my_friend_request">
			  		
			  	</div>

			  	<script type="text/javascript">
			  		
			  	</script>
			  </div>
			  <div class="tab-pane fade" id="swap" role="tabpanel" aria-labelledby="swap-tab">
			  	<?php notready(); ?>
			  	<h6>New</h6>
				<div class="m-2">
					<a href="profile.php" class="text-dynamic no-res-link p-3">
						<img class="round-logo-friend">
						<span class="ml-2" style="font-weight: bold;">Regina Grace Sillacos</span>
						<span>listed a product for sale</span>
					</a>
					<p class="time">3 minutes ago</p>
				</div>
				<h6>Earlier</h6>
				<div class="m-2">
					<a href="profile.php" class="text-dynamic no-res-link p-3">
						<img class="round-logo-friend">
						<span class="ml-2" style="font-weight: bold;">Regina Grace Sillacos</span>
						<span>listed a product for sale</span>
					</a>
					<p class="time">8 hours ago</p>
				</div>
			  </div>
			  <div class="tab-pane fade" id="organization" role="tabpanel" aria-labelledby="contact-tab">
			  	 	<?php notready(); ?>
			  	<h6>New</h6>
				<div class="m-2">
					<img class="float-right mt-3 notif-img" src="<?php echo $mainDIR; ?>/images/sirtoby/22.jpg">
					<a href="profile.php" class="text-dynamic no-res-link p-3">
						<img class="round-logo-friend">
						<span class="ml-2" style="font-weight: bold;">Regina Grace Sillacos</span>
						<span>marked a post in</span><span style="font-weight: bold;"> Street Photograpy Club</span><br>
					</a>
					<p class="time">8 hours ago</p>
				</div>
				<h6>Earlier</h6>
				<div class="m-2">
					<img class="float-right mt-3 notif-img" src="<?php echo $mainDIR; ?>/images/sirtoby/22.jpg">
					<a href="profile.php" class="text-dynamic no-res-link p-3">
						<img class="round-logo-friend">
						<span class="ml-2" style="font-weight: bold;">Regina Grace Sillacos</span>
						<span>invites you to join</span><span style="font-weight: bold;"> Mobile Legend Organization</span><br>
					</a>
					<p class="time">1 day ago</p>
				</div>
			  </div>
			</div>
	      	</div>
	      </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			GetAllFriendRequest();
			GetAllOfMyNotification();

		});

$('#notif').on('show.bs.modal', function() {
    // do something when the modal is shown
    CleaNotif_JustNotif();
    // alert("CLARED");
})


// 					$( "#notif" ).on('shown', function(){
//     alert("I want this to appear after the modal has opened!");
// });

	</script>
	<script type="text/javascript">
$(window).on('load resize', function() {
    if($(window).width() < 576) {
        $('.word_notif').addClass('hide');
        $('.icon_notif').removeClass('hide');
    }else if($(window).width() < 995){
        $('.word_notif').removeClass('hide');
        $('.icon_notif').addClass('hide');
        
    }else{
        $('.word_notif').removeClass('hide');
        $('.icon_notif').addClass('hide');
    }
})
</script>
