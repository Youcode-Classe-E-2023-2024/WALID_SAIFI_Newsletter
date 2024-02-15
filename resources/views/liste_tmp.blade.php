@extends('layout')

@section('content')
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($templates as $template)
                    <div class="col mb-4">
                        <div class="card shadow-sm">
                            <div class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                @if($template->media && $template->media->type == 'image')
                                    <img src="{{ $template->media->getUrl() }}"/>
                                @elseif($template->media && $template->media->type == 'pdf')
                                    <img src="" alt="">
                                    <a href="{{ $template->media->getUrl() }}" class="pdf-view-link">Download PDF</a>
                                @elseif($template->media && $template->media->type == 'video')
                                    <video class="video" height="600" controls>
                                        <source src="{{ $template->media->getUrl() }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                            </div>
                            <div class="card-body">
                                <div>titre: {{ $template->media->getUrl() }}</div>
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
                @endforeach
            </div>
        </div>
    </div>
@endsection
