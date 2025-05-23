<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="text-3xl font-bold text-center mb-10">Publicar Tramite</h1>
                <div class="md-flex md-justify-center p-5 flex justify-center">

                    <livewire:crear-tramite />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
