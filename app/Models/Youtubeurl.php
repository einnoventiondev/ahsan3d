<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youtubeurl extends Model
{
    use HasFactory;
    protected $fillable = ['youtubeurl', 'youtubeurlpublic','youtubeurld1','youtubeurld2'];
}
