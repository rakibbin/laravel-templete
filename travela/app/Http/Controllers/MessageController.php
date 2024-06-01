<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $msge = Message::orderBy('id','desc')->paginate(4);
       return view('admin.message.messagelist',compact('msge'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('include.bookingsection');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'date' => $request->date,
            'dest' => $request->dest,
            'person' => $request->person,
            'kids' => $request->kids,
            'msg' => $request->msg,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Message::find($id)->delete();
        
        return redirect()->route('message.index');
    }
}
