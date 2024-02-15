<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestOffer extends Model
{
    //طلب عرض
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'offer_price', //سعر العرض
        'message',
    ];
}
