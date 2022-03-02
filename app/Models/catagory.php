<?php

namespace App\Models;
use App\Models\catagory;
use App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    protected $guarded = [];
    public function parent(){

        return $this->belongsTo(catagory::class,'parent_id','id');
     }
     public function catagorys(){

        return $this->hasMany(product::class);
     }
     public static function ParentOrNotCategory($parent_id,$child_id){
      $categories=catagory::where('id','$child_id')->where('parent_id','$parent_id')->get();
      if(!is_null($catagories))
    {
         return true;
      }else{
         return false;
      }

     }
}
