<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>




<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Faqs - EKHATA</title> 
		<link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/stylefaq.css">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/mode.css" />
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
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="fa fa-bars"> </i> Menu</button>');

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

<br><br><br>
  <main>

        <h1 class="faq-heading" data-scrollReveal="enter right and move 100px, wait 0.6s"><b><b>FREQUENTY ASKED QUESTIONS</b></b></h1>
        <section class="faq-container">
            <div class="faq-one" data-scrollReveal="enter top and move 100px, wait 1.5s">

                <!-- faq question -->
                <h1 class="faq-page">What is Accounting ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Accounting is the process of collecting, recording, classifying, summarising and communicating financial 
						information to the users. </p>
                </div>
            </div>
            <hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 1.5s">

            <div class="faq-two" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
                <h1 class="faq-page">What is Book Keeping ?</h1>

                <!-- faq answer -->

                <div class="faq-body">
                    <p>Book Keeping is a process of recording financial transactions in a systematic manner and classifying 
						them into ledger.</p>
                </div>
            </div>
            <hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">


            <div class="faq-three" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
<h1 class="faq-page">What do you mean by Accountancy ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Accountancy is a systematic knowledge of accounting, i.e., it educates about how the books of account 
						are maintained.</p>
                </div>
            </div>
			<hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">
			<div class="faq-three" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
<h1 class="faq-page">What is he significance of Income Statement ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Income Statement is Trading and Profit and Loss Account (Statement of Profit and Loss, in case of 
						companies). It shows the profit earned or loss incurred by the enterprise during accounting year.</p>
                </div>
            </div>
			<hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">
			<div class="faq-three" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
<h1 class="faq-page">What is Position Statement ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Position Statement or Balance Sheet shows the financial position of i.e., Balance Sheet the enterprise on 
						a particular date.</p>
                </div>
            </div>
			<hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">
			<div class="faq-three" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
<h1 class="faq-page">What is Accounting Information ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Accounting Information is used for forecasting, comparing and evaluating the earning capacity and 
						financial position of the business.</p>
                </div>
            </div>
			<hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">
			<div class="faq-three" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
<h1 class="faq-page">What do you mean by Double Entry System ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Double Entry System of Accounting means a system of accounting of Accounting whereby both, debit 
						and credit, aspects of a transaction are recorded.</p>
                </div>
            </div>
			<hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">
			<div class="faq-three" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
<h1 class="faq-page">What is Single Entry System ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Single Entry System of Accounting is a system under which both, debit Accounting and credit aspects of 
						the transactions are not recorded in all the cases. In some cases both aspects are recorded, while in 
						others either one aspect is recorded or a transaction is not recorded at all. This is also known as 
						Incomplete Double Entry System.
						</p>
                </div>
            </div>
			<hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">
			<div class="faq-three" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
<h1 class="faq-page">What are Generally Accepted Accounting principles ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Generally Accepted Accounting Principles are basic or fundamental Accounting Principles propositions 
						based on which transactions and events are recorded (GAAP) in the books of account and financial 
						statements are prepared.</p>
                </div>
            </div>
			<hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">
			<div class="faq-three" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
<h1 class="faq-page">What are Fundamental Accounting Assumptions ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>(i) Going Concern Under this assumption, it is presumed that the business will continue Assumption for 
						a foreseeable future and there is no intention to close down the business or scale down its operations 
						significantly.<br><br>
						(ii) Accrual Assumption Under this assumption, a transaction is accounted at the time when it is entered 
						into and not when settlement takes place.<br><br>
						(iii) Consistency Under this assumption, accounting practices once adopted should Assumption be 
						applied consistently year after year. They may be changed under following three conditions: <br>
						(a) If law requires the change,<br>
						(b) If Accounting Standard requires the change, or<br>
						(c) If it results in more fair presentation of financial affairs of the business. </p>
                </div>
            </div>
			<hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">
			<div class="faq-one" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
                <h1 class="faq-page">What are the accounting principles ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Accounting is the language of business and every language has certain rules of grammar. Similarly, in 
						order to understand accounting information and for maintaining uniformity and consistency, certain 
						principles are needed in accounting. Accounting Principles are the norms or rules which are to be 
						followed in treating various items of assets, liabilities, expenses, incomes, etc.</p>
                </div>
            </div>
			<hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">
			<div class="faq-one" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
                <h1 class="faq-page">What do you mean by GAAP ?</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>Generally Accepted Accounting Principles (GAAP) refers to the rules or guidelines adopted for recording 
						and reporting business transactions, in order to bring uniformity and consistency in the preparation and 
						presentation of financial statements. </p>
                </div>
            </div>
			<hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">
			<div class="faq-one" data-scrollReveal="enter top and move 100px, wait 0.6s">

                <!-- faq question -->
                <h1 class="faq-page"> Accounting Concepts</h1>

                <!-- faq answer -->
                <div class="faq-body">
                    <p>(i) <b>Going Concern Concept</b>- The business will continue for an indefinite period and there is no intention 
						to close the business or reduce its size of operations significantly. <br><br>
						(ii) <b>Accounting (Business) Entity Concept</b>- Business is treated as a separate entity distinct from its 
						owners. <br><br>
						(iii) <b> Measurement Concept</b>- Transactions and events that can be expressed in money or in money 
						terms are recorded in the books of account. <br><br>
						(iv) <b>Accounting Period (or Periodicity) Concept</b>- Life of an enterprise is divided into time intervals which 
						are known as accounting periods, at the end of which Income Statement and Position Statement are 
						prepared to show the performance and financial position.<br><br>
						(v) <b>Complete or Full Disclosure Concept</b>- According to this concept, the financial statements and 
						accompanying notes should contain a complete disclosure of all significant financial information. 
						Disclosure should be full, fair and adequate.<br><br>
						(vi) <b>Revenue Recognition or Realisation Concept</b>- According to Revenue Recognition Concept, revenue is 
						considered as earned on the date when it is realised. Revenue is generally recognised in case of sales of goods when an exchange between buyer and seller has taken place and the earning process of revenue 
						is complete or virtually complete. Generally, revenue is recognised at the point of sales or rendering 
						services</p>
                </div>
            </div>
			<hr class="hr-line" data-scrollReveal="enter top and move 100px, wait 0.6s">

        </section>
    </main>

	<br>
	<br>
	<br>
	<br>
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
    <script src="js/functionfaq.js"></script>

	<footer>
		<div style="background: #5c5a5a; text-align: center; padding: 1%;">
			<p class= "cp-text">&copy; 2021  EKHATA | All Rights Reserved.</p>
		</div>
		</footer>
	</body>
</html>