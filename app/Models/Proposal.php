<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable = [
         		'user_id',
         		'designer_id',
         		'price',
         		'start_date',
         		'end_date',
				'order_id'
    ];

}
