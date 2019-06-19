<?php

    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['message'];

    $websiteEmail = "LaleHarikaMusicWebsite@gmail.com";

    $emailSubject = "LHM Form Message";

    $mailTo = "ben-coler@hotmail.com";
    $emailBody = "Email from ".$name.".\n\n".$message;

    $headers = "From: $websiteEmail \r\n";
    $headers = "Reply to: $email \r\n";

    mail($mailTo,$emailSubject,$emailBody,$headers);

    header("Location: index.html/#contact");
?>