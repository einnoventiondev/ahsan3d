<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Medical extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'user_id',
        'myfile',
        'procedure',
        'parts',
        'discription',
        'pa_age',
        'pa_id',
        'pa_name',
        'hospital',
        'dr_phone',
        'dr_email',
        'dr_spec',
        'dr_name',
        'status',
        'seen',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function InvoicePDF()
    {
        return $this->hasOne(Invoice::class,'order_id','id');
    }
    public function PerposalPDF()
    {
        return $this->hasOne(Perposal::class,'order_id','id');
    }
}
