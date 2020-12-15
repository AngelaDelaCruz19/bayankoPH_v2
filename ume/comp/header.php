<nav class="navbar navbar-expand-lg  nav-fixed nav-bottomborder nav-dynamic text-dynamic2" id="nav">
  <button class="navbar-toggler text-dynamic2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span id="name" style="font-size: 15px;"><a href="profile.php text-dynamic"><img class="post_profile" style="background-image: url(<?php echo $_SESSION['pic_profile'];  ?>);"></a><?php echo $_SESSION["fname"] . "'s "; ?> UME</span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dynamic2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <img class="post_profile photo2" style="background-image: url(<?php echo $_SESSION['pic_profile'];  ?>);"><?php echo $_SESSION["fname"] . "'s "; ?> BayankoPH
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item iconed" href="../index.php"><i class="fas fa-house-user"></i> BayankoPH</a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/ads.png"> BayankoPH Ads</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/erp.png"> ERP</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/events.png"> Events</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/games.png"> Games</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/job.png"> Job</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/leu.png"> LEA</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/lgu.png"> LGU</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/muzta.png"> Muzta</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/ofw.png"> OFW</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/org.png"> Organization</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/r_out.png"> Reachout</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/resu.png"> CV Maker</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/stud_port.png"> Student Portal</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/swa.png"> Swap Rooms</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/ume.png"> UME</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/upay.png"> Upay</a>
            <a class="dropdown-item iconed" href="#"><img src="<?php echo $mainDIR; ?>/images/logos/pod.png"> Streampod</a>
        </div>
      </li>
      <li  class="nav-item m-2">
        <a href="dashboard.php" type="button" class="btn-circle btn gray text-dynamic2">       
         <i class="fas fa-home"></i>
        </a>
      </li>
      <li  class="nav-item m-2">
        <a href="#" type="button" class="btn-circle btn gray text-dynamic2" data-toggle="modal" data-target="#settings">       
          <i class="fas fa-sliders-h"></i>
        </a>
      </li>
      <li  class="nav-item m-2">
        <a href="#" onclick="NightAndLightToggle()" type="button" class="btn-circle btn gray text-dynamic2"><i class="fas fa-moon"></i></a>
      </li>
      <li  class="nav-item m-2">
        <a class="btn-circle btn gray text-dynamic2" style="width: 40px;" href="#">
         <img src="<?php echo $mainDIR; ?>/images/icons/spot.png" style="width: 15px;">
        </a>
        
      </li>
      <!-- <li  class="nav-item m-2">
        <a href="#" onclick="OpenSharePanel()" class="nav-link btn gray" data-toggle="modal" data-target="#createnewpostmodal" style="color: white;"  >
         <i class="fas fa-plus-circle"></i> Create Post
        </a>
      </li> -->

    </ul>


<div id="search_destination">
 <div id="search_source" >
  <form class="form-inline my-2 my-lg-0" action="search.php" method="GET" >
      <input class="form-control mr-sm-2 search-box" name="kword" autocomplete="off" required="" type="search" placeholder="Search" aria-label="Search">
      <span class="search-button">
    <span class="search-icon"></span>
  </span>
    </form>
  </div>
</div>

     <span class="navbar-text">

        
        <?php 
          if(isset($_SESSION["email"])){
        ?>
       
          <form class="form-inline my-2 my-lg-0 search" action="../server/server.php" method="POST">
              <input type="hidden" name="tag" value="SYS_LOGOUT">
             <a class="pr-3 pl-3 text-dynamic2" href="dashboard.php"> <img src="<?php echo $mainDIR; ?>/images/logos/ume.png" style="height: 50px;"></a>
            <button class="btn text-dynamic2 text-white" type="submit" class="pr-3 pl-3" style="background: none;"><i class="fas fa-sign-out-alt"></i> Logout</button>
          </form>
        <?php
          }else{
        ?>
          <a class="pr-3 pl-3 text-dynamic2" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
          <a class="pr-3 pl-3 text-dynamic2" href="signup.php"><i class="fas fa-user-circle"></i> Sign-up</a>
          <a class="pr-3 pl-3 text-dynamic2" href="#" onclick="NightAndLightToggle()"><i class="fas fa-moon"></i></a>
        <?php
          }
        ?>


      </span>



  </div>
          <ul class="navbar-nav mr-auto"></ul>
  <div id="search_destination2">
   <div id="search_source" class="wrap">
      <form class="form-inline mt-5 my-lg-0" action="search.php" method="GET" id="search_source">
        <input class="form-control mr-sm-2 mt-1 search-box input" name="kword" style="background-color: transparent !important;" autocomplete="off" required="" type="search" placeholder="Search" aria-label="Search">
        <input id="search_submit" style="background-color: transparent !important;"  value="Rechercher" type="submit" class="input mt-2">
      </form>
    </div>
  </div>
  
  </nav>

<?php include "global_js.php"; ?>
<?php include "comp/notification_modal.php"; ?>
<?php include "comp/friends_modal.php"; ?>
<?php include "comp/post_singleton.php"; ?>
<?php include "comp/reaction_modal.php"; ?>
<?php include "comp/modal_post_product.php"; ?>

<?php function notready(){
  echo '<div class="alert alert-warning mt-5 mb-5" role="alert">
            Feature not ready.
          </div>';
} ?>
<script type="text/javascript">
  GlobalRunner();
  $(document).ready(function() {
      SecondaryInformation();
   });
</script>

<br>
<br>
<br>


<script type="text/javascript">
$(window).on('load resize', function() {
    if($(window).width() < 576) {
         // search
         // var destination=$('#search_destination2');
         // var source=$('#search_source');
         // source.appendTo(destination);
          $('#search_destination').addClass('hide');
          $('#search_destination2').removeClass('hide');
          $('.photo2').addClass('hide');


    }else if($(window).width() < 995){
         // search
         // var destination=$('#search_destination');
         // var source=$('#search_source');
         // source.appendTo(destination);
          $('#search_destination2').addClass('hide');
          $('#search_destination').removeClass('hide');
         $('.photo2').removeClass('hide');
    }else{
       // search
        // var destination=$('#search_destination');
        //  var source=$('#search_source');
        //  source.appendTo(destination);
         $('#search_destination2').addClass('hide');
          $('#search_destination').removeClass('hide');
         $('.photo2').removeClass('hide');
    }
})
</script>
