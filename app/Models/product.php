<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\catagory;

class product extends Model
{
    
     
     protected $guarded = []; 
     
     public function productcatagory(){

        return $this->belongsTo(catagory::class,'id','id');
     }
     public function produbrand(){

      return $this->belongsTo(Brand::class,'id','id');
   }
     
}
