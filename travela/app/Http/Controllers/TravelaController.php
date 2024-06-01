<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Bloge;
use App\Models\Conatact;
use App\Models\Navbar;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;

class TravelaController extends Controller
{
    public function index()
    {
        // $navdata = Navbar::all();
        $serdata = Service::all();
        $abtdata = About::find(1);
        $packdata = Package::all();
        $bldata = Bloge::all();
        $rkcontact = Conatact::all();
        
        
        
        return view('index',compact(['serdata','abtdata','packdata','bldata','rkcontact']));
    }
    public function about()
    {
        $abtdata=About::find(1);
        //return $abtdata;
         return view('pages.about',compact('abtdata'));
    }
    public function service()
    {
        $serdata = Service::all();
        return view('pages.service',compact('serdata'));
    }
    
    public function package()
    {
        $packdata = Package::all();
        return view('pages.package',compact('packdata'));
    }
    public function blog()
    {
        $bldata= Bloge::all();
        return view('pages.blog',compact('bldata'));
    }
    public function contact()
    {
        $rkcontact = Conatact::all();
        return view('pages.contact',compact('rkcontact'));
    }
    
}
