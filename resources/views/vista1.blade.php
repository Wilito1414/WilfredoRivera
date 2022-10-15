@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Fifa') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('FIFA es una saga de videojuegos de fútbol publicados anualmente por Electronic Arts bajo el sello de EA Sports creado en Japón
                           Cuando la saga comenzó a finales de 1993 se destacó por ser el primero en tener una licencia oficial de la FIFA. Las últimas ediciones 
                           de la saga contienen muchas licencias exclusivas y los equipos de ligas de todo el mundo, como la Premier League y la Football League inglesa,
                           Serie A italiana, Bundesliga alemana, La Liga Primera División de España, Selecciones Nacionales, entre otras ligas más que han ido agregando
                            a lo largo de estos últimos años, lo que permite el uso real de los estadios, cánticos del público, nombres reales de los jugadores y sus semejanzas en cómo juegan dentro del campo, etcétera.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
