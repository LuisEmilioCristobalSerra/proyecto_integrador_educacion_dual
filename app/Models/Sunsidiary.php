<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sunsidiary extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'street',
        'interior',
        'exterior',
        'district',
        'postal',
        'locality_id',
    ];

}
