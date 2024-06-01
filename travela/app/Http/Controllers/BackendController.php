<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        return view('admin.logpage');
    }
    public function body(){
        return view('admin.body');
    }
}
