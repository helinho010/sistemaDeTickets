<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Prioridad;


class TicketController extends Controller
{
    public function index()
    {
        $indice=6;
        $nuevoValor=11;
        
        $updatePrioridad=Prioridad::find($indice);
        $updatePrioridad->id=$nuevoValor;
        $updatePrioridad->save();

        // $updateTickets=Prioridad::find(4)->tickets()->get();
        // foreach ($updateTickets as $key => $value) 
        // {
        //    $value->id_prioridad=3;
        // }
        // $updateTickets->save();

        // $tickets=Prioridad::find($indice)
        //                     ->tickets()
        //                     ->select("codigo_ticket","fecha","estado","id_prioridad")
        //                     ->get();

        return Prioridad::find($nuevoValor)->tickets()->get();
    }

}
