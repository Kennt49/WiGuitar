<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Ajout d'une caractéristique</title>
    </head>
    <body>
        <h1>Ajouter une caractéristique</h1>
        <form action="/feature/addFeature" method="post">
        @csrf
        <label for="id_features"></label>
        <input type="hidden" name="id_features"/>
        <label for="maker"></label>
        <input type="text" id="maker" name="maker" placeholder="constructeur" required/>
        <label for="body_material"></label>
        <input type="text" id="body_material" name="body_material" placeholder="matériel du corp" required/>
        <label for="handle_material"></label>
        <input type="text" id="handle_material" name="handle_material" placeholder="matériel du manche" required/>
        <label for="number_frets"></label>
        <input type="text" id="number_frets" name="number_frets" placeholder="nombre de frettes" required/>
        <label for="number_strings"></label>
        <input type="text" id="number_strings" name="number_strings" placeholder="nombre de cordes" required/>
        <label for="settings"></label>
        <input type="text" id="settings" name="settings" placeholder="réglages" required/>
        <label for="switch_micro"></label>
        <input type="text" id="switch_micro" name="switch_micro" placeholder="nombre de position micro" required/>
        <input type="submit" value="Valider"/>
        </form>
    </body>
</html>