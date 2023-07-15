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
		<title>Feedback - EKHATA</title> 
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
      <script src="js/mode.js"></script>
    </div>  
    <br><br> -->




		<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.27273" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.27273" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.27273" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.27273" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;

	JotForm.init(function(){
	/*INIT-START*/
if (window.JotForm && JotForm.accessible) $('input_28').setAttribute('tabindex',0);
      JotForm.setCustomHint( 'input_28', 'Type here...' );
if (window.JotForm && JotForm.accessible) $('input_38').setAttribute('tabindex',0);
      JotForm.setCustomHint( 'input_38', 'Type here...' );
      setTimeout(function() {
          $('input_5').hint('ex: myname@example.com');
       }, 20);
      JotForm.setPhoneMaskingValidator( 'input_6_full', '##########' );
      JotForm.alterTexts({"ageVerificationError":"You must be older than {minAge} years old to submit this form.","alphabetic":"This field can only contain letters","alphanumeric":"This field can only contain letters and numbers.","appointmentSelected":"You’ve selected {time} on {date}","ccDonationMinLimitError":"Minimum amount is {minAmount} {currency}","ccInvalidCVC":"CVC number is invalid.","ccInvalidExpireDate":"Expire date is invalid.","ccInvalidExpireMonth":"Expiration month is invalid.","ccInvalidExpireYear":"Expiration year is invalid.","ccInvalidNumber":"Credit Card Number is invalid.","ccMissingDetails":"Please fill up the credit card details.","ccMissingDonation":"Please enter numeric values for donation amount.","ccMissingProduct":"Please select at least one product.","characterLimitError":"Too many Characters.  The limit is","characterMinLimitError":"Too few characters. The minimum is","confirmClearForm":"Are you sure you want to clear the form","confirmEmail":"E-mail does not match","currency":"This field can only contain currency values.","cyrillic":"This field can only contain cyrillic characters","dateInvalid":"This date is not valid. The date format is {format}","dateInvalidSeparate":"This date is not valid. Enter a valid {element}.","dateLimited":"This date is unavailable.","disallowDecimals":"Please enter a whole number.","doneButton":"Done","doneMessage":"Well done! All errors are fixed.","dragAndDropFilesHere_infoMessage":"Drag and drop files here","email":"Enter a valid e-mail address","fillMask":"Field value must fill mask.","freeEmailError":"Free email accounts are not allowed","generalError":"There are errors on the form. Please fix them before continuing.","generalPageError":"There are errors on this page. Please fix them before continuing.","geoNotAvailableDesc":"Location provider not available. Please enter the address manually.","geoNotAvailableTitle":"Position Unavailable","geoPermissionDesc":"Check your browser's privacy settings.","geoPermissionTitle":"Permission Denied","geoTimeoutDesc":"Please check your internet connection and try again.","geoTimeoutTitle":"Timeout","gradingScoreError":"Score total should only be less than or equal to","incompleteFields":"There are incomplete required fields. Please complete them.","inputCarretErrorA":"Input should not be less than the minimum value:","inputCarretErrorB":"Input should not be greater than the maximum value:","justSoldOut":"Just Sold Out","lessThan":"Your score should be less than or equal to","maxDigitsError":"The maximum digits allowed is","maxFileSize_infoMessage":"Max. file size","maxSelectionsError":"The maximum number of selections allowed is ","minSelectionsError":"The minimum required number of selections is ","multipleError":"There are {count} errors in this page. Please correct them before moving on.","multipleFileUploads_emptyError":"{file} is empty, please select files again without it.","multipleFileUploads_fileLimitError":"Only {fileLimit} file uploads allowed.","multipleFileUploads_minSizeError":"{file} is too small, minimum file size is {minSizeLimit}.","multipleFileUploads_onLeave":"The files are being uploaded, if you leave now the upload will be cancelled.","multipleFileUploads_sizeError":"{file} is too large, maximum file size is {sizeLimit}.","multipleFileUploads_typeError":"{file} has invalid extension. Only {extensions} are allowed.","multipleFileUploads_uploadFailed":"File upload failed, please remove it and upload the file again.","noSlotsAvailable":"No slots available","notEnoughStock":"Not enough stock for the current selection","notEnoughStock_remainedItems":"Not enough stock for the current selection ({count} items left)","noUploadExtensions":"File has no extension file type (e.g. .txt, .png, .jpeg)","numeric":"This field can only contain numeric values","oneError":"There is {count} error in this page. Please correct it before moving on.","pastDatesDisallowed":"Date must not be in the past.","pleaseWait":"Please wait...","required":"This field is required.","requiredLegend":"All fields marked with * are required and must be filled.","requireEveryCell":"Every cell is required.","requireEveryRow":"Every row is required.","requireOne":"At least one field required.","restrictedDomain":"This domain is not allowed","seeErrorsButton":"See Errors","selectionSoldOut":"Selection Sold Out","slotUnavailable":"{time} on {date} has been selected is unavailable. Please select another slot.","soldOut":"Sold Out","subProductItemsLeft":"({count} items left)","uploadExtensions":"You can only upload following files:","uploadFilesize":"File size cannot be bigger than:","uploadFilesizemin":"File size cannot be smaller than:","url":"This field can only contain a valid URL","validateEmail":"You need to validate this e-mail","wordLimitError":"Too many words. The limit is","wordMinLimitError":"Too few words.  The minimum is"});
      FormTranslation.init({"detectUserLanguage":"1","firstPageOnly":"0","options":"English (US)","originalLanguage":"en","primaryLanguage":"en","saveUserLanguage":"1","showStatus":"flag-with-nation","theme":"light-theme","version":"2"});
          JotForm.isNewSaveAndContinueLaterActive = true;
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"feedback","qid":"1","text":"Feedback","type":"control_head"},{"name":"submitForm","qid":"2","text":"Submit Form","type":"control_button"},{"name":"clickTo3","qid":"3","text":"Optional: Contact Details","type":"control_head"},{"description":"","name":"yourName","qid":"4","text":"Your Name","type":"control_fullname"},{"description":"","name":"email5","qid":"5","subLabel":"","text":"E-mail","type":"control_email"},{"description":"","name":"phoneNumber6","qid":"6","text":"Phone Number","type":"control_phone"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"description":"","name":"overallHow","qid":"23","text":"Overall, how useful was the website ?","type":"control_scale"},null,{"description":"","name":"whatRating","qid":"25","text":"What rating will you give to our website according to your experience ?","type":"control_scale"},{"description":"","name":"wouldYou26","qid":"26","text":"Would you recommend our website to a friend?","type":"control_radio"},null,{"description":"","name":"ifYou28","qid":"28","subLabel":"","text":"If you were the web developer, what would you have done differently?","type":"control_textarea"},null,{"description":"","name":"whatDid","qid":"30","text":"What did you like\u002Fdislike in our website","type":"control_radio"},null,null,null,null,null,null,null,{"description":"","name":"anyFinal38","qid":"38","subLabel":"","text":"Any final comments?","type":"control_textarea"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"feedback","qid":"1","text":"Feedback","type":"control_head"},{"name":"submitForm","qid":"2","text":"Submit Form","type":"control_button"},{"name":"clickTo3","qid":"3","text":"Optional: Contact Details","type":"control_head"},{"description":"","name":"yourName","qid":"4","text":"Your Name","type":"control_fullname"},{"description":"","name":"email5","qid":"5","subLabel":"","text":"E-mail","type":"control_email"},{"description":"","name":"phoneNumber6","qid":"6","text":"Phone Number","type":"control_phone"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"description":"","name":"overallHow","qid":"23","text":"Overall, how useful was the website ?","type":"control_scale"},null,{"description":"","name":"whatRating","qid":"25","text":"What rating will you give to our website according to your experience ?","type":"control_scale"},{"description":"","name":"wouldYou26","qid":"26","text":"Would you recommend our website to a friend?","type":"control_radio"},null,{"description":"","name":"ifYou28","qid":"28","subLabel":"","text":"If you were the web developer, what would you have done differently?","type":"control_textarea"},null,{"description":"","name":"whatDid","qid":"30","text":"What did you like\u002Fdislike in our website","type":"control_radio"},null,null,null,null,null,null,null,{"description":"","name":"anyFinal38","qid":"38","subLabel":"","text":"Any final comments?","type":"control_textarea"}]);}, 20); 
</script>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.27273" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.27273" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    

