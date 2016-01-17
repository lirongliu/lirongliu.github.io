<?php
    if (isset($_POST["submit"])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $message = 'msg...';
        
        $body = "From: $fname $lname\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['fname']) {
            $errFName = 'Please enter your first name';
        }
        if (!$_POST['lname']) {
            $errLName = 'Please enter your last name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
 
    // If there are no errors, send the email
    if (!$errFName && !errLName && !$errEmail && !$errMessage) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    }
}
?>