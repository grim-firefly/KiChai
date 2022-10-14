<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use HasFactory, SoftDeletes;
  public $timestamps = false;
  // protected $fillable = ['title', 'image', 'description', 'is_active', 'category_id'];
  protected $guarded=[];
  public function category()
  {
    return  $this->belongsTo(Category::class, 'category_id', 'id');
    
  }
  public function brand()
  {
    return $this->belongsTo(Brand::class);
    // return $this->hasOne(Brand::class,'id','brand_id');  
  }
  public function color()
  {
    return $this->hasOne(Color::class,'id','color_id');
  }
}
