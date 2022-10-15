@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Marvel Contest Of Champions') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Marvel Contest of Champions es un videojuego de lucha desarrollado y publicado por Kabam. Fue lanzado el 10 de diciembre de 2014 para iOS y Android.
                          El juego se desarrolla principalmente en el Universo Marvel y está fuertemente basado en los eventos de la serie de cómics Concurso de Campeones.
                          En 2019 se lanzó una versión arcade, desarrollada por Raw Thrills y exclusiva para los locales de la empresa Dave & Buster.
                          Los jugadores asumen el papel de un Summoner, encargado por el Collector para construir un equipo de héroes y villanos de Marvel y enfrentarlos entre sí en combate. 
                          El juego es similar al de Injustice: Gods Among Us y Mortal Kombat X, donde la arena de lucha del juego se representa en 3D con un plano 2D para los movimientos de los superhéroes. y acciones.
                           Los nuevos jugadores comienzan con acceso a dos personajes de 1 estrella y pueden trabajar para acceder a personajes adicionales en niveles de estrellas más altos, que van de 2 a 6. 
                           Cada uno de los 222 personajes jugables de Marvel Comics se puede actualizar y presenta sus propias clases, movimientos, rasgos, habilidades y movimientos especiales, aunque muchos comparten animaciones.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection