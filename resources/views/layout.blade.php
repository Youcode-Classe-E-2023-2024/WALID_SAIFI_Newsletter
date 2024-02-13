<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/image/Wiki.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse pl-3">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                <!--    <li class="nav-item mb-2">
                        <a class="nav-link" href="#">
                            <span data-feather="users"></span>
                            Liste des Wiki
                        </a>
                    </li> --->
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            List des Utilisateur
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="#">
                            <span data-feather="bar-chart-2"></span>
                            List des Email
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                    </div>
                </div>
            </div>





            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="card text-dark bg-warning">
                            <div class="card-body">
                                <i class="fas fa-tags fa-2x"></i>
                                <h5 class="card-title">Nombre des Newsletter </h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card text-dark bg-warning">
                            <div class="card-body">
                                <i class="fas fa-folder fa-2x"></i>
                                <h5 class="card-title">Nombre de Client</h5>
                                <p class="card-text"></p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card text-dark bg-warning">
                            <div class="card-body">
                                <i class="fas fa-book fa-2x"></i>
                                <h5 class="card-title">Nombre de rédacteurs</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="card text-dark bg-warning">
                            <div class="card-body">
                                <i class="fas fa-users fa-2x"></i>
                                <h5 class="card-title">Nombre d'Utilisateurs</h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')




        </main>

        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
</html>
