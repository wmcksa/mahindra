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

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
    ];
    
    public function getImageAttribute(){
        return url('storage').'/'.$this->attributes['image'];
    }

    
}
