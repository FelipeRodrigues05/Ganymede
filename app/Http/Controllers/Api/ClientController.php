<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestClientRules;
use App\Http\Resources\ClientResource;
use App\Models\Client;

class ClientController extends Controller
{
    public function listAllClients()
    {
        $clients = Client::all();

        // RESOURCES FACILITAM A LEITURA
        return ClientResource::collection($clients);
    }

    // REQUESTCLIENTRULES faz parte da validação dos dados
    public function createClient(RequestClientRules $request)
    {
        $data = $request->validated();
        $client = Client::create($data);

        return new ClientResource($client);
    }

    public function deleteClient(string $id)
    {
        Client::findOrFail($id)->delete();

        return response()->json([], 200);
    }

    public function updateClient(string $id, RequestClientRules $request)
    {
        $data = $request->validated();
        $client = Client::findOrFail($id);

        $client->update($data);

        return new ClientResource($client);
    }
}
