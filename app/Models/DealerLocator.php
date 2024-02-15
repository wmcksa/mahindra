<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DealerLocator extends Model
{
    use HasFactory;
    protected $fillable = [
        'country', //الدولة
        'city', //المدينة
        'location', //الشارع
        'beginning_working_day', //بداية ايام العمل
        'end_working_day', //نهاية ايام العمل
        'beginning_working_hours', //بداية  ساعات العمل
        'end_working_hours', //نهاية  ساعات العمل
        'mobile',        //رقم الهاتف
        'language_id',
    ];
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
