
@extends('layouts.app')

@section('content')
<div class="container">
<h1>{{$artists->nombre}}</h1>

  <h2>Sus canciones</h2>
    <div class="row ">
  

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Título</th>
        <th scope="col">Duración</th>
      
      </tr>
    </thead>
    <tbody>
    @foreach($artists->songs as $song)
      <tr>
        
        <td>{{$song->id}}</td>
        <td>{{$song->titulo}}</td>
        <td>{{$song->duracion}} min</td>
        
      </tr>
  @endforeach
   
  </tbody>
</table>
</div>
</div>


@endsection