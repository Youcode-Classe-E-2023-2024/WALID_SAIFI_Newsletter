@extends('layout')
@section('content')
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($templates as $tmp)
                    <div class="col mb-4">
                        <div class="card shadow-sm">
                            <div class="bd-placeholder-img card-img-top" width="100%" height="225">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                @if(isset($tmp['type']) && $tmp['type'] == 'image')
                                    <img src="{{ $tmp['media'][0]['url'] }}"/>
                                @elseif(isset($tmp['type']) && $tmp['type'] == 'pdf')
                                    <img src="" alt="">
                                    <a href="{{ $tmp['url'] }}" class="pdf-view-link">Download PDF</a>
                                @elseif(isset($tmp['type']) && $tmp['type'] == 'video')
                                    <video class="video" height="600" controls>
                                        <source  src="{{ $tmp['url'] }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                            </div>
                            <div class="card-body">
                                <div>titre: {{ $tmp['titre'] }}</div>
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
