<?php

namespace App\Models;

use App\Models\User;
use App\Models\Report;
use App\Models\ActionType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user() {

        return $this->belongsTo(User::class);
    }

    


    public function actions()
    {
        return $this->hasMany(ActionType::class); 
    } 

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function customerHasActions($customerId, $actionId)
    {
        // Assuming you have a reports table relating customers to actions
        return Report::where('customer_id', $customerId)
                     ->where('action_type_id', $actionId)
                     ->exists();
    }
    }// End Method 

