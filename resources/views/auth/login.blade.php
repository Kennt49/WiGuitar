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
                <ul>@auth
                    <li><a href="#">Se déconnecter</a></li>
                    <li><a href="#">Panier</a></li>
                    @endauth
                    <li><a href="#">Nous contacter</a></li>
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
        <section>
            <article class="body-login">
                <div class="bc-login">
                    <div>
                        <p>Connection</p>
                    </div>
                    <div>
                        <form action="" method="post" class="form-login">
                            @csrf
                            <input id="inp-mail" type="mail" name="mail" placeholder="Mail">
                            <input id="inp-password" type="password" name="password" placeholder="Mot de passe">
                            <input id="inp-valider" type="submit" value="Valider">
                            <a href="/user/appendUsers">
                                <p>Vous n'avez pas de compte?</p>
                            </a>
                        </form>
                    </div>
                </div>
            </article>
        </section>
    </main>

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

</html>