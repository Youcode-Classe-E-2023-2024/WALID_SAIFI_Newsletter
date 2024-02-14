@extends('layout')
@section('content')

    <div class="album py-5 bg-body-tertiary">
        <div class="container">


            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col mb-4">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"/>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">frrrrrffr</text>
                        </svg>
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-secondary">Sende</a>
                                    <form method="post" action="">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Supprimer</button>
                                    </form>
                                </div>
                                <small class="text-body-secondary"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-4">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"/>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">dddd</text>
                        </svg>
                        <div class="card-body">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-secondary">Sende</a>
                                    <form method="post" action="">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Supprimer</button>
                                    </form>
                                </div>
                                <small class="text-body-secondary"></small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
