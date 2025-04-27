<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    /**
     * Zobrazí kontaktní formulář.
     */
    public function index()
    {
        return view('contacts.index');
    }

    /**
     * Zpracuje odeslaná data z kontaktního formuláře.
     */
    public function send(Request $request)
    {
        // Validace dat
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Odeslání emailu (změňte adresu na skutečnou)
        Mail::raw($validated['message'], function ($mail) use ($validated) {
            $mail->to('admin@example.com') // Změňte na váš email
                ->subject('Nová zpráva z kontaktního formuláře')
                ->from($validated['email'], $validated['name']);
        });

        // Přesměrování zpět s potvrzením
        return back()->with('success', 'Vaše zpráva byla úspěšně odeslána!');
    }
}
