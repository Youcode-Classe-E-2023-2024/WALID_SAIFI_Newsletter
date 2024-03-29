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



    <div class="flex justify-start mb-4">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ajouter permission</button>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-black dark:bg-gray-600" style="width: 700px;">
        <table class="w-full text-sm text-left rtl:text-right text-white dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-blue-500">Nom de la permission</th>
                <th scope="col" class="px-6 py-3 text-blue-500">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($permissions as $permission)
                <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">{{ $permission->name }}</td>
                    <td class="px-6 py-4 flex flex-col">
                        <div class="flex">
                            <form method="get" action="{{ route('edit_permission', ['permission' => $permission->id]) }}" class="mr-2">
                                @csrf
                                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mb-2">
                                    Modifier
                                </button>
                            </form>

                            <form method="post" action="{{ route('permission.destroy', ['permission' => $permission]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Supprime</button>
                            </form>
                        </div>



                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('permission_ajouter')}}" method="post">

                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name de Permission:</label>
                            <input type="text" class="form-control" id="recipient-name" name="name">
                        </div>
                        <div class="modal-footer">
                            <button type="submit"  name="ajouter" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>







    @else

        <div class="alert alert-danger" role="alert">
            Vous n'avez pas l'autorisation d'accéder à cette page.
        </div>

        @endrole

        @endsection
