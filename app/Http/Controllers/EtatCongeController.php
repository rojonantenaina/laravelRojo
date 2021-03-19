<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EtatConge;

class EtatCongeController extends Controller
{
    
    public function index()
    {
        $etat_Conges = EtatConge::all();

        return view('etatConge.indexEtat', compact('etat_Conges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etatConge.createEtat');
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
            'etatConge' => 'required',
        ]);
  
        EtatConge::create($request->all());
   
        return redirect()->route('etatConge.index')
                        ->with('success','Etat de congé created successfully.');
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
    public function edit(EtatConge $etatConge)
    {
        return view('etatConge.editEtat', compact('etatConge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,EtatConge $etatConge)
    {
        $request->validate([
            'etatConge' => 'required',
        ]);
  
        $etatConge->update($request->all());
  
        return redirect()->route('etatConge.index')
                        ->with('success','etatConge updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etatconge $etatConge)
    {
        $etatConge->delete();
        return redirect()->route('etatConge.index');
    }
}
