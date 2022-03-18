@extends('layouts.main')
@section('title', 'Pagina principal')
@section('content')    

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar....  ">
        </form>
    </div> 
    
    
    <div id="events-container" class="col-md-12">
        <h2>Proximos Eventos</h2>
        <P>Veja os eventos dos proximos dias</P>
        <div id="card-container" class="row">
            @foreach ($res_evento as $row_evento)
            <div class="card col-md-3">
                
                <img src="{{asset('img/flor.jpg')}}" alt="{{ $row_evento->nome_pokemon}}">
                <div class="card-body">
                    <p class="card-date">10/09/2022</p>
                    <h5 class="card-title">{{ $row_evento->nome_pokemon }}</h5>
                    <p class="card-participants">x Participantes</p>
                    <a href="#" class="btn btn-primary">Saber Mais</a>
                </div>

            </div>
            @endforeach
        </div>
    </div>      

@endsection



        
@foreach ($res_evento as $row_evento)
<p>{{ $row_evento ->nome_pokemon }} -- {{ $row_evento ->tipo }}</p>
    
@endforeach
