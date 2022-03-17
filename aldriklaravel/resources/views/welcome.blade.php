@extends('layouts.main')
@section('title', 'Pagina principal')
@section('content')    

        <h1>Titulo</h1>

        @foreach ($res_evento as $row_evento)
        <p>{{ $row_evento ->nome_pokemon }} -- {{ $row_evento ->tipo }}</p>
            
        @endforeach
        
   

        {{-- 
            //@if($res_nome == "Aldrik")
                <p>Seja bem vindo Aldrik</p>
            @else 
                <p>Erro usuario não encontrado</p>
            @endif

            @for ($i = 0; $i < count($res_arrey); $i++)
                    <p>{{ $res_arrey[$i] }} </p>
            @endfor
        --}}
@endsection      

        
