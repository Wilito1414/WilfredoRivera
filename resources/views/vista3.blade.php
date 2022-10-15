@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Fortnite') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Fortnite es un videojuego del año 2017 desarrollado por la empresa Epic Games, lanzado como diferentes paquetes de software que presentan diferentes modos de juego, pero que comparten el mismo motor de juego y mecánicas. Fue anunciado en los Spike Video Game Awards en 2011.
                           Los modos de juego publicados en 2017 incluyen Fortnite Battle Royale, un juego gratuito donde hasta cien jugadores luchan en una isla, en espacios cada vez más pequeños debido a la tormenta, para ser la última persona o equipo en pie, y Fortnite: Salvar el mundo,
                           un juego cooperativo de hasta cuatro jugadores que consiste en luchar contra criaturas parecidas a zombis, utilizando objetos, mejoras y fortificaciones.
                           Ambos modos de juego se lanzaron en 2017 como títulos de acceso anticipado. Salvar el Mundo está disponible solo para Windows, macOS, PlayStation 4 y Xbox One, mientras que Battle Royale ha sido publicado también para Nintendo Switch, dispositivos iOS y Android, así como en PlayStation 5 y Xbox Series X|S. 
                           En agosto de 2020, el juego fue retirado de la tiendas App Store y Play Store por infringir sus normas, aunque sigue disponible en la tienda Epic Games Store así como en la Galaxy Store') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection