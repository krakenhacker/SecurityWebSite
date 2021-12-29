<?php
    $to = "george.sot@windowslive.com"; // this is your Email address
    $from = $_GET['email']; // this is the sender's Email address
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $phoneNumber = $_GET['phoneNumber'];
    $comment = $_GET['comment'];
    $time = $_GET['time'];
    $subject = "Alarm Systems";
    $subject2 = "Alarm Systems - Αντιγραφο";
    $message = $firstName . " " . $lastName . " " . $phoneNumber . " Μήνυμα:" . "\n\n" . $comment . "\n\n" . "ωρα επικοινωνίας:" . $time;
    $message2 = "Αντίγραφο του e-mail σας" . $firstName . " " . $lastName . " " . $phoneNumber . " Μήνυμα:" . "\n\n" . $comment . "\n\n" . "ωρα επικοινωνίας:" . $time;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $firstName . ", we will contact you shortly.";
    header("Refresh:5; url=index.html"); 
    // You can also use header('Location: thank_you.php'); to redirect to another page.
?>