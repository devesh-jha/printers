<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable =[
        'name','address','contact'
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
    public function form(){
        return $this->hasMany(Form::class);
    }
}
