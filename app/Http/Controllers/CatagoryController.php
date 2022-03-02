<?php

namespace App\Http\Controllers;

use App\Models\catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $catagorys= catagory::all();
            return view ('backend.catagoryindex',compact('catagorys'));
    
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $main_catagory= catagory::all();
        //$main_catagory= catagory::orderBy('name','desc')->Where('parent_id','NULL')->get();
        return view ('backend.creat_catagory',compact('main_catagory'));
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
           
        catagory::create([

            'name'=>$request->name,
            'description'=>$request->description,
            'parent_id'=>$request->parent_id,
            'image'=>$filename
           
            
        ]);

        
        return redirect()->back()->with('success','A new catagory has added successfully.');
    
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(catagory $catagory)
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
        $main_catagory= catagory::all();
        $catagorys =  catagory::find($id);
        if(!is_null($catagorys)){
            return view ('backend.editcatagory',compact( 'catagorys','main_catagory'));

        }
        else{
            return redirect()->route('catagory');
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
        catagory::find($id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'parent_id'=>$request->parent_id
        ]);
        return redirect()->route('catagory');
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
        $catagorys = catagory::find($id);

           if ($catagorys)
           {
               $catagorys->delete();
           }
           return redirect()->back();
         
    }
}
