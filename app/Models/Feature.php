<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'language_id',
        'accessories',
        'car_images',
        'traction',
        'tyres',
        'engine',
        'power',
        'torque',
        'transmission',
        'gears',
        'wheels',
        'dismension_LXWXH',
        'cargo_box_dimension_LXWXH',
        'angle',
        'ground_clearance',
        'GVW',
        'kerb',
        'pay_load',
        'dual_front_AIR_bags',
        'collapsible_steering_column',
        'fire_retardant_upholstery',
        'AIR_conditoning',
        'steering_control',
        'rear_view_mirror',
        'one_touch_window_control_driver_codriver_antipinch',
        'follow_me_homw_headlamps',
        'ARM_rest_on_front_seats',
        'alloy_wheels',
        'optional',
        'touch_screen_intregated_infotainment_satellite_navigation',
        'headlamp',
        'hydraulic_bonnet_struts',
        'rear_demister',
        'rich_black',
        'projector_with_EYR_brow_lamps',
        'painted_door_handles',
        'painted_front_bumber',
        'claddings',
        'painted',
    ];

    protected $casts = [
        'accessories' => 'array',
        'car_images' => 'array',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
