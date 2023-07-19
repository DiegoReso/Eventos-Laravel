@extends('layouts.main')

@section('title', 'Contatos')


@section('content')


  @if ($busca != '')
  <h1>{{$busca}}</h1>

  @endif


  <a href="/">Voltar para home</a>
@endsection
