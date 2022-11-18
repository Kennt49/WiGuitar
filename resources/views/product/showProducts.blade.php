<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
  <link rel="icon" href="<%= BASE_URL %>favicon.ico">
  <title>WiGuitar</title>
  <link rel="stylesheet" href="/css/main.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
  <header>
    <nav id="up" class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <span><img class="logo-wiguitar" src="/img_logo/logo_wigitar.png" alt="logo du site wiguitar"></span>
        <a class="navbar-brand" href="../../Accueil">
          <p>WiGuitar</p>
        </a>
        <a href="#" id="openBtn">
          <span class="burger-icon">
            <img src="/img_icones/menu_burger.png" alt="menu déroulant">
          </span>
        </a>
      </div>
      <div id="mySidenav" class="sidenav">
        <a id="closeBtn" href="#" class="close">&times;</a>
        <ul>
          @auth
          <li><a href="/logout">Se déconnecter</a></li>
          <li><a href="/basket">Panier</a></li>
          </li>
          @else
          <li><a href="/login">Se connecter</a></li>
          @endauth
          <li><a href="">Nous contacter</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="btn-return">
      <a class="btn-return" href="../../Accueil">
        <p>
          <- Retour</p>
      </a>
    </div>
    <section class="show-product">
      <article class="info-product">
        <div class="img-showproduct">
          <img src="{{$products->image}}" alt="image guitare">
        </div>
        <div class="product-n-s">
          <div>
            <p>{{$products->name}}</p>
          </div>
          <div>
            <p>id_stock : {{$products->stock->nbr_products}}</p>
          </div>
        </div>
        <div class="bc-description">
          <div>
            <p>Description:</p>
          </div>
          <div>
            <p>{{$products->description}}</p>
          </div>
        </div>
        <div class="product-p">
          <p>Prix : {{$products->price}}€</p>
        </div>
        <!-- mettre une authentification sur le btn ajout panier-->
        @auth
        <div class="ajout-panier">
          <div class="btn-ajout-p">
            <a href="/basket/appendBasket/{{$products->id_products}}">
              <p>Ajouter au panier</p>
            </a>
          </div>
        </div>
        @endauth
        <div class="bc-caracteristique">
          <div>
            <p>Caractéristiques:</p>
          </div>
          <div>
            <ul>
              <li>Fabricant : {{$products->feature->maker}}</li>
              <li>Matériel du corps : {{$products->feature->body_material}}</li>
              <li>Matériel du manche : {{$products->feature->handle_material}}</li>
              <li>Nombre de frettes : {{$products->feature->number_frets}}</li>
              <li>Nombre de cordes : {{$products->feature->number_strings}}</li>
              <li>Réglage(s) : {{$products->feature->settings}}</li>
              <li>Switch micro : {{$products->feature->switch_micro}}</li>
            </ul>
          </div>
        </div>

      </article>
    </section>
    <div class="btn-up">
      <a href="#up">
        <img src="/img_icones/fleche-deroulante.png" alt="bouton pour retourner vers le haut de la page">
      </a>
    </div>
  </main>

  <footer>
    <section class="foot">
      <article class="link-social">
        <div class="social-network">
          <a href="#"><img src="/img_icones/twitter.png" alt="logo twitter lien vers twitter"></a>
          <a href="#"><img src="/img_icones/facebook.png" alt="logo facebook lien vers facebook"></a>
          <a href="#"><img src="/img_icones/instagram.png" alt="logo instagram lien vers instagram"></a>
        </div>
      </article>
      <article class="mention-legale">
        <a href="#">
          <p>Mentions Légales</p>
        </a>
      </article>
    </section>
  </footer>

  <script>
    /*for sidenav*/
    let sidenav = document.getElementById("mySidenav");
    let openBtn = document.getElementById("openBtn");
    let closeBtn = document.getElementById("closeBtn");

    openBtn.onclick = openNav;
    closeBtn.onclick = closeNav;

    /* Set the width of the side navigation to 250px */
    function openNav() {
      sidenav.classList.add("active");
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
      sidenav.classList.remove("active");
    }
  </script>
</body>

</html>