<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function color(){
       return  $this->hasMany(Color::class);
    }
    public function product(){
        return $this->hasOne(Product::class);
    }
}
