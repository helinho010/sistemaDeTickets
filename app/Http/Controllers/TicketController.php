<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Prioridad;


class TicketController extends Controller
{
    public function index()
    {
        $indice=5;
        
        $updatePrioridad=Prioridad::find(1);
        $updatePrioridad->delete();

        // $tickets=Prioridad::find($indice)
        //                     ->tickets()
        //                     ->select("codigo_ticket","fecha","estado","id_prioridad")
        //                     ->get();

        return $updatePrioridad;
    }

}
