<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PublicService extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'status', 'user_id', 'full_name', 'phone_num', 'email', 'specialization',
        'gender', 'print_type', 'print_color', 'print_resolution', 'print_img', 'seen',
    ];
    public function InvoicePDF()
    {
        return $this->hasOne(Invoice::class,'order_id','id');
    }
    public function PerposalPDF()
    {
        return $this->hasOne(Perposal::class,'order_id','id');
    }
}
