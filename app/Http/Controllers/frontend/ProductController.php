<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\product_images;

class ProductController extends Controller
{
   public function product(){

      $product= product::with('productcatagory')->get();
      return view('layouts.index',compact('product'));

   }
   
   //public function show($slug){

     // $product= product_images::all();
     // return view('layouts.index',compact('product'));

  // }
  public function show($slug)
  {
  
     $product = product::where('slug',$slug)->first();
     if(!is_null($product))
     {
      return view('admin.pages.show',compact('product'));
     }
     else{
        session()->flash('errors','sorry||there is no product by this URL');
        return redirect()->route('/index');
     }
     
  }
  
   
}
