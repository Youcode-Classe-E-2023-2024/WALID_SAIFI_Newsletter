@extends('layout')
@section('content')



    <!-- component -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold mb-8">Création d'un template newsletter</h1>

                    <form method="POST" action="{{ route('ajouter.templet') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Titre <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="titre" id="titre" value="" required>
                        </div>

                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Description</label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="description" id="description" placeholder="(Optionnel)">
                        </div>

                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Contenu <span class="text-red-500">*</span></label></br>
                            <textarea name="content" class="border-2 border-gray-500"></textarea>
                        </div>



                        <div>liste des médias</div>

                        <select name="media_id" class="border-2 border-gray-300 p-2 w-full">
                            @foreach ($medias as $media)
                                <option value="{{ $media->id }}">{{ $media->name }}</option>
                            @endforeach
                        </select>








                        <div class="flex p-1">
                            <button type="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400">Soumettre</button>
                        </div>



                    </form>

                    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>

@endsection
