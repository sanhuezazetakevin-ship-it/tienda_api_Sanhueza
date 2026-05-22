<?php

namespace App\Http\Controllers\Api; // <-- Ubicado en la subcarpeta Api

use App\Http\Controllers\Controller;
use App\Models\Client; // <-- Importamos el Modelo Client
use App\Http\Requests\StoreClientsRequest; // <-- Request para validar al crear
use App\Http\Requests\UpdateClientsRequest; // <-- Request para validar al editar
use App\Http\Resources\ClientsResource; // 
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Client::all();
        return ClientsResource::collection($client);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientsRequest $request)
    {
        $client = Client::create($request->validated());
        return new ClientsResource($client);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return new ClientsResource($client);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientsRequest $request, string $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->validated());
        
        return new ClientsResource($client);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $client = Client::findOrFail($id);
        $client->delete();
        
        // Retorna una respuesta vacía con código 204 (No Content)
        return response()->json(null, 204);
    }
}
