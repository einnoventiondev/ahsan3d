<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Perposal extends Model
{
    use HasFactory;
    protected $fillable = [
         'date', 'validtill', 'qty_design', 'user_id', 'order_id', 'deliverable_design', 'deliverable_model', 'image', 'address', 'concept_design', 'manufacturing', 'qty_model', 'price_design', 'price_model', 'tax', 'created_at', 'updated_at', 'assigned', 'status', 'comments', 'phone', 'country', 'zip_code', 'city', 'state', 'subject'
    ];
    public function user(){

        return $this->belongsTo(User::class);
        
    }
    public function pdf()
    {
        return $this->hasMany(PdfItem::class,'pdf_id','id');
    }
}
