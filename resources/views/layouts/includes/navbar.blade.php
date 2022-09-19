<nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="nav-link " href="/">home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="ulll navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Joueur
                        </a>
                        <ul class="dropdown-menu">
                            <li class="submenu-item ">
                                <a class=amenu href="{{ route('joueur.index') }}">Tous les joueurs</a>
                            </li>
                            <li class="divider text-black"></li>
                            <li class="submenu-item ">
                                <a class=amenu href="{{ route('joueur.create') }}">Créer un joueur</a>
                            </li>
                        </ul>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Equipe
                        </a>
                        <ul class="dropdown-menu">
                            <li class="submenu-item ">
                                <a class=amenu href="{{ route('equipe.index') }}">Toute les équipes</a>
                            </li>
                            <li class="divider text-black"></li>
                            <li class="submenu-item ">
                                <a class=amenu href="{{ route('equipe.create') }}">Créer une équipe</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   
  