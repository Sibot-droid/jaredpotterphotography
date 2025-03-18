<?php $name = $_POST['Name'];
$email = $_POST['Email-Adress'];
$Enquiry = $_POST['Enquiry'];
$phone = $_POST['Phone-Number'];
$formcontent="From: $name \n Number: $phone \n Message: $Enquiry";
$recipient = "jared@pottsysds.com.au";
$subject = "Pottsy's Driving School Enquiry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! Go Back to return to site";
?>