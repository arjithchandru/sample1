<?php 
	$ini_array = parse_ini_file("config_deploy.ini");
    	$deploy = $ini_array['deploy'];
	$message = $ini_array['message'];
	if($deploy){
		echo $message; //test2
		exit;
	}else{
?>

<!doctype html>

<html lang="en">

<head>



<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-140394256-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-140394256-1');

</script>





<!-- Basic Page Needs

================================================== -->

<title>Crabroom | Online Payment Gateway List</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



<meta name="description" content="Crabroom Online Payment List">

<meta name="keywords" content="Crabroom,Payment Gateway List,international payment gateway list,best payment gateway for small business,payment gateway providers,Online Payment Integration">

<meta name="author" content="Bhavesh Dasireddy">

<link rel="icon" href="images/crabico.png" type="image" sizes="16x16">



<!-- CSS

================================================== -->

<link rel="stylesheet" href="payint.pro/css/style.css">

<link rel="stylesheet" href="payint.pro/css/crabroom.css">

<link rel="stylesheet" href="payint.pro/css/colors/crabroomcolor.css">



</head>

<body>



<!-- Wrapper -->

<div id="wrapper">



<!-- Header Container

================================================== -->

<header id="header-container" class="fullwidth transparent">



	<!-- Header -->

	<div id="header">

		<div class="container">



			<!-- Left Side Content -->

			<div class="left-side">



				<!-- Logo -->

				<div id="logo">

					<a href="index.php"><img src="images/crabroom.png" alt=""></a>

				</div>



				<?php require_once('nav.php'); ?>

			</div>

			<!-- Left Side Content / End -->





			<!-- Right Side Content / End -->

			<div class="right-side">



			<div class="header-widget">

				<a href="contact.php"

					class="log-in-button"><i class="icon-material-outline-contact-support"></i>

				</a>

			</div>



			<!-- Mobile Navigation Button

			<span class="mmenu-trigger">

				<button class="hamburger hamburger--collapse" type="button">

					<span class="hamburger-box"> <span class="hamburger-inner"></span>

					</span>

				</button>

			</span>-->



			</div>

			<!-- Right Side Content / End -->



		</div>

	</div>

	<!-- Header / End -->



</header>

<div class="clearfix"></div>

<!-- Header Container / End -->







<!-- Intro Banner

================================================== -->

<!-- add class "disable-gradient" to enable consistent background overlay -->

<div class="intro-banner" data-background-image="images/home-background.jpg">

	<div class="container">



		<!-- Intro Headline -->

		<div class="row">

			<div class="col-md-12">

				<div class="banner-headline">

					<!-- <marquee>This website is under construction. Please write to contact@crabroom.com</marquee> -->

					<h3>

						<strong>Find online payment gateway that meets your business requirements. Seach hunderds of payment service providers.</strong>

						<br>

						<span>Merchants use <strong class="color">PayIntGo</strong> - crabroom payment gateway search tool, to find the best payment gateway and request for a quote.</span>

					</h3>

				</div>

			</div>

		</div>







		<!-- Search Bar -->

		<div class="row">

			<div class="col-md-12">

				<div class="intro-banner-search-form margin-top-95">



					<!-- Search Field -->

					<div class="intro-search-field with-autocomplete">

						<label for="autocomplete-input" class="field-title ripple-effect">Business Location</label>

						<button class="mark-as-read ripple-effect-dark" title="enter your business location" data-tippy-placement="right">

							<i class="icon-line-awesome-question-circle"></i>

						</button>

						<div class="input-with-icon">

    						<div id="autocomplete-container">

    							<!-- <div class="accountry"><input id="autocomplete-input" name="country" type="text" placeholder="e.g. United States"></div> -->

    							<div class="autocomplete">

    								<input id="autocomplete-input" type="text" name="country" autocomplete="off" placeholder="e.g. Canada">

                                </div>

    						</div>

    						<!-- <i class="icon-material-outline-location-on"></i> -->

    					</div>



						<!-- <input id="autocomplete-input" type="text" name="country" autocomplete="off" placeholder="e.g. Canada"> -->

					</div>



					<!-- Search Field

					<div class="intro-search-field">

						<label for ="intro-keywords" class="field-title ripple-effect">

							Payment Method

						</label>

						<button class="mark-as-read ripple-effect-dark" title="select how you want your customers to pay you. Common payment methods are - Card, Cash, Cryptocurrency, Direct Deposit, eWallet, PrePaid, Vouchers" data-tippy-placement="right">

							<i class="icon-line-awesome-question-circle"></i>

						</button>

						<input id="autocomplete-paymethod-input" type="text" name="paymethod" autocomplete="off" placeholder="e.g. Card">

                     </div>

                       -->

					<!-- Button -->

					<div class="intro-search-button">

						<button name="search" class="button ripple-effect" onclick="forward_to_list_gateways()">Search</button>

					</div>

				</div>

			</div>

		</div>



		<!-- Stats -->

		<div class="row">

			<div class="col-md-12">

				<ul class="intro-stats margin-top-45 hide-under-992px">

					<li>

						<strong class="counter">286</strong>

						<span>Online Payment Gateways</span>

					</li>

					<li>

						<strong class="counter">30</strong>

						<span>Shopping Carts Supported</span>

					</li>

					<li>

						<strong class="counter">200</strong>

						<span>Currencies Supported</span>

					</li>

				</ul>

			</div>

		</div>



	</div>

</div>



<!-- Icon Boxes -->

<div class="section padding-top-65 padding-bottom-65">

	<div class="container">

		<div class="row">



			<div class="col-xl-12">

				<!-- Section Headline -->

				<div class="section-headline centered margin-top-0 margin-bottom-5">

					<h3>How It Works?</h3>

				</div>

			</div>



			<div class="col-xl-4 col-md-4">

				<!-- Icon Box -->

				<div class="icon-box with-line">

					<!-- Icon -->

					<div class="icon-box-circle">

						<div class="icon-box-circle-inner">

							<i class="icon-material-outline-search"></i>

							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>

						</div>

					</div>

					<h3>Search Payment Gateways</h3>

					<p>Shortlist from hundreds of payment gateways and request offers from respective sales teams with one click.</p>

				</div>

			</div>



			<div class="col-xl-4 col-md-4">

				<!-- Icon Box -->

				<div class="icon-box with-line">

					<!-- Icon -->

					<div class="icon-box-circle">

						<div class="icon-box-circle-inner">

							<i class="icon-material-outline-star"></i>

							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>

						</div>

					</div>

					<h3>Bookmark a Payment Gateway</h3>

					<p>Shortlist the payment gateway that suits your business requirements.</p>

				</div>

			</div>



			<div class="col-xl-4 col-md-4">

				<!-- Icon Box -->

				<div class="icon-box">

					<!-- Icon -->

					<div class="icon-box-circle">

						<div class="icon-box-circle-inner">

							<i class="icon-line-awesome-tag"></i>

							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>

						</div>

					</div>

					<h3>Request for Quote</h3>

					<p>Get in touch with the paymant gateway sales teams. Contact the shortlisted payment gateway and request for a quote.</p>

				</div>

			</div>



		</div>

	</div>

</div>

<!-- Icon Boxes / End -->





<!-- Content

================================================== -->

<!-- Category Boxes -->

<div class="section margin-top-65">

	<div class="container">

		<div class="row">

			<div class="col-xl-12">



				<div class="section-headline centered margin-bottom-15">

					<h3>Featured Payment Gateways</h3>

				</div>



				<!-- Category Boxes Container -->

				<div class="categories-container">



					<!-- Category Box -->

					<a href="#" class="category-box">

						<div class="category-box-icon">

							<i class="icon-line-awesome-file-code-o"></i>

						</div>

						<div class="category-box-content">

							<h3>Payment Gateway</h3>

						</div>

					</a>



					<!-- Category Box -->

					<a href="#" class="category-box">

						<div class="category-box-icon">

							<i class="icon-line-awesome-cloud-upload"></i>

						</div>

						<div class="category-box-content">

							<h3>Payment Gateway</h3>

						</div>

					</a>



					<!-- Category Box -->

					<a href="#" class="category-box">

						<div class="category-box-icon">

							<i class="icon-line-awesome-suitcase"></i>

						</div>

						<div class="category-box-content">

							<h3>Payment Gateway</h3>

						</div>

					</a>



					<!-- Category Box -->

					<a href="#" class="category-box">

						<div class="category-box-icon">

							<i class="icon-line-awesome-pencil"></i>

						</div>

						<div class="category-box-content">

							<h3>Payment Gateway</h3>

						</div>

					</a>



					<!-- Category Box -->

					<a href="#" class="category-box">

						<div class="category-box-icon">

							<i class="icon-line-awesome-pie-chart"></i>

						</div>

						<div class="category-box-content">

							<h3>Payment Gateway</h3>

						</div>

					</a>



					<!-- Category Box -->

					<a href="#" class="category-box">

						<div class="category-box-icon">

							<i class="icon-line-awesome-image"></i>

						</div>

						<div class="category-box-content">

							<h3>Payment Gateway</h3>

						</div>

					</a>



					<!-- Category Box -->

					<a href="jobs-list-layout-2.html" class="category-box">

						<div class="category-box-icon">

							<i class="icon-line-awesome-bullhorn"></i>

						</div>

						<div class="category-box-content">

							<h3>Payment Gateway</h3>

						</div>

					</a>



					<!-- Category Box -->

					<a href="#" class="category-box">

						<div class="category-box-icon">

							<i class="icon-line-awesome-graduation-cap"></i>

						</div>

						<div class="category-box-content">

							<h3>Payment Gateway</h3>

						</div>

					</a>



				</div>



			</div>

		</div>

	</div>

</div>

<!-- Category Boxes / End -->













<!-- Highest Rated Consultants

<div class="section gray padding-top-65 padding-bottom-70 full-width-carousel-fix">

	<div class="container">

		<div class="row">



			<div class="col-xl-12">

				<!-- Section Headline

				<div class="section-headline margin-top-0 margin-bottom-25">

					<h3>Highest Rated Consultant Hours</h3>

					<a href="tasks-list-layout-2.html" class="headline-link">Browse All Consultant Hours</a>

				</div>

				<!-- Jobs Container

				<div class="listings-container compact-list-layout margin-top-35">



					<!-- Job Listing

					<a href="single-job-page.html" class="job-listing with-apply-button">



						<!-- Job Listing Details

						<div class="job-listing-details">



							<!-- Logo

							<div class="job-listing-company-logo">

								<img src="images/company-logo-01.png" alt="">

							</div>



							<!-- Details

							<div class="job-listing-description">

								<h3 class="job-listing-title">PayPal Merchant Payouts</h3>



								<!-- Job Listing Footer

								<div class="job-listing-footer">

									<ul>

										<li><i class="icon-material-outline-business"></i> Hexagon <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>

										<li><i class="icon-material-outline-location-on"></i> San Francissco</li>

										<li><i class="icon-material-outline-access-time"></i> 2 hours</li>

									</ul>

								</div>

							</div>



							<!-- Apply Button

							<span class="list-apply-button ripple-effect">Buy Consultant Hours</span>

						</div>

					</a>





					<!-- Job Listing

					<a href="single-job-page.html" class="job-listing with-apply-button">



						<!-- Job Listing Details

						<div class="job-listing-details">



							<!-- Logo

							<div class="job-listing-company-logo">

								<img src="images/company-logo-05.png" alt="">

							</div>



							<!-- Details

							<div class="job-listing-description">

								<h3 class="job-listing-title">Stripe WeChat Pay</h3>



								<!-- Job Listing Footer

								<div class="job-listing-footer">

									<ul>

										<li><i class="icon-material-outline-business"></i> Laxo</li>

										<li><i class="icon-material-outline-location-on"></i> Chicago</li>

										<li><i class="icon-material-outline-access-time"></i> 3 hours</li>

									</ul>

								</div>

							</div>



							<!-- Apply Button

							<span class="list-apply-button ripple-effect">Buy Consultant Hours</span>

						</div>

					</a>

					<!-- Job Listing

					<a href="single-job-page.html" class="job-listing with-apply-button">



						<!-- Job Listing Details

						<div class="job-listing-details">



							<!-- Logo

							<div class="job-listing-company-logo">

								<img src="images/company-logo-02.png" alt="">

							</div>



							<!-- Details

							<div class="job-listing-description">

								<h3 class="job-listing-title">PayPal Checkout</h3>



								<!-- Job Listing Footer

								<div class="job-listing-footer">

									<ul>

										<li><i class="icon-material-outline-business"></i> Coffee</li>

										<li><i class="icon-material-outline-location-on"></i> Dallas</li>

										<li><i class="icon-material-outline-access-time"></i> 5 hours</li>

									</ul>

								</div>

							</div>



							<!-- Apply Button

							<span class="list-apply-button ripple-effect">Buy Consultant Hours</span>

						</div>

					</a>





					<!-- Job Listing

					<a href="single-job-page.html" class="job-listing with-apply-button">



						<!-- Job Listing Details

						<div class="job-listing-details">



							<!-- Logo

							<div class="job-listing-company-logo">

								<img src="images/company-logo-03.png" alt="">

							</div>



							<!-- Details

							<div class="job-listing-description">

								<h3 class="job-listing-title">Stripe Credit Card Checkout</h3>



								<!-- Job Listing Footer

								<div class="job-listing-footer">

									<ul>

										<li><i class="icon-material-outline-business"></i> King <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>

										<li><i class="icon-material-outline-location-on"></i> New York</li>

										<li><i class="icon-material-outline-access-time"></i> 7 hours</li>

									</ul>

								</div>

							</div>



							<!-- Apply Button

							<span class="list-apply-button ripple-effect">Buy Consultant Hours</span>

						</div>

					</a>



					<!-- Job Listing

					<a href="single-job-page.html" class="job-listing with-apply-button">



						<!-- Job Listing Details

						<div class="job-listing-details">



							<!-- Logo

							<div class="job-listing-company-logo">

								<img src="images/company-logo-05.png" alt="">

							</div>



							<!-- Details

							<div class="job-listing-description">

								<h3 class="job-listing-title">Stripe Merchant Accounts Connect</h3>



								<!-- Job Listing Footer

								<div class="job-listing-footer">

									<ul>

										<li><i class="icon-material-outline-business"></i> Skyist</li>

										<li><i class="icon-material-outline-location-on"></i> Boston</li>

										<li><i class="icon-material-outline-access-time"></i> 4 hours</li>

									</ul>

								</div>

							</div>



							<!-- Apply Button

							<span class="list-apply-button ripple-effect">Buy Consultant Hours</span>

						</div>

					</a>



				</div>

				<!-- Jobs Container / End

			</div>

		</div>

	</div>

</div>

<!-- Highest Rated Consultants / End-->





<!-- Membership Plans -->

<div class="section padding-top-60 padding-bottom-75">

	<div class="container">

		<div class="row">



			<div class="col-xl-12">

				<!-- Section Headline

				<div class="section-headline centered margin-top-0 margin-bottom-35">

					<h3>Consultant Membership Plans</h3>

				</div>

			</div>





			<div class="col-xl-12">



				<!-- Billing Cycle

				<div class="billing-cycle-radios margin-bottom-70">

					<div class="radio billed-monthly-radio">

						<input id="radio-5" name="radio-payment-type" type="radio" checked>

						<label for="radio-5"><span class="radio-label"></span> Billed Monthly</label>

					</div>



					<div class="radio billed-yearly-radio">

						<input id="radio-6" name="radio-payment-type" type="radio">

						<label for="radio-6"><span class="radio-label"></span> Billed Yearly <span class="small-label">Save 10%</span></label>

					</div>

				</div>-->



				<!-- Pricing Plans Container -->

				<div class="pricing-plans-container">



					<!-- Plan -->

					<div class="pricing-plan">

						<!-- <h3>Basic Plan</h3> -->

						<p class="margin-top-10">Shortlist the available gateways based on your criteria. Accept Offers from Payment Gateway Providers with just few clicks!</p>

						<!-- <div class="pricing-plan-label billed-monthly-label"><strong>$0</strong>/ monthly</div>

						<div class="pricing-plan-label billed-yearly-label"><strong>$0</strong>/ yearly</div>

						<div class="pricing-plan-features">

							<strong>Features of Basic Plan</strong>

							<ul>

								<li>2 Consultation Listings</li>

								<li>30 Days Visibility</li>

								<li>Not Highlighted in Search Results</li>

							</ul>

						</div>

						<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a> -->

					</div>



					<!-- Plan -->

					<div class="pricing-plan recommended">

						<div class="recommended-badge">What to Consider?</div>

						<!-- <h3>Standard Plan</h3>

						<p class="margin-top-10">One time fee for one listing or task highlighted in search results.</p>

						<!-- <div class="pricing-plan-label billed-monthly-label"><strong>$19</strong>/ monthly</div>

						<div class="pricing-plan-label billed-yearly-label"><strong>$205</strong>/ yearly</div> -->

						<div class="pricing-plan-features">

							<!-- <strong>Factors</strong> -->

							<ul>

								<li>Payment Methods</li>

								<li>Security and Compliance</li>

								<li>Multi-Currency Transactions</li>

								<li>Multi-Platform Transactions</li>

								<li>24*7 Support</li>

								<li>Pricing</li>

								<li>Ease of Integration</li>

								<li>Payment Validation</li>

								<li>Fast Transactions</li>

							</ul>

						</div>

						<!-- <a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a> -->

					</div>



					<!-- Plan -->

					<div class="pricing-plan">

						<!-- <h3>Extended Plan</h3> -->

						<p class="margin-top-10">Thousands of integration experts integrating hundreds of payment gateways into tens of shopping carts supporting!</p>

						<!-- <div class="pricing-plan-label billed-monthly-label"><strong>$49</strong>/ monthly</div>

						<div class="pricing-plan-label billed-yearly-label"><strong>$529</strong>/ yearly</div>

						<div class="pricing-plan-features">

							<strong>Features of Extended Plan</strong>

							<ul>

								<li>Unlimited Consultation Listings</li>

								<li>90 Days Visibility</li>

								<li>Highlighted in Search Results</li>

							</ul>

						</div>

						<a href="pages-checkout-page.html" class="button full-width margin-top-20">Buy Now</a> -->

					</div>

				</div>



			</div>



		</div>

	</div>

</div>

<!-- Membership Plans / End-->



<?php require_once('footer.php'); ?>



</div>

<!-- Wrapper / End -->



<!-- Sign In Popup

================================================== -->

<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">



	<!--Tabs -->

	<div class="sign-in-form">



		<ul class="popup-tabs-nav">

			<li><a href="#login">Support</a></li>

		</ul>



		<div class="popup-tabs-container">



			<!-- Login -->

			<div class="popup-tab-content" id="login">



				<!-- Welcome Text -->

				<div  class="welcome-text">

					<h3 id="email_reply2">Send us an email.</h3>

					<!-- <span>Don't have an account? <a href="#" class="register-tab">Register!</a></span> -->

				</div>



				<!-- Form

				<form method="post" id="login-form" action="contact-support.php">-->

					<?php

    					$ini_array = parse_ini_file("payint.pro/config/config.ini");

    					$subject = $ini_array['email-contact-support-subject'];

					?>

					<input type="hidden" name="subject" value="<?php echo $subject; ?>"/>



					<div class="input-with-icon-left">

						<i class="icon-material-baseline-mail-outline"></i>

						<input type="text" class="input-text with-border" name="cusemail" id="email_address" placeholder="your email address" required/>

					</div>



					<div class="input-with-icon-left">

						<div id="charNum"></div>

						<textarea class="input-text with-border" name="body" id="email_content" placeholder="write email content here" rows="5" cols="30" required onkeyup="countChar(this)"></textarea>

    					<!-- <input type="textarea" class="input-text with-border" name="password" id="password" placeholder="Password" required/> -->

					</div>

				<!-- </form>-->



				<!-- Button

				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Send <i class="icon-material-outline-arrow-right-alt"></i></button>

				<button id="email_send" class="button full-width button-sliding-icon ripple-effect" type="submit" onclick="contact_support($('#email_address'),$('#email_content'))">Send <i class="icon-material-outline-arrow-right-alt"></i></button>

				--><button id="email_send" class="button full-width button-sliding-icon ripple-effect" type="submit" onclick="contact_support()">Send <i class="icon-material-outline-arrow-right-alt"></i></button>



				<!-- Social Login

				<div class="social-login-separator"><span>or</span></div>

				<div class="social-login-buttons">

					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>

					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>

				</div>

				-->

			</div>



		</div>

	</div>

</div>

<!-- Sign In Popup / End -->





<script>



function forward_to_list_gateways(){

	var country = document.getElementsByName("country")[0].value;

	if(window.location.host == "localhost"){

		var url = "http://localhost/dev.crabroom.com/list-payment-gateways.php?country="+country;

	}else{

		var url = "https://crabroom.com/list-payment-gateways.php?country="+country;

	}

	location.replace(url);

 }



function contact_support(){

	 var email_address = $('#email_address').val();

	 var email_content = $('#email_content').val();



	 $("#email_send").prop('disabled', true);

   $.ajax({

	     type		: "GET",

	     url		: "contact-support.php",

	     data		: {

          		     "cusemail" : email_address,

          			     "body" : email_content

              	  },

	     //contentType: "application/json; charset=utf-8",

	     //dataType	: "html",

	     async		: false,

	     success	: emailSuccess,

	     error		: emailError

	});

}



function emailSuccess(result){

	 //$('#email_reply2').html("Thanks for contacting us. <br>We will try to respond back as soon as possible.");

	 $('#login').html("Thanks for contacting us. We will try to respond back as soon as possible. We generally respond within 1-2 days");



}



function emailError(result){

	 //$('#email_reply2').html("Something went wrong, email not sent. Try again or write to contact@crabroom.com");

	 $('#login').html("Something went wrong, email not sent. Try again or write to contact@crabroom.com");

}



</script>





<!-- Scripts

================================================== -->

<script src="payint.pro/js/jquery-3.3.1.min.js"></script>

<script src="payint.pro/js/jquery-migrate-3.0.0.min.js"></script>

<script src="payint.pro/js/mmenu.min.js"></script>

<script src="payint.pro/js/tippy.all.min.js"></script>

<script src="payint.pro/js/simplebar.min.js"></script>

<script src="payint.pro/js/bootstrap-slider.min.js"></script>

<script src="payint.pro/js/bootstrap-select.min.js"></script>

<script src="payint.pro/js/snackbar.js"></script>

<script src="payint.pro/js/clipboard.min.js"></script>

<script src="payint.pro/js/counterup.min.js"></script>

<script src="payint.pro/js/magnific-popup.min.js"></script>

<script src="payint.pro/js/slick.min.js"></script>

<script src="payint.pro/js/custom.js"></script>

<script src="payint.pro/js/autocomplete.js"></script>

<script src="payint.pro/js/crabroom.js"></script>



<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->

<script>

// Snackbar for user status switcher

$('#snackbar-user-status label').click(function() {

	Snackbar.show({

		text: 'Your status has been changed!',

		pos: 'bottom-center',

		showAction: false,

		actionText: "Dismiss",

		duration: 3000,

		textColor: '#fff',

		backgroundColor: '#383838'

	});

});

</script>





<!-- Google Autocomplete -->

<script>

	function initAutocomplete() {

		 var options = {

		  types: ['(cities)'],

		  // componentRestrictions: {country: "us"}

		 };



		 var input = document.getElementById('autocomplete-input');

		 var autocomplete = new google.maps.places.Autocomplete(input, options);

	}



	// Autocomplete adjustment for homepage

	if ($('.intro-banner-search-form')[0]) {

	    setTimeout(function(){

	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");

	    }, 300);

	}



</script>



<!-- Google API & Maps -->

<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->

<script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places"></script>



</body>

</html>

<?php } ?>
