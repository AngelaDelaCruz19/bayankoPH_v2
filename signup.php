<!DOCTYPE html>
<html>
<head>
	<title>BayanKo.ph - Sign-up</title>
      <?php include 'style.php'; ?>
</head>
<body style="background-image: url('images/sirtoby/22.jpg');   background-attachment: fixed;
  background-position: center;" class="bg_worthy" >

<div class="container">
	  <div class="row">
  	<div class="col-sm-6">
  		
<center>
			<img style="margin-top:40vh; width:300px;" src="images/bklogo.png">
		</center>
  	</div>
  	<div class="col-sm-6 text-white">
  		
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
        <div class="dropdown-menu card-dynamic" aria-labelledby="navbarDropdown">
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
	     <button class="btn btn-green shadowed btn-rounded" onclick="location.href= '<?php echo $mainDIR; ?>/login.php'" type="button">Login</button>
	    </form>
	  </div>
	</nav>
  			<div style="margin-top: 10vh;">
  		 	<div class="card card-dynamic text-dynamic">
          <div class="card-body">
            <form action="server/server.php" method="POST" autocomplete="off">

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
            <input type="hidden"  name="tag" value="SIGN_UP">
            <h3>Sign Up</h3>
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
        <label>Firstname</label>
        <input type="text" class="form-control" autocomplete="off" required="" name="inp_fname">
      </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
        <label>Middle Name</label>
        <input type="text" class="form-control" autocomplete="off" name="inp_middlename">
      </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" autocomplete="off" required="" name="inp_lname">
      </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
        <label>Email or Phone Number</label>
        <input type="text" class="form-control" autocomplete="off" required="" name="inp_emailaddphone">
      </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" autocomplete="off" required="" name="inp_password">
      </div>
        </div>
        <div class="col-sm-12">
          <div class="form-group">
        <label>Re-enter Password</label>
        <input type="password" class="form-control" autocomplete="off" required="" name="inp_reenterpassword">
      </div>
        </div>

        <div class="col-sm-12">
        <button type="button" data-toggle="modal" data-target="#modal_ta" class="btn btn-block btn-primary">Sign-up</button>




        <div class="modal" tabindex="-1" id="modal_ta" role="dialog">
  <div class="modal-dialog modal-lg text-dynamic" role="document">
    <div class="modal-content">
      <div class="modal-header mod-head">
        <h5 class="modal-title">TERMS &amp; CONDITIONS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mod-body" style="overflow-x:hidden; overflow-y: scroll; max-height: 500px;">
        <pre class=" text-dynamic">TERMS &amp; CONDITIONS
Welcome to Bayanko.ph, the exclusive portal to the various services offered by bayanko.ph
found at http://bayanko.ph owned and operated by 16 Years Web Technologies Inc.
The following terminology applies to these Terms and Conditions, Privacy Statement and
Disclaimer Notice and all Agreements:
 &quot;Client&quot;, &quot;You&quot; and &quot;Your&quot; refers to you, the person log on this website and
compliant to the Company’s terms and conditions.
 &quot;The Company&quot;, &quot;Ourselves&quot;, &quot;We&quot;, &quot;Our&quot; and &quot;Us&quot;, refers to our Company, 16
Years Web Technologies Inc.
 &quot;Party&quot;, &quot;Parties&quot;, or &quot;Us&quot;, refers to both the Client and ourselves.
By accessing this website we assume you accept these terms and conditions. Do not continue
to use bayanko.ph if you do not agree to take all of the terms and conditions stated on this
page. We reserve the right to modify or amend the following terms and conditions from time
to time without notice. Your continued use of our site and any affiliate websites following the
posting of changes to these terms and conditions will be taken as your acceptance of the
amended terms and conditions
Though the use of a single Username and Password you will be able to access all of
Bayanko.ph site services and applications. You can log in once and gain access to all systems
without being prompted to log in repeatedly.
This Agreement shall begin on the date hereof.
Age requirements
If you are within 0-13 years of age, you will automatically be in “Kid’s Mode” with a strict
supervision of a parent or legal guardian. You must have your parent or legal guardian’s
permission to use a Bayanko.ph Account. If you are within 14-17 years of age, you can
manage your own account with guidance of parent or legal guardian. Please have your parent
or legal guardian read these terms with you.
If you’re a parent or legal guardian, and you allow your child to use the services, then these
terms apply to you and you’re responsible for your child’s activity on the services.
If you’re 18 years and older, you can manage your own bayanko.ph without restraint from
using all services under bayanko.ph as long as you’re not breaching any terms and conditions
of bayanko.ph.

Cookies
We employ the use of cookies. By accessing bayanko.ph, you agreed to use cookies in
agreement with the 16 Years Web Technologies Inc. Privacy Policy. Most interactive
websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by
our website to enable the functionality of certain areas to make it easier for people visiting
our website. Some of our affiliate/advertising partners may also use cookies.

License
Unless otherwise stated, 16 Years Web Technologies Inc. and/or its licensors own the
intellectual property rights for all material on bayanko.ph. All intellectual property rights are
reserved. You may access this from bayanko.ph for your own personal use subjected to
restrictions set in these terms and conditions.
You must not:
Republish material from bayanko.ph
• Sell, rent or sub-license material from bayanko.ph
• Reproduce, duplicate or copy material from bayanko.ph
• Redistribute content from bayanko.ph

