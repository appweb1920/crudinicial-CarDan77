<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detalle;

class DetalleController extends Controller
{
    public function GuardaDetalle(Request $request)
    {
        $detalle =  new detalle();
        $detalle->id_recolector=$request->idrecolector;
        $detalle->id_punto=$request->idpunto;
        $detalle->save();
        return redirect('/home');

    }

    
   public function Borrar($id)
   {
       $detalle=detalle::find($id);
       $detalle->delete();

       return redirect('/home');
   }
}
