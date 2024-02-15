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

class WebsiteContent extends Model
{
    use HasFactory;
    protected $table = "website_content";

    protected $fillable = [
        'home_section',
        'about_section_content',
        'about_point1',
        'desc1',
        'about_point2',
        'desc2',
        'about_point3',
        'desc3',
        'home_section_en',
        'about_section_content_en',
        'about_point1_en',
        'desc1_en',
        'about_point2_en',
        'desc2_en',
        'about_point3_en',
        'desc3_en',
        'link',
    ];

    
}
