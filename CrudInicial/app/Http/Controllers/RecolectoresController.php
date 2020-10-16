<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recolector;
use App\Punto;
use App\detalle;


class RecolectoresController extends Controller
{
    public function GuardaRecolector(Request $request)
    {
        $Recolector =  new Recolector();
        $Recolector->nombre=$request->nombre;
        $Recolector->dias=$request->dias;
        $Recolector->save();
        return redirect('/');

    }
    public function muestra()
    {
        $recolectores=Recolector::all();
        $puntos=Punto::all();
        $detalles=detalle::all();
        return view('welcome')->with('recolectores', $recolectores)->with('puntos', $puntos);
        
        //->with('detalles', $detalles);

    }

    public function EditaRecolector($id)
    {
        $Recolector=Recolector::find($id);
        return view('EditaRecolector')->with('Recolector',$Recolector);
    }

    
   public function GuardaEdicion(Request $request)
   {
       $Recolector=Recolector::find($request->id);
       $Recolector->nombre=$request->nombre;
       $Recolector->dias=$request->dias;
       $Recolector->save();
       return redirect('/');
   }

   public function Borrar($id)
   {
       $Recolector=Recolector::find($id);
       $Recolector->delete();

       return redirect('/');
   }

   public function AñadirPunto($id)
   {
       $Recolector=Recolector::find($id);
       $puntos=Punto::all();
       return view('AñadirPunto')->with('Recolector',$Recolector)->with('puntos', $puntos);;
   }

   
}
