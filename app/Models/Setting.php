<?php

namespace App\Models;

use App\Models\Language;
use App\Models\DealerLocator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;



    protected $fillable = [
        'user_id',
        'site_name',
        'site_logo',
        'email',
        'phone',
        'language_id',
        'dealer_locator_id', //الفرع الرئيسي
    ];


    //الربط مع جدول الفروع
    public function dealerLocator()
    {
        return $this->belongsTo(DealerLocator::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
