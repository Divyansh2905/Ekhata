<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>EKHATA-Accounting Software</title> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" href="css/styletheme.css">
		<script src="js/modernizr.custom.js"></script>
		<script src="js/script.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
	</head>
	<body>
		<div class="container">
			<header>
				<form align="right" name="form1" method="post" action="logout.php">
					<label class="logoutLbPos">
						<a href="logout.php" class="btn-info btn-lg">
							<i aria-hidden="true" class="fa fa-sign-out"></i> Logout</a>
						</a>
					</label>
				</form>
				<h1><a href="home.php"><img src="img/ekhata.png" width=300px height=80px></a><span>Your one-stop Accounting Software</span></h1>
			</header>
			<div class="main clearfix">
				<nav id="menu" class="nav">					
					<ul>
						<li>
							<a href="home.php">
								<span class="icon">
									<i aria-hidden="true" class="fa fa-home"></i>
								</span>
								<span>Home</span>
							</a>
						</li>
						<li>
							<a href="accounting.php">
								<span class="icon"> 
									<i aria-hidden="true" class="fa fa-book"></i>
								</span>
								<span>Accounting</span>
							</a>
						</li>
						<li>
							<a href="calculator.php">
								<span class="icon">
									<i aria-hidden="true" class="fa fa-calculator"></i>
								</span>
								<span>Calculator</span>
							</a>
						</li>
						<li>
							<a href="faqs.php">
								<span class="icon">
									<i aria-hidden="true" class="fa fa-bookmark"></i>
								</span>
								<span>FAQs</span>
							</a>
						</li>
						<li>
							<a href="team.php">
								<span class="icon">
									<i aria-hidden="true" class="fa fa-users"></i>
								</span>
								<span>The Team</span>
							</a>
						</li>
						<li>
							<a href="feedback.php">
								<span class="icon"> 
									<i aria-hidden="true" class="fa fa-envelope"></i>
								</span>
								<span>Feedback</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>


        <script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>

<br>

<!-- <div class="dark-mode">
	<div class="theme-switch-wrapper">
		 <label class="theme-switch" for="checkbox">
	  <input type="checkbox" id="checkbox" />
	  <div class="slider round"></div>
	</label>
	  <em>Dark Mode</em>
	</div>
</div>  
<script src="js/mode.js"></script>
<br><br> -->


<!--SLIDE CAROUSEL SECTION -->
<section id="slide-head" class="carousel">
	<div class="carousel-inner">
		<div class="item active">
			<div class="container">
				<div class="carousel-content">
					<h1>JOURNALS & TRIALS</h1>
					<p class="lead"><b>
						Print your accurate Journal & Trial Balance in a couple of minutes</b><br>
						<a href="accounting.php" class="btn btn-success btn-lg margin-top-20">GET STARTED</a>
					</p>
				</div>
			</div>
		</div>
		<!-- ./ first active div-->
		<div class="item">
			
			<div class="container">
				<div class="carousel-content">
					<h1>CALCULATOR</h1>
					<p class="lead"><b>
						Use our perfectionally designed calculator for fast calculations</b><br>
						<a href="calculator.php" class="btn btn-primary btn-lg margin-top-20">USE NOW</a>
					</p>
				</div>
			</div>
		</div>
		<!-- ./ Second div-->
	</div>
	<a class="prev" href="#slide-head" data-slide="prev"><i class="fa fa-angle-left"></i></a>
	<a class="next" href="#slide-head" data-slide="next"><i class="fa fa-angle-right"></i></a>
