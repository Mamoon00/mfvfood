<?php
include("config2.php");
extract($_POST);
$sql = "INSERT INTO `contactdata`(`firstname`, `lastname`, `phone`, `email`, `message`) VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";
$result = $mysqli->query($sql);
$to_email = $_POST['email']; 
$message = $_POST['firstname'];
$subject = "Montgomery Food Valley";
$body = "Hi,  $message thank you for contacting us we will solve your query soon";
$headers = "From: mamoonbhatti00@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
echo '<script type="text/javascript">
            alert("Messagesend Successfull.");
            window.location = "index.html";
        </script>';
$mysqli->close();
?>	