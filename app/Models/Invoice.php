<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'date', 'validtill','qty_design', 'deliverable_design', 'user_id', 'order_id', 'deliverable_model', 'qty_model', 'price_design', 'price_model', 'tax', 'image', 'address', 'concept_design', 'manufacturing', 'created_at', 'updated_at', 'assigned', 'state', 'city', 'comments', 'phone', 'status', 'perposal_id', 'terms', 'payment', 'currency', 'sale_agent', 'admin_note', 'client_note' 
    ];
    public function user(){

        return $this->belongsTo(User::class);
        
    }
    public function payment(){

        return $this->hasOne(Payment::class);
        
    }
    public function pdf()
    {
        return $this->hasMany(PdfItem::class,'pdf_id','id');
    }
}
