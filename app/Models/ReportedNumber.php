<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportedNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'description',
        'reported_at',
        // Add other fillable fields as needed
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function geolocation()
    {
        return $this->hasOne(Geolocation::class);
    }

    public function screenshots()
    {
        return $this->hasOne(Screenshot::class);
    }
}

