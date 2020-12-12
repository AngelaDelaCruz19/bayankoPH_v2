<div class="container p-2">
	<div class="gray" style="border-radius: 15px;">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
		  <li class="nav-item" role="presentation" style="width: 50%;">
		    <a class="nav-link active" id="event-tab" data-toggle="tab" href="#event" role="tab" aria-controls="event" aria-selected="true">Events</a>
		  </li>
		  <li class="nav-item" role="presentation" style="width: 50%;">
		    <a class="nav-link" id="pages-tab" data-toggle="tab" href="#pages" role="tab" aria-controls="pages" aria-selected="false">Your Pages</a>
		  </li>
		</ul>
		<div class="tab-content" id="myTabContent">
		  <div class="tab-pane fade show active" id="event" role="tabpanel" aria-labelledby="event-tab" id="parent_event">
		  	<div id="source_event" class="p-3">
       			<button class="btn btn-secondary float-right btn-sm"><i class="fas fa-plus"></i> Event</button>
                  <h4 class="text-white">Upcomming Events</h4>
                  <table class="table table-sm text-dynamic">
                     <tbody>
                        <tr>
                           <th scope="row" class="text-white">Oct 1</th>
                           <td class="text-white">Office Anniversary</td>
                        </tr>
                        <tr>
                           <th scope="row" class="text-white">Oct 2</th>
                           <td class="text-white">All Souls Day</td>
                        </tr>
                        <tr>
                           <th scope="row" class="text-white">Oct 3</th>
                           <td class="text-white">Thanksgiving</td>
                        </tr>
                     </tbody>
                  </table>
       		</div>	
		  </div>
		  <div class="tab-pane fade p-2" id="pages" role="tabpanel" aria-labelledby="pages-tab"><h4  class="text-white">No Pages to show.</h4></div>
		</div>
	</div>
	<hr>
	<a class="side_link" href="profile.php?usr=<?php echo $_SESSION['user_id']; ?>">
		<img class="round-logo-borderless" src="<?php echo $_SESSION["pic_profile"]; ?>"> <?php echo $_SESSION["fullname"]; ?>
	</a>
	<a class="side_link" href="#" data-toggle="modal" data-target="#notif" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/notif.png"> Notifications <span class="notif_count badge badge-danger">0</span>
	</a>
	<a class="side_link" href="#" data-toggle="modal" data-target="#modal_friendrequest" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/friends.png"> Friends <small class="text-muted display_friendcount">0</small>
	</a>
	<a class="side_link" href="#" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/logos/r_out.png"> Reachout</a>
	<a class="side_link" href="#" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/logos/muzta.png"> Muzta
	</a>
	<a class="side_link" href="#" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/logos/swap.png"> Swaproom
	</a>
	<a class="side_link" href="#" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/logos/org.png"> Organizations
	</a>
	<a class="side_link" href="#" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/logos/games.png"> Games
	</a>
	<a class="side_link" href="#" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/watch.png"> Watch
	</a>
	<a class="side_link" href="#" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/memories.png"> Memories
	</a>
	<a class="side_link" href="#" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/pages.png"> Pages
	</a>
	<a class="side_link" href="#" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/fund.png"> Fund Raisers
	</a>
	<a class="side_link" href="#" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/crisis.png"> Crisis Response
	</a>
	<a class="side_link" href="#" >
		<img class="round-logo " src="<?php echo $mainDIR; ?>/images/icons/educ.png"> Education
	</a>
</div>