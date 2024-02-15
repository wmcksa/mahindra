<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiantenanecTimee extends Model
{
    //حجز موعد صيانة
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'type',
        'message',
    ];
}
