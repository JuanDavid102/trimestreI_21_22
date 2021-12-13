<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Localidades de La Palma') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow-sm sm:rounded-lg" style="max-height: 600px; overflow: overlay;">
                <div class="p-6 bg-white-transparent border-b border-gray-200">
                <div class="row">
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Poblaci&oacute;n</th>
                                <th>Municipio</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($localidades as $localidad)

                            <tr>
                                <td>
                                <a href="{{ url('/terremotos/' . $localidad->municipio_id ) }}">
                                    {{$localidad->nombre}}</a>
                                </td>
                                <td>
                                    {{$localidad->estado}}</a>
                                </td>
                                <td>
                                    {{$localidad->poblacion}}
                                </td>
                                <td>
                                    {{$localidad->municipio_id}}</a>
                                </td>

                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