@-webkit-keyframes form {
  0% {
    -webkit-transform: translateY(800px) rotate(540deg);
            transform: translateY(800px) rotate(540deg);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0) rotate(0deg);
            transform: translateY(0) rotate(0deg);
    opacity: 1;
  }
}
@keyframes form {
  0% {
    -webkit-transform: translateY(800px) rotate(540deg);
            transform: translateY(800px) rotate(540deg);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0) rotate(0deg);
            transform: translateY(0) rotate(0deg);
    opacity: 1;
  }
}


.jotform-form{
  -webkit-animation: form 0.6s ease-out both;
	        animation: form 0.6s ease-out both;
}



    .form-all {
      font-family: Inter, sans-serif;
      transition: 2s ease-out;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
    }
  
    .form-all {
      color: #2C3345;
    }
    .form-header-group .form-header {
      color: #2C3345;
    }
    .form-header-group .form-subHeader {
      color: #2C3345;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #2C3345;
    }
    .form-sub-label {
      color: #464d5f;
    }
  
    .supernova {
      background-color: #ecedf3;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
    .form-all {
      position: relative;
    }
    .form-all:before {
      content: "";
      background-image: url("https://www.jotform.com/uploads/divyansh2905/form_files/0001-6500098534_2021 0824_091449_0000.61246b4a8a2c17.64093154.png");
      display: inline-block;
      height: 80px;
      position: absolute;
      background-size: 300px 80px;
      background-repeat: no-repeat;
      width: 100%;
    }
    .form-all {
      margin-top: 100px !important;
    }
    .form-all:before {
      top: -90px;
      background-position: top center;
    }
           
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>

<form class="jotform-form" action="https://submit.jotform.com/submit/212348571534456/" method="post" name="form_212348571534456" id="212348571534456" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="212348571534456" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <link type="text/css" rel="stylesheet" media="all" href="https://cdn.jotfor.ms/wizards/languageWizard/custom-dropdown/css/lang-dd.css?3.3.27273" />
    <div class="cont">
      <input type="text" id="input_language" name="input_language" style="display:none" />
      <div class="language-dd" id="langDd" style="display:none">
        <div class="dd-placeholder lang-emp">
          Language
        </div>
        <ul class="lang-list dn" id="langList">
          <li data-lang="en" class="en">
            English (US)
          </li>
        </ul>
      </div>
    </div>
    <script type="text/javascript" src="https://cdn.jotfor.ms/js/formTranslation.v2.js?3.3.27273"></script>
    <style>
      .formLogoWrapper { display:inline-block; position: absolute; width: 100%;} .form-all:before { background: none !important;} .formLogoWrapper.Center { top: -90px; text-align: center;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Feedback
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              You can write anything in here about your experience.
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_scale" id="id_23">
        <label class="form-label form-label-top form-label-auto" id="label_23" for="input_23">
          Overall, how useful was the website ?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_23" class="form-input-wide jf-required" data-layout="full">
          <span class="form-sub-label-container" style="vertical-align:top">
            <div role="radiogroup" aria-labelledby="label_23 sublabel_input_23_description" cellPadding="4" cellSpacing="0" class="form-scale-table" data-component="scale">
              <div class="rating-item-group">
                <div class="rating-item">
                  <span class="rating-item-title for-from">
                    <label for="input_23_worst" aria-hidden="true"> Not useful </label>
                  </span>
                  <input type="radio" aria-describedby="label_23" class="form-radio validate[required]" name="q23_overallHow" value="1" title="1" id="input_23_1" required="" />
                  <label for="input_23_1"> 1 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_23" class="form-radio validate[required]" name="q23_overallHow" value="2" title="2" id="input_23_2" required="" />
                  <label for="input_23_2"> 2 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_23" class="form-radio validate[required]" name="q23_overallHow" value="3" title="3" id="input_23_3" required="" />
                  <label for="input_23_3"> 3 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_23" class="form-radio validate[required]" name="q23_overallHow" value="4" title="4" id="input_23_4" required="" />
                  <label for="input_23_4"> 4 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_23" class="form-radio validate[required]" name="q23_overallHow" value="5" title="5" id="input_23_5" required="" />
                  <label for="input_23_5"> 5 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_23" class="form-radio validate[required]" name="q23_overallHow" value="6" title="6" id="input_23_6" required="" />
                  <label for="input_23_6"> 6 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_23" class="form-radio validate[required]" name="q23_overallHow" value="7" title="7" id="input_23_7" required="" />
                  <label for="input_23_7"> 7 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_23" class="form-radio validate[required]" name="q23_overallHow" value="8" title="8" id="input_23_8" required="" />
                  <label for="input_23_8"> 8 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_23" class="form-radio validate[required]" name="q23_overallHow" value="9" title="9" id="input_23_9" required="" />
                  <label for="input_23_9"> 9 </label>
                </div>
                <div class="rating-item">
                  <span class="rating-item-title for-to">
                    <label for="input_23_best" aria-hidden="true"> Very Useful </label>
                  </span>
                  <input type="radio" aria-describedby="label_23" class="form-radio validate[required]" name="q23_overallHow" value="10" title="10" id="input_23_10" required="" />
                  <label for="input_23_10"> 10 </label>
                </div>
              </div>
            </div>
            <label class="form-sub-label" id="sublabel_input_23_description" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false"> 1 is Not useful, 10 is Very Useful </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_scale" id="id_25">
        <label class="form-label form-label-top form-label-auto" id="label_25" for="input_25">
          What rating will you give to our website according to your experience ?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input-wide jf-required" data-layout="full">
          <span class="form-sub-label-container" style="vertical-align:top">
            <div role="radiogroup" aria-labelledby="label_25 sublabel_input_25_description" cellPadding="4" cellSpacing="0" class="form-scale-table" data-component="scale">
              <div class="rating-item-group">
                <div class="rating-item">
                  <span class="rating-item-title for-from">
                    <label for="input_25_worst" aria-hidden="true"> Very poor </label>
                  </span>
                  <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" name="q25_whatRating" value="1" title="1" id="input_25_1" required="" />
                  <label for="input_25_1"> 1 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" name="q25_whatRating" value="2" title="2" id="input_25_2" required="" />
                  <label for="input_25_2"> 2 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" name="q25_whatRating" value="3" title="3" id="input_25_3" required="" />
                  <label for="input_25_3"> 3 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" name="q25_whatRating" value="4" title="4" id="input_25_4" required="" />
                  <label for="input_25_4"> 4 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" name="q25_whatRating" value="5" title="5" id="input_25_5" required="" />
                  <label for="input_25_5"> 5 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" name="q25_whatRating" value="6" title="6" id="input_25_6" required="" />
                  <label for="input_25_6"> 6 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" name="q25_whatRating" value="7" title="7" id="input_25_7" required="" />
                  <label for="input_25_7"> 7 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" name="q25_whatRating" value="8" title="8" id="input_25_8" required="" />
                  <label for="input_25_8"> 8 </label>
                </div>
                <div class="rating-item">
                  <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" name="q25_whatRating" value="9" title="9" id="input_25_9" required="" />
                  <label for="input_25_9"> 9 </label>
                </div>
                <div class="rating-item">
                  <span class="rating-item-title for-to">
                    <label for="input_25_best" aria-hidden="true"> Great ! </label>
                  </span>
                  <input type="radio" aria-describedby="label_25" class="form-radio validate[required]" name="q25_whatRating" value="10" title="10" id="input_25_10" required="" />
                  <label for="input_25_10"> 10 </label>
                </div>
              </div>
            </div>
            <label class="form-sub-label" id="sublabel_input_25_description" style="border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;white-space:nowrap" aria-hidden="false"> 1 is Very poor, 10 is Great ! </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_30">
        <label class="form-label form-label-top form-label-auto" id="label_30" for="input_30">
          What did you like/dislike in our website
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_30" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_30" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_30" class="form-radio validate[required]" id="input_30_0" name="q30_whatDid" value="Design" required="" />
              <label id="label_input_30_0" for="input_30_0"> Design </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_30" class="form-radio validate[required]" id="input_30_1" name="q30_whatDid" value="Journals &amp; Trials" required="" />
              <label id="label_input_30_1" for="input_30_1"> Journals & Trials </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_30" class="form-radio validate[required]" id="input_30_2" name="q30_whatDid" value="Calculator" required="" />
              <label id="label_input_30_2" for="input_30_2"> Calculator </label>
            </span>
            <span class="form-radio-item formRadioOther" style="clear:left">
              <input type="radio" class="form-radio-other form-radio validate[required]" name="q30_whatDid" id="other_30" value="other" aria-label="Other" />
              <label id="label_other_30" style="text-indent:0" for="other_30"> Other </label>
              <span id="other_30_input" class="other-input-container" style="display:none">
                <input type="text" class="form-radio-other-input form-textbox" name="q30_whatDid[other]" data-otherhint="Other" size="15" id="input_30" data-placeholder="Please type another option here" placeholder="Please type another option here" />
              </span>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_26">
        <label class="form-label form-label-top form-label-auto" id="label_26" for="input_26">
          Would you recommend our website to a friend?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_26" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_26" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_26" class="form-radio validate[required]" id="input_26_0" name="q26_wouldYou26" value="Yes, definitely" required="" />
              <label id="label_input_26_0" for="input_26_0"> Yes, definitely </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_26" class="form-radio validate[required]" id="input_26_1" name="q26_wouldYou26" value="Maybe, if the content becomes more useful" required="" />
              <label id="label_input_26_1" for="input_26_1"> Maybe, if the content becomes more useful </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_26" class="form-radio validate[required]" id="input_26_2" name="q26_wouldYou26" value="Maybe, if it had more features" required="" />
              <label id="label_input_26_2" for="input_26_2"> Maybe, if it had more features </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_26" class="form-radio validate[required]" id="input_26_3" name="q26_wouldYou26" value="No, never" required="" />
              <label id="label_input_26_3" for="input_26_3"> No, never </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_28">
        <label class="form-label form-label-top form-label-auto" id="label_28" for="input_28"> If you were the web developer, what would you have done differently? </label>
        <div id="cid_28" class="form-input-wide" data-layout="full">
          <textarea id="input_28" class="form-textarea" name="q28_ifYou28" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_28"></textarea>
        </div>
      </li>
      <li class="form-line" data-type="control_textarea" id="id_38">
        <label class="form-label form-label-top form-label-auto" id="label_38" for="input_38"> Any final comments? </label>
        <div id="cid_38" class="form-input-wide" data-layout="full">
          <textarea id="input_38" class="form-textarea" name="q38_anyFinal38" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_38"></textarea>
        </div>
      </li>
      <li id="cid_3" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httal htvam">
            <h2 id="header_3" class="form-header" data-component="header">
              Optional: Contact Details
            </h2>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_4">
        <label class="form-label form-label-top form-label-auto" id="label_4" for="first_4"> Your Name </label>
        <div id="cid_4" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_4" name="q4_yourName[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_4 sublabel_4_first" />
              <label class="form-sub-label" for="first_4" id="sublabel_4_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_4" name="q4_yourName[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_4 sublabel_4_last" />
              <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"> E-mail </label>
        <div id="cid_5" class="form-input-wide" data-layout="half">
          <input type="email" id="input_5" name="q5_email5" class="form-textbox validate[Email]" style="width:310px" size="310" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_5" />
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_6" data-compound-hint="6290001033">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6_full"> Phone Number </label>
        <div id="cid_6" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="tel" id="input_6_full" name="q6_phoneNumber6[full]" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" style="width:310px" data-masked="true" value="" placeholder="6290001033" data-component="phone" aria-labelledby="label_6" />
            <label class="form-sub-label is-empty" for="input_6_full" id="sublabel_6_masked" style="min-height:13px" aria-hidden="false">  </label>
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_scl_2" type="button" class="form-submit-button form-sacl-button js-new-sacl-button  form-submit-button-blue jf-form-buttons " data-component="button">
              Save
            </button>
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-blue submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit Form
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="212348571534456" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='212348571534456'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "212348571534456-212348571534456";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.27273"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.27273"></script>
<script type="text/javascript">window.GOOGLE_SIGNON = "172124630376-qk1qmdfmur2ojaf39e070iqhpt2foaip.apps.googleusercontent.com"</script>
<script type="text/javascript">window.FACEBOOK_SIGNON_APP_ID = "1140740696088074"</script>
<script>window.JotFormAPIEndpoint = "https://api.jotform.com"; </script>
<script>window.___JFsclActive = true; </script>
<script>window.JFForm = { id: '212348571534456', skippable: true, isHipaa: '' };</script> 
<script defer src="https://cdn.jotfor.ms//common/FormUserScripts.js"></script>
		
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
    <footer>
      <div style="background: #5c5a5a; text-align: center; padding: 1%;">
        <p class= "cp-text">&copy; 2021  EKHATA | All Rights Reserved.</p>
      </div>
      </footer>
    <link rel="stylesheet" type="text/css" href="css/mode.css" />

	</body>
</html>