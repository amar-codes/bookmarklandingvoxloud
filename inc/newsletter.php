<?php
  
if($_POST) {
    $email = $_POST['email'];
    $email_body = "
Hello,<br><br>

new newsletter user is signed up.<br><br>

<b>Email</b>: ". $email . "<br><br>

Kind regards,<br>
Admin Web
";
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: no-reply@mfasolutions.net' . "\r\n";

    $recipient = 'web@amargarcevic.com';
    $email_title = 'Newsletter';
      
    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>You are successfully signed in to our newsletter!</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
        echo $email;
    }
      
} else {
    echo '<p>Something went wrong</p>';
}
?>