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
          ->with('clients', Client::get());
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::find($id);
    
        return view('MyClients.edit', compact('client'));
    }
    
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);
    
        if (!$client) {
            return redirect('MyClients')->with('error', 'Client not found!');
        }
    
        $client->name = $request->input('name');
        $client->lastName = $request->input('LastName');
        $client->email = $request->input('email');
        $client->phone = $request->input('phone');
        $client->status = $request->input('status');
        $client->sex = $request->input('sex');
        $client->titleOfTheCase = $request->input('titleOfTheCase');
        $client->save();
    
        return redirect('MyClients')->with('success');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);
    
        if (!$client) {
            return redirect('MyClients')->with('error', 'Client not found!');
        }
    
        $client->delete();
    
        return redirect('MyClients')->with('success',"success");
    }
}
