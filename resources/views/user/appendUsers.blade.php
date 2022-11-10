<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Ajout d'un utilisateur</title>
    </head>
    <body>
        <h1>Ajouter un utilisateur</h1>
        <form action="/user/addUser" method="post">
        @csrf
        <label for="id_users"></label>
        <input type="hidden" name="id_users"/>
        <label for="firstname"></label>
        <input type="text" id="firstname" name="firstname" placeholder="prénom" required/>
        <label for="lastname"></label>
        <input type="text" id="lastname" name="lastname" placeholder="nom"/>
        <label for="mail"></label>
        <input type="text" id="mail" name="mail" placeholder="mail" required/>
        <label for="password"></label>
        <input type="text" id="password" name="password" placeholder="mot de passe" required/>
        <label for="phone_number"></label>
        <input type="text" id="phone_number" name="phone_number" placeholder="numéro de téléphone"/>
        <input type="submit" value="Valider"/>
        </form>
    </body>
</html>