</section>
<!-- FEATURES SECTION -->
<section id="services-section">
	<div class="wrap-pad">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 " data-scrollReveal="enter top and move 100px, wait 0.5s">
				<div class="text-center">
					<h1><i class="fa fa-check small-icons bk-color-green"></i>Features</h1>
					<p class="lead">
						We try to provide as much as Features we can so that our website helps you the most
				</div>
			</div>
			<!-- ./ Heading div-->
			<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 ">
				<div class="col-md-4 col-sm-6" data-scrollReveal="enter left and move 100px, wait 0.6s">
					<div class="text-center">
						<i class="fa fa-file-text icon-round bk-color-red"></i>
						<h4>Journals</h4>
						<p>
							To print the Journal Entries from the primary sources
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6" data-scrollReveal="enter right and move 100px, wait 0.6s">
					<div class="text-center">
						<i class="fa fa-line-chart icon-round bk-color-black"></i>
						<h4>Ledger & Trials</h4>
						<p>
							To calculate Ledger balances of each account and eventually printing the Trial Balance of the given entries
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6" data-scrollReveal="enter left and move 100px, wait 0.6s">
					<div class="text-center">
						<i class="fa fa-calculator icon-round bk-color-green"></i>
						<h4>Calculator</h4>
						<p>
							To provide a commercial calculator for making all the calculations easy	
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6" data-scrollReveal="enter bottom and move 100px, wait 0.6s">
					<div class="text-center">
						<i class="fa fa-bookmark icon-round bk-color-blue"></i>
						<h4>FAQs</h4>
						<p>
							To provide a FAQ sections + a videos section where all issues can be resolved and students get to learn something
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6" data-scrollReveal="enter right and move 100px, wait 0.6s">
					<div class="text-center">
						<i class="fa fa-pencil icon-round bk-color-brown"></i>
						<h4>Ask Doubts</h4>
						<p>
							Students or professionals can ask their doubts or give feedback which will be surely responded
						</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6" data-scrollReveal="enter bottom and move 100px, wait 0.6s">
					<div class="text-center">
						<i class="fa fa-desktop icon-round bk-color-light-blue"></i>
						<h4>Responsive Website</h4>
						<p>
							We try to provide the best platform for your needs
						</p>
					</div>
				</div>
			</div>
			<!-- ./ Content div-->
		</div>
	</div>
</section>
<!--END FEATURES SECTION -->
<!--VIDEOS SECTION -->
<div class="wrap-pad">
<div class="row">
<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 " data-scrollreveal="enter top and move 100px, wait 0.5s">
<div class="text-center">
<h1><i class="fa fa-picture-o small-icons bk-color-light-blue"></i>Learn Accountancy</h1>
<p class="lead">
	This section is exclusively for Students. We have uploaded some videos to learn Accountancy.       
</p>
</div>
</div>
</div>
</div>
<div class="vidcontain" data-scrollreveal="enter left and move 100px, wait 0.6s">
	<div class="main-video">
	<div class="video">
		<video src="videos/1.mp4" controls poster="videos/1.jpg" autoplay></video>
		<h3 class="vidtitle">01. Accounting Basics</h3>
	</div>
	</div>
	<div class="video-list">
		<div class="vid active">
			<video src="videos/1.mp4" poster="videos/1.jpg"></video>
			<h3 class="vidtitle">01. Accounting Basics</h3>
		</div>
		<div class="vid">
			<video src="videos/2.mp4" poster="videos/2.jpg"></video>
			<h3 class="vidtitle">02. The Accounting Equation</h3>
		</div>
		<div class="vid">
			<video src="videos/3.mp4" poster="videos/3.jpg"></video>
			<h3 class="vidtitle"> 03. Debits & Credits</h3>
		</div>
		<div class="vid">
			<video src="videos/4.mp4" poster="videos/4.jpg"></video>
			<h3 class="vidtitle"> 04. T Accounts</h3>
		</div>
		<div class="vid">
			<video src="videos/5.mp4" poster="videos/5.jpg"></video>
			<h3 class="vidtitle"> 05. Journal Entries</h3>
		</div>
		<div class="vid">
			<video src="videos/6.mp4" poster="videos/6.jpg"></video>
			<h3 class="vidtitle"> 06. The Trial Balance</h3>
		</div>
		<div class="vid">
			<video src="videos/7.mp4" poster="videos/7.jpg"></video>
			<h3 class="vidtitle"> 07. General Ledger</h3>
		</div>
		<div class="vid">
			<video src="videos/8.mp4" poster="videos/8.jpg"></video>
			<h3 class="vidtitle"> 08. Assets</h3>
		</div>
		<div class="vid">
			<video src="videos/9.mp4" poster="videos/9.jpg"></video>
			<h3 class="vidtitle"> 09. Liabilities</h3>
		</div>
		<div class="vid">
			<video src="videos/10.mp4" poster="videos/10.jpg"></video>
			<h3 class="vidtitle"> 10. Equity</h3>
		</div>
		<div class="vid">
			<video src="videos/11.mp4" poster="videos/11.jpg"></video>
			<h3 class="vidtitle"> 11. Balance Sheet</h3>
		</div>
		<div class="vid">
			<video src="videos/12.mp4" poster="videos/12.jpg"></video>
			<h3 class="vidtitle"> 12. Trial Balance VS Balance Sheet</h3>
		</div>
		<div class="vid">
			<video src="videos/13.mp4" poster="videos/13.jpg"></video>
			<h3 class="vidtitle"> 13. Three Unexpected Benefits of Learning Accountancy</h3>
		</div>
	</div>
