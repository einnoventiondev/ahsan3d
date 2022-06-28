<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempUpdateProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'role',
        'email',
        'profile',
        'password',
        'field',
        'user_id',
        'printing_technology',
        'software_type'
    ];
    public function userDetail(){

        return $this->hasOne(UserDetail::class,'user_id','id');
        
    }
}
