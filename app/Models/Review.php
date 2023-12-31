<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'comment',
        // Add other fillable fields as needed
    ];

    public function reportedNumber()
    {
        return $this->belongsTo(ReportedNumber::class);
    }
}

