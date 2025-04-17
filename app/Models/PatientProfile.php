<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientProfile extends Model
{
    protected $fillable = [
        'user_id',
        'date_of_birth',
        'gender',
        'blood_type',
        'height',
        'weight',
        'medical_history',
        'allergies'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
