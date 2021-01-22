<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Bienvenue chez DPS VTC. Une société de déplacement qui s'occupe de vous mieux que personne tout prêt de chez vous. Avec un rapport qualité/prix imbattable." />
	<meta name="keywords" content="dps, vtc, dps vtc, dps-vtc, mohamed-vtc, vtc 91, vtc quincy, vtc pas cher, amir talbi, mohamed dps, dps pas cher, dpsvtc, dpsvtc essonne, essonne vtc">
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	<script data-ad-client="ca-pub-9309556406303252" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<title>D&eacute;placement Priv&eacute; Serein Paris, votre chauffeur VTC pas cher en île de France | DPS-VTC</title>
</head>

<?php

include("header.php");

$Nom = $_POST['nom'];
$Prenom = $_POST['prenom'];
$EmailFrom = $_POST['dps.vtc@gmail.com'];
$Email = $_POST['mail'];
$Numero = $_POST['number'];
$Message = $_POST['message']; 
$To = "dps.vtc@gmail.com";
$depart = $_POST['depart'];
$postale1 = $_POST['postale-1'];
$ville1 = $_POST['ville-1'];
$postale2 = $_POST['postale-2'];
$ville2 = $_POST['ville-2'];
$arrivee = $_POST['arrivee'];
$depart = $_POST['depart'];
$accord = $_POST['accord'];
$date = $_POST['date'];
$heure = $_POST['heure'];
$Subject = "Commande de course";


$validationOK=true;
if (!$validationOK) 
{
  echo "Oups.. Il y a eu un problème, réssayez dans quelques instants";
  exit;
}
 
$Body = "";
$Body .= "Prenom: ";
$Body .= $Prenom;
$Body .= "\n";

$Body .= "Nom: ";
$Body .= $Nom;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";

$Body .= "Commande de course";
$Body .= "\n";

$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

$Body .= "Numero: ";
$Body .= $Numero;
$Body .= "\n";

$Body .= "Départ: ";
$Body .= $depart;
$Body .= "\n";
$Body .= $postale1;
$Body .= "\n";
$Body .= $ville1;
$Body .= "\n";

$Body .= "Arrivée: ";
$Body .= $arrivee;
$Body .= "\n";
$Body .= $postale2;
$Body .= "\n";
$Body .= $ville2;
$Body .= "\n";

$Body .= "Le : ";
$Body .= $date;
$Body .= "\n";
$Body .= "A : ";
$Body .= $heure;
$Body .= "\n";
 
$success = mail($To, $Subject, $Body, "From: <mohamed@dps-vtc.fr>");
$success = mail($Email, "Confirmation de votre commande", "Bonjour/Bonsoir, merci pour votre commande chez DPS! Nous traiterons votre demande dans les plus brefs délais. A très bientôt chez nous.", "From: <no-reply@dps-vtc.fr>");


?>

<h2 class="answer" style="text-align: center; height: 300px; margin-top: 15%;">Merci pour votre message, nous vous repondrons dans les plus brefs d&eacute;lais !  Vous recevrez un mail automatique lorsque que nous recevrons votre message (si vous ne recevez aucun mail de notre part pensez à v&eacute;rifier le dossier spam</h2>

<?php  include("footer.php"); ?>
</html>