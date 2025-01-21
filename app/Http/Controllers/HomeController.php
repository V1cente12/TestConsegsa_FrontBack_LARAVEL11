<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\memos;
use App\Models\siniestros;
use App\Models\pagos;
use Illuminate\Support\Facades\DB;

class HomeController
{
    public function index(){
        
        $clientes = Clientes::orderBy('razon_social', 'ASC')->get();
        $memos = Memos::orderBy('vigencia_desde', 'DESC')->get();
        $siniestros = Siniestros::orderBy('fecha_sin', 'DESC')->get();
        $clientesp4 = Clientes::with(['memos.siniestros'])->orderBy('razon_social', 'ASC')->get();
        $pagosTeodoro = Clientes::where('razon_social', 'TEODORO CALERO')
        ->with(['memos.pagos'])
        ->get()
        ->flatMap(function ($cliente) {
            return $cliente->memos->flatMap(function ($memo) {
                return $memo->pagos;
            });
        });

        $totalPagos = $pagosTeodoro->count();
        $sumaPagos = $pagosTeodoro->sum('monto_us');
        
        return view('home', compact('clientes','memos','siniestros','clientesp4','pagosTeodoro','totalPagos','sumaPagos'));
    }

    public function getPagosByMemo($id_memo){

        $pagos = Pagos::where('id_memo', $id_memo)->get();

        return response()->json($pagos);
    }

   
}
