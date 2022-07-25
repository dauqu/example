<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bid extends Model
{
    protected $fillable = ['bidauction', 'price'];
    use HasFactory;
}
