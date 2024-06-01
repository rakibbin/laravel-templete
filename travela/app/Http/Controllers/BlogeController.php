<?php

namespace App\Http\Controllers;

use App\Models\Bloge;
use Illuminate\Http\Request;

class BlogeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bldata= Bloge::all();
        return view('admin.blog.listbloge',compact('bldata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.addbloge');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Bloge::create([
            'photo' => $name,
            'date' => $request->date,
            'title1' => $request->title1,
            'title2' => $request->title2,
            'content' => $request->content,
            'btn' => $request->btn,
        ]);
        $photo->move('./images/', $name);
        return redirect()->route('rkbloge.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bldata=Bloge::find($id);
        return view('admin.blog.showbloge',compact('bldata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $id=Bloge::find($id);
        return view('admin.blog.editbloge',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        $data=Bloge::findOrFail($id);
        $data->update([
            'photo' => $name,
            'date' => $request->date,
            'title1' => $request->title1,
            'title2' => $request->title2,
            'content' => $request->content,
            'btn' => $request->btn,
        ]);
        $photo->move('./images/', $name);
        return redirect()->route('rkbloge.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Bloge::find($id)->delete();
        
        return redirect()->route('rkbloge.index');
    }
}
