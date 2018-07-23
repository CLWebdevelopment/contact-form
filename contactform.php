<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    
    $mailTo = "connor.cummings@louisville.edu";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email".$message;
        
        
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}


