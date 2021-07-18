<?php
$to_email = $_POST['email']; 
$subject = "Montgomery Food Valley";
$body = "Hi Thank You for subscribing to know all latest detail about montgomery food valley";
$headers = "From: mamoonbhatti00@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
   echo '<script type="text/javascript">
            alert("Email send Successfull !.");
			window.location = "index.html";
        </script>';
} else {
     echo '<script type="text/javascript">
            alert("Email send failed");
			window.location = "index.html";
        </script>';
}
?>