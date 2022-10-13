<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
    protected $fillable = [
        'date',
        'vendor_id',
        'particulars',
        'credit',
        'debit',
        'balance'

    ];
    public function vendor(){
        return $this->belongsTo(Vendor::class);
    }
}

