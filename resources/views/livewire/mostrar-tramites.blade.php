<div>
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

    @forelse($tramites as $tramite)


    <div class="p-6 text-gray-900 md:flex md:justify-between md:items-center">
        <div class="leading-10">
            <a href="#" class="text-xl font-bold">
                {{$tramite ->titulo}}
            </a>
            <p class="text-sm text-gray-500">{{$tramite ->fecha_limite->format('d/m/y')}}</p>

        </div>
        <div class="flex md:flex:col items-stretch gap-3  mt-5 md:mt-0">

        <a href="#" class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">Interesados</a>
            <a href="#" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">Editar</a>
            <a href="#" class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">Eliminar</a>
        </div>
    </div>
    @empty
        <p class="p-3 text-center text-sm -text-gray-600">No hay tramites por mostrar</p>
    @endforelse

</div>

    <div class="flex justify-center mt-10">
        <div class="">
            {{ $tramites->links() }}
        </div>
    </div>

</div>
