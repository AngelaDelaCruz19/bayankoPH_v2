<?php
if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}
$c = mysqli_connect("localhost","root","","bayanko");
date_default_timezone_set('Asia/Manila');
 // $mainDIR = "http://" . $_SERVER["HTTP_HOST"];
$mainDIR = "http://" . $_SERVER["HTTP_HOST"] . "/bayankoPH";

$tag = $_POST["tag"];
switch ($tag)
{
    case 'ALL_SECONDARY_INFORMATION':
        $q = "SELECT * FROM ume_user_secondaryinfo WHERE user_id='" . $_SESSION["user_id"] . "'";
        $second_data =  mysqli_query($c,$q);
        $json_data=mysqli_fetch_array($second_data);
        $_SESSION['contact']=$json_data['contact'];
        $_SESSION['wordsstory']=$json_data['wordsstory'];
        $_SESSION['location']=$json_data['location'];
        $_SESSION['education']=$json_data['education'];
        $_SESSION['email_contact']=$json_data['email_contact'];
        $_SESSION['job']=$json_data['job']; 
        echo $_SESSION['job'];
        return'';         
    break;
    case 'UPDATE_NUMBER':
    $number=$_POST["number"];
        $q = "UPDATE ume_user_secondaryinfo SET
        contact='" . mysqli_real_escape_string($c,$number) ."'

        WHERE user_id='" . $_SESSION["user_id"] . "'";
         $res = mysqli_query($c,$q);
         if ($c->query($q) === TRUE) {
            $_SESSION['contact']=$number;
                echo $number;
                return'';
            } else {
              echo "Error updating record: " . $c->error;
            }
            $req = mysqli_query($c, $q) or die(mysqli_error($c));      
    break;
    case 'UPDATE_FULL_NAME':
    $fname=$_POST["fname"];
    $mname=$_POST["mname"];
    $lname=$_POST["lname"];
        $q = "UPDATE users SET
        fname='" . mysqli_real_escape_string($c,$fname) ."'
        ,mname='" . mysqli_real_escape_string($c,$mname) ."'
        ,lname='" . mysqli_real_escape_string($c,$lname) ."'

        WHERE id='" . $_SESSION["user_id"] . "'";
         $res = mysqli_query($c,$q);
         if ($c->query($q) === TRUE) {
                $_SESSION["fname"] = $fname;
                $_SESSION["mname"] = $mname;
                $_SESSION["lname"] = $lname;
                $_SESSION["fullname"] = $fname . " " . $mname . " " . $lname;
                echo "updated";
                return'';
            } else {
              echo "Error updating record: " . $c->error;
            }
            $req = mysqli_query($c, $q) or die(mysqli_error($c));      
    break;
    case 'POST_UPLCOVERPHOTOS':

        $coverfiles="";
            for($k=0; $k < count($_FILES["toUploadCovers"]['name']); $k++){ 
       // $filen = $_FILES["item_file"]['name'][$k];
            $coverfiles .= EasyUpload_multiple($_FILES["toUploadCovers"]["name"][$k],
                                        $_FILES["toUploadCovers"]["size"][$k],
                                        $_FILES["toUploadCovers"]["tmp_name"][$k],"uploads/cover","0",$k) . ",";
            // echo $_FILES["tosell_screenshots"]["tmp_name"][$k];
      }
            $_SESSION["pic_coverphoto"] = $coverfiles;
            $q = "UPDATE users SET pic_coverphoto='" . $coverfiles . "' WHERE id='" . $_SESSION["user_id"] . "'";
            $req = mysqli_query($c, $q)  or die(mysqli_error($c)); 
            redirect_to("ume/profile","Cover photo successfully changed!");   
            
    break;

    case 'DISPLAY_COVER':
        $q = "SELECT * FROM users WHERE id='" . $_SESSION["user_id"] . "'";
        $prod_data =  mysqli_query($c,$q);
        $json_data = mysqli_fetch_all($prod_data,MYSQLI_ASSOC);
            $cover_images ="";
        for ($i = 0;$i < count($json_data);$i++){

            $cover_images = explode(",", $json_data[$i]["pic_coverphoto"]);
        }


        $cov =  '
          <ol class="carousel-indicators">
                         <li data-target="#cover" data-slide-to="0" class="active"></li>
            
                ';
                if(count($cover_images) != 1){
                        for ($xv=1; $xv < count($cover_images); $xv++) { 

                            if( $cover_images[$xv]  != ""){
                                 $cov .= '
                         <li data-target="#cover" data-slide-to="' . $xv . '"></li>
                            ';
                            }
                        }
                }
                
        $cov .=  '
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block bg_worthy" width="100%" style="height: 400px; background-image:url(' . $cover_images[0]  . ')"  src="" alt=""></div>
            </div>
            ';
            if(count($cover_images) != 1){
                for ($xv=1; $xv < count($cover_images); $xv++) { 
                    if( $cover_images[$xv]  != ""){
                         $cov .= '
                    <div class="carousel-item">
                        <div class="d-block bg_worthy" width="100%" style="height: 400px; background-image:url(' . $cover_images[$xv] . ')"  src="" alt=""></div>
                    </div>
                    ';
                    }
           
                }
            }

            echo $cov;
           
    break;

    case 'DISPLAY_COVER_MODAL':
        $q = "SELECT * FROM users WHERE id='" . $_SESSION["user_id"] . "'";
        $prod_data =  mysqli_query($c,$q);
        $json_data = mysqli_fetch_all($prod_data,MYSQLI_ASSOC);
            $cover_images ="";
        for ($i = 0;$i < count($json_data);$i++){

            $cover_images = explode(",", $json_data[$i]["pic_coverphoto"]);
        }


        $cov =  '
          <ol class="carousel-indicators">
                         <li data-target="#coverview" data-slide-to="0" class="active"></li>
            
                ';
                if(count($cover_images) != 1){
                        for ($xv=1; $xv < count($cover_images); $xv++) { 

                            if( $cover_images[$xv]  != ""){
                                 $cov .= '
                         <li data-target="#coverview" data-slide-to="' . $xv . '"></li>
                            ';
                            }
                        }
                }
                
        $cov .=  '
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block bg_worthy" width="100%" style="height: 240px; background-image:url(' . $cover_images[0]  . ')"  src="" alt=""></div>
            </div>
            ';
            if(count($cover_images) != 1){
                for ($xv=1; $xv < count($cover_images); $xv++) { 
                    if( $cover_images[$xv]  != ""){
                         $cov .= '
                    <div class="carousel-item">
                        <div class="d-block bg_worthy" width="100%" style="height: 240px; background-image:url(' . $cover_images[$xv] . ')"  src="" alt=""></div>
                    </div>
                    ';
                    }
           
                }
            }

            echo $cov;
           
    break;




    case 'POST_PRODUCT':



$mediafiles = "";
     for($j=0; $j < count($_FILES["tosell_screenshots"]['name']); $j++){ 
   // $filen = $_FILES["item_file"]['name'][$j];
        $mediafiles .= EasyUpload_multiple($_FILES["tosell_screenshots"]["name"][$j],
                                    $_FILES["tosell_screenshots"]["size"][$j],
                                    $_FILES["tosell_screenshots"]["tmp_name"][$j],"uploads","0",$j) . ",";
        // echo $_FILES["tosell_screenshots"]["tmp_name"][$j];
  }



    $prcode = "PROD_" . uniqid() . "_" . $_SESSION["user_id"];
    $q = "INSERT INTO ume_post_products SET 
    prdct_media_files='" . $mediafiles . "',
    prdct_specification='" . CleanString($_POST["tosell_specifications"]) . "',
    prdct_condition='" . CleanString($_POST["tosell_condition"]) . "',
    prdct_availability='" . CleanString($_POST["tosell_availability"]) . "',
    prdct_name='" . CleanString($_POST["tosell_productname"]) . "',
    prdct_category='" . CleanString($_POST["tosell_category"]) . "',
    prdct_tags='" . CleanString($_POST["tosell_tags"]) . "',
    prdct_price='" . CleanString($_POST["tosell_prductprice"]) . "',
    prdct_host='" . $_SESSION["user_id"] . "',
    produccode='" . $prcode ."'";
    $req = mysqli_query($c, $q) or die(mysqli_error($c));



    $q = "INSERT INTO ume_post SET 
            host='" . $_SESSION["user_id"] . "',
            description='',
            type='3',
            media='',
            date_time='" . date("Y-m-d H:i:s") ."',
            img_resolution='',
            original_filename='',
            shared_by='',
            shared_by_desc='',
            shared_by_privacylevel='',
            shared_by_origin='',
            product_code='" . $prcode . "'";
     $req = mysqli_query($c, $q) or die(mysqli_error($c));
        break;
    case 'SHARE_POST_PROTOCOL':
       $q = "SELECT * FROM ume_post WHERE id='" . $_POST["thepostid"] . "' LIMIT 1";
       $req = mysqli_query($c, $q);
       $json_data = mysqli_fetch_array($req);

       $id_orig = "";
        if($json_data["shared_by_origin"] == "" || $json_data["shared_by_origin"] == null){
            //FIRST TIME SHARED
        $id_orig = $json_data["id"];
        }else{
            //SHAREWD AND RE SHARED
        $id_orig = $json_data["shared_by_origin"];
        }

        $q = "INSERT INTO ume_post SET
        host='" .  $json_data["host"]. "',
        description='" . mysqli_real_escape_string($c,$json_data["description"]) . "',
        type='" . $json_data["type"] . "',
        media='" .  $json_data["media"] . "',
        img_resolution='" . $json_data["img_resolution"] . "',
        original_filename='" . $json_data["original_filename"] . "',
        date_time='" .  date("Y-m-d H:i:s") . "',

        shared_by_origin='" .  $id_orig  . "',
        shared_by='" . $_SESSION["user_id"] . "',
        shared_by_desc='" . mysqli_real_escape_string($c,$_POST["thepostdesc"]) . "',
        shared_by_privacylevel='" . $_POST["thepospriv"] . "',
        product_code='" . $json_data["product_code"] . "' 
        ";

    $req = mysqli_query($c, $q) or die(mysqli_error($c));


    echo "Successfully Shared!";
        break;
    case 'ATTEMP_POST_EDIT':
       $q = "UPDATE ume_post SET description='" . mysqli_real_escape_string($c,$_POST["proposeddescription"]). "', date_time=date_time WHERE id='" . $_POST["idofpos"] . "' ";
    $req = mysqli_query($c, $q);
         if($req){
            echo "true";
         }else{
            echo "false";
         }
    break;
    case 'DELETE_ONE_POST':
        $q = "DELETE FROM ume_post WHERE id='" . $_POST["idofpost"] . "'";
         $req = mysqli_query($c, $q);
         if($req){
            echo "true";
         }else{
            echo "false";
         }
        break;
    case 'GET_ALL_POST_REACTIONS':
       $q = "SELECT * FROM ume_reactions LEFT JOIN users ON ume_reactions.host = users.id WHERE ume_reactions.post_id='" . $_POST["idofpost"] . "' ORDER BY ume_reactions.react_time DESC";
        $req = mysqli_query($c, $q);
        $json_data = mysqli_fetch_all($req, MYSQLI_ASSOC);
        
        for ($i=0; $i < count( $json_data); $i++) { 
                echo "<tr>";
                if($json_data[$i]["id"] == $_SESSION["user_id"]){
                echo " <td><a href='profile.php'>
                <span class='mb-0 mt-0' style=''><img style=' background-image: url(" . $_SESSION["pic_profile"]  . ");' class='post_profile '></span>
                " . $json_data[$i]["fname"] . " " . $json_data[$i]["mname"] . " " . $json_data[$i]["lname"] .  "</a></td>";
                }else{
                echo " <td>
                <a href='profile_other.php'>
                <span class='mb-0 mt-0' style=''><img style=' background-image: url(" . $json_data[$i]["pic_profile"] . ");' class='post_profile '></span>
                " . $json_data[$i]["fname"] . " " . $json_data[$i]["mname"] . " " . $json_data[$i]["lname"] .  "</a></td>";
                }
                echo "
                <td><h4 class='mt-2'>" . translate_react($json_data[$i]["react_type"]) . "</h4></td>
                </tr>";
        }
        break;
    case 'UPDATE_SECONDARYINFO_SPECIFIC':
        $q = "SELECT * FROM ume_user_secondaryinfo WHERE user_id='" . $_SESSION["user_id"] . "'";
        $res = mysqli_query($c,$q);
        if(mysqli_num_rows($res) == 0){
        //INSERT A NEW ONE
        $q = "INSERT INTO ume_user_secondaryinfo SET

        user_id='" . $_SESSION["user_id"] ."'
        ,wordsstory='" . mysqli_real_escape_string($c,$_POST["wordsstory"]) ."'
        ,job='" . mysqli_real_escape_string($c,$_POST["job"]) ."'
        ,contact='" . mysqli_real_escape_string($c,$_POST["contact"]) ."'
        ,location='" . mysqli_real_escape_string($c,$_POST["location"]) ."'
        ,education='" . mysqli_real_escape_string($c,$_POST["education"]) ."'
        ,email_contact='" . mysqli_real_escape_string($c,$_POST["email_contact"]) ."'
        ";
         $_SESSION['contact']=$_POST["contact"];
        $_SESSION['wordsstory']=$_POST["wordsstory"];
        $_SESSION['location']=$_POST["location"];
        $_SESSION['education']=$_POST["education"];
        $_SESSION['email_contact']=$_POST["email_contact"];
        $_SESSION['job']=$_POST["job"];
        $res = mysqli_query($c,$q);
        redirect_to("ume/profile","Account information successfully created!");
    }else{
        //JUST UPDATE
        $q = "UPDATE ume_user_secondaryinfo SET
        
        wordsstory='" . mysqli_real_escape_string($c,$_POST["wordsstory"]) ."'
        ,job='" . mysqli_real_escape_string($c,$_POST["job"]) ."'
        ,contact='" . mysqli_real_escape_string($c,$_POST["contact"]) ."'
        ,location='" . mysqli_real_escape_string($c,$_POST["location"]) ."'
        ,education='" . mysqli_real_escape_string($c,$_POST["education"]) ."'
        ,email_contact='" . mysqli_real_escape_string($c,$_POST["email_contact"]) ."'


        WHERE user_id='" . $_SESSION["user_id"] . "'";
         $res = mysqli_query($c,$q);
         $_SESSION['contact']=$_POST["contact"];
        $_SESSION['wordsstory']=$_POST["wordsstory"];
        $_SESSION['location']=$_POST["location"];
        $_SESSION['education']=$_POST["education"];
        $_SESSION['email_contact']=$_POST["email_contact"];
        $_SESSION['job']=$_POST["job"];
         redirect_to("ume/profile","Profile information updated!");
    }
        
        break;
    case 'LOAD_SECONDARY_INFO_SPECIFIC':
        $q = "SELECT * FROM ume_user_secondaryinfo WHERE user_id='" . $_POST["user_idtogetinfo"] . "' LIMIT 1";
         $res = mysqli_query($c,$q);
         if(mysqli_num_rows($res) == 0){
            //NOT YET UPDATED
            echo "none";
         }else{
            //LOAD SECONDARY INFO
            echo json_encode(mysqli_fetch_array($res));
           

         }
        break;
    case 'LOAD_USER_DATA_PROFILEVIEW':
        $q = "SELECT * FROM users WHERE id='" . $_POST["user_id"] . "' LIMIT 1";
        $res = mysqli_query($c,$q);
        echo json_encode(mysqli_fetch_array($res));
        break;
    case 'NEW_PROFILE_PICTURE':
        $fileupload = EasyUpload($_FILES["NewProfilePicture"],"profile_uploads");
        if(strpos($fileupload, "Sorry") == true || $fileupload == null || $fileupload == "" || strpos($fileupload, ".") == false){
            if($fileupload == null || $fileupload == "" || strpos($fileupload, ".") == false){
                redirect_to("ume/profile","Can't upload your profile picture.");
            }else{
                redirect_to("ume/profile",$fileupload);
            }
        }else{
            $_SESSION["pic_profile"] = $fileupload;
            $q = "UPDATE users SET pic_profile='" . $fileupload . "' WHERE id='" . $_SESSION["user_id"] . "'";
            $req = mysqli_query($c, $q)  or die(mysqli_error($c));
            redirect_to("ume/profile","Profile picture successfully changed!");
        }
    break;
    case 'NEW_COVER_PICTURE':
        $fileupload = EasyUpload($_FILES["NewCoverPhoto"],"cover_uploads");
        if(strpos($fileupload, "Sorry") == true || $fileupload == null || $fileupload == "" || strpos($fileupload, ".") == false){
            if($fileupload == null || $fileupload == "" || strpos($fileupload, ".") == false){
                redirect_to("ume/profile","Can't upload your cover photo.");
            }else{
                redirect_to("ume/profile",$fileupload);
            }
        }else{
            $_SESSION["pic_coverphoto"] = $fileupload;
            $q = "UPDATE users SET pic_coverphoto='" . $fileupload . "' WHERE id='" . $_SESSION["user_id"] . "'";
            $req = mysqli_query($c, $q)  or die(mysqli_error($c));
            redirect_to("ume/profile","Cover photo successfully changed!");
        }
    break;
    case 'LOAD_POST_REMARKS':
        echo LoadRemarksOfPost($_POST["postid"]);
        break;
    case 'ADD_REMARKS':
        $q = "INSERT INTO ume_remarks SET post_id='" . $_POST["postid"] . "',host_id='" . $_SESSION["user_id"] . "',description='" . mysqli_real_escape_string($c,htmlentities($_POST["desc"])) . "',media='',date_time='" . date("Y-m-d H:i:s") ."'";
        $req = mysqli_query($c, $q)  or die(mysqli_error($c));

        if(GetUserByPostId($_POST["postid"]) != $_SESSION["user_id"]){
          add_notif("0", GetUserByPostId($_POST["postid"]) , $_SESSION["fullname"] . " commented on your post: " . substr(mysqli_real_escape_string($c,htmlentities($_POST["desc"])), 0, 50)  , '<i class="fas fa-comment-alt"></i>');
  
        }
        break;
    case 'LOAD_REACTION_PORTION':
        echo reactions_viewer($_POST["postid"]);
        break;
    case 'ADD_REACTION':
        //FIND IF SAME REACT NEED TO BE REMOVED
        $q = "SELECT * FROM ume_reactions WHERE post_id='" . $_POST["postid"] . "' AND host='" . $_SESSION["user_id"] . "' AND react_type='" . $_POST["reactiontype"] . "'";
        $req = mysqli_query($c, $q) ;

        if(mysqli_num_rows($req ) ==0){
            //DELETE OLD REACT
        $q = "DELETE FROM ume_reactions WHERE post_id='" . $_POST["postid"] . "' AND host='" . $_SESSION["user_id"] . "'";
        $req = mysqli_query($c, $q) or die(mysqli_error($c));
        //ADD NEW REACT
        $q = "INSERT INTO ume_reactions SET post_id='" . $_POST["postid"] . "',react_type='" . $_POST["reactiontype"] . "',host='" . $_SESSION["user_id"] . "',react_time='" . date("Y-m-d H:i:s") . "'";
        $req = mysqli_query($c, $q) or die(mysqli_error($c));

        if(GetUserByPostId($_POST["postid"]) != $_SESSION["user_id"]){
          add_notif("0", GetUserByPostId($_POST["postid"]) , $_SESSION["fullname"] . " has reacted to your post.", translate_react($_POST["reactiontype"] ));
        }
        }else{
            //delete
            $q = "DELETE FROM ume_reactions WHERE post_id='" . $_POST["postid"] . "' AND host='" . $_SESSION["user_id"] . "'";
            $req = mysqli_query($c, $q) or die(mysqli_error($c));
        }
        break;
    case 'CLEAR_NOTIFICATION_FRIENDS':
        $q = "UPDATE notifications SET status='1' WHERE host='" . $_SESSION["user_id"] . "' AND status='0' AND description = 'friend_request'";
        $req = mysqli_query($c, $q);
    break;
    case 'CLEAR_NOTIFICATION':
        $q = "UPDATE notifications SET status='1' WHERE host='" . $_SESSION["user_id"] . "' AND status='0' AND description != 'friend_request'";
        $req = mysqli_query($c, $q);
    break;
    case 'GET_UNREAD_NOTIF_COUNT':
        $q = "SELECT description FROM notifications WHERE host='" . $_SESSION["user_id"] . "' AND status='0'";
        $req = mysqli_query($c, $q);

        $json_data = mysqli_fetch_all($req, MYSQLI_ASSOC);
        $friend_req_count = 0;
        for ($i = 0;$i < count($json_data);$i++)
        {
            if ($json_data[$i]["description"] == "friend_request")
            {
                $friend_req_count++;
            }
        }

        echo mysqli_num_rows($req) . "," . $friend_req_count;

    break;
    case 'GET_CURRENT_USER_NOTIFICATIONS':
        $q = "SELECT * FROM notifications WHERE host='" . $_SESSION["user_id"] . "' AND is_hidden='0' ORDER BY notif_datetime DESC";
        $req = mysqli_query($c, $q);
        $json_data = mysqli_fetch_all($req, MYSQLI_ASSOC);
        $toecho = "";
        for ($i = 0;$i < count($json_data);$i++)
        {
            $toecho .= '
                <div class="m-2 pb-3 pt-3" style="border-bottom: 1px solid rgba(0,0,0,0.2);">
                <span class="float-right">' . $json_data[$i]["icon"] . '</span>
                    ' . $json_data[$i]["description"] . '<br>
                    <small class="text-muted">' . DateExplainder($json_data[$i]["notif_datetime"])  . '</small>
                </div>  
            ';
        }

        if ($toecho == "")
        {
            echo "<center class='mt-5 mb-5 text-dynamic'>You have no notifications on UME yet.</center>";
        }
        else
        {
            echo $toecho;
        }


    break;
    case 'GET_ALL_FRIENDS':
        $q = "SELECT *,ume_friends.id AS friend_stat_id, users.id AS userID FROM ume_friends LEFT JOIN users ON ume_friends.host_id = users.id WHERE ume_friends.friend_id='" . $_SESSION["user_id"] . "' AND ume_friends.status='2' ORDER BY ume_friends.request_timestamp DESC";
        $req = mysqli_query($c, $q);
        $json_data = mysqli_fetch_all($req, MYSQLI_ASSOC);

        $toecho = "";
        for ($i = 0;$i < count($json_data);$i++)
        {
            $fullname_of_person = $json_data[$i]["fname"] . " " . $json_data[$i]["mname"] . " " . $json_data[$i]["lname"];

            $toecho .= '
                <div class="m-2" style="width:100%; display:block; overflow:hidden;">

                    <button type="button" class="btn btn-danger float-right mt-1 mr-4" ' . " onclick='DeclineFriendRequest(" . $json_data[$i]["friend_stat_id"] . ")'" . ' >Unfriend</button>   
                    <a href="profile_other.php?usr=' . $json_data[$i]["id"] . '" class="text-dynamic  p-3">
                        <img class="post_profile" style="background-image:url(' . $json_data[$i]["pic_profile"] .  ')">
                        <span class="ml-2">' . $fullname_of_person . '</span>
                    </a>
                </div>  
            ';
        }

        $q = "SELECT *,ume_friends.id AS friend_stat_id, users.id AS userID FROM ume_friends LEFT JOIN users ON ume_friends.friend_id = users.id WHERE ume_friends.host_id='" . $_SESSION["user_id"] . "' AND ume_friends.status='2' ORDER BY ume_friends.request_timestamp DESC";
        $req = mysqli_query($c, $q);
        $json_data = mysqli_fetch_all($req, MYSQLI_ASSOC);

        for ($i = 0;$i < count($json_data);$i++)
        {
            $fullname_of_person = $json_data[$i]["fname"] . " " . $json_data[$i]["mname"] . " " . $json_data[$i]["lname"];

            $toecho .= '
                <div class="m-2">
                    <button type="button" class="btn btn-danger float-right mt-1 mr-2" ' . " onclick='DeclineFriendRequest(" . $json_data[$i]["friend_stat_id"] . ")'" . ' >Unfriend</button>   
                    <a href="profile.php" class="text-dynamic p-3">
                        <img class="post_profile" style="background-image:url(' . $json_data[$i]["pic_profile"] .  ')">
                        <span class="ml-2" >' . $fullname_of_person . '</span>
                    </a>
                </div>  
            ';
        }
        if ($toecho == "")
        {
            echo "<center class='mt-5 mb-5 text-dynamic'>You have no friends on UME yet.</center>";
        }
        else
        {
            echo $toecho;
        }
    break;
    case 'GET_FRIEND_REQUEST':
        // WHERE friend_id='" . $_SESSION["user_id"] . "' AND status='0'
        $q = "SELECT *,ume_friends.id AS friend_stat_id FROM ume_friends LEFT JOIN users ON ume_friends.host_id = users.id WHERE ume_friends.friend_id='" . $_SESSION["user_id"] . "' AND ume_friends.status='1' ORDER BY ume_friends.request_timestamp DESC";
        $req = mysqli_query($c, $q);
        $json_data = mysqli_fetch_all($req, MYSQLI_ASSOC);
        $toecho = "";
        switch ($_POST["layout"])
        {
            case 'notification':
                for ($i = 0;$i < count($json_data);$i++)
                {
                    $fullname_of_person = $json_data[$i]["fname"] . " " . $json_data[$i]["mname"] . " " . $json_data[$i]["lname"];
                    $date_time_requested = date("g:i a F d,Y", strtotime($json_data[$i]["request_timestamp"]));

                    $toecho .= '

                <div class="m-2">
                    <button type="button" class="btn btn-secondary float-right mt-3 ml-2" ' . " onclick='DeclineFriendRequest(" . $json_data[$i]["friend_stat_id"] . ")'" . ' >Delete</button>          
                    <button type="button" class="btn btn-primary float-right mt-3" ' . "onclick='AcceptFriendRequest(" . $json_data[$i]["friend_stat_id"] . ")'" . '>Confirm</button>
                    <a href="profile.php" class="text-dynamic no-res-link p-3">
                        <img class="round-logo-friend">
                        <span class="ml-2" style="font-weight: bold;">' . $fullname_of_person . '</span>
                        <span>sent a friend request</span><br>
                    </a>
                    <p class="time">' . $date_time_requested . '</p>
                </div>  
                    ';
                }
            break;
        }
        if ($toecho == "")
        {
            echo "<center class='mt-5 mb-5 text-dynamic'>You have no friend request today.</center>";
        }
        else
        {
            echo $toecho;
        }
    break;
    case 'ACCEPT_FRIEND_REQUEST':
        $q = "UPDATE ume_friends SET status='2' WHERE id='" . $_POST["friend_stat_id"] . "'";
        $req = mysqli_query($c, $q);

        $q = "SELECT * FROM ume_friends WHERE id='" . $_POST["friend_stat_id"] . "' LIMIT 1";
        $req = mysqli_query($c, $q);
        $json_data = mysqli_fetch_array($req);

        $the_other_id = $json_data["host_id"];
        if ($json_data["host_id"] == $_SESSION["user_id"])
        {
            $the_other_id = $json_data["friend_id"];
        }
        //other person
        add_notif("0", $the_other_id, $_SESSION["fullname"] . " has accepted your a friend request.", '<i class="fas fa-user-friends"></i>');
    break;
    case 'UNFRIEND':
        $q = "DELETE FROM ume_friends WHERE id='" . $_POST["friend_stat_id"] . "'";
        $req = mysqli_query($c, $q);
        // echo $_POST["friend_stat_id"];
        
    break;
    case 'ADD_FRIEND':
        $q = "INSERT INTO ume_friends SET host_id='" . $_SESSION["user_id"] . "', friend_id='" . $_POST["other_userid"] . "',status='1'";

        $req = mysqli_query($c, $q);
        add_notif("1", $_POST["other_userid"], "friend_request", '<i class="fas fa-user-friends"></i>');
    break;
    case 'SEARCH_PROFILE':
        $q = "SELECT * FROM users WHERE fname LIKE '%" . $_POST["search_kword"] . "%' OR mname LIKE '%" . $_POST["search_kword"] . "%' OR lname LIKE '%" . $_POST["search_kword"] . "%' LIMIT 50";
        $req = mysqli_query($c, $q);
        $json_data = mysqli_fetch_all($req, MYSQLI_ASSOC);
        switch ($_POST["layout"])
        {
            case 'cards':
                for ($i = 0;$i < count($json_data);$i++)
                {
                    $userfullname = $json_data[$i]["fname"] . " " . $json_data[$i]["mname"] . " " . $json_data[$i]["lname"];
                    echo "
                        <div class='card card-dynamic mb-2'>
                        <div class='card-body'>
                        ";

                    if ($_SESSION["email"] == $json_data[$i]["email"])
                    {
                        //BELONG
                        echo "<a href='profile.php'>
                            <span class='mb-0 mt-0' style=''><img style=' background-image: url(" . $_SESSION["pic_profile"]  . ");' class='post_profile '> <span class='searchable'>" . $_SESSION["fullname"] . "</span></span>
                            </a>";
                    }
                    else
                    {
                        // OTHERS
                        echo "<a href='profile_other.php?usr=" . $json_data[$i]["id"]. "'>
                            <span class='mb-0 mt-0' style=''><img style=' background-image: url(" . $json_data[$i]["pic_profile"]. ");' class='post_profile '> <span class='searchable'>" . $userfullname . "</span></span>
                            </a>";
                    }

                    echo check_friendstatus($json_data[$i]["id"], "float:right;");
                    echo "
                        </div>
                        </div>
                    ";
                }
            break;
        }
    break;
    case "POST_NEW_STATUS":
        $toecho = "";
        $media_file = "";
        
        $orig_filename = "";
        $type = "0";
        if (!empty($_FILES["fileToUpload"]["tmp_name"]) && $_FILES["fileToUpload"]["tmp_name"] != "")
        {
            // DESC + 1 IMAGE
            $type = "0";
           $media_file = EasyUpload($_FILES["fileToUpload"],"uploads","0");
           $orig_filename = $_FILES["fileToUpload"]["name"];
        }

        if (!empty($_FILES["VideoUpload"]["tmp_name"]) && $_FILES["VideoUpload"]["tmp_name"] != "")
        {
            // DESC + 1 VIDEO
            $type = "1";
           $media_file = EasyUpload($_FILES["VideoUpload"],"uploads","1");
           $orig_filename = $_FILES["VideoUpload"]["name"];
        }

        if (!empty($_FILES["AttachmentUpload"]["tmp_name"]) && $_FILES["AttachmentUpload"]["tmp_name"] != "")
        {
            // DESC + Attachment
            $type = "2";
           $media_file = EasyUpload($_FILES["AttachmentUpload"],"uploads","2");
           $orig_filename = $_FILES["AttachmentUpload"]["name"];
        }else{
            // 3 is for products which is not included in this function... separated function is dedicated for product instertion.
        }

       

        if ($_POST["post_desc"] == "" && $media_file == "")
        {
            echo "Nothing Posted.";
            
        }
        else
        {

             if($_POST["post_desc"] == "" && (strpos(strtolower($media_file), "sorry") !== false || $media_file == null || $media_file == "" || strpos($media_file, ".") == false)){

               echo $media_file;

        }else{
            $q = "INSERT INTO ume_post SET host='" . $_SESSION["user_id"] . "', description='" . mysqli_real_escape_string($c, $_POST["post_desc"]) . "', type='" . $type . "', media='" .  $media_file . "', img_resolution='" . $_POST["img_screensize"] . "',original_filename='" . mysqli_real_escape_string($c, $orig_filename) . "'";
            $req = mysqli_query($c, $q);


            $toecho = "Successfully Posted!";
          echo $toecho ;

        }

           
        }


    break;
    case 'INDICATE_REACTION':

        $q = "SELECT ume_reactions.react_type FROM ume_reactions WHERE post_id='" . $_POST["post_id"] . "' AND host='" . $_SESSION["user_id"] . "' LIMIT 1";
        $req = mysqli_query($c, $q);
        

if(mysqli_num_rows($req) != 0){
            $json_data = mysqli_fetch_array($req);
            echo '<style>.rr_' . $_POST["post_html_id"] . '_' . $json_data["react_type"] . '{ background-color:#FFC73D; padding-bottom: 10px !important; border-radius: 10px !important;}</style>';
        }

        echo '
        <button type="button" 
        class="btn mt-0 mb-0 pb-0 zoom rr_' . $_POST["post_html_id"] . '_haha"
        onclick="Reaction_Attempt(this)" data-reactype="haha" data-htmlidkey="' . $_POST["post_html_id"]. '" data-post_id="' . $_POST["post_id"] . '" title="Haha">&#128514;</button>
        <button type="button" 
        class="btn mt-0 mb-0 pb-0 zoom rr_' . $_POST["post_html_id"] . '_sad"
        onclick="Reaction_Attempt(this)" data-reactype="sad" data-htmlidkey="' . $_POST["post_html_id"]. '" data-post_id="' . $_POST["post_id"] . '" title="Sad">&#128557;</button>
        <button type="button" 
        class="btn mt-0 mb-0 pb-0 zoom rr_' . $_POST["post_html_id"] . '_love"
        onclick="Reaction_Attempt(this)" data-reactype="love" data-htmlidkey="' . $_POST["post_html_id"]. '" data-post_id="' . $_POST["post_id"] . '" title="Love">&#128525;</button>
        <button type="button" 
        class="btn mt-0 mb-0 pb-0 zoom rr_' . $_POST["post_html_id"] . '_angry"
        onclick="Reaction_Attempt(this)" data-reactype="angry" data-htmlidkey="' . $_POST["post_html_id"]. '" data-post_id="' . $_POST["post_id"] . '" title="Angry">&#128548;</button>
        ';

        
        break;
    case 'GET_NEWSFEED_POST':
        $q = "SELECT * FROM ume_friends WHERE (host_id='" . $_SESSION["user_id"] . "' OR friend_id='" . $_SESSION["user_id"] . "') AND status='2'";
        $toecho = "";

        $toselect = "";
        $req = mysqli_query($c, $q);
        $friends_data = mysqli_fetch_all($req, MYSQLI_ASSOC);

        for ($i = 0;$i < count($friends_data);$i++)
        {
            $toselect .= " OR host='" . $friends_data[$i]["host_id"] . "' OR host='" . $friends_data[$i]["friend_id"] . "' OR ume_post.shared_by = '" . $friends_data[$i]["friend_id"]  . "'";
        }

        
        if($_POST["filter"] == "all"){
            $q = "SELECT *,users.id AS user_id,ume_post.id AS post_id FROM ume_post RIGHT JOIN users ON ume_post.host = users.id   WHERE ume_post.host='" . $_SESSION["user_id"] . "' " . $toselect . " ORDER BY date_time DESC";
        }else if($_POST["filter"] == "other"){
             $q = "SELECT *,users.id AS user_id,ume_post.id AS post_id FROM ume_post RIGHT JOIN users ON ume_post.host = users.id   WHERE ume_post.host='" .$_POST["user_id"] . "' AND ume_post.shared_by = '' ORDER BY date_time DESC";
        }else if($_POST["filter"] == "me"){
             $q = "SELECT *,users.id AS user_id,ume_post.id AS post_id FROM ume_post RIGHT JOIN users ON ume_post.host = users.id   WHERE ume_post.host='" . $_SESSION["user_id"] . "' OR ume_post.shared_by='" . $_SESSION["user_id"] . "' ORDER BY date_time DESC";
        }


        $req = mysqli_query($c, $q);
        $json_data = mysqli_fetch_all($req, MYSQLI_ASSOC);
        switch ($_POST["layout"])
        {
            case 'cards':
                for ($i = 0;$i < count($json_data);$i++)
                {
                    $avatar_comment = $mainDIR;
                    $react_view = reactions_viewer($json_data[$i]["post_id"]);
                    if($react_view != ""){
                    $react_view ='<small><a href="#" data-toggle="modal" style="display:block" class="text-dynamic mt-2" data-target="#modal_reactions" data-postid="' . $json_data[$i]["post_id"] . '" onclick="GetAllPostReactors(this)" id="reaction_response_' . $i . '"> ' . $react_view  . '</a></small>';
                    }
                    $interacts='
                        <div class="col-lg-6">
                        <div class="btn-group special " id="reaction_buttons_' . $i . '" role="group" aria-label="Basic example" style="width: 40px; margin-left:-15px;"></div>
                    
                        </div>
                    ';

                    $emoji_remarks = '
                    <div style="border-radius: 15px;">
                    <div>
                    <div class="row">
                    
                        <div class="col-lg-6">
                        <input class="form-control mt-1 remark_input bg-dynamic text-dynamic" type="text" autocomplete="nope" data-htmlidkey="'. $i .'"  data-post_id="'. $json_data[$i]["post_id"] .'" name="commentsonly" readonly onfocus="' . "this.removeAttribute('readonly');" .'"  placeholder="Any remark. . ." style="color: white;">
                     </div>
                    </div>
                 </div>
                    <div style="max-height: 500px; overflow:auto;" id="post_remarks_' . $i . '">' . LoadRemarksOfPost($json_data[$i]["post_id"]) . '</div>
                    </div>';
                    // POST:::STARTING OF CARD POST----------------


                    $sharedPostHTML = "";
                    $sharedpostFooterHTML = "";
                    if($json_data[$i]["shared_by"] != "" && $json_data[$i]["shared_by"] != null){
                        $sharedPostHTML = "
                        <div class='card-header'>
                        <small><span style='text-decoration:underline;'>" . LoadUserFullnameByID($json_data[$i]["shared_by"]) . "</span> shared <span style='text-decoration:underline;'>" . LoadUserFullnameByID($json_data[$i]["host"]) . "'s</span> Post.</small>
                        </div>
                        ";

                        if($json_data[$i]["shared_by_desc"] != "" && $json_data[$i]["shared_by_desc"] != null){
                             $sharedpostFooterHTML = "
                         <div class='card-footer'>
                           ";


                           if ($_SESSION["user_id"] == $json_data[$i]["shared_by"])
                    {
                        // LOGGED-IN USER
                         $sharedpostFooterHTML .= "<a href='profile.php'>
                            <span class='mb-0'><img style=' background-image: url(" . $_SESSION["pic_profile"]  . ");' class='post_profile bg_contain'> " . $_SESSION["fullname"]  . "</span>
                            </a>";
                    }
                    else
                    {
                        // OTHER ACCOUNT
                         $sharedpostFooterHTML .= "<a href='profile_other.php?usr=" . $json_data[$i]["shared_by"] . "'>
                        <span class='mb-0'><img style=' background-image: url(" . LoadUserProfileLocationByID($json_data[$i]["shared_by"]). ");' class='post_profile bg_contain'> " . $userfullname  . "</span></a>";
                    }
                           $sharedpostFooterHTML .= "<pre class='text-dynamic mt-3'>" . ReadLinks($json_data[$i]["shared_by_desc"]) . "</pre>";

                           $sharedpostFooterHTML .="
                        </div>
                             ";
                        }
                    }

                    echo '
                        <div class="card gray text-dynamic mb-3" style="border-radius:15px;" id="htmlposid_' . $i .'">
                        '. $sharedPostHTML .'
                        <div class="card-body">

                  <div class="dropdown">
                       <button class="btn btn-link btn-sm float-right ml-2 mt-2 text-dynamic" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fas fa-caret-down"></i>
                  </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            '; 
                    if($_SESSION["user_id"] == $json_data[$i]["user_id"]){
                        // POST OPTIONS:::LOGGED-IN USER POST DELETION
                        echo '<a data-toggle="modal" data-target="#modal_delpost" data-postid="' . $json_data[$i]["post_id"] . '" data-htmlpostidnumber="' . $i . '" onclick="PrepareDeletePostDialog(this)" class="dropdown-item" href="#"><i class="fas fa-trash"></i> Delete Post</a>

                        <a data-toggle="modal" data-target="#modal_editpost" onclick="PrepareEditPostModal(this)" data-postid="' . $json_data[$i]["post_id"] . '" data-htmlpostidnumber="' . $i . '" class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit</a>';
                    }else{
                        // POST OPTIONS:::OTHER USER POST
                        echo '<a class="dropdown-item" data-toggle="modal" data-postid="' . $json_data[$i]["post_id"] . '" data-htmlpostidnumber="' . $i . '" data-target="#modal_reportpost" href="#"><i class="fas fa-flag"></i> Report this post</a>';
                    }

                    // POST:::SHARE BUTTON LOCATION
                     echo '
                    </div>
                    </div>
                         
                    ';


                    $userfullname = $json_data[$i]["fname"] . " " . $json_data[$i]["mname"] . " " . $json_data[$i]["lname"];
                    // CHECK WHO THIS POST BELONGS TO
                    $post_time = "<small style='margin-left:59px; margin-top:-15px; display:block;'>" . DateExplainder($json_data[$i]["date_time"]) . "</small>";
                    if ($_SESSION["user_id"] == $json_data[$i]["user_id"])
                    {
                        // LOGGED-IN USER
                        echo "<a href='profile.php'>
                            <span class='mb-0'><img style=' background-image: url(" . $_SESSION["pic_profile"]  . ");' class='post_profile bg_contain'> " . $_SESSION["fullname"]  . "</span>
                            </a>";
                    }
                    else
                    {
                        // OTHER ACCOUNT
                        echo "<a href='profile_other.php?usr=" . $json_data[$i]["id"] . "'>
                        <span class='mb-0'><img style=' background-image: url(" . $json_data[$i]["pic_profile"]. ");' class='post_profile bg_contain'> " . $userfullname  . "</span></a>";
                    }
                
                    echo $post_time;
                    echo '
                        </div>
                            <div class="p-3" id="htmlposidbody_' . $i . '" style="position:relative;">
                            
                            <div class="row">
                                ';


                    //IMAGE UPLOAD

                    if ($json_data[$i]["media"] != "" && $json_data[$i]["description"] == "")
                    {
                        // MEDIA ONLY   
                        echo '

                                <div class="col-lg-12">
                                <div class="mb-1" id="post_desc_holder_' . $i . '" style="display:none;"><pre id="post_desc_html_' . $i . '" class="text-dynamic mt-0 mb-0"></pre></div>
                                    <div style="overflow:hidden; max-height:700px;">
                                    ' . MediaDisplayer($json_data[$i]["media"],$json_data[$i]["type"],$json_data[$i]["original_filename"]) . '
                                    </div>
                                    
                                </div>';
                    }
                    else if ($json_data[$i]["media"] != "")
                    {
                        // MEDIA WITH DESCRIPTION
                        echo '<div class="col-lg-12">
                                    <div class="mb-1" id="post_desc_holder_' . $i . '"><pre id="post_desc_html_' . $i . '" class="text-dynamic mt-0 mb-0">' . ReadLinks($json_data[$i]["description"] ). '</pre></div>
                                    <div style="overflow:hidden; max-height:700px;">
                                      ' . MediaDisplayer($json_data[$i]["media"],$json_data[$i]["type"],$json_data[$i]["original_filename"]) . '
                                    </div>
                                </div>';
                
                    }
                    else if($json_data[$i]["product_code"] != ""){
                        // HAS PRODUCT

                        // SELECT PRODUCT
                        $product_get= "SELECT * FROM ume_post_products WHERE produccode='" . $json_data[$i]["product_code"] . "' LIMIT 1";
                        $prod_data = mysqli_fetch_array( mysqli_query($c,$product_get));


                        echo '<div class="col-lg-12">
                                       <div class="mb-1" id="post_desc_holder_' . $i . '">

                                       <pre id="post_desc_html_' . $i . '" class="text-dynamic mt-0 mb-0"></pre>
';


                                      $te ='<div id="carausel_post_' . $i . '" class="carousel slide" data-ride="carousel">

    ';
$product_images = explode(",", $prod_data["prdct_media_files"]);



$te .=  '
  <ol class="carousel-indicators">
 <li data-target="#carausel_post_' . $i . '" data-slide-to="0" class="active"></li>
    ';
    if(count($product_images) != 1){
        for ($xv=1; $xv < count($product_images); $xv++) { 

    if( $product_images[$xv]  != ""){
         $te .= '
<li data-target="#carausel_post_' . $i . '" data-slide-to="' . $xv . '"></li>
    ';
    }
}
    }


$te .=  '
  </ol>
  <div class="carousel-inner">
<div class="carousel-item active">
      <div class="d-block bg_worthy" width="100%" style="height: 539px; background-image:url(' . $product_images[0]  . ')"  src="" alt=""></div>
    </div>

    ';
    if(count($product_images) != 1){
        for ($xv=1; $xv < count($product_images); $xv++) { 

    if( $product_images[$xv]  != ""){
         $te .= '
<div class="carousel-item">
      <div class="d-block bg_worthy" width="100%" style="height: 539px; background-image:url(' . $product_images[$xv] . ')"  src="" alt=""></div>
    </div>

    ';
    }
   
}
    }





    $te .= '
  </div>

  <a class="carousel-control-prev" href="#carausel_post_' . $i . '" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carausel_post_' . $i . '" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>';


echo $te;
                                echo '
                                <p class="text-success mt-3 float-right">Price: <strong>' . number_format($prod_data["prdct_price"]) . '</strong></p>
                                <span class="badge badge-danger mt-3"><i class="fas fa-tag"></i> PRODUCT</span>  <span class="badge badge-dark mt-3">' . $prod_data["prdct_category"] . '</span>
                                <h4>' . $prod_data["prdct_name"]  . ' </h4>
                                <pre class="text-dynamic">' . ReadLinks($prod_data["prdct_specification"]) . '</pre>
                                       </div>
                        </div>';

                    }
                    else
                    {
                        // DESCRIPTION ONLY
                        echo '<div class="col-lg-12">
                                       <div class="mb-1" id="post_desc_holder_' . $i . '"><pre id="post_desc_html_' . $i . '" class="text-dynamic mt-0 mb-0">' . ReadLinks($json_data[$i]["description"]) . '</pre></div>
                                </div>';
                    }





                    echo '
                            </div>
                           
                        </div>
                        ' .  $sharedpostFooterHTML . '
                         <div class="p-3">
                            <div class="row">
                                <div class="col-lg-8 pt-3 pr-3 pl-3">
                                    <a href="#"><span> ' .  $react_view  . '</span></a>
                                </div>
                                <div class="col-lg-4 pt-3 pr-3 pl-3" style="font-size: 20px;">
                                    <div class="d-flex justify-content-end ">
                                        <a href="#" class="pr-2 pl-2"data-toggle="modal" data-target="#interacts"><span><i class="fas fa-grin-alt"></i></span></a>
                                        <a href="#" class="pr-2 pl-2"><span><i class="fas fa-paper-plane"></i></span></a>
                                        <a href="#" class="pr-2 pl-2" data-toggle="modal" data-target="#makeaComment"><span><i class="fas fa-comment-alt"></i></span></a>
                                       <a href="#" class="pr-2 pl-2" data-postid="' . $json_data[$i]["post_id"] . '" data-htmlpostidnumber="' . $i . '" onclick="PrepareShareModal(this)" data-fullnameshared="' . LoadUserFullnameByID($json_data[$i]["host"]) . '" data-profilepicsharer="' . LoadUserProfileLocationByID($json_data[$i]["host"]) . '" data-toggle="modal" data-target="#modal_sharepost" style="font-size: 20px;"><span><i class="fas fa-share-square"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="modal" tabindex="-1" role="dialog" id="makeaComment">
                              <div class="modal-dialog text-dynamic" role="document">
                                <div class="modal-content">
                                  <div class="modal-header mod-head">
                                    <h5 class="modal-title">Comments</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body mod-body">
                                  '.$emoji_remarks.'

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal" tabindex="-1" role="dialog" id="interacts">
                              <div class="modal-dialog text-dynamic" role="document">
                                <div class="modal-content">
                                  <div class="modal-header mod-head">
                                    <h5 class="modal-title">Interacts</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body mod-body">
                                  '.$interacts.'
                                
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            
                        ';

                    echo '
                        
                        </div>
                    ';
                
            ?>
            <script type="text/javascript">
            IndicateMyReaction(<?php echo json_encode($i); ?>,<?php echo json_encode($json_data[$i]["post_id"]); ?>);
            </script>
            <?php
                }
                break;
            }

            if(  count($json_data)  == 0){
echo '<center>
                <h4>No things to catch-up for today.</h4>
            </center>';
}
        break;
            // profile own post
            
       

            case 'SYS_LOGOUT':
                session_unset();
                session_destroy();
                redirect_to("index");
            break;
            case 'LOG_IN':
                // LOGIN TO BAYAN KO SYSTEMS
                $q = "SELECT * FROM users WHERE email='" . $_POST["lgn_emailaddphone"] . "' AND password='" . md5( $_POST["lgn_password"]) . "'";
                $reg = mysqli_query($c, $q);
                if (mysqli_num_rows($reg) == 1)
                {

                    $mydata = mysqli_fetch_array($reg);

                    $_SESSION["email"] = strtolower($mydata["email"]);
                    $_SESSION["user_id"] = strtolower($mydata["id"]);

                    $_SESSION["fname"] = $mydata["fname"];
                    $_SESSION["mname"] = $mydata["mname"];
                    $_SESSION["lname"] = $mydata["lname"];

                    
                 
                    $profile_pic = $mydata["pic_profile"];
                    $cover_pic = $mydata["pic_coverphoto"];

                    if($mydata["pic_profile"] == "" || $mydata["pic_profile"]  == null){
                        $profile_pic = $mainDIR . "/image_placeholders/profile.png";
                    }
                    if($mydata["pic_coverphoto"] == "" || $mydata["pic_coverphoto"] == null){
                        $cover_pic = $mainDIR . "/image_placeholders/cover.png";   
                    }

                    $_SESSION["pic_profile"] = $profile_pic;
                    $_SESSION["pic_coverphoto"] = $cover_pic;

                    $_SESSION["fullname"] = $mydata["fname"] . " " . $mydata["mname"] . " " . $mydata["lname"];

                    if ($_POST["application"] == "index")
                    {
                        redirect_to("index", "Welcome back! Successfully logged-in!");
                    }
                    else
                    {
                        redirect_to($_POST["application"] . "/dashboard");
                    }
                }
                else
                {
                    redirect_to("login", "Login failed!");
                }
            break;
            case "SIGN_UP":
                if ($_POST["inp_password"] == $_POST["inp_reenterpassword"])
                {

                    $profile_pic = $mainDIR . "/image_placeholders/profile.png";
                    $cover_pic = $mainDIR . "/image_placeholders/cover.png";   
                      $email = mysqli_real_escape_string($c,htmlentities( strtolower($_POST["inp_emailaddphone"])));
                    // FIND MATCHING EMAIL
                    $q= "SELECT * FROM users WHERE email='" . $email . "' LIMIT 1";
                     $req = mysqli_query($c, $q);

                     // CHECK IF ACCOUNT EMAIL IS ALREADY TAKEN
                     if(mysqli_num_rows($req) == 0){
                        //EMAIL NEW
                        //INSERT ACCOUNT
                    $q = "INSERT INTO users SET fname='" . mysqli_real_escape_string($c,htmlentities($_POST["inp_fname"])) . "',
                    mname='" . mysqli_real_escape_string($c,htmlentities($_POST["inp_middlename"])) . "',
                    lname='" . mysqli_real_escape_string($c,htmlentities($_POST["inp_lname"])) . "',
                    email='" . $email . "',
                    password='" . md5($_POST["inp_password"]) . "',
                    date_reg='" . date("Y-m-d H:i:s") . "',
                    pic_profile='" .  $profile_pic  . "',
                    pic_coverphoto='" . $cover_pic . "'";
                    $req = mysqli_query($c, $q);
                    if ($req)
                    {
                        $q = "SELECT * FROM users WHERE email='" . $email . "' AND password='" . md5($_POST["inp_password"]) . "'";
                        $reg = mysqli_query($c, $q);

                        $mydata = mysqli_fetch_array($reg);

                        $_SESSION["user_id"] = strtolower($mydata["id"]);
                        $_SESSION["email"] = strtolower($mydata["email"]);

                        $_SESSION["fname"] = $mydata["fname"];
                        $_SESSION["mname"] = $mydata["mname"];
                        $_SESSION["lname"] = $mydata["lname"];

                        $_SESSION["fullname"] = $mydata["fname"] . " " . $mydata["mname"] . " " . $mydata["lname"];

                         $profile_pic = $mydata["pic_profile"];
                    $cover_pic = $mydata["pic_coverphoto"];

                    if($mydata["pic_profile"] == "" || $mydata["pic_profile"]  == null){
                        $profile_pic = $mainDIR . "/image_placeholders/profile.png";
                    }
                    if($mydata["pic_coverphoto"] == "" || $mydata["pic_coverphoto"] == null){
                        $cover_pic = $mainDIR . "/image_placeholders/cover.png";   
                    }

                    $_SESSION["pic_profile"] = $profile_pic;
                    $_SESSION["pic_coverphoto"] = $cover_pic;

                        if ($_POST["application"] == "index")
                        {

                              $q = "INSERT INTO ume_user_secondaryinfo SET

        user_id='" . $_SESSION["user_id"] ."'
        ,wordsstory=''
        ,job=''
        ,contact=''
        ,location=''
        ,education=''
        ,email_contact=''
        ";
        $res = mysqli_query($c,$q);


                            redirect_to("index", "Successfully Registered! Welcome to BayankoPH!");
                        }
                        else
                        {
                            redirect_to($_POST["application"] . "/dashboard", "Welcome to BayankoPH!");
                        }

                    }
                    else
                    {
                        redirect_to("signup", "Unable to register. Please try again later...");
                    }
                     }else{
                        //EMAIL TAKEN
                         redirect_to("signup", "Unable to sign-up. Email already taken.");
                     }

                    
                }
                else
                {
                    // RETURN TO SIGNUP PAGE
                    redirect_to("signup", "Password do not match.");
                }
            break;
        }
        function reactions_viewer($postid){
            global $c;
    $q = "SELECT * FROM ume_reactions LEFT JOIN users ON ume_reactions.host = users.id WHERE ume_reactions.post_id='" . $postid . "' ORDER BY ume_reactions.react_time DESC";
        $req = mysqli_query($c, $q);
        $json_data = mysqli_fetch_all($req, MYSQLI_ASSOC);
        $toecho = "<div class='slide_down'>";

        switch (mysqli_num_rows($req)) {
            case 0:
                // for none
            $toecho .="";
                break;
                case 1:
                 // one 
            $toecho .= translate_react($json_data[0]["react_type"]) . " " .  $json_data[0]["fname"] .  " has interacted.";
                break;
                case 2:
            $toecho .= translate_react($json_data[0]["react_type"]) . " " . $json_data[0]["fname"] .  " and " . translate_react($json_data[1]["react_type"]) . " " . $json_data[1]["fname"] . " has interacted.";
                break;
                case 3:
                for ($i = 0;$i < 2;$i++)
        {
            $toecho .= $json_data[$i]["fname"] . ", ";
        }
        $toecho .= " and " . (mysqli_num_rows($req) - 2) . " more has interacted.";
                break;

        }
        $toecho .= "</div>";
        return $toecho;
        }
        function add_notif($ishidden = "0", $user_id, $description, $icon = '<i class="fas fa-bell"></i>', $mediafile = "")
        {
            global $c;
            $q = "INSERT INTO notifications SET description='" . htmlentities(mysqli_real_escape_string($c, $description)) . "',media='" . $mediafile . "',host='" . $user_id . "',status='0',icon='" . $icon . "',is_hidden='" . $ishidden . "'";
            $req = mysqli_query($c, $q);
        }

        function LoadRemarksOfPost($postid){
              global $c;
            $q = "SELECT * FROM ume_remarks LEFT JOIN users ON ume_remarks.host_id = users.id WHERE ume_remarks.post_id='" . $postid . "' ORDER BY ume_remarks.date_time DESC";
        $req = mysqli_query($c, $q);
        $json_data = mysqli_fetch_all($req, MYSQLI_ASSOC);

        $toecho = "";
        for ($i=0; $i < count($json_data); $i++) { 


            $toecho .= '

            <a href="profile.php" class=" remarks_bubble">
            <small>
            <span class="float-right text-muted">' . DateExplainder($json_data[$i]["date_time"]) . '</span>
            <img class="post_profile-sm" style="background-image:url(' . $json_data[$i]["pic_profile"] . ')"> ' . $json_data[$i]["fname"] . " " . $json_data[$i]["mname"] . " " . $json_data[$i]["lname"] . '
            </small>
            </a>
            <p style="margin-left:35px;">' . ReadLinks($json_data[$i]["description"]) . '</p>
            ';
        }

        return $toecho;
        }
        function check_friendstatus($user_id, $css = "")
        {
            global $c;
            $q = "SELECT * FROM ume_friends WHERE (host_id='" . $_SESSION["user_id"] . "' AND friend_id='" . $user_id . "') OR (host_id='" . $user_id . "' AND friend_id='" . $_SESSION["user_id"] . "') LIMIT 1";
            $req = mysqli_query($c, $q);
            $json_data = mysqli_fetch_all($req, MYSQLI_ASSOC);
            if (count($json_data) == "1")
            {
                switch ($json_data[0]["status"])
                {
                    case '0':
                        //Stranger
                        return "<button onclick='AddFriend(" . $user_id . ")' class='btn btn-primary' style='" . $css . "'>Add Me</button>";
                    break;
                    case '1':
                        // Pending
                        if ($json_data[0]["host_id"] == $_SESSION["user_id"])
                        {
                            // ADDED AS FRIEND
                            $q = "SELECT *,ume_friends.id AS friend_stat_id, users.id AS userID FROM ume_friends LEFT JOIN users ON ume_friends.host_id = users.id WHERE (ume_friends.friend_id='" . $user_id . "' AND ume_friends.host_id='" . $_SESSION["user_id"] . "') OR (ume_friends.host_id='" . $user_id . "' AND ume_friends.friend_id='" . $_SESSION["user_id"] . "') AND ume_friends.status='2' LIMIT 1";
                            $req = mysqli_query($c, $q);
                            $j_data = mysqli_fetch_all($req, MYSQLI_ASSOC);
                            $toecho = "";
                            for ($i = 0;$i < count($j_data);$i++)
                            {
                                return '<button class="btn btn-secondary" style="' . $css . '" "' . " onclick='DeclineFriendRequest(" . $j_data[$i]["friend_stat_id"] . ")'" . ' >Cancel Request</button>';
                            }

                        }
                        else
                        {
                            return "<button onclick='AcceptFriendRequest(" . $json_data[0]["id"] . ")' class='btn btn-success' style='" . $css . "'>Accept</button>";
                        }

                    break;
                    case '2':
                        // Accepted
                        if ($json_data[0]["host_id"] == $_SESSION["user_id"])
                        {

                            $q = "SELECT *,ume_friends.id AS friend_stat_id, users.id AS userID FROM ume_friends LEFT JOIN users ON ume_friends.host_id = users.id WHERE (ume_friends.friend_id='" . $user_id . "' AND ume_friends.host_id='" . $_SESSION["user_id"] . "') OR (ume_friends.host_id='" . $user_id . "' AND ume_friends.friend_id='" . $_SESSION["user_id"] . "') AND ume_friends.status='2' LIMIT 1";
                            $req = mysqli_query($c, $q);
                            $j_data = mysqli_fetch_all($req, MYSQLI_ASSOC);
                            $toecho = "";
                            for ($i = 0;$i < count($j_data);$i++)
                            {
                                return '
                <button class="btn btn-danger" style="' . $css . '" "' . " onclick='DeclineFriendRequest(" . $j_data[$i]["friend_stat_id"] . ")'" . ' >Unfriend</button>';
                            }
                        }
                        else
                        {

                            $q = "SELECT *,ume_friends.id AS friend_stat_id, users.id AS userID FROM ume_friends LEFT JOIN users ON ume_friends.friend_id = users.id WHERE (ume_friends.friend_id='" . $user_id . "' AND ume_friends.host_id='" . $_SESSION["user_id"] . "') OR (ume_friends.host_id='" . $user_id . "' AND ume_friends.friend_id='" . $_SESSION["user_id"] . "') AND ume_friends.status='2' LIMIT 1";
                            $req = mysqli_query($c, $q);
                            $j_data = mysqli_fetch_all($req, MYSQLI_ASSOC);
                            for ($i = 0;$i < count($j_data);$i++)
                            {
                                return '
                <button class="btn btn-danger" style="' . $css . '" "' . " onclick='DeclineFriendRequest(" . $j_data[$i]["friend_stat_id"] . ")'" . ' >Unfriend</button>';
                            }

                            return $toecho;
                        }
                    break;

                }
            }
            else
            {
                if($user_id != $_SESSION["user_id"]){
                     return "<button onclick='AddFriend(" . $user_id . ")' class='btn btn-primary' style='" . $css . "'>Add Me</button>";
                }
            }
        }
        function GetSharecountOfPostByID($idofpost){
            global $c;
        }
        function LoadUserProfileLocationByID($userid){
            global $c;
            $q = "SELECT fname,lname,mname,pic_profile FROM users WHERE id='" . $userid . "'";
             $post_res = mysqli_query($c, $q);
            $json_res = mysqli_fetch_array($post_res);
            return  $json_res["pic_profile"];

        }
        function LoadUserFullnameByID($userid){
            global $c;
            $q = "SELECT fname,lname,mname FROM users WHERE id='" . $userid . "'";
             $post_res = mysqli_query($c, $q);
            $json_res = mysqli_fetch_array($post_res);
            $fullname = $json_res["fname"] . " " .    $json_res["mname"] . " " .    $json_res["lname"];
            if($userid == $_SESSION["user_id"]){
                $fullname = "<a href='profile.php?usr=" . $userid ."'>" . $fullname . "</a>"; 
            }else{
                $fullname = "<a href='profile_other.php?usr=" . $userid ."'>" . $fullname . "</a>"; 
            }
            return   $fullname;
        }
        function GetUserByPostId($postid){
            global $c;
            $q = "SELECT * FROM ume_post WHERE id='" . $postid . "' LIMIT 1";
            $post_res = mysqli_query($c, $q);
            $json_res = mysqli_fetch_array($post_res);
            return $json_res["host"];
        }
        function DateExplainder($starting_time){
            $now = time(); // or your date as well
            $your_date = strtotime($starting_time);
            $datediff = $now - $your_date;

            $result =  round($datediff / (60 * 60 * 24));
            if($result == 0){

            $time1 = date("H:i",strtotime($starting_time));
            $time2 = date("H:i");

            $diff = abs(strtotime($time1) - strtotime($time2));

            $tmins = $diff/60;

            $hours = floor($tmins/60);

            $mins = $tmins%60;
            if($mins == "0"&& $hours =="0"){
            return "Just now"; 
            }else if($mins == "1" && $hours =="0"){
            return "1 min ago"; 
            } else{
            if($hours == "0"){
            return "$mins mins ago";  
            }else if($hours == "1"){
            return "an hour ago";  
            }else{
            return "$hours hours ago";  
            }

            }

            }else{
            if($result == "1"){
            return "yesterday";
            }else{
            return round($datediff / (60 * 60 * 24)) . " days ago.";
            }
            }
        }
        function EasyUpload($FileVar,$FileLoc,$format = '0'){
            global $mainDIR;
            $toecho = "";
        $imageuploaded = "";
        $has_error = false;
        if (!empty($FileVar["tmp_name"]) && $FileVar["tmp_name"] != "")
        {
            $target_dir = "../" . $FileLoc . "/";
            $target_file = $target_dir . basename($FileVar["name"]);
            $uploadOk = 1;
            $MainFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"]))
            {
                $check = getimagesize($FileVar["tmp_name"]);
                if($format == "0"){
                    
                    if ($check !== false)
                    {
                        $toecho .= "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    }
                    else
                    {
                        $toecho .= "Sorry, File is not an image.";
                        $has_error = true;
                        $uploadOk = 0;
                    }
                }
            }

            // Check if file already exists
            if (file_exists($target_file))
            {
                $toecho .= "Sorry, file already exists.";
                $has_error = true;
                $uploadOk = 0;
            }

            $allowedimages = array("jpg","png","jpeg","gif");
            $allowedvideos = array("mp4");
            $alloweddocs = array("pptx","docx","pdf","csv","xlsx","zip","txt");


            if($format == "0"){
                // IMAGE VALIDATION
            if ($FileVar["size"] > 26214400)
            {
                $toecho .= "Sorry, your file size is beyond 25mb. Upload a smaller file size of your image.";
                $has_error = true;
                $uploadOk = 0;
            }
            if (in_array($MainFileType,$allowedimages) == false)
            {
                $toecho .= "Sorry, only image files are allowed.";
                $has_error = true;
                $uploadOk = 0;
            }
            }else if($format == "1"){
                // VIDEO VALIDATION
            if ($FileVar["size"] > 67108864)
            {
                $toecho .= "Sorry, your file size is beyond 64mb. Upload a smaller file size of your image.";
                $has_error = true;
                $uploadOk = 0;
            }
            if (in_array($MainFileType,$allowedvideos)== false)
            {
                $toecho .= "Sorry, only MP4 video files are allowed.";
                $has_error = true;
                $uploadOk = 0;
            }


            }
            else if($format == "2"){
                // VIDEO VALIDATION
            if ($FileVar["size"] > 67108864)
            {
                $toecho .= "Sorry, your file size is beyond 64mb. Upload a smaller file size of your image.";
                $has_error = true;
                $uploadOk = 0;
            }
            if (in_array($MainFileType,$alloweddocs) == false)
            {
                $toecho .= "Sorry, only documents are allowed.";
                $has_error = true;
                $uploadOk = 0;
            }
            }
            

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0)
            {
                $toecho .= "Sorry, your file was not uploaded.";
                $has_error = true;
                // if everything is ok, try to upload file
                
            }
            else
            {

                $temp = explode(".", $FileVar["name"]);
                $fnamesNow = round(microtime(true)) . "_" . $_SESSION["user_id"] . '.' . end($temp);
                $newfilename = $target_dir . $fnamesNow;

                if (move_uploaded_file($FileVar["tmp_name"], $newfilename))
                {
                    $imageuploaded = $mainDIR . "/" . $FileLoc . "/" . $fnamesNow;
                    $toecho .= "The file ". $imageuploaded . " has been uploaded.";
                }
                else
                {
                    $toecho .= "Sorry, there was an error uploading your file.";
                    $has_error = true;
                    
                }
            }
        }

        if( $has_error == false){
            return $imageuploaded;
        }else{
            return $toecho;
        }
           
        
        }

       
         function EasyUpload_multiple($filename,$filesize, $filetmp,$FileLoc,$format = '0',$index){
            global $mainDIR;
            $toecho = "";
        $imageuploaded = "";
        $has_error = false;
        if (!empty( $filetmp) &&  $filetmp != "")
        {
            $target_dir = "../" . $FileLoc . "/";
            $target_file = $target_dir . basename($filename);
            $uploadOk = 1;
            $MainFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"]))
            {
                $check = getimagesize( $filetmp);
                if($format == "0"){
                    
                    if ($check !== false)
                    {
                        $toecho .= "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    }
                    else
                    {
                        $toecho .= "Sorry, File is not an image.";
                        $has_error = true;
                        $uploadOk = 0;
                    }
                }
            }

            // Check if file already exists
            if (file_exists($target_file))
            {
                $toecho .= "Sorry, file already exists.";
                $has_error = true;
                $uploadOk = 0;
            }

            $allowedimages = array("jpg","png","jpeg","gif");
            $allowedvideos = array("mp4");
            $alloweddocs = array("pptx","docx","pdf","csv","xlsx","zip","txt");


            if($format == "0"){
                // IMAGE VALIDATION
            if ($filesize > 26214400)
            {
                $toecho .= "Sorry, your file size is beyond 25mb. Upload a smaller file size of your image.";
                $has_error = true;
                $uploadOk = 0;
            }
            if (in_array($MainFileType,$allowedimages) == false)
            {
                $toecho .= "Sorry, only image files are allowed.";
                $has_error = true;
                $uploadOk = 0;
            }
            }else if($format == "1"){
                // VIDEO VALIDATION
            if ($filesize > 67108864)
            {
                $toecho .= "Sorry, your file size is beyond 64mb. Upload a smaller file size of your image.";
                $has_error = true;
                $uploadOk = 0;
            }
            if (in_array($MainFileType,$allowedvideos)== false)
            {
                $toecho .= "Sorry, only MP4 video files are allowed.";
                $has_error = true;
                $uploadOk = 0;
            }


            }
            else if($format == "2"){
                // VIDEO VALIDATION
            if ($filesize > 67108864)
            {
                $toecho .= "Sorry, your file size is beyond 64mb. Upload a smaller file size of your image.";
                $has_error = true;
                $uploadOk = 0;
            }
            if (in_array($MainFileType,$alloweddocs) == false)
            {
                $toecho .= "Sorry, only documents are allowed.";
                $has_error = true;
                $uploadOk = 0;
            }
            }
            

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0)
            {
                $toecho .= "Sorry, your file was not uploaded.";
                $has_error = true;
                // if everything is ok, try to upload file
                
            }
            else
            {

                $temp = explode(".", $filename);
                $fnamesNow = round(microtime(true)) . $index  . "_" . $_SESSION["user_id"] . '.' . end($temp);
                $newfilename = $target_dir . $fnamesNow;

                if (move_uploaded_file( $filetmp, $newfilename))
                {
                    $imageuploaded = $mainDIR . "/" . $FileLoc . "/" . $fnamesNow;
                    $toecho .= "The file ". $imageuploaded . " has been uploaded.";
                }
                else
                {
                    $toecho .= "Sorry, there was an error uploading your file.";
                    $has_error = true;
                    
                }
            }
        }

        if( $has_error == false){
            return $imageuploaded;
        }else{
            return $toecho;
        }
           
        
        }

        function MediaDisplayer($medialocation,$type,$subdescription = "no description"){
            if($type == "0"){
                //Image
                return '<a href="#" data-toggle="modal" data-target="#display_post_singleton"><img class="img_rounded_themed mt-2 mb-2" src=' . $medialocation . ' style="width:100%;"></a>';
            }else if($type == "1"){
                //Video
                return '
                   
                <video width="100%" class="img_rounded_themed mt-2 mb-2" height="auto" controls>
               

                  <source src=' . $medialocation . ' type="video/mp4">
                </video>
                <small>
<a href="#" data-toggle="modal" style="float:right;" data-target="#display_post_singleton"><i class="fas fa-expand-alt"></i> Toogle Full Screen</a>
                </small>
                ';
            }else if($type == "2"){
                //File Attachment

                $icon = "";
                 $extension = strtolower(pathinfo($subdescription, PATHINFO_EXTENSION));
                    $alloweddocs = array("pptx","docx","pdf","csv","xlsx","zip","txt");
                 switch ($extension) {
                     case 'pptx':
                        $icon  = '<i class="far fa-file-powerpoint"></i>';
                        break;
                        case 'docx':
                        $icon  = '<i class="far fa-file-word"></i>';
                        break;
                        case 'pdf':
                        $icon  = '<i class="far fa-file-pdf"></i>';
                        break;
                        case 'csv':
                        $icon  = '<i class="fas fa-table"></i>';
                        break;
                        case 'xlsx':
                        $icon  = '<i class="far fa-file-excel"></i>';
                        break;
                        case 'zip':
                        $icon  = '<i class="far fa-file-archive"></i>';
                        break;
                        case 'txt':
                        $icon  = '<i class="far fa-file-alt"></i>';
                        break;
                 }
               return '
               <div class="row mt-2 mb-2">
                   <div class="col-sm-12">
                    <div class="card card-dynamic">
                    <div class="card-body">

                    <div class="row">
                    <div class="col-sm-3">
                        <center><h1 class="mt-3 mb-0">' . $icon . '</h1></center>
                    </div>
                    <div class="col-sm-9">
                        <p class="mb-0 text-muted"><small>File Attachment</small></p>
                        <p class="mb-2 mt-0">' . $subdescription . '</p>
                        <a class="btn btn-primary btn-sm mt-0" href="' . $medialocation . '" download target="_blank">Download</a>
                    </div>
                    </div>
                    </div>
                    </div>
                   </div>
               </div>
                ';
            }else if($type == "3"){
                //Product
                return '
                <div class="card">
                    <div class="card-body">
                        <h5>File Attachment<h5>
                        <p>' . $subdescription . '</p>
                        <a class="btn btn-primary" href="' . $medialocation . '" download target="_blank">Download</a>
                    </div>
                </div>
                ';
            }
        }
        function CleanString($strin_to_clean){
            global $c;
            return mysqli_real_escape_string($c,htmlentities($strin_to_clean));
        }
         function CleanString_Simple($strin_to_clean){
            global $c;
            return mysqli_real_escape_string($c,$strin_to_clean);
        }
        function translate_react($r_type){
            switch ($r_type) {
                case 'haha':
                return "<span title='Haha'>&#128514;</span>";
                    break;
                case 'sad':
                return "<span title='Sad'>&#128557;</span>";
                    break;
                case 'love':
                return "<span title='Love'>&#128525;</span>";
                    break;
                case 'angry':
                return "<span title='Angry'>&#128548;</span>";
                    break;
            }
        }
         function ReadLinks($s) {
        return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-=]*(\?\S+)?[^\.\s])?)?)@', '<small><a href="$1" target="_blank" class="bluelink dont-break-out" rel="nofollow">$1</a></small>', $s);
    }
        function redirect_to($pagename, $message = ""){
            global $mainDIR;
            ?>
            <script type="text/javascript">
            var the_alert_message = <?php echo json_encode($message); ?>;
            if(the_alert_message != ""){
            alert(the_alert_message);
            }
            location.href = <?php echo json_encode($mainDIR . "/" . $pagename . ".php"); ?>;
            </script>
            <?php
        }

?>