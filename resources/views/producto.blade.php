@extends('layouts.app')
@section('content')

<form action="{{Route("procesar.producto")}}" method="post">
    @csrf
    <label for="descripcion" class="col-form-label">Ingrese descripción del producto </label><br>
    <input type="text" name="descripcion" id="descripcion" placeholder="ingrese descripción" class="form-control" ><br>
    <label for="cantidad" class="col-form-label">Ingrese cantidad  </label><br>
    <input type="number" name="cantidad" id="cantidad" placeholder="ingrese cantidad" class="form-control" ><br> 
    <input type="submit" value="registrar" class="btn btn-primary">
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li> 
            @endforeach
        </ul>
    </div>    
@endif
    
@endsection|