<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\catagory;
use App\Models\Brand;
use Image;
class Adminpagescontroller extends Controller
{
    public function index(){

        return view ('admin.pages.index');

    }
    public function manageproducts(){

        $products=product::with('productcatagory')->get();
        $products=product::with('produbrand')->get();
        //$products =  product::all();
        //dd($products);
        return view ('admin.pages.manageproduct',compact( 'products'));

    }

    public function creat(){
        $catagorys= catagory::all();
        $brands= Brand::all();

        return view ('admin.pages.creat',compact('catagorys','brands'));

    }
    public function store(Request $request) 
    {


        //dd($request->all());
         
       //        dd($request->file('image')->getClientOriginalExtension());

       $filename='';
       if($request->hasFile('image'))
       {
      
           //some code here to store into directory
               $file = $request->file('image');

               if ($file->isValid()) {
                   $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                   //dd($filename); 
                   $file->storeAs('products', $filename);
                   
               }
               
       }
        
       

        product::create([

            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'image'=>$filename,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'admin_id'=>'1',
            'slug'=>$request->title,
            'offer_price'=>'1',
            'status'=>'1'
             
        
           
        ]);
        
        
        return redirect()->back();
    
    }

    
    public function productedit($id){

        $product =  product::find($id);
        return view ('admin.pages.edit',compact( 'product'));
       

    }

    public function update(Request $request,$id)

         {

               
        product::find($id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'admin_id'=>'1',
            'slug'=>'1',
            'offer_price'=>'1',
            'status'=>'1'
             //'image'=>$filename         
        ]);
        return redirect()->route('admin.product');
           // return view
         }

         public function deleteproduct($id){

           // dd($id);
           $product = product::find($id);

           if ($product)
           {
               $product->delete();
           }
           return redirect()->back();
         }
         

}
