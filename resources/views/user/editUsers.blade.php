<html lang="fr">
    <head>
        <title>Modification d'unutilisateur</title>
    </head>
    <body>
        <h1>Modification d'un utilisateur</h1>
        <form action="/user/edit" method="post">
        @csrf
        <label for="id_users"></label>
        <input type="hidden" name="id_users" value="{{$users->id_users}}"/>
        <label for="firstname"></label>
        <input type="text" id="firstname" name="firstname" placeholder="prénom" value="{{$users->firstname}}" required/>
        <label for="lastname"></label>
        <input type="text" id="lastname" name="lastname" placeholder="nom" value="{{$users->lastname}}"/>
        <label for="mail"></label>
        <input type="text" id="mail" name="mail" placeholder="mail" value="{{$users->mail}}" required/>
        <label for="password"></label>
        <input type="text" id="password" name="password" placeholder="mot de passe" value="{{$users->password}}" required/>
        <label for="phone_number"></label>
        <input type="text" id="phone_number" name="phone_number" placeholder="numéro de téléphone" value="{{$users->phone_number}}"/>
        <input type="submit" value="Modifier"/>
        </form>
    </body>
</html>