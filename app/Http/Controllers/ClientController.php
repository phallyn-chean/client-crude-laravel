<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index')->with('clients', $clients);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Client::create($input);
        return redirect('client')->with('flash_message', 'Client Added!');
    }

    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show')->with('clients', $client);
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit')->with('clients', $client);
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $input = $request->all();
        $client->update($input);
        return redirect('client')->with('flash_message', 'Client Updated!');
    }

    public function destroy($id)
    {
        Client::destroy($id);
        return redirect('client')->with('flash_message', 'Client Deleted!');
    }
}
