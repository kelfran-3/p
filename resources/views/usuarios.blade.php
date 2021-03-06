@extends('layouts.app')

@section('content')
<div class="container">
<h2>Lista de Usuarios <a href="Usuarios/create"><button type="button" class="btn btn-success float-right">Agregar Usuario</button></a>
</h2>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>

  	@foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
    </tr>
   @endforeach
  </tbody>
</table>

</div>
@endsection