<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packdata = Package::all();
        return view('admin.package.listPackage',compact('packdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.package.addPackage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Package::create([
            'photo' => $name,
            'title1' => $request->title1,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'price' => $request->price,
            'title4' => $request->title4,
            'title5' => $request->title5,
            'content' => $request->content,
            'title6' => $request->title6,
            'title7' => $request->title7,
        ]);
        $photo->move('./images/', $name);
        return redirect()->route('pack.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $packdata = Package::find($id);
        return view('admin.package.showPackage',compact('packdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id = Package::find($id);
        return view('admin.package.editPackage',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        $data= Package::findOrFail($id);
        $data->update([
            'title1'=>$request->title1,
            'title2'=>$request->title2,
            'title3'=>$request->title3,
            'price'=>$request->price,
            'title4'=>$request->title4,
            'title5'=>$request->title5,
            'content'=>$request->content,
            'title6'=>$request->title6,
            'title7'=>$request->title7,
        ]);
        $photo->move('./images/', $name);
        return redirect()->route('pack.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        Package::find($id)->delete();
        
        return redirect()->route('pack.index');
    }
}
