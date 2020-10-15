<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Punto;

class PuntoController extends Controller
{
    public function GuardaPunto(Request $request)
    {
        $Punto =  new Punto();
        $Punto->tipoBasura=$request->tipoBasura;
        $Punto->direccion=$request->direccion;
        $Punto->horaApertura=$request->Apertura;
        $Punto->horaCierre=$request->Cierre;
        $Punto->save();
        return redirect('/');

    }
  

    public function EditaPunto($id)
    {
        $Punto=Punto::find($id);
        return view('EditaPunto')->with('Punto',$Punto);
    }

    
   public function GuardaEdicionPunto(Request $request)
   {
       $Punto=Punto::find($request->id);
       $Punto->tipoBasura=$request->tipoBasura;
       $Punto->direccion=$request->direccion;
       $Punto->horaApertura=$request->Apertura;
       $Punto->horaCierre=$request->Cierre;
       $Punto->save();
       return redirect('/');
   }

   public function Borrar($id)
   {
       $Punto=Punto::find($id);
       $Punto->delete();

       return redirect('/');
   }

  

}
