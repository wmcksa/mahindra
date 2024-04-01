<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowForm extends Model
{

    //اختبار القيادة
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'inquery_type',
    ];
}
