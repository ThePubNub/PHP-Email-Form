<?php
$fromName = $_POST['fromName'];
$fromEmail = $_POST['fromEmail'];
$headers = "From: $fromName<$fromEmail>" . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1";

if(!empty($_POST['fromName']) && !empty ($_POST['fromEmail']) && !empty($_POST['to']) && !empty($_POST['subject']) && !empty($_POST['message'])) {

mail($_POST['to'], $_POST['subject'], nl2br($_POST['message']), $headers);
header("location:mail.php");
}
header("location:mail.php");
die();
?>
