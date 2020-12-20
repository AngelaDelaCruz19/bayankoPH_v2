<div class="container">
	<div style="background-image: url(images/sirtoby/8.jpg);overflow: hidden; border-radius: 0px 0px 20px 20px;" class="bg_worthy">

		<div class="header_gradient">
			<div class="mt-5 mb-5 pl-5 pm-5" style="position: relative; height: 100%;">
				<img src="images/bklogo.png" class="mb-3" style="width: 200px;">
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-dynamic bg-dynamic" style="border-radius: 0px 0px 20px 20px;">
	  <div class="container">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <i class="fas fa-bars text-dynamic"></i>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item  active">
	        <a class="nav-link"  href="index.php"><i class="fas fa-home"></i> Home</a>
	      </li>
		<li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-shopping-bag"></i> Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="applications.php"><i class="fas fa-border-all"></i> Applications</a>
             <a class="dropdown-item" href="products.php"><i class="fas fa-building"></i> Software and Management Solutions</a>
             <a class="dropdown-item" href="services.php"><i class="fas fa-cog"></i> Other Products</a>
        </div>
      </li>
	      <li class="nav-item active">
	        <a class="nav-link"  href="about.php"><i class="fas fa-question-circle"></i> About</a>
	      </li>
	    </ul>
	    <span class="navbar-text">
	    	<?php 
	    		if(isset($_SESSION["email"])){
				?>
					<form class="form-inline my-2 my-lg-0" action="server/server.php" method="POST">
						<input type="hidden" name="tag" value="SYS_LOGOUT">
						<button class="btn btn-link" type="submit" class="pr-3 pl-3"><i class="fas fa-sign-out-alt"></i> Logout</button>
						<a class="pr-3 pl-3" href="#" onclick="NightAndLightToggle()"><i class="fas fa-moon"></i></a>
					</form>
				<?php
	    		}else{
				?>
					<a class="pr-3 pl-3" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
					<a class="pr-3 pl-3" href="signup.php"><i class="fas fa-user-circle"></i> Sign-up</a>
					<a class="pr-3 pl-3" href="#" onclick="NightAndLightToggle()"><i class="fas fa-moon"></i></a>
				<?php
	    		}
	    	?>
	    </span>
	  </div>
	  </div>
	</nav>

</div>

