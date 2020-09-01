<?php
    //  Creating variables for all of the form contents
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    //  Who the email is coming from & the input contents 
    $email_from = 'Marissa.Casazza@gmail.com';
    $email_subject = 'New Client Submission';
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
    
    //  Where you want to receive the inquiries  
    $to = 'marissa.casazza@gmail.com'
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.htm;");
?>