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

        <h1 type="button" class="btn btn-primary" >List des Users</h1>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-black dark:bg-gray-600" style="width: 800px;">
        <table class="w-full text-sm text-left rtl:text-right text-white dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-blue-500">Nom de user</th>
                <th scope="col" class="px-6 py-3 text-blue-500">Email de user</th>
                <th scope="col" class="px-6 py-3 text-blue-500">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $users)
                <tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">{{ $users->name }}</td>
                    <td class="px-6 py-4">{{ $users->email }}</td>
                    <td class="px-6 py-4 flex flex-col">
                        <div class="flex">

                            <a href="{{ route('user.role', $users->id) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mb-2">
                                Autorisations
                            </a>

                            <form method="POST"  action="{{ route('users.destroy', $users->id) }}"
                                  onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                                    Supprime
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>




    @else

        <div class="alert alert-danger" role="alert">
            Vous n'avez pas l'autorisation d'accéder à cette page.
        </div>

        @endrole

        @endsection
