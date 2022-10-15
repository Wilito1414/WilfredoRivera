@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Grand Theft Auto V') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Grand Theft Auto V (abreviado como GTA V o GTA 5) es un videojuego de acción-aventura de mundo abierto desarrollado por el estudio Rockstar North y distribuido por Rockstar Games. Fue lanzado el 17 de septiembre de 2013 para las consolas PlayStation 3 y Xbox 360. 
                         Posteriormente, distribuido el 18 de noviembre de 2014 para las consolas de nueva generación PlayStation 4 y Xbox One y la vista en primera persona, luego para Microsoft Windows el 14 de abril de 2015 y finalmente se confirmó su lanzamiento para PlayStation 5 y Xbox Series X/S para marzo de 2022.
                          Entre las novedades se encuentra la mejora de gráficos (8k) incluido el soporte de 120 FPS. Se trató del primer gran título en la serie Grand Theft Auto desde el lanzamiento de Grand Theft Auto IV en 2008, el cual estrenó la «era HD» de la mencionada serie de videojuegos.
                          La primera información fue revelada por Rockstar Games el 25 de octubre de 2011 en la red social Twitter. El juego está ambientado en la ciudad ficticia de Los Santos, así como en las zonas que la rodean, basada en la ciudad de Los Ángeles y el sur de California. La ciudad también era la ambientación del anterior juego GTA:San Andreas.
                          Por primera vez el juego se centraría en tres personajes distintos en vez de uno solo: Michael, Trevor y Franklin, además del personaje que el jugador utiliza en el modo en línea. El tráiler de estreno de Grand Theft Auto V se dio a conocer el 2 de noviembre de 2011.
                          Es uno de los juegos más caros de la historia, con un gasto de 265 millones de dólares, superando a su antecesor GTA IV —100 millones. Grand Theft Auto V recaudó 800 millones de dólares en las primeras 24 horas de su estreno, lo que lo convirtió en el videojuego que más dinero había recaudado en menos tiempo de toda la historia; 
                          y había recaudado en 3 días un monto récord de 1000 millones de dólares en ventas.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection