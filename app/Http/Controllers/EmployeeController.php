<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function EmployeeLogout(Request $request) {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

        

    } 

    public function view_customers() {

        $customers = Customer::where('user_id' ,Auth::user()->id)->get();

        return view('employee.customers.index',compact('customers'));
    }

    public function store_customers(Request $request) {

        Customer::create([

            'name' => $request->name,
            'user_id'=>Auth::user()->id

        ]);

        return redirect()->back();


    }


}
