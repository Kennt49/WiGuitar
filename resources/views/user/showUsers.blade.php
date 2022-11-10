<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Voir les touts les utilisateurs</h1>
        <table>
            @foreach ($users as $user)
            <tr>
                <td>id_utilisateur = {{$user->id_users}}</td>
                <td>Prénom = {{$user->firtsname}}</td>
                <td>Nom = {{$user->lastname}}</td>
                <td>Mail = {{$user->mail}}</td>
                <td>Mot de passe = {{$user->password}}</td>
                <td>Tel = {{$user->phone_number}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>