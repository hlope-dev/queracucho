
<form wire:submit.prevent="crearTramite" class="md:w-1/2 space-y-5 bg-white p-6 rounded-2xl shadow-lg" novalidate>
    <div>
        <x-input-label for="titulo" :value="__('Titulo tramite')" />
        <x-inputs
            id="titulo"
            class="block mt-1 w-full shadow-sm"
            type="text" name="titulo"
            wire:model="titulo"
            required autofocus autocomplete="titulo"
            placeholer="Nombre del tramite"
        />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción del tramite')" />
        <textarea
            id="descripcion"
            class="block mt-1 w-full  border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            name="descripcion"
            wire:model="descripcion"
            rows="3" required autofocus autocomplete="descripcion"></textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>


    <div>
        <x-input-label for="fecha_limite" :value="__('Fecha límite de envio')" class="text-lg font-semibold" />
        <x-inputs
            id="fecha_limite"
            class="block mt-1 w-full "
            type="date"
            name="fecha_limite"
            wire:model="fecha_limite"
            required
        />
        <x-input-error :messages="$errors->get('fecha_limite')" class="mt-2 " />
    </div>

    <button type='submit' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow">
        Crear tramite

    </button>



</form>