</div>
<div class="wrap-pad">
	<div class="row">
		</div>
		</div>

		<script>
			let listVideo=document.querySelectorAll('.video-list .vid');
			let mainVideo= document.querySelector('.main-video video');
			let title= document.querySelector('.main-video .vidtitle');
			listVideo.forEach(video =>{
				video.onclick = () =>{
					listVideo.forEach(vid => vid.classList.remove('active'));
					video.classList.add('active');
					if(video.classList.contains('active')){
						let src= video.children[0].getAttribute('src');
						mainVideo.src=src;
						let text = video.children[1].innerHTML;
						title.innerHTML=text;
					};
				};
			});
		</script>
<!--END VIDEOS SECTION -->

<!--CONTACT SECTION -->
<section id="contact-section">
	<div class="wrap-pad">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 " data-scrollReveal="enter top and move 100px, wait 0.5s">
				<div class="text-center">
					<h1><i class="fa fa-tint small-icons bk-color-black"></i>Contact us Now</h1>
					<p class="lead">
						We are eager to listen from you !!!                       
					</p>
				</div>
			</div>
			<!-- ./ Heading div-->
			<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1  margin-top-20">
				<div class="col-md-6  col-sm-12" data-scrollReveal="enter left and move 100px, wait 0.6s">
					<h3><i class="fa fa-pencil small-icons bk-color-light-blue"></i>Tell us what more we can do</h3>
					<hr>
					
					<a href="feedback.php" class="btn btn-success btn-lg margin-top-20">GIVE FEEDBACK</a>

				</div>
				
				<div class="col-md-4 col-md-offset-1  col-sm-12" data-scrollReveal="enter right and move 100px, wait 0.6s">
					<h3><i class="fa fa-comments small-icons bk-color-red"></i>Reach Us Here</h3>
					<hr />
					<a href="https://g.co/kgs/dHfN5U">Don Bosco School, Park Circus</a><br />
					Call: <a href="tel:7605888285">+917605888285</a><br />
					Email: <a href="mailto:ekhata.dbpc23@gmail.com">ekhata.dbpc23@gmail.com</a><br />
					<h3><i class="fa fa-plus small-icons bk-color-green"></i>Social Presence</h3>
					<a href="https://twitter.com/Ekhata_dbpc23"><i class="fa fa-twitter color-twitter fa-2x"></i></a> &nbsp;&nbsp;
					<a href="https://instagram.com/ekhata_dbpc23"><i class="fa fa-instagram color-instagram fa-2x" aria-hidden="true"></i></a> &nbsp;&nbsp;
					<a href="https://www.youtube.com/channel/UCDUbqiCIT9YHAzOQ7tC3PiQ"><i class="fa fa-youtube-play color-youtube fa-2x" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- ./ Content div-->
		</div>
	</div>
</section>

<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY LIBRARY -->
<script src="js/jquery.js"></script>
<!-- BOOTSTRAP SCRIPTS LIBRARY -->
<script src="js/bootstrap.min.js"></script>
<!-- PRETTYPHOTO  SCRIPTS  LIBRARY-->
<script src="js/jquery.prettyPhoto.js"></script>
 <!-- SCROLL REVEL  SCRIPTS  LIBRARY-->
<script src="js/scrollReveal.js"></script>
<!-- CUSTOM SCRIPT-->
<script src="scripts/custom.js"></script>

<!--GOOGLE FONT -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!--BOOTSTRAP MAIN STYLES -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<!--FONTAWESOME MAIN STYLE -->
<link href="css/font-awesome.min.css" rel="stylesheet" />
<!--PRETTYPHOTO MAIN STYLE -->
<link href="css/prettyPhoto.css" rel="stylesheet" />
<!--CUSTOM STYLE -->
<link href="css/style.css" rel="stylesheet" />

<footer>
    <div style="background: #5c5a5a; text-align: center; padding: 1%;">
        <p class= "cp-text">&copy; 2021 &nbsp; EKHATA &nbsp; | &nbsp; All Rights Reserved.</p>
    </div>
    </footer>
<link rel="stylesheet" type="text/css" href="css/mode.css" />

	</body>
</html>