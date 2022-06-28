<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
       protected $fillable=[
       	'qty',
       	'size',
       	'print',
       	'format',
       	'notes',
       	'user_id',
       	'designer_id',
       	'status',
       	'order_no'
];
    public function user(){

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
