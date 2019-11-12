
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <h1>Canciones: </h1>
    </div>
  
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Título</th>
      <th scope="col">Duración</th>
      <th scope="col">Artista</th>
    </tr>
  </thead>
  <tbody>
  @foreach($songs as $song)
    <tr>
      
      <td>{{$song->id}}</td>
      <td>{{$song->titulo}}</td>
      <td>{{$song->duracion}} min</td>
      <td><a href="/artista/{{$song->artist->id}}">{{$song->artist->nombre}} </a></td>
    </tr>
@endforeach
   
  </tbody>
</table>
</div>


@endsection