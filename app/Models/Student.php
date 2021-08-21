<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public const    GENDER = [
        'male' => 'Male',
        'female' => 'Female',
    ];

    public const STREAM = [
        'b.com' => 'B.Com',
        'm.com' => 'M.Com',
        'b.a' => 'B.A',
        'm.a' => 'M.A',
        'bca' => 'BCA',
        'mca' => 'MCA',
        'mba' => 'MBA',
    ];

    public function college(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(College::class, 'clg_id', 'id');
    }



}
