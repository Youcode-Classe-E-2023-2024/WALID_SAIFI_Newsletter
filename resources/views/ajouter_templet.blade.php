@extends('layout')
@section('content')


    <div class="container mt-5">
        <div class="container mt-5">
            <div class="card bg-dark text-white col-md-7">
                <div class="card-body ">
                    <h5 class="card-title">Ajouter Templet</h5>
                    <form>


                        <div class="mb-3">
                            <label for="inputAddress" class="form-label">Titre</label>
                            <input type="text" class="form-control" name="titre" placeholder="Titre">
                        </div>
                        @error('titre')
                        <span class="text-danger small">{{ $message }}</span>
                        @enderror
                        <div class="row mb-3">
                            <div class="col">
                                <label for="inputCity" class="form-label">Descrition</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                            @error('description')
                            <span class="text-danger small">{{ $message }}</span>
                            @enderror
                            <div>
                                <label for="formFileLg" class="form-label">Upload d'image, vidéo ou fichier</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
