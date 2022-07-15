@extends('layouts.app')
@section('content')
 <h1>Productos</h1>
 <button type="button" class="btn btn-primary">Agregar Producto</button>
 <table class="table">
     <thead>
         <tr>
             <th>ID</th>
             <th>Descripción</th>
             <th>Cantidad</th>
             <th>Numero de Seguimiento</th>
         </tr>
     </thead>
     <tbody>
         @foreach ($productos as $producto)
         <tr>
             <td>{{$producto->id}}</td>
             <td>{{$producto->descripcion}}</td>
             <td>{{$producto->cantidad}}</td>
             <td>{{$producto->nro_seguimiento}}</td>
             <td>
                <button type="button" class="btn btn-success">actualizar</button>
             </td>
             <td>
                <button type="button" class="btn btn-danger">Eliminar</button>
             </td>
         </tr>
             
         @endforeach
     </tbody>
 </table>


@endsection