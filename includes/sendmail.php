<?php

$ime = $_POST['ime'];
$poruka = $_POST['poruka'];
$EmailFrom = $_POST['email'];
$EmailTo = "boogiemanzno1@gmail.com";

$subject = "Poruka se web stranice od korisnika: " . $ime;

$Body = "Ime: ";
$Body .= $ime;
$Body .= "\n";
$Body .= "Email adresa: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Poruka:";
$Body .= $poruka;


// send email 
$success = mail($EmailTo, $subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  	header("Location: alert/done.php"); /* Redirect browser */
	exit();
}
else{
  header("Location: alert/tryagain.php"); /* Redirect browser */
	exit();
}

?>