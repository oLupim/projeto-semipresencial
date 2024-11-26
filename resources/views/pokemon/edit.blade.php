@extends('layouts.base')
@section('content')


    <div class="flex flex-col items-center pb-10 p-5">
        <form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
        <input type="text" name="name" placeholder="Nome" value="{{ $pokemon->name }}" required
        class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Classe</label>
        <input type="text" name="type" placeholder="Tipo" value="{{ $pokemon->type }}" required
        class="mb-5  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poder</label>
        <input type="numer" name="power" placeholder="Poder" value="{{ $pokemon->power }}" required
        class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    
        <div class="mb-5">
            <img src="{{ asset($pokemon->image) }}" alt="">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecionar Imagem</label>
            <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-5">
            <label for="coach_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Coach</label>
            <select name="coach_id" id="coach_id" required>
                <option value="">Select a coach</option>
                @foreach ($coaches as $coach)
                    @if($coach->id === $pokemon->coach->id)
                        <option value="{{ $coach->id }}" selected>{{ $coach->name }}</option>
                    @else
                        <option value="{{ $coach->id }}">{{ $coach->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
        Editar Pokemon</button>
        </form>
    </div>
@endsection