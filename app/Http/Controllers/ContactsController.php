<?php

namespace App\Http\Controllers;

use App\Models\Contats;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(view: 'contacts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Contats $contats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contats $contats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contats $contats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contats $contats)
    {
        //
    }
}
