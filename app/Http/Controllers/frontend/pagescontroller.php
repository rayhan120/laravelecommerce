<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\catagory;

class pagescontroller extends Controller
{
    public function index(){
       // $pro = catagory::orderBy('name','asc')->where('parent_id','NULL')->get();
        $product= product::with('productcatagory')->get();
        $r=catagory::all();
        return view('layouts.index',compact('product','r'));
        
        
    }
    public function contact(){

        return view('layouts.contact');
    }

    public function product(){

        return view('layouts.product');
    }
    public function show(){

        return view('layouts.product');
    }

    public function search(Request $request){
        $product=product::orWhere('title','like','%'.$request->search.'%')
        ->orWhere('price','like','%'.$request->search.'%')
        ->orWhere('description','like','%'.$request->search.'%')
        ->orWhere('slug','like','%'.$request->search.'%')
        ->get();
  
   


           return view('admin.pages.search',compact('product'));
      
    }

}
