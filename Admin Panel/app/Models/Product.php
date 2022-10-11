<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    public $timestamps = false;
    protected $fillable=['title','image','description','is_active','category_id'];
    public function category(){
      return  $this->belongsTo(Category::class,'category_id','id');
    }

}
