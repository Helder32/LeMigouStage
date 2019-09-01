<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\client;

class CustomerController extends Controller
{
        // if (isset($_POST["addcustomer"])){ 
        //     $this->store();
        // }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate ([
            'Nom'=>'required',
            'Prenom'=>'required',
        ]);

        $client = new client;
        $client->nom = $request->input('Nom');
        $client->prenom = $request->input('Prenom');
        $client->raison_sociale = $request->input('raison_sociale');
        $client->numero_rue = $request->input('Nrue');
        $client->rue = $request->input('rue');
        $client->ville = $request->input('ville');
        $client->code_postal = $request->input('code_postal');
        $client->age = $request->input('age');
        $client->sexe = $request->input('gender');
        $client->mail = $request->input('email');
        $client->tel_fixe = $request->input('telFix');
        $client->tel_mobile = $request->input('mobile');
        $client->save();
            

        return back()->withInput();
        // return redirect('customer')->with(['success', 'Votre demande a bien été enregistrée']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $client = client::all();

        return view('resultCustomer')->with('client', $client);
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
