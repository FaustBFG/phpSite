<?php
/*
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());
require_once "Mail.php";

$host = "ssl://sub4.mail.dreamhost.com";
$username = "youremail@example.com";
$password = "your email password";
$port = "465";
$to = "address_form_will_send_TO@example.com";
$email_from = "youremail@example.com";
$email_subject = "Subject Line Here: " ;
$email_body = "whatever you like" ;
$email_address = "reply-to@example.com";

$headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
$smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
$mail = $smtp->send($to, $headers, $email_body);


if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message successfully sent!</p>");
}*/
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Roboto:300,400' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div class="box-wrap">
		<header role="banner" id="fh5co-header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="row">
						<div class="col-sm-1">
							<div class="fh5co-navbar-brand">
								<a class="fh5co-logo" href="index.php"><img src="images/logo.png" alt="Closest Logo" style="width:100%;"></a>
							</div>
						</div>
						<div class="col-md-6">
							<ul class="nav text-center">
								<li><a href="index.php"><span>Work</span></a></li>
								<li><a href="inside.html">About</a></li>
								<li class="active"><a href="contact.php">Contact</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<ul class="social">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
								<li><a href="#"><i class="icon-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</nav>
		  </div>
		</header>
		<!-- END: header -->
		<section id="intro">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
						<div class="intro animate-box">
							<h1>For order please write us</h1>
						</div>
					</div>
				</div>
			<div>
		</section>

		<main id="main">
			<div class="container">
				<div class="col-md-8 col-md-offset-2 animate-box">
					<form role="form" id="contactForm" action="mail.php" method="post">
						<div class="row">
							<div class="form-group col-sm-6">
								<label for="name" class="h4">Name</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
							</div>
							<div class="form-group col-sm-6">
								<label for="email" class="h4">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="h4 ">Message</label>
							<textarea id="message" class="form-control" rows="5" name="msg" placeholder="Enter your message" required></textarea>
						</div>
						<button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right " >Send</button>
						<div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
					</form>
				</div>
				<!-- <div class="col-md-4"></div> -->
			</div>
		</main>

		<footer id="footer" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="footer-widget border">
							<p class="pull-left"><small>&copy; LANDA All Rights Reserved.</small></p>
							<p class="pull-right"><small> Designed by  LANDA</small></p>
							
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- END: box-wrap -->
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
	<script src="js/scripts.js"></script>

	</body>

</html>

