<?php

namespace App\Models;

use App\Models\Engine;
use App\Models\Feature;
use App\Models\Category;
use App\Models\Language;
use App\Models\ModelCar;
use App\Models\YearOfModel;
use App\Models\MotionVactor;
use App\Models\DealerLocator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        // 'category_id',
        'dealer_locator_id',
        'model_car_id',
        'language_id',
        'year_of_model_id',
        'motion_vactor_id',
        'engine_id',
    ];

    //الربط معجدول اللغات
    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    //الربط مع جدول الفئات
    public function category()
    {
        return $this->hasMany(Category::class);
    }

    //الربط مع جدول الأنواع
    public function modelcar()
    {
        return $this->belongsTo(ModelCar::class,'model_car_id');
    }

    //الربط مع جدول الفروع
    public function dealerlocator()
    {
        return $this->belongsTo(DealerLocator::class,'dealer_locator_id');
    }
    //الربط مع جدول سنة التصنيع
    public function Year_ofModel()
    {
        return $this->belongsTo(YearOfModel::class);
    }
    //الربط مع جدول المحرك
    public function engine()
    {
        return $this->belongsTo(Engine::class);
    }

    //الربط مع جدول نواقل الحركة
    public function motionVactor()
    {
        return $this->belongsTo(MotionVactor::class);
    }

    // public function category()
    // {
    //     return $this->belongsTo(Feature::class);
    // }

    public function getImageAttribute(){
        
         return url('storage').'/'.$this->attributes['image'];
     
     }
 
}
