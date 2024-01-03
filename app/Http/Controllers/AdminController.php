<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class AdminController extends Controller
{
    public function admin_dashboard() {

        return view('admin.index');
    }


    public function AdminLogout(Request $request) {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');


    }

    public function add_employee() { 

        return view('admin.employee.add_employee');


    } 


    public function show_admin_employee() {


        $employees = User::all();

        return view('admin.employee.index',compact('employees'));


    }



    public function store_employee(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:admin,employee',
        ]);
    

   $emailUser = User::where('email', $validatedData['email'])->first();
    if ($emailUser) {
        return redirect()->back()->with('error' , 'Email already exists');
    }
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']), 
            'role' => $validatedData['role'],
        ]);
    
        return redirect()->route('show.admin.employee');
    }
    

    public function changeEmployee(Request $request, $customerId)
    {
        $customer = Customer::findOrFail($customerId);
    
        $request->validate([
            'employee' => 'required|exists:users,id', 
        ]);
    
        $customer->user_id = $request->input('employee');

        $customer->save();
    
        return redirect()->back();
    }

}
