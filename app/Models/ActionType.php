<?php

namespace App\Models;

use App\Models\Report;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ActionType extends Model
{
    use HasFactory;
    
    protected $guarded=[];


    public function reports() {
        return $this->hasMany(Report::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id'); 
    
    }
}