<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

          return view('MyClients.index')
          ->with('clients', Client::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('MyClients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Client::create([
            'name' => $request->input('name'),
            'lastName' => $request->input('LastName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'status' => $request->input('status'),
            'sex' => $request->input('sex'),
            'titleOfTheCase' => $request->input('titleOfTheCase'),
            'user_id' => Auth()->user()->id 
        ]);
    
        return redirect('MyClients');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
