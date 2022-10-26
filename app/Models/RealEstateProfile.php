<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstateProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'real_estate_type_id',
        'model_name',
        'description',
        'real_estate_company_id',
        'location_id',
        'total_units',
        'price',
        'total_vacant',
        'total_sold',
        'accomodation_id',
        'status_id',
    ];
}
