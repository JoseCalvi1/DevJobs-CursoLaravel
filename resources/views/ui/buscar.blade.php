<h2 class="my-10 text-2xl text-gray-700">Busca una nueva vacante</h2>

<form action="{{ route('vacantes.buscar') }}" method="POST">
    @csrf


    <div class="mb-5">
        <label for="categoria" class="block text-gray-700 text-sm mb-2">Categoría: </label>

        <select id="categoria" name="categoria" class="block apperiance-none w-full border border-gray-700 rounded leading-tight focus:outline-nonefocus:bg-white focus:border-gray-500 p-3 white">
            <option disabled selected>- Selecciona -</option>
            @foreach ($categorias as $categoria)
                <option {{ old('categoria') == $categoria->id ? 'selected' : '' }} value="{{ $categoria->id }}">
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select>

        @error('categoria')
            <div class="bg-red-400 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block">{{ $message }}</span>
            </div>
        @enderror
    </div>

    <div class="mb-5">
        <label for="ubicacion" class="block text-gray-700 text-sm mb-2">Ubicación: </label>

        <select id="ubicacion" name="ubicacion" class="block apperiance-none w-full border border-gray-700 rounded leading-tight focus:outline-nonefocus:bg-white focus:border-gray-500 p-3 white">
            <option disabled selected>- Selecciona -</option>
            @foreach ($ubicaciones as $ubicacion)
                <option {{ old('ubicacion') == $ubicacion->id ? 'selected' : '' }} value="{{ $ubicacion->id }}">
                    {{ $ubicacion->nombre }}
                </option>
            @endforeach
        </select>

        @error('ubicacion')
            <div class="bg-red-400 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block">{{ $message }}</span>
            </div>
        @enderror
    </div>

    <button
        type="submit"
        class="bg-green-500 w-full hover:bg-green-600 text-gray-100 font-bold p-3 focus:outline-none focus:shadow-outline uppercase mt-10">
        Buscar vacantes
    </button>

</form>
