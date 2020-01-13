<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('prenom')->paginate(10);
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client;
        return view('client.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, $this->validationRules());

        $client = Client::create($data);

        $this->uploadImage($client);
        
        return redirect()->route('client.show', $client)->with('successNewClient', 'client ajouté avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //$comptes = $client->comptes;
        //return $comptes;
        return view('client.show')->with('client', $client);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $data = $this->validate($request, $this->validationRules());
        $client->update($data);

        $this->uploadImage($client);

        return redirect()->route('client.show', $client)->with('successUpdateClient', 'client modifié avec succés');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index')->with('successDelete', 'Client supprimé avec succès');
    }

    private function validationRules()
    {
        return [
            'nom' => 'required|max:50|min:2',
            'prenom' => 'required|max:50|min:2',
            'dateNaissance' => 'required|date',
            'adresse' => 'required|max:70|min:10',
            'tel' => 'required|digits:8',
            'cinImage' => 'sometimes|file|image'
        ];
    }

    private function uploadImage($client)
    {
        if (request()->has('cinImage')) {
            $client->update([
                'cinImage' => request()->cinImage->store('uploads', 'public')
            ]);
        }
    }
}
