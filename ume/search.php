<?php include 'comp/auth.php' ;?>
<!DOCTYPE html>
<html>
<head>
	<title>UME - Search</title>
	<?php include '../style.php' ;?>
</head>
<body>
	<?php include 'comp/header.php'?>
<div class="container text-dynamic mt-3">
	<h4>UME Search</h4>
	<p>You're searching for <i><strong>"<?php echo htmlentities($_GET["kword"]); ?>"</strong></i>. Search result will display below.</p>
	<ul class="nav nav-pills" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-user-friends"></i> People</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-newspaper"></i> Post</a>
	  </li>
	</ul>
	<div class="tab-content mt-3" id="myTabContent">
	  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	  	<div id="searchres" >
	</div>
	  </div>
	  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	  	<?php notready(); ?>
	  </div>
	</div>
</div>
<script type="text/javascript">
	DisplaySearchResult();
	// DisplaySearchResultOfPost();
</script>
</body>
</html>