<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
    echo "Merci " . $_POST['user_name'] . " " . $_POST['user_first_name'] . " de nous avoir contacté à propos de " . $_POST['user_theme'] . ".\n" . "Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_number'] . "dans les plus brefs délais pour traiter votre demande :\n" . $_POST['user_message'];
    ?> 
    </div>
    
</body>
</html>