<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_created_by','payment_date', 'invoice_id', 'paid', 'transection_id', 'payment_mode', 'note', 'total_amount'
    ];
    public function invoice(){

        return $this->belongsTo(Invoice::class)->with('user');
        
    }
}
