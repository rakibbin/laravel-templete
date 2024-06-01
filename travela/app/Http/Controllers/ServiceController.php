<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $data = Service::all();
        return view('admin.service.listService',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.addService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Service::create([
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $name,
        ]);
        $photo->move('./images/', $name);
        return redirect("/service");
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $serdata = Service::find($id);
        
        return view('admin.service.showService', compact('serdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $id = Service::findOrFail($id);
        return view('admin.service.editService', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
       
        $data = Service::findOrFail($id);
        $data->update([
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $name,
        ]);
        $photo->move('./images/', $name);
        return redirect()->route('ser.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
       
         return redirect()->route('ser.index');
    }
}
