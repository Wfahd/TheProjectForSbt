<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affaire;


class AffairesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Affaires.cases') 
        ->with('affaires',Affaire::all()) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Affaires.createCase') ; 
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Affaire::create([
            'Name' => $request->input('name'),
            'Description' => $request->input('Description'),
            'status' => $request->input('status'),
            'user_id' => Auth()->user()->id 
        ]);
    
        return redirect('/MyClients/Affaires/cases');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
