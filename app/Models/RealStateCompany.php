<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealStateCompany extends Model
{
    use HasFactory;

    protected $fillable = ['company_name','address','contact_no','email'];
}
