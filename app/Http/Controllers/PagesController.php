<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

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

    public function contactForm()
    {
        return view('contact');
    }

    public function contactMessage()
    {
        $data = request()->validate([
            'nom' => 'required|max:50|min:2',
            'email' => 'required|email',
            'message' => 'required|min:20|max:250'
        ]);
        Mail::to($data['email'])->send(new ContactMail($data));
        return redirect()->route('contact')
            ->with('successContactMail', 'Merci de nous avoir contacté. Votre message est bien reçu. Nous vous contactons de les plus brefs délais');
    }
}
