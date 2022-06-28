<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Logo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['logo1','logo2','logo3','logo4','logo5','logo6','logo7','logo8'];
}
