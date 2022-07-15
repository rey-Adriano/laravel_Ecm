<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Cast\String_;

class ProductoController extends Controller
{
    public function productoForm()
    {
        return view("producto"); 
    }
    public function procesarForm(Request $request)
    {

        $request->validate([
            "descripcion"=>"required",
            "cantidad"=>"required",

        ]); 
        $producto = new Producto(); 
        $producto->descripcion = $request->input("descripcion"); 
        $producto->cantidad = $request->input("cantidad"); 
        $producto->nro_seguimiento = $this->nroSeguimiento();   
        $producto->user_id = Auth::id();
        $producto->save(); 
        return redirect(Route("home")); 

    }

    public function nroSeguimiento()
    {
        $inicio  = 1; 
        $fin = 1000; 
        $numAleatorio = rand($inicio,$fin); 
         return $numAleatorio; 
    }


    public function seguimiento2()
    {
        return Carbon::now()->format("Ymdhs"); 
    }

    public function pais(String $pais)
    {
       $response  = Http :: get("https://restcountries.com/v2/name/".$pais); 
       if ($response->ok()){
            return view("pais")->with("pais", json_decode($response->body()));
       }else{
             return view("pais")->with("error",$response->status() );
       }
   
    }

    public function mostrar()
    {
        
        $productos = Producto::all(); 
        return view("mostrar")->with("productos",$productos); 
    }




    
}
