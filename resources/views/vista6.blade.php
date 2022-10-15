@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Supercell') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Supercell es una empresa finlandesa de desarrollo de videojuegos para móviles la cual cuenta con sedes en Helsinki, 
                           Tokio, San Francisco, Seúl y Shanghái. La compañía fue fundada en mayo de 2010 en Helsinki, Finlandia. Ilkka Paananen es CEO de la compañía 
                           y actualmente cuenta con un aproximado de 320 empleados. El juego de debut de la compañía fue Gunshine.net el cual actualmente está cerrado desde 2012, 
                           al tratar de ingresar a la página aparecerá un mensaje del cierre y agradecimientos. En 2011, comenzó a desarrollar juegos para dispositivos móviles.
                          En 2016 registró ingresos estimados en 2,5 millones de dólares al día.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection