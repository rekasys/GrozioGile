<?php
//*if (isset($_POST['submit'])) {
$to = "innorbutai@gmail.com";
$subject = $_POST['subject'];
$txt = $_POST['message'];
$email = $_POST['email'];
$headers = "Form:" .$email "\r\n" .
"CC: vytasrkss@gmail.com";

mail($to,$subject,$txt,$headers);
header("Location: contact.html");*//
echo "it works";

}


?>
