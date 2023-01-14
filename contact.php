<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $contact = $_POST['contact'];
    $mailFrom = $_POST['email'];
    $Message = $_POST['message'];

    $subject = "RESPONSE FROM FORM";
    $mailTo = "sales@labyrinthgroup.co.za"; 


    $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
   // $txt = "You have received an email from ".$name.".\n\n".$message;
        // Always set content-type when sending HTML email
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    if(mail($mailTo,$subject,$message,$headers)){
        // Message if mail has been sent
        echo "<script>
                alert('Mail has been sent Successfully.');
            </script>";
    }

    else{
        // Message if mail has been not sent
        echo "<script>
                alert('EMAIL FAILED');
            </script>";
    }
};

?>

