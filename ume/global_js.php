<script type="text/javascript">




function CleanString(stringtoclean){
    return String(stringtoclean).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}
function GetProfileInfoBySpecificID(userid){
  $.ajax({
     type:"POST",
    url: "../server/server.php",
    data: {tag:"LOAD_SECONDARY_INFO_SPECIFIC",user_idtogetinfo:userid},
    success: function(data){
      AppearSecondaryInfotoPage(data);
    }
  })
}

function LoadRemarksOfPost(post_id,htmlkey){
$.ajax({
    type:"POST",
    url: "../server/server.php",
    data: {tag:"LOAD_POST_REMARKS",postid:post_id},
    success: function(data){
      $("#post_remarks_" + htmlkey).html(data);
    }
  })
}
function SecondaryInformation(){
$.ajax({
    type:"POST",
    url: "../server/server.php",
    data: {tag:"ALL_SECONDARY_INFORMATION"},
    success: function(data){

    }
  })
}
function IndicateMyReaction(html_id,post_id){
  $.ajax({
    type:"POST",
    url: "../server/server.php",
    data: {tag:"INDICATE_REACTION",post_html_id:html_id,post_id:post_id},
    success: function(data){
      $("#reaction_buttons_" + html_id).html(data);
    }
  })
}
function LoadReactionPortion(post_id,htmlkey){
  $.ajax({
    type:"POST",
    url: "../server/server.php",
    data:{tag:"LOAD_REACTION_PORTION",postid:post_id},
    success: function(data){
      $("#reaction_response_" + htmlkey).html(data);
      IndicateMyReaction(htmlkey,post_id)
    }
  })
}
function Reaction_Attempt(thisobj){
  var react = $(thisobj).data("reactype");
  var post_id = $(thisobj).data("post_id");
  var htmlidkey = $(thisobj).data("htmlidkey");
  $.ajax({
    type:"POST",
    url: "../server/server.php",
    data:{tag:"ADD_REACTION",reactiontype:react,postid:post_id},
    success: function(data){
      LoadReactionPortion(post_id,htmlidkey);
    }
  })
}
function CleaNotif_FriendReq(){
 $.ajax({
      type: "POST",
      url: "../server/server.php",
      data: {tag: "CLEAR_NOTIFICATION_FRIENDS"},
      success: function(data){
      }
    })
}
function CleaNotif_JustNotif(){
   $.ajax({
      type: "POST",
      url: "../server/server.php",
      data: {tag: "CLEAR_NOTIFICATION"},
      success: function(data){
      }
    })
}
  function GlobalRunner(){
    GetNotificationCount();
  }
  function GetNotificationCount(){
    $.ajax({
      type: "POST",
      url: "../server/server.php",
      data: {tag: "GET_UNREAD_NOTIF_COUNT"},
      success: function(data){
         // alert(data);
        data = data.split(",");

      //ALL---
      // notif_count

      //NOTIFCATION ONLY---
      // notif_count_notif

      //FRIEND REQUEST---
      // notif_count_friend_req

        if(data[0] != "0"){
          $(".notif_count").css("display","inline-block");
          $(".notif_count").html(data[0]);
        }

        if((data[0] - data[1]) != "0"){
          $(".notif_count_notif").css("display","inline-block");
          $(".notif_count_notif").html(data[0] - data[1]);
        }

        if(data[1] != "0"){
          $(".notif_count_friend_req").css("display","inline-block");
          $(".notif_count_friend_req").html(data[1]);
        }
       
      }
    })
  }

  function GetAllOfMyNotification(){
    
    $.ajax({
      type: "POST",
      url: "../server/server.php",
      data: {tag: "GET_CURRENT_USER_NOTIFICATIONS"},
      success: function(data){
        // alert(data);
        $("#my_notifications").html(data);
      }
    })
  }
  function GetAllFriends(){
    $.ajax({
      type: "POST",
      url: "../server/server.php",
      data: {tag: "GET_ALL_FRIENDS"},
      success: function(data){
        // alert(data);
        $("#friends_panel").html(data);

        // display_friendcount in all string with class
  var count = (data.match(/Unfriend/g) || []).length;
  $(".display_friendcount").html(count);

      }
    })
  }
    function GetOwnPost(){
    $.ajax({
    type:"POST",
    url: "../server/server.php",
    data: {tag: "GET_OWN_POST",layout:"cards"},
    success: function(data){
      $("#my_post_panel").html(data);
    }
  })
  }

    function DisplayCoverPhotos(){
    $.ajax({
    type:"POST",
    url: "../server/server.php",
    data: {tag: "DISPLAY_COVER"},
    success: function(data){
      // alert(data);
      $(".covPhotos").html(data);
    }
  })
  }
  function ModalCoverPhotos(){
    $.ajax({
    type:"POST",
    url: "../server/server.php",
    data: {tag: "DISPLAY_COVER_MODAL"},
    success: function(data){
      // alert(data);
      $("#modalCover").html(data);
    }
  })
  }


  function DeclineFriendRequest(FriendStatusID){
$.ajax({
      type:"POST",
      url: "../server/server.php",
      data: {tag:"UNFRIEND",friend_stat_id:FriendStatusID},
      success: function(data){
        // alert(data);
        location.reload();
      }
    })
  }

		function AcceptFriendRequest(FriendStatusID){
  
$.ajax({
      type:"POST",
      url: "../server/server.php",
      data: {tag:"ACCEPT_FRIEND_REQUEST",friend_stat_id:FriendStatusID},
      success: function(data){
        location.reload();
      }
    })
}
    function DisplaySearchResult(){
    var kword = <?php

if(!isset($_GET["kword"])){
  echo json_encode("");
}else{
  echo json_encode($_GET["kword"]);
}
      ?>;
    $.ajax({
      type: "POST",
      url: "../server/server.php",
      data : {tag: "SEARCH_PROFILE",search_kword: kword,layout:"cards"},
      success: function(data){
        $("#searchres").html(data);

        $('.searchable').each(function(){

    var search_value =  kword ;
    var search_regexp = new RegExp(  search_value , "gi");
    $(this).html($(this).html().replace(search_regexp,"<span class='highlight'>"+search_value+"</span>"));

    });
        
      }
    })
  }

  
  function AddFriend(userid){
    $.ajax({
      type:"POST",
      url : "../server/server.php",
      data: {tag:"ADD_FRIEND",other_userid:userid},
      success: function(data){
        // alert(data);
        location.reload();
      }
    })
  }
	function GetAllFriendRequest(){
		$.ajax({
			type:"POST",
			url: "../server/server.php",
			data: {tag:"GET_FRIEND_REQUEST",layout:"notification"},
			success: function(data){
				$("#my_friend_request").html(data);
			}
		})

	}
   function AppearSecondaryInfotoPage(data){
      if(data == "none"){

      }else{
         data = JSON.parse(data);
         // motto 
         $(".html_fill_wordsstory").html(data["wordsstory"]);
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
         $(":input.html_fill_wordsstory").val(data["wordsstory"]);
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
	function readURL(input,prefiewid) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#' + prefiewid).css('background-image', 'url(' + e.target.result + ')');
      $('#' + prefiewid).css('display', 'block');
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}


 function checkForm(form)
  {
    //
    // validate form fields
    //

    form.myButton.disabled = true;
    return true;
  }

	
	function GetNewsFeed(fter = "all",userid = ""){
		$.ajax({
		type:"POST",
		url: "../server/server.php",
		data: {tag: "GET_NEWSFEED_POST",layout:"cards",filter: fter,user_id:userid},
		success: function(data){
			$("#post_panel").html(data);

    $(".remark_input").on('keyup', function (e) {
    if (e.key === 'Enter' || e.keyCode === 13) {
    var remark_txt = $(this).val();
    var htmlidkey = $(this).data("htmlidkey");
     var post_id = $(this).data("post_id");
    //clear remark txt
      
if(remark_txt != "" ){
    $.ajax({
    type:"POST",
    url: "../server/server.php",
    data: {tag:"ADD_REMARKS",postid:post_id,desc:remark_txt},
    success: function(data){
      // alert(data);
      LoadRemarksOfPost(post_id,htmlidkey);
    }
  })
}
  



    $(this).val("");
    }
    });

		}
	})
	}
</script>