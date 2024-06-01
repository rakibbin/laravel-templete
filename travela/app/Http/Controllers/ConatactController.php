<?php

namespace App\Http\Controllers;

use App\Models\Conatact;
use Illuminate\Http\Request;

class ConatactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rkcontact= Conatact::orderBy('id','desc')->paginate(4);
       return view('admin.contact.contactlist',compact('rkcontact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Conatact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Conatact $conatact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conatact $conatact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Conatact $conatact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conatact $conatact)
    {
        //
    }
}
