@extends('layouts.app')

@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')

    <h1 class="text-2xl text-center mt-10">Nueva vacante</h1>

    <form action="" class="max-w-lg mx-auto my-10">
        <div class="mb-5">
            <label for="titulo" class="block text-gray-700 text-sm mb-2">Titulo vacante: </label>

            <input id="titulo" type="text" class="p-3 bg-white rounded form-input w-full @error('titulo') border-red-500 border @enderror"
            name="titulo" value="{{ old('titulo') }}" autofocus>
        </div>

        <div class="mb-5">
            <label for="categoria" class="block text-gray-700 text-sm mb-2">Categoría: </label>

            <select id="categoria" name="categoria" class="block apperiance-none w-full border border-gray-700 rounded leading-tight focus:outline-nonefocus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>- Selecciona -</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="experiencia" class="block text-gray-700 text-sm mb-2">Experiencia: </label>

            <select id="experiencia" name="experiencia" class="block apperiance-none w-full border border-gray-700 rounded leading-tight focus:outline-nonefocus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>- Selecciona -</option>
                @foreach ($experiencias as $experiencia)
                    <option value="{{ $experiencia->id }}">
                        {{ $experiencia->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="ubicacion" class="block text-gray-700 text-sm mb-2">Ubicación: </label>

            <select id="ubicacion" name="ubicacion" class="block apperiance-none w-full border border-gray-700 rounded leading-tight focus:outline-nonefocus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>- Selecciona -</option>
                @foreach ($ubicaciones as $ubicacion)
                    <option value="{{ $ubicacion->id }}">
                        {{ $ubicacion->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-5">
            <label for="salario" class="block text-gray-700 text-sm mb-2">Salario: </label>

            <select id="salario" name="salario" class="block apperiance-none w-full border border-gray-700 rounded leading-tight focus:outline-nonefocus:bg-white focus:border-gray-500 p-3 bg-gray-100">
                <option disabled selected>- Selecciona -</option>
                @foreach ($salarios as $salario)
                    <option value="{{ $salario->id }}">
                        {{ $salario->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 w-full hover:bg-blue-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase">Publicar vacante</button>
    </form>

@endsection