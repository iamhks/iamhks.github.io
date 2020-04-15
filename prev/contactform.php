<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

$mailTo = "hemant@iamhks.com";
$txt = "iamhks.com Contact Page Mails";
$headers = "From: ".$mailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $txt, $txt, $headers);
header("Location: index.html?mailsend");
}
