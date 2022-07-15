@extends('layouts.app')
@section('content')
     @if (!isset($error))
         
   
    <h1>{{$pais[0]->name}}</h1>
    <h1>{{$pais[0]->capital}}</h1>
    <h1>{{$pais[0]->population}}</h1>
    <h3>fronteras: </h3>
     <ol>
     @if (isset($pais[0]->borders))
            
            @foreach ($pais[0]->borders as $frontera)
                <li>  {{$frontera}}</li> 
                
            @endforeach
   
    @else
       <p>
        Este pais no tiene fronteras terrestres
       </p>
     @endif
     
       </ol> 
   <img src="{{$pais[0]->flags->png}}" alt="">
  @else

        Error :  {{$error}} 
 @endif
@endsection