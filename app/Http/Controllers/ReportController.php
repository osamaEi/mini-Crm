<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Customer;
use App\Models\ActionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index() {

        $customers=Customer::where('user_id',Auth::user()->id)->get();
        $actions =ActionType::all();

        return view('employee.reports.index',compact('customers','actions'));
    }

    public function storeSelectedAction(Request $request) {

     $selectedActions = $request->input('selectedActions');
    $customerId = $request->input('customerId');
    $userId = Auth::id();

    foreach ($selectedActions as $actionId) {
        $action = new Report();
        $action->action_type_id = $actionId; 
        $action->customer_id = $customerId;
        $action->user_id = $userId;

        $action->save();
    }

return redirect()->back();
    }
}
