@extends('layout')

@section('content')
    @role('Admin')



    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier la Permission</div>

                    <div class="card-body">
                        <form action="{{ route('update_permission', ['permission' => $permission]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="col-form-label">Nom de la Permission:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$permission->name}}">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <div class="container">
            <div class="alert alert-danger" role="alert">
                <strong>Accès refusé!</strong> Vous n'avez pas l'autorisation d'accéder à cette page.
            </div>
        </div>
        @endrole
        @endsection
