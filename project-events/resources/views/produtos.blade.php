@extends('layouts.main')

@yield('tittle', 'Produtos')


@section('content')

  <h1>Produtos</h1>

  <p>Imprimindo produto {{$id}}</p>
  <a href="/">Voltar para home</a>

@endsection
