<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable=[
        'vendor_id',
        'product_id',
        'name',
        'size',
        'gsm',
        'sheets',
        'rfbundle',
        'bundle',
        'price',
        'amount_given',
        'count',
        'Wt_per_box',
        'thickness'

    ];
    public function vendor(){
        return $this->belongsTo(Vendor::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
