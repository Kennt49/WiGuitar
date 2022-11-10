<html lang="fr">
    <head>
        <title>Modification d'une caractéristique</title>
    </head>
    <body>
        <h1>Modification d'une caractéristique'</h1>
        <form action="/feature/edit" method="post">
        @csrf
        <label for="id_features"></label>
        <input type="hidden" name="id_features" value="{{$features->id_features}}" />
        <label for="maker"></label>
        <input type="text" id="maker" name="maker" placeholder="fabricant" value="{{$features->maker}}" required/>
        <label for="body_material"></label>
        <input type="text" id="body_material" name="body_material" placeholder="matériel du corp" value="{{$features->body_material}}"/>
        <label for="handle_material"></label>
        <input type="text" id="handle_material" name="handle_material" placeholder="matériel du manche" value="{{$features->handle_material}}" required/>
        <label for="number_frets"></label>
        <input type="text" id="number_frets" name="number_frets" placeholder="nombre de frettes" value="{{$features->number_frets}}" required/>
        <label for="number_strings"></label>
        <input type="text" id="number_strings" name="number_strings" placeholder="nombre de cordes" value="{{$features->number_strings}}"/>
        <label for="settings"></label>
        <input type="text" id="settings" name="settings" placeholder="réglages" value="{{$features->settings}}" required/>
        <label for="switch_micro"></label>
        <input type="text" id="switch_micro" name="switch_micro" placeholder="nombre position micro" value="{{$features->switch_micro}}" required/>
        <input type="submit" value="Modifier"/>
        </form>
    </body>
</html>