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
		<title>Team - EKHATA</title> 
		<!-- <link rel="stylesheet" type="text/css" href="css/mode.css" /> -->
        <link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"> -->
        <link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">

    </head>

    <body>

        <div class="container">	
			<header>
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

<div class="containerteam" data-scrollreveal="enter right and move 100px, wait 0.6s">
    <div class="section-title">
        <h1>Our Team</h1>
    </div>
    <div class="row">
        <div class="column">
            <div class="team-4">
                <div class="team-content">
                    <h2>AMIT BANSAL</h2>
                    <h3>CEO &amp; Founder</h3>
                </div>
                <div class="team-img">
                    <img src="img/amit.jpg" alt="Team Image">
                    <div class="team-content">
                        <p></p>
                    </div>
                </div>
                <div class="team-content">
                    <div class="team-social">
                        <a class="social-fb" href="https://www.facebook.com/profile.php?id=100017868976840"><i class="fa fa-facebook-f"></i></a>
                        <a class="social-li" href="wa.me//+917605888285"><i class="fa fa-whatsapp"></i></a>
                        <a class="social-yt" href="mailto:amitbansal1120@gmail.com"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="team-4">
                <div class="team-content">
                    <h2>DIVYANSH CHHAJER</h2>
                    <h3>Web Developer</h3>
                </div>
                <div class="team-img">
                    <img src="img/divyansh.jpg" alt="Team Image">
                    <div class="team-content">
                        <p></p>
                    </div>
                </div>
                <div class="team-content">
                    <div class="team-social">
                        <a class="social-tw" href="https://twitter.com/DivyanshChhajer"><i class="fa fa-twitter"></i></a>
                        <a class="social-li" href="wa.me//+916290001033"><i class="fa fa-whatsapp"></i></a>
                        <a class="social-in" href="https://www.instagram.com/divyansh.chhajer/"><i class="fa fa-instagram"></i></a>
                        <a class="social-yt" href="mailto:divyansh2905@gmail.com"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="team-4">
                <div class="team-content">
                    <h2>ISHAYU ROY</h2>
                    <h3>Web Developer</h3>
                </div>
                <div class="team-img">
                    <img src="img/ishayu.jpg" alt="Team Image">
                    <div class="team-content">
                        <p></p>
                    </div>
                </div>
                <div class="team-content">
                    <div class="team-social">
                        <a class="social-li" href="wa.me//+918910940572"><i class="fa fa-whatsapp"></i></a>
                        <a class="social-yt" href="mailto:ishayuroy1601@gmail.com"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="team-4">
                <div class="team-content">
                    <h2>HITEN BOTHRA</h2>
                    <h3>Programmer</h3>
                </div>
                <div class="team-img">
                    <img src="img/hiten.jpg" alt="Team Image">
                    <div class="team-content">
                        <p></p>
                    </div>
                </div>
                <div class="team-content">
                    <div class="team-social">
                        <a class="social-li" href="wa.me//+919123793835"><i class="fa fa-whatsapp"></i></a>
                        <a class="social-in" href="https://instagram.com/hitenbothra_?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                        <a class="social-yt" href="mailto:hitenbothra32@gmail.com"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="team-4">
                <div class="team-content">
                    <h2>ASHMIT CHORARIA</h2>
                    <h3>Programmer</h3>
                </div>
                <div class="team-img">
                    <img src="img/ashmit.jpg" alt="Team Image">
                    <div class="team-content">
                        <p></p>
                    </div>
                </div>
                <div class="team-content">
                    <div class="team-social">
                        <a class="social-li" href="wa.me//+917980206732"><i class="fa fa-whatsapp"></i></a>
                        <a class="social-in" href="https://instagram.com/ashmit___choraria?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                        <a class="social-yt" href="mailto:ashmitchoraria21072005@gmail.com"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="team-4">
                <div class="team-content">
                    <h2>BHAVYA KHANDELWAL</h2>
                    <h3>Web Developer</h3>
                </div>
                <div class="team-img">
                    <img src="img/bhavya.jpg" alt="Team Image">
                    <div class="team-content">
                        <p></p>
                    </div>
                </div>
                <div class="team-content">
                    <div class="team-social">
                        <a class="social-li" href="wa.me//+918617719427"><i class="fa fa-whatsapp"></i></a>
                        <a class="social-in" href="https://instagram.com/_bhavya_khandelwal_?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                        <a class="social-yt" href="mailto:2.bhavyakhandelwal205@gmail.com"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
        <link href="css/styleteam.css" rel="stylesheet">

        <br>
        <br>
        <br>
        
        <footer>
            <div style="background: #5c5a5a; text-align: center; padding: 1%;">
                <p class= "cp-text">&copy; 2021  EKHATA | All Rights Reserved.</p>
            </div>
            </footer>



    </body>
</html>
