<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/image/Wiki.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" rel="stylesheet">


    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" integrity="sha384-QV8+oaDlJKJwQ/Scnkxm5oWfsR5Zgqn1ZlW4FL4jK71ftjF8VcOGUE3NIn1QFZDv" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Gestionnaire de Newsletter</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit"  class="btn btn-danger ml-auto">Déconnexion</button>
            </form>
        </div>

    </div>
</header>

<div class="container-fluid">
    <div class="row  w-35 p-5">


        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse pl-3 h-300">

            <!-- Contenu de la barre latérale -->
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">

                  @role('Admin')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gestion des Rôles
                        </a>
                               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('role.list')}}">list des Role</a>
                            <a class="dropdown-item" href="{{route('permission.list')}}">list des Peremition</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    @endrole
                    <!-- Element de navigation : Liste des Utilisateurs -->
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span> <!-- Icône -->
                            List des Utilisateur <!-- Texte du lien -->
                        </a>
                    </li>

                    <!-- Element de navigation : Créer une newsletter -->
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="{{route('ajouter')}}">
                            <span data-feather="bar-chart-2"></span> <!-- Icône -->
                            Créer newsletter <!-- Texte du lien -->
                        </a>
                    </li>

                    <!-- Element de navigation : Liste des newsletters -->
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span> <!-- Icône -->
                            Liste des newsletters <!-- Texte du lien -->
                        </a>
                    </li>

                    <!-- Element de navigation : Liste des Emails -->
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="{{route('list.email')}}">
                            <span data-feather="bar-chart-2"></span> <!-- Icône -->
                            Liste des Email <!-- Texte du lien -->
                        </a>
                    </li>

                    <!-- Element de navigation : Gestion des Rôles -->
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span> <!-- Icône -->
                            Gestion des Rôles <!-- Texte du lien -->
                        </a>
                    </li>


                </ul>
            </div>
        </nav>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                @role('Admin')
                <h1 class="h2">Admin</h1>
                @endrole
                @role('consultant')
                <h1 class="h2">Consultant</h1>
                @endrole


                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                    </div>
                </div>
            </div>





            <div class="container mt-4">





            </div>

            @yield('content')




        </main>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
