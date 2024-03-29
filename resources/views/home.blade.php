<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Home  Newsletter  </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <!-- Bootstrap core CSS -->
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
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="{{route('pageregister')}}">Créez un compte rédacteur.</a>
            </div>
            <div class="col-4 text-center">

            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="{{route('login')}}">login</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">

    </div>
</div>

<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Newsletter</h1>
            <p class="lead my-3">Une newsletter est un bulletin d'information périodique distribué par voie électronique, généralement par e-mail, à une liste de destinataires abonnés. Son objectif principal est de fournir des mises à jour, des actualités, des conseils, des promotions ou tout autre contenu pertinent à un public spécifique.</p>

        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6 ">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Abonnez-vous à notre newsletter</h3>
                    <p class="card-text mb-auto">Restez informé de nos dernières nouvelles et mises à jour en vous abonnant à notre newsletter.</p>
                    <form action="{{ route('subscribe') }}" method="POST" class="mb-3">
                        @csrf
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" aria-label="Enter your email" required>

                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                    @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                    @enderror

                    <small class="text-muted">We respect your privacy and won't share your email with anyone.</small>
                </div>
                <div class="col-auto d-none d-lg-block"></div>
            </div>
        </div>


    </div>

    <div class="row g-5">

        </article>


    </div>

</main>





</body>
</html>
