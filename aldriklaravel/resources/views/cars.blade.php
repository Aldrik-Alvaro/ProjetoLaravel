@extends('layouts.main')
@section('title', 'carros')
@section('content')

@if($res_id != null)
    <p>Exibindo produto id: {{ $res_id }}</p>
@endif

@if($res_busca != '')
    <p>O usuario está buscando por: {{ $res_busca }}</p>
@endif




@endsection 