<?php

namespace App\Models;

use App\Models\Car;
use App\Models\Feature;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'car_id',
        'language_id',
    ];


    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
