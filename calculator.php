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
		<title>Calculator - EKHATA</title> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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


<div class="backg"> 
    <div class="calc"> 
	<div class="animate">
     <h1> Calculator </h1> 
     <p id="resultado"></p> 
     <table> 
      <tbody> 
       <tr> 
        <td><button id="cle" class="bot" onclick="clean()">C</button></td> 
        <td><button id="bac" class="bot" onclick="back()">&lt;</button></td> 
        <td><button id="div" class="bot" style="background-color: #c5f3bf;" onclick="insert('/')">÷</button></td> 
        <td><button id="mul" class="bot" style="background-color: #ecf3ae;" onclick="insert('*')">×</button></td> 
       </tr> 
       <tr> 
        <td><button id="set" class="bot" onclick="insert('7')" ,"vibrar()">7</button></td> 
        <td><button id="oit" class="bot" onclick="insert('8')">8</button></td> 
        <td><button id="nov" class="bot" onclick="insert('9')">9</button></td> 
        <td><button id="men" class="bot" style="background-color: #f3d4e9;" onclick="insert('+')">+</button></td> 
       </tr> 
       <tr> 
        <td><button id="qua" class="bot" onclick="insert('4')">4</button></td> 
        <td><button id="cin" class="bot" onclick="insert('5')">5</button></td> 
        <td><button id="sei" class="bot" onclick="insert('6')">6</button></td> 
        <td><button id="mai" class="bot" style="background-color: #bfc2f3;" onclick="insert('-')">-</button></td> 
       </tr> 
       <tr> 
        <td><button id="um" class="bot" onclick="insert('1')">1</button></td> 
        <td><button id="doi" class="bot" onclick="insert('2')">2</button></td> 
        <td><button id="tre" class="bot" onclick="insert('3')">3</button></td> 
        <td rowspan="2"><button id="igu" class="bot" style="height: 100px; background-color: #f3a877;" onclick="calcular()">=</button></td> 
       </tr> 
       <tr> 
        <td colspan="2"><button id="zer" class="bot" style="width: 120px;" onclick="insert('0')">0</button></td> 
        <td><button id="pon" class="bot" onclick="insert('.')">.</button></td> 
       </tr> 
      </tbody> 
     </table> 
	 </div>
    </div> 
    </div>

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


<footer>
	<div style="background: #5c5a5a; text-align: center; padding: 1%;">
		<p class= "cp-text">&copy; 2021  EKHATA | All Rights Reserved.</p>
	</div>
	</footer>
<link rel="stylesheet" type="text/css" href="css/mode.css" />

	</body>
</html>