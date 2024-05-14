@extends('layout.main')

@section('content')

<h1>i miei treni</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">COMPAGNIA</th>
        <th scope="col">NUMERO TRENO</th>
        <th scope="col">DESTINAZIONE</th>
        <th scope="col">ORARIO</th>
        <th scope="col">RITARDO</th>
        <th scope="col">CANCELLATO</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)

      <tr>
        <th scope="row">{{$train->company}}</th>
        <th scope="row">{{$train->train_code}}</th>
        <th scope="row">{{$train->arrival_station}}</th>
        <th scope="row">{{$train->arrival_station}}</th>
        <th scope="row">{{$train->arrival_station}}</th>
      </tr>
      @endforeach
    </tbody>
  </table>

  @endsection
