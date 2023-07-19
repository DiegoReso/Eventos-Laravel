@extends('layouts.main')

@yield('tittle', 'Contatos')


@section('content')
  <h1>Contatos</h1>

  @if ($busca != '')
  <h1>{{$busca}}</h1>

  @endif


  <a href="/">Voltar para home</a>
@endsection
