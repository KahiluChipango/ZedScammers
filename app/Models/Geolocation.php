<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geolocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'latitude',
        'longitude',
        'city',
        'country',
        // Add other fillable fields as needed
    ];

    public function reportedNumber()
    {
        return $this->belongsTo(ReportedNumber::class);
    }
}

