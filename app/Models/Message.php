<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id','message'];
    use HasFactory;

    //relationship messages aur users ka

    public function user(){
        return $this->belongsTo(User::class);
    }

}
