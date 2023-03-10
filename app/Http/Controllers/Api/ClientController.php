<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function listAllClients() {
        return Client::all();
    }

    public function createClient(Request $request) {

    }

    public function deleteClient(Request $request) {

    }

    public function updateClient(Request $request) {

    }
}
