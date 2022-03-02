<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;

class Sidebar extends Controller
{
    
    public function sideindex()
  {
         //$catagorys=catagory::all();
         return view('frontend.sideindex');

  }
  public function show($slug)
  {
         $catagorys=catagory::all($slug);
         if(!is_null($catagorys))
         {
            return view('frontend.sideshow',compact('catagorys'));
         }
        else{

            session()->flash('errors','sorry there is no catagory by this id');
            return redirect('/');
        }

  }

}
