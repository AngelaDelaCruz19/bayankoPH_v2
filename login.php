<!DOCTYPE html>
<html>
<head>
	<title>BayanKo.ph</title>
	<?php include 'style.php';?>
</head>
<body class="ftoblack">
<div class="headerpage">
	<div class="panel1">
		<center>
			<img style="margin-top:40vh; width:300px;" src="images/bklogo.png">
		</center>
	</div>
	<div class="panel2">
		
<div class="container">
	<nav class="navbar mt-3 navbar-expand-lg navbar-dark navbar-green">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
	      </li>
	      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-shopping-bag"></i> Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="applications.php"><i class="fas fa-border-all"></i> Applications</a>
             <a class="dropdown-item" href="products.php"><i class="fas fa-building"></i> SMS</a>
             <a class="dropdown-item" href="services.php"><i class="fas fa-cog"></i> Consultations</a>
        </div>
      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="about.php"><i class="fas fa-question-circle"></i> About</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">

	    	<?php 
			if(isset($_GET["app"])){
				?>
				<input type="hidden" name="application" value="">
				 <button class="btn btn-green shadowed btn-rounded" onclick="location.href='<?php echo $mainDIR; ?>/signup.php?app=<?php echo $_GET['app']; ?>'" type="button">Not yet registered?</button>
				<?php
			}else{
				?>
				 <button class="btn btn-green shadowed btn-rounded" onclick="location.href='<?php echo $mainDIR; ?>/signup.php'" type="button">Not yet registered?</button>
				<?php
			}
		?>


	       
	    </form>
	  </div>
	</nav>
	<div class="loginboxes" >
	<h3 class="card-title mb-3">Login</h3>
	<form action="server/server.php" method="POST">
		<?php 
			if(isset($_GET["app"])){
				?>
				<input type="hidden" name="application" value="<?php echo $_GET['app']; ?>">
				<?php
			}else{
				?>
				<input type="hidden" name="application" value="index">
				<?php
			}
		?>
		<input type="hidden" name="tag" value="LOG_IN">
		<div class="row">
		<div class="col-lg-12">
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" autocomplete="off" required="" placeholder="Type here..." name="lgn_emailaddphone">
			</div>
		</div>
		<div class="col-lg-12">
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" autocomplete="off" required="" placeholder="Type here..." name="lgn_password">
			</div>
		</div>
		<div class="col-sm-12 ">
		<div class="d-flex justify-content-end">
			<button type="submit" class="btn btn-green p-2">Login</button>
		</div>
		</div>
		</div>
	</form>
</div>

</div>
		
	</div>
</div>
</body>
</html>