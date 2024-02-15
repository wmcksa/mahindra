<?php

namespace App\Models;

use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Engine extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'language_id',
    ];
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
