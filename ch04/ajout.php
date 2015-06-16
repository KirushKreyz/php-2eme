<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Un titre</title>
</head>

<body>

<?php

	if ($_POST['envoyer']) {
		
		$email = $_POST['email'];
		
        $email_nettoye = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if (filter_var($email_nettoye, FILTER_VALIDATE_EMAIL)) {
                
            echo "adresse valide<br>";
        } else {
            echo "adresse non valide<br>";
        }
        echo "<hr>";
        
        
        
		
</body> 
</html>
