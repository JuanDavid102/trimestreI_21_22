<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar municipio') }}
        </h2>
    </x-slot>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="/municipios">
            @csrf
            {{ method_field('PUT') }}
            <input id="municipio_id" type="hidden" name="municipio_id" value="{{$municipio->id}}">
            <!-- Nombre -->
            <div>
                <x-label for="nombre" :value="__('Nombre')" />

                <x-input id="nombre" class="block mt-1 w-full text-gray-700" type="text" name="nombre" value="{{$municipio->nombre}}" required autofocus />
            </div>

            <!-- Población -->
            <div class="mt-4">
                <x-label for="poblacion" :value="__('Población')" />

                <x-input id="poblacion" class="block mt-1 w-full text-gray-700" type="number" name="poblacion" value="{{$municipio->poblacion}}" required />
            </div>

                <x-button class="ml-4">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
