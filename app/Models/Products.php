<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['productname', 'makingyear', 'brand', 'driven', 'transmission', 'exidental', 'fuel', 'insurance', 'price', 'image'];
    use HasFactory;
}



   

  



    
