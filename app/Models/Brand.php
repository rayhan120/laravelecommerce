<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  
    protected $guarded = [];
    public function products(){

        return $this->hasMany(catagory::class,'parent_id','id');
     }
}
