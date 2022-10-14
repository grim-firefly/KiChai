<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable=['name','color','brand_id'];
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
