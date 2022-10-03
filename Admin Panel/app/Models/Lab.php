<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable=['lab_no','no_of_pc','capacity','type'];

}
