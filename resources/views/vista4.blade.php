@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Call Of Duty') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Call of Duty (en español: «La llamada del deber») es una serie de videojuegos de disparos en primera persona, de estilo bélico, desarrollada principal e inicialmente por Infinity Ward, Treyarch, Sledgehammer Games y en menor proporción Raven Software y distribuida por Activision. La franquicia comenzó para computadora personal 
                           y posteriormente fue expandiéndose hacia videoconsolas de sexta y séptima generación, tanto de sobremesa como portátiles, llegando así a lanzar varios juegos derivados de forma paulatina con la serie principal. La serie inicialmente se ambientaba en la Segunda Guerra Mundial, retratando personajes y combates acaecidos durante dicho conflicto bélico.
                           Esto fue cambiando hasta la actualidad, donde los argumentos suceden en ambientes contemporáneos y ficticios, como se puede ver en Call of Duty: Black Ops y Call of Duty: Black Ops Cold War, en la Guerra Fría, o Call of Duty: Modern Warfare, Call of Duty: Modern Warfare 2 y Call of Duty: Modern Warfare 3, ambientados en la Tercera Guerra Mundial; o en futuros tecnológicos 
                           como en Call of Duty: Black Ops 2, Call of Duty: Advanced Warfare, Call of Duty: Black Ops 3, Call of Duty: Infinite Warfare y Call of Duty: Black Ops 4. Desde Call of Duty 4: Modern Warfare hasta Call of Duty: Advanced Warfare los DLCs de las distintas entregas se lanzaban con unos meses de adelanto en las plataformas Xbox 360 y Xbox One. Desde Black Ops 3 hasta Black Ops 4 
                           comenzaron a lanzarse primero en PlayStation 4. Finalmente a partir del reinicio de 2019 de Modern Warfare, los DLCs comenzaron a lanzarse de forma gratuita al mismo tiempo en todas las plataformas con las consolas PlayStation 4 y PlayStation 5 recibiendo otros beneficios exclusivos como modos o eventos de experiencia.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection