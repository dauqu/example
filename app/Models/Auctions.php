<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auctions extends Model
{
    protected $fillable = ['auctiontittle', 'content', 'price', 'auction_start_date',  'auction_end_date',  'item_specifics',  'category',  'vendor_name',  'featured_image', 'tag'];
    use HasFactory;
}
