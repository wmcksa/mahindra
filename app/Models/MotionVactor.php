<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


//خاص بناقل الحركة
class MotionVactor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'language_id',
    ];
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
