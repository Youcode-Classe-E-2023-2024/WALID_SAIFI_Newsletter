@extends('layout')
@section('content')

    @role('Admin')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
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

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ajouter Role</button>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-black dark:bg-gray-600 " style="width: 700px;">
        <table class="w-full text-sm text-left rtl:text-right text-white dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-blue-500">Nom de Rôle</th>
                <th scope="col" class="px-6 py-3 text-blue-500">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">{{ $role->name }}</td>
                    <td class="px-6 py-4 flex flex-col">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mb-2">Modifier</a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</a>
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



                    <form method="post" action="{{route('role_ajouter')}}">
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label" >Name de Role:</label>
                            <input type="text" class="form-control" id="recipient-name" name="name">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
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
