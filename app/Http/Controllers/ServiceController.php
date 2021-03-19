<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('services.index', compact('services'));

    }

    public function create()
    {
        return view('services.create');
    }

    // public $libelle, $role;
    public function store(Request $request)
    {

        $request->validate([
            'libelle' => 'required',
            'role' => 'required',
        ]);
  
        Service::create($request->all());
   
        return redirect()->route('services.index')
                        ->with('success','Service created successfully.');
        
    }

   
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    
    public function update(Request $request, Service $service)
    {
        // $service->update($request->validated());
        // return redirect()->route('services.index');
        $request->validate([
            'libelle' => 'required',
            'role' => 'required',
        ]);
  
        $service->update($request->all());
  
        return redirect()->route('services.index')
                        ->with('success','service updated successfully');

        

    }

    
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index');
    }
}
