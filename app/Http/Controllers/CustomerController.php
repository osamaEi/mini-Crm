<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use App\Models\Customer;
use App\Models\ActionType;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {

        $customers = Customer::all();
        $employees = User::where('role','employee')->get();
        $actions = ActionType::all();
        $reports = Report::all();

        return view('admin.customers.index',compact('customers','employees','actions'));
    }

    public function store(Request $request) {


        Customer::create([

            'name' => $request->name,
            'user_id'=>$request->employee

        ]);

        return redirect()->back();


    }
}
