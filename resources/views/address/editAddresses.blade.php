<html lang="fr">
    <head>
        <title>Modification d'une adresse</title>
    </head>
    <body>
        <h1>Modification d'une adresse</h1>
        <form action="/address/edit" method="post">
        @csrf
        <label for="id_addresses"></label>
        <input type="hidden" name="id_addresses" value="{{$addresses->id_addresses}}" />
        <label for="street"></label>
        <input type="text" id="street" name="street" placeholder="De la fontaine" value="{{$addresses->street}}" required/>
        <label for="complement"></label>
        <input type="text" id="complement" name="complement" placeholder="Numéro d'appartement,étage,autre" value="{{$addresses->complement}}"/>
        <label for="zip_code"></label>
        <input type="text" id="zip_code" name="zip_code" placeholder="53200" value="{{$addresses->zip_code}}" required/>
        <label for="city"></label>
        <input type="text" id="city" name="city" placeholder="Laval" value="{{$addresses->city}}" required/>
        <input type="submit" value="Modifier"/>
        </form>
    </body>
</html>