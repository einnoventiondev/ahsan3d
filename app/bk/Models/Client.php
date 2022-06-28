<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['inactive','active','log','team_member','proposal','invoice','payment','request'];
}
