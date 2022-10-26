<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstatePriceHistory extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'real_estate_profile_id','price','total_units'];
}
