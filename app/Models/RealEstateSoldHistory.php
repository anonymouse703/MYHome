<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstateSoldHistory extends Model
{
    use HasFactory;

    protected $fillable = ['date_sold', 'real_estate_profile_id','price','price_discounted','sold_to'];
}
