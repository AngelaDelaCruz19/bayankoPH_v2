<?php session_start(); ?>
<?php 

$tag = $_POST["tag"];

switch($tag){
	case "toggle_night_dark_mod":
	if(isset($_SESSION["page_mode"])){
		if($_SESSION["page_mode"]  == "0"){
			$_SESSION["page_mode"] = "1";
		}else{
			$_SESSION["page_mode"] = "0";
		}
	}else{
		$_SESSION["page_mode"] = "0";
	}

	echo $_SESSION["page_mode"];
	break;
}
?>