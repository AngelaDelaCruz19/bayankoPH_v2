<?php
date_default_timezone_set('Asia/Manila');
// $mainDIR = "http://" . $_SERVER["HTTP_HOST"];
	$mainDIR = "http://" . $_SERVER["HTTP_HOST"]  ."/bayankoPH";
if (session_status() == PHP_SESSION_NONE) {
      session_start();
   }
	if(!isset($_SESSION["email"]) || $_SESSION["email"] == null || $_SESSION["email"] == ""){
		?>
			<script type="text/javascript">
				var URL = <?php echo json_encode($mainDIR); ?> + "/login.php?app=ume";
               location.href = URL;
			</script>
		<?php
	}
?>