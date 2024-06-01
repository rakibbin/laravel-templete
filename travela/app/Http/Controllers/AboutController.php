<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= About::all();
        return view('admin.about.listAbout',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.addAbout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        About::create([
            'photo' => $name,
            'title1' => $request->title1,
            'title2' => $request->title2,
            'content' => $request->content,
        ]);
        $photo->move('./images/', $name);
        return redirect()->route('abt.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $abtdata= About::find($id);
        return view('admin.about.showAbout',compact('abtdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id = About::find($id);
        return view('admin.about.editAbout',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
       
        $data = About::findOrFail($id);
        $data->update([
            'photo' => $name,
            'title1' => $request->title1,
            'title2' => $request->title2,
            'content' => $request->content,
        ]);
        $photo->move('./images/', $name);
        return redirect()->route('abt.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        About::find($id)->delete();
        
        return redirect()->route('abt.index');
    }
}
