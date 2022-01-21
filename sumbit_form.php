<?php
    $to = "george.sot@windowslive.com"; // this is your Email address
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
    header("Refresh:5; url=index.html"); 
    // You can also use header('Location: thank_you.php'); to redirect to another page.
?>
<html>
    <head>
    <script src="https://getbootstrap.com/docs/4.3/getting-started/introduction/"></script>
    <meta charset="utf-8" />
    </head>
<body>
<div class="jumbotron text-center">
  <h1 class="display-3">Ευχαριστούμε για την προτίμηση!</h1>
  <p class="lead"><strong>Λάβαμε το αίτημα επικοινωνίας</strong>, σύντομα θα επικοινωνήσουμε μαζί σας.</p>
  <hr>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="index.html" role="button">Επιστροφή στη σελίδα</a>
  </p>
</div>
</body>
</html>