Parts of this website offer an opportunity for users to post and exchange opinions and
information in certain areas of the website. 16 Years Web Technologies Inc. does not filter,
edit, publish or review comments prior to their presence on the website. Comments do not
reflect the views and opinions of 16 Years Web Technologies Inc., its agents and/or affiliates.
Posts or comments reflect the views and opinions of the person who post their views and
opinions. To the extent permitted by applicable laws, 16 Years Web Technologies Inc. shall
not be liable for the Comments or for any liability, damages or expenses caused and/or
suffered as a result of any use of and/or posting of and/or appearance of the Comments on
this website.
16 Years Web Technologies Inc. reserves the right to monitor all posts or comments and to
remove any post or comments which can be considered inappropriate, offensive or causes
breach of these Terms and Conditions.
You warrant and represent that:
 You are entitled to post the Comments on our website and have all necessary licenses
and consents to do so;
 The Comments do not invade any intellectual property right, including without
limitation copyright, patent or trademark of any third party;
 The Comments do not contain any defamatory, libelous, offensive, indecent or
otherwise unlawful material which is an invasion of privacy
 The Comments will not be used to any unlawful activity.
You hereby grant 16 Years Web Technologies Inc. a non-exclusive license to use, reproduce,
edit and authorize others to use, reproduce and edit any of your posts or comments in any and
all forms, formats or media.
Hyperlinking to our Content
The following organizations may link to our Website without prior written approval:
 Government agencies
 Search engines
 News organizations

 Online directory distributors may link to our Website in the same manner as they
hyperlink to the Websites of other listed businesses; and
 System wide Accredited Businesses
These organizations may link to our home page, to publications or to other Website
information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply
sponsorship, endorsement or approval of the linking party and its products and/or services;
and (c) fits within the context of the linking party’s site.
We may consider and approve other link requests from the following types of organizations:
 Commonly-known consumer and/or business information sources
 Dot.com community sites
 Associations or other groups representing charities
 Online directory distributors
 Internet portals
 Accounting, law and consulting firms; and
 Educational institutions and trade associations.
We will approve link requests from these organizations if we decide that: (a) the link would
not make us look unfavorably to ourselves or to our accredited businesses; (b) the
organization does not have any negative records with us; (c) the benefit to us from the
visibility of the hyperlink compensates the absence of 16 Years Web Technologies Inc.; and
(d) the link is in the context of general resource information.
These organizations may link to our home page so long as the link: (a) is not in any way
deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking
party and its products or services; and (c) fits within the context of the linking party’s site.
If you are one of the organizations listed in paragraph 2 above and are interested in linking to
our website, you must inform us by sending an e-mail to 16 Years Web Technologies Inc.
Please include your name, your organization name, contact information as well as the URL of
your site, a list of any URLs from which you intend to link to our Website, and a list of the
URLs on our site to which you would like to link. Wait 2-3 weeks for a response.
Approved organizations may hyperlink to our Website as follows:
 By use of our corporate name; or
 By use of the uniform resource locator being linked to; or
 By use of any other description of our Website being linked to that makes sense
within the context and format of content on the linking party’s site.
No use of 16 Years Web Technologies Inc. logo or other artwork will be allowed for linking
absent a trademark license agreement
Frames
Without prior approval and written permission, you may not create frames around our
Webpages that alter in any way the visual presentation or appearance of our Website.

Content Liability
We shall not be hold responsible for any content that appears on your webpage. You agree to
protect and defend us against all claims that is rising on your webpage No link(s) should
appear on any Website that may be interpreted as libelous, obscene or criminal, or which
infringes, otherwise violates, or advocates the infringement or other violation of, any third
party rights.
Your Privacy
Please read Privacy Policy.
Reservation of Rights
We reserve the right to request that you remove all links or any particular link to our Website.
You approve to immediately remove all links to our Website upon request. We also reserve
the right to amend these terms and conditions and its linking policy at any time. By
continuously linking to our Website, you agree to be bound to and follow these linking terms
and conditions.
Removal of links from our website
If you find any link on our Website that is offensive for any reason, you are free to contact
and inform us any moment. We will consider requests to remove links but we are not
obligated to or so or to respond to you directly.
We do not ensure that the information on this website is correct, we do not warrant its
completeness or accuracy; nor do we promise to ensure that the website remains available or
that the material on the website is kept up to date.
Disclaimer
To the maximum extent permitted by applicable law, we exclude all representations,
warranties and conditions relating to our website and the use of this website. Nothing in this
disclaimer will:
 Limit or exclude our or your liability for death or personal injury;
 Limit or exclude our or your liability for fraud or fraudulent misrepresentation;
 Limit any of our or your liabilities in any way that is not permitted under applicable
law; or
 Exclude any of our or your liabilities that may not be excluded under applicable law.
The limitations and prohibitions of liability set in this Section and elsewhere in this
disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising
under the disclaimer, including liabilities arising in contract, in tort and for breach of
statutory duty.
As long as the website and the information and services on the website are provided free of
charge, we will not be liable for any loss or damage of any nature.</pre>
      </div>
      <div class="modal-footer mod-foot">
        <button type="button" class="btn btn-link" data-dismiss="modal">CANCEL</button>
        <button type="submit" class="btn btn-primary">I AGREE</button>
      </div>
    </div>
  </div>
</div>
        </div>

      </div>    
          </form>
          </div>
        </div>
  			</div>
  			
  		</div>
        
  	</div>
  </div>
	

</div>


</body>
</html>