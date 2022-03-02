<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Brand;
use App\Models\catagory;
use Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $brands= Brand::all();
            return view ('brand.brandindex',compact('brands'));
    
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands= catagory::all();
        //$main_catagory= catagory::orderBy('name','desc')->Where('parent_id','NULL')->get();
        return view ('brand.creat_brand',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        
    $filename='';
                //dd($filename); 

    if($request->hasFile('image'))
    {
   
        //some code here to store into directory
            $file = $request->file('image');
                //dd($file); 

            if ($file->isValid()) {
                $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                //dd($filename); 
                $file->storeAs('products', $filename);
                
            }
            
    }
           
        Brand::create([

            'name'=>$request->name,
            'description'=>$request->description,
            //'parent_id'=>$request->parent_id,
            'image'=>$filename
           
            
        ]);

        
        return redirect()->back()->with('success','A new brand has added successfully.');
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $main_brand= Brand::all();
        $brands = Brand::find($id);
        if(!is_null($brands)){
            return view ('brand.editbrand',compact( 'brands','main_brand'));

        }
        else{
            return redirect()->route('brand');
        } 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        Brand::find($id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
          
        ]);
        return redirect()->route('brand');
           // return view
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $brands = Brand::find($id);

           if ($brands)
           {
               $brands->delete();
           }
           return redirect()->back();
         
    }
}
