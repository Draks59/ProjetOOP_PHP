<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Starter Template for Bootstrap</title>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">    
            <a class="nav-bar-brand"href="{{path('app_main')}}"><img class="navbar-brand col-2" src="{{ asset('assets/img/icon/logo.png') }}" alt="Zerveza"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{path('products_index')}}">Le Menu</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{path('app_locate')}}">Nous Trouver</a>
                    </li> 
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{path('app_contact')}}">Nous Contacter</a>
                    </li>          
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ path('app_cart') }}">Mon Panier</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ path('app_profile_index') }}">Mon compte</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ path('app_logout') }}">Me déconnecter</a>
                    </li> 
                    <li class="nav-item">
                    <a class="nav-link " href="{{ path('app_register') }}">M'inscrire</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="{{ path('app_login') }}">Me Connecter</a>
                    </li>
                </ul>
            </div>    
        </div>
    </nav>
        <div class="starter-template">
          <?= $content; ?>  
        </div>
  </body>
</html>