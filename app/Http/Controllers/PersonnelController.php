<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\Service;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnels = Personnel::all();

        return view('personnels.indexPersonnel', compact('personnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();
        return view('personnels.createPersonnel', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomPersonnel' => 'required',
            'prenomPersonnel' => 'required',
            'dateNais' => 'required',
            'lieuNais' => 'required',
            'service' => 'required',
            'sexe' => 'required',
            'CIN' => 'required',
            'situation' => 'required',
            'adresse' => 'required',  
            'mail' => 'required',
            'telephone' => 'required',
        ]);
  
        Personnel::create($request->all());
   
        return redirect()->route('personnel.index')
                        ->with('success','Personnel created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personnel $personnel)
    {
        $service = Service::all();
        return view('personnels.demandeConge', compact('personnel','service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $personnel)
    {
        $service = Service::all();
        return view('personnels.editPersonnel', compact('personnel','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnel $personnel)
    {
        $request->validate([
            'nomPersonnel' => 'required',
            'prenomPersonnel' => 'required',
            'dateNais' => 'required',
            'lieuNais' => 'required',
            'service' => 'required',
            'sexe' => 'required',
            'CIN' => 'required',
            'situation' => 'required',
            'adresse' => 'required',  
            'mail' => 'required',
            'telephone' => 'required',            
        ]);
  
        $personnel->update($request->all());
  
        return redirect()->route('personnel.index')
                        ->with('success','Personnel updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnel $personnel)
    {
        $personnel->delete();
        return redirect()->route('personnel.index');
    }

    public function demandeConge(Personnel $personnel)
    {           
        $personnel = Personnel::find(8);
        return view('personnels.demandeConge',[ 'personnel' => $personnel ]);
    }
    
}
