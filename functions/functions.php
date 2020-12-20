
<?php session_start(); ?>
<?php 

	$tag = $_POST["selecThemed"];
	$_SESSION["page_mode"] = $tag;

	if(isset($_SESSION["page_mode"])){
		echo $_SESSION["page_mode"];
	}	
	else{
		echo $_SESSION["page_mode"]==1;
	}
	
?>