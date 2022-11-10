<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Ajout d'un produits</title>
    </head>
    <body>
        <h1>Ajouter un produits</h1>
        <form action="/product/addProduct" method="post">
        @csrf
        <label for="id_products"></label>
        <input type="hidden" name="id_products"/>
        <label for="name"></label>
        <input type="text" id="name" name="name" placeholder="nom et référence rapide de la guitare" required/>
        <label for="description"></label>
        <input type="text" id="description" name="description" placeholder="description complete de la guitare" required/>
        <label for="price"></label>
        <input type="text" id="price" name="price" placeholder="prix (ne pas oublier apres la virgule)" required/>
        <label for="id_stocks"></label>
        <input type="text" name="id_stocks" placeholder="id_stocks" required/>
        <label for="id_features"></label>
        <input type="text" name="id_features" placeholder="id_features" required/>
        <input type="submit" value="Valider"/>
        </form>
    </body>
</html>