<html>
    <head>

    </head>
    <body>
        <h1>Supprimer</h1>
        rue: {{$addresses->street}}<br>
        complement: {{$addresses->complement}}<br>
        code postale: {{$addresses->zip_code}}<br>
        ville: {{$addresses->city}}<br>

        <p>Etes-vous sûr de vouloir supprimer cette adresse ?</p>
        <form method="post" action="/address/suppression">
            @csrf
            <input type="hidden" name="id_addresses" value="{{$addresses->id_addresses}}">   
            <input type="submit" value="Supprimer">
        </form>        
    </body>
</html>