<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Userregistration extends Model
{
   

    protected $fillable = ['fname', 'avatorimg', 'user_type',  'email',  'phone',  'password', 'adharcardnum'];
    use HasFactory;
}



