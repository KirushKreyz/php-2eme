<?php
/* ---------------------------------------------------------------------
 *                        Exercice 5                         
 * Nom du fichier: Kirush.php 
 * Auteur: PKR 
 * Date: Avril 2015
 * Description: Ce script affiche un formulaire d'inscription                              
 * ---------------------------------------------------------------------
 */
// Variables
// 
// on récupère les informations du l'utilisateur
$login            = htmlspecialchars($_POST['login']);
$passwd           = htmlspecialchars($_POST['passwd']);
$presentation     = htmlspecialchars($_POST['presentation']);
$majeur           = (int) $_POST['majeur'];
$type             = $_POST['type'];
$lettre_nouvelle  = (int) $_POST['lettre_nouvelle'];
$membre_soutien   = (int) $_POST['membre_soutien'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exercice 5</title>
</head>
<body>

<h3>Voici les valeurs transmises par l'utilisateur</h3>

<?php

echo "Login: $login <br>
Mot de passe: $passwd <br>
Majeur: $majeur <br>
Type: $type <br>
Lettre de nouvelle: $lettre_nouvelle <br>
Membre soutien: $membre_soutien<br>
Présentation:<br> $presentation";

?>

</body>
</html>
