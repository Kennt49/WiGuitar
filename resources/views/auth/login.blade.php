<!DOCTYPE html>
<html lang="fr">
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
          <link rel="icon" href="<%= BASE_URL %>favicon.ico">
          <title>WiGuitar</title>
          <link rel="stylesheet" href="/css/styles.css"  type="text/css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"  integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> 
        </head>

    
    <body>
      <header>
        <nav id="up" class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <span><img class="logo-wiguitar" src="/img_logo/logo_wigitar.png" alt="logo du site wiguitar"></span>
            <a class="navbar-brand" href="./Accueil"><p>WiGuitar</p></a>
            <a class="btn-nosguitares" href="/product/nos-guitares"><p>Nos guitares</p></a>
            <a href="#" id="openBtn">
            <span class="burger-icon">
              <img src="/img_icones/menu_burger.png" alt="menu déroulant">
            </span>
          </a>
          </div>
          <div id="mySidenav" class="sidenav">
            <a id="closeBtn" href="#" class="close">&times;</a>
            @if (Route::has('login'))
            <ul>
              @auth
                <li><a href="">Se déconnecter</a></li></li>
              @else
                <li><a href="{{ route('login') }}">Se connecter</a></li>
              @endauth
                <li><a href="">Nous contacter</a></li>
            </ul>
            @endif
          </div>
        </nav>
      </header>

      
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

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="mail" :value="__('mail')" />

                <x-text-input id="mail" class="block mt-1 w-full" type="mail" name="mail" :value="old('mail')" required autofocus />

                <x-input-error :messages="$errors->get('mail')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
            <div>
            @guest
                
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                
            @endguest
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
