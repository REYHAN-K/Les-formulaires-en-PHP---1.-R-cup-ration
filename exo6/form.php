<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form  action="thanks.php"  method="post">

        <div>
            <label  for="nom">Nom :</label>
            <input  type="name"  id="nom"  name="user_name">
        </div>

        <div>
            <label  for="prenom">Prénom :</label>
            <input  type="firstName"  id="prenom"  name="user_first_name">
        </div>

        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>

        <div>
            <label  for="telephone">Numéro de téléphone :</label>
            <input  type="text"  id="telephone"  name="user_number">
        </div>

        <div>
            <label  for="theme" >Choisir un sujet :</label>
            <select id="theme" name="user_theme">
                <option value="theme1">Theme 1</option>
                <option value="theme2">Theme 2</option>
                <option value="theme3">Theme 3</option>

        </div>

        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>

        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>

    </form>



    
</body>
</html>