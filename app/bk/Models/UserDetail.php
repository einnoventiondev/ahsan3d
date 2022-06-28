<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','printing_technology','software_type'];
   
}
