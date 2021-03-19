<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
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
        return view('personnels.createPersonnel');
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
            'pere' => 'required',
            'mere' => 'required',
            'sexe' => 'required',
            'CIN' => 'required',
            'situation' => 'required',
            'nbEnfant' => 'required',
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $personnel)
    {
        return view('personnels.editPersonnel', compact('personnel'));
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
            'pere' => 'required',
            'mere' => 'required',
            'sexe' => 'required',
            'CIN' => 'required',
            'situation' => 'required',
            'nbEnfant' => 'required',
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
}
