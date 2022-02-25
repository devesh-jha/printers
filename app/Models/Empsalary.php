<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empsalary extends Model
{
    use HasFactory;
    protected $fillable=[
        'employee_id',
        'month',
        'date',
        'amount',
        'description'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
