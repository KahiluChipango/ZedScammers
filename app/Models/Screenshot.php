<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screenshot extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_path',
        // Add other fillable fields as needed
    ];

    public function reportedNumber()
    {
        return $this->belongsTo(ReportedNumber::class);
    }
}

