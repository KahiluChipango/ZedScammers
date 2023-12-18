<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScamTrend extends Model
{
    use HasFactory;

    protected $fillable = [
        'trend_date',
        'description',
        // Add other fillable fields as needed
    ];

    public function scamType()
    {
        return $this->belongsTo(ScamType::class);
    }
}
