<?php
    $to = "msaudio@otenet.gr"; // this is your Email address
    $from = $_GET['email']; // this is the sender's Email address
    $firstName = $_GET['firstName'];
    // $lastName = $_GET['lastName'];
    $phoneNumber = $_GET['phoneNumber'];
    $comment = $_GET['comment'];
    // $time = $_GET['time'];
    $subject = "Michailidis Alarm Systems";
    $subject2 = "Michailidis Alarm Systems - Αντιγραφο";
    $message = $firstName . " " . "τηλέφωνο: " . $phoneNumber . " Μήνυμα:" . "\n\n" . $comment . "\n\n" . "ωρα επικοινωνίας:";
    $message2 = "Αντίγραφο του e-mail σας" . $firstName . " " . " " . $phoneNumber . " Μήνυμα:" . "\n\n" . $comment . "\n\n" . "ωρα επικοινωνίας:";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $firstName . ", we will contact you shortly.";
     header("Refresh:10; url=index.html"); 
    // You can also use header('Location: thank_you.php'); to redirect to another page.
?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">Ευχαριστουμε!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Λάβαμε το μήνυμα σου. Θα επικοινωνήσουμε μαζί σου το συντομότερο.</p>
		<p class="main-content__body" data-lead-id="main-content-body">Επιστροφή στη σελίδα αυτόματα σε 10'</p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2022</p>
	</footer>
</body>
</html>