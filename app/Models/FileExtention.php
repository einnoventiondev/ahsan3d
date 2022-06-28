<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileExtention extends Model
{
    use HasFactory;
    protected $table='file_extentions';
    protected $fillable=[
        'file_extention',

];
}
