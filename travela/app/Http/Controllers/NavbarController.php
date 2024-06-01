<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $navdata = Navbar::all();
        return view('admin.navbar.listNavbar',compact('navdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.navbar.addNavbar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Navbar::create([
            'photo' => $name,
            'title1' => $request->title1,
            'title2' => $request->title2,
            'content' => $request->content,
            'btn' => $request->btn,
        ]);
        $photo->move('./images/', $name);
        return redirect()->route('nav.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
    
   
         $navdata = Navbar::find($id);
        
        return view('admin.navbar.showNavbar', compact('navdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      
        $id = Navbar::findOrFail($id);
        return view('admin.navbar.editNavbar', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();

        $data = Navbar::findOrFail($id);
        $data->update([
            'photo' => $name,
            'title1' => $request->title1,
            'title2' => $request->title2,
            'content' => $request->content,
            'btn' => $request->btn,
        ]);
        $photo->move('./images/', $name);
        return redirect()->route('nav.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Navbar $navbar)
    {
        $navbar->delete();
        return redirect()->route('nav.index');
    }
}
