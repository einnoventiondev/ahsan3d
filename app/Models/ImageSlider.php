<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageSlider extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'speed',
        'number',
        'images',
        'heading',
        'sub_heading',
        'body_text',
    ];
}
