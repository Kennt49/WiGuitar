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
        <a class="navbar-brand" href="./Accueil">
          <p>WiGuitar</p>
        </a>
        <a class="btn-nosguitares" href="/product/nos-guitares">
          <p>Nos guitares</p>
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
          <li><a href="#">Panier</a></li>
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
    <section>
      <article class="bc-carousel">
        <!--image slider start-->
        <div class="slider">
          <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <!--radio buttons end-->
            <!--slide images start-->
            <div class="slide first">
              <img src="/img_product/ibanez.png" alt="une guitare ibanez">
            </div>
            <div class="slide">
              <img src="/img_product/classique_guitare.png" alt="une guitare classique">
            </div>
            <div class="slide">
              <img src="/img_product/gibson.png" alt="une guitare gibson">
            </div>
            <!--slide images end-->
            <!--automatic navigation start-->
            <div class="navigation-auto">
              <div class="auto-btn1"></div>
              <div class="auto-btn2"></div>
              <div class="auto-btn3"></div>
            </div>
            <!--automatic navigation end-->
            <!--manual navigation start-->
            <div class="navigation-manual">
              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
              <label for="radio3" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
          </div>

        </div>
        <!--image slider end-->
      </article>
      <article class="bc-newproduct">
        <h2>New Products</h2>
        <div class="list-product1">
          <div class="newproduct-inlist">
            <a href="/product/showProducts/4"><img src="/img_product/yamaha-cgx.webp" alt="image guitare"></a>
            <a href="/product/showProducts/4">
              <p>Yamaha Cgx</p>
              <p>389.00€</p>
            </a>
          </div>
          <div class="newproduct-inlist">
            <a href="/product/showProducts/2"><img src="/img_product/ibanez_artcore.webp" alt="image guitare"></a>
            <a href="/product/showProducts/2">
              <p>Ibanez Artcore</p>
              <p>331.00€</p>
            </a>
          </div>
          <div class="newproduct-inlist">
            <a href="/product/showProducts/11"><img src="/img_product/yamaha-f-310.webp" alt="image guitare"></a>
            <a href="/product/showProducts/11">
              <p>Yamaha F 310</p>
              <p>149.00€</p>
            </a>
          </div>
          <div class="newproduct-inlist">
            <a href="/product/showProducts/10"><img src="/img_product/ibanez-s521-bbs.webp" alt="image guitare"></a>
            <a href="/product/showProducts/10">
              <p>Ibanez S521</p>
              <p>399.00€</p>
            </a>
          </div>
          <div class="newproduct-inlist">
            <a href="/product/showProducts/9"><img id="img-p9" src="/img_product/ibanez-gio-grgr131.webp" alt="image guitare"></a>
            <a href="/product/showProducts/9">
              <p>Ibanez Grgr131</p>
              <p>239.00€</p>
            </a>
          </div>
          <div class="newproduct-inlist">
            <a href="/product/showProducts/7"><img src="/img_product/fender-player-offset-duo.webp" alt="image guitare"></a>
            <a href="/product/showProducts/7">
              <p>Fender Player</p>
              <p>654.00€</p>
            </a>
          </div>
          <div class="newproduct-inlist">
            <a href="/product/showProducts/6"><img src="/img_product/esp-ltd-sn-200ht.webp" alt="image guitare"></a>
            <a href="/product/showProducts/6">
              <p>ESP Ltd 200ht</p>
              <p>444.00€</p>
            </a>
          </div>
          <div class="newproduct-inlist">
            <a href="/product/showProducts/5"><img src="/img_product/esp-ltd-mh.webp" alt="image guitare"></a>
            <a href="/product/showProducts/5">
              <p>ESP Ltd mh</p>
              <p>259.00€</p>
            </a>
          </div>
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

    /*for carousel*/
    let counter = 1;
    setInterval(function() {
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if (counter > 3) {
        conter = 1;
      }
    }, 4000);
  </script>


</body>


</html>