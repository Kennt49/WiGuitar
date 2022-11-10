<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Ajout d'une adresse</title>
    </head>
    <body>
        <h1>Ajouter une adresse</h1>
        <form action="/address/addAddresse" method="post">
        @csrf
        <label for="id_addresses"></label>
        <input type="hidden" name="id_addresses"/>
        <label for="street"></label>
        <input type="text" id="street" name="street" placeholder="numéro et nom rue" required/>
        <label for="complement"></label>
        <input type="text" id="complement" name="complement" placeholder="complement"/>
        <label for="zip_code"></label>
        <input type="text" id="zip_code" name="zip_code" placeholder="code postale" required/>
        <label for="city"></label>
        <input type="text" id="city" name="city" placeholder="ville" required/>
        <label for="id_users"></label>
        <input type="text" name="id_users" placeholder="id_users" required/>
        <input type="submit" value="Valider"/>
        </form>
    </body>
</html>