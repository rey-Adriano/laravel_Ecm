@extends('layouts.app')
@section('content')

<form action="{{Route("procesar.direccion")}}" method="post">
    @csrf
    <label for="direccion" class="col-form-label">Ingrese dirección de envio</label> <br>
    <input type="text" name="direccion" id="direccion" value="{{@old("direccion")}}" placeholder="ingrese dirección" class="form-control"><br>
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
    
@endsection