<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdfItem extends Model
{
    use HasFactory;
    public function pdf()
    {
        return $this->belongsTo(Invoice::class,'pdf_id','id');
    }
}
