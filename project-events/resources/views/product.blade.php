@extends('layouts.main')

@yield('tittle', 'Produtos')


@section('content')

  <h1>Produtos</h1>

  <p>Imprimindo produto </p>
  @if ($id != null)
  <p>O ID eh {{$id}}</p>

  @endif
  <a href="/">Voltar para home</a>

@endsection
