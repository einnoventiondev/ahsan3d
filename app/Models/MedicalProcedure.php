<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalProcedure extends Model
{
    use HasFactory;
    protected $table='medical_procedures';
    protected $fillable=[
        'medical_procedure',

];
}
