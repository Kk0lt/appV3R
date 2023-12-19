<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormAccidentTravail extends Model
{
    use HasFactory;
    protected $casts = [
        'description_blessure' => 'array',
        'violence' => 'array',
    ];
    public function employe()
    {
        return $this->belongsTo(Employe::class, 'employe_id');
    }
}
