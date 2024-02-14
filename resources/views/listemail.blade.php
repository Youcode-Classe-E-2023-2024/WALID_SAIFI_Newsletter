@extends('layout')
@section('content')

    <div class="col-md-12 mb-3">
        <div class="card text-white bg-dark">
            <div class="card-body">
                <i class="fas fa-folder fa-2x"></i>
                <h5 class="card-title">Liste des emails</h5>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Date de création</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listemail as $list)
                            <tr>
                                <td>{{ $list->email }}</td>
                                <td>{{ $list->created_at }}</td>
                                <td>
                                    <form action="{{ route('email.delete', ['listemail' => $list]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
