@extends('layouts.main')

@section('title', 'Events')


@section('content')
  <h1>Oin</h1>

  @if(10 < 5) <p> A condicao eh true</p>
    @elseif(10 == 10)
    <p>{{$nome}}</p>
    @endif
    <h1>{{$idade}}</h1>
    @foreach($arr as $item)
    <p>{{$item}}</p>
    @endforeach

    @for($i = 0; $i < count($arr); $i++)
      <p>{{$arr[$i]}}</p>
    @if($i === 2)
      <p>I igual a 2</p>
    @endif
    @endfor

    @php
        echo "oinnn";
    @endphp
@endsection
