<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BeyondCode\LaravelWebSockets\Apps\AppsRepository;
use BeyondCode\LaravelWebSockets\Facades\WebSocketsRouter;
use App\Events\RealTimeEvent;

class PrubaMensajeController extends Controller
{

    public function llamarEvento()
    {
        // Obtén los datos necesarios del request
        $mensaje = 'hola';

        event(new RealTimeEvent($mensaje));
        return response()->json(['mensaje' => 'Evento enviado']);
        
    }

    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        return 'hola';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
