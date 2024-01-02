<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function customer() {
        return $this->belongsTo(Customer::class);
    } 

    public function user() {
        return $this->belongsTo(User::class);
    }  
    public function type() {
        return $this->belongsTo(ActionType::class);
    }

}
