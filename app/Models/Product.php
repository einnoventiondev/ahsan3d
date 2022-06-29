<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
protected $fillable = [
         		'title',
                'description',
                'color',
                'size',
                'print_technology',
                'user_software',
                'status',
                'verify',
                'designer_id',
                'images',
    ];

    public function getImagesAttribute($value)
{
    return json_decode($value);
}

    public function user(){

    return $this->belongsTo(User::class,'designer_id','id');

    }
    public function software(){
        return $this->hasMany(Software::class,'id');
     }

}
