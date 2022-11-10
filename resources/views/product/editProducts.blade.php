<html lang="fr">
    <head>
        <title>Modification d'un produit</title>
    </head>
    <body>
        <h1>Modification d'un produit'</h1>
        <form action="/product/edit" method="post">
        @csrf
        <label for="id_products"></label>
        <input type="hidden" name="id_products" value="{{$products->id_products}}" />
        <label for="name"></label>
        <input type="text" id="name" name="name" placeholder="nom guitare" value="{{$products->name}}" required/>
        <label for="description"></label>
        <input type="text" id="description" name="description" placeholder="description complete" value="{{$products->description}}"/>
        <label for="price"></label>
        <input type="text" id="price" name="price" placeholder="prix" value="{{$products->price}}" required/>
        <input type="submit" value="Modifier"/>
        </form>
    </body>
</html>