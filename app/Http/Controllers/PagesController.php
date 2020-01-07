<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        $titre = 'About 3w Academy 2020';
        return view('about', compact('titre'));
    }

    public function services()
    {
        $data = array(
            'titre' => "Services",
            'listeServ' => [
                'Création Compte',
                'Versement',
                'Retrait',
                'Transfert'
            ]
        );
        return view('services')->with($data);
    }
